<?php

namespace App\Controller;

use App\Entity\Users;
use App\Form\UsersType;
use App\Entity\PropertySearch;
use App\Form\PropertySearchType;
use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @Route("/users")
 */
class UsersController extends AbstractController
{

    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }
    /**
     * @Route("/", name="app_users_index", methods={"GET", "POST"})
     */
    public function index(UsersRepository $usersRepository, Request $request): Response
    {
        $propertySearch = new PropertySearch();
$formsearch = $this->createForm(PropertySearchType::class,$propertySearch);
$formsearch->handleRequest($request);
//initialement le tableau des articles est vide,
//c.a.d on affiche les articles que lorsque l'utilisateur
//clique sur le bouton rechercher
$users= [];
if($formsearch->isSubmitted() && $formsearch->isValid()) {
//on récupère le nom d'article tapé dans le formulaire
$email = $propertySearch->getEmail();
if ($email!="")
//si on a fourni un nom d'article on affiche tous les articles ayant ce nom
$users= $this->getDoctrine()->getRepository(Users::class)->findBy(['email' => $email] );
else
//si si aucun nom n'est fourni on affiche tous les articles
$users= $this->getDoctrine()->getRepository(Users::class)->findAll();
}

        return $this->render('users/index.html.twig', [
            'users' => $usersRepository->findAll(),
            'formsearch' =>$formsearch->createView(),
        ]);
    }

    /**
     * @Route("/new", name="app_users_new", methods={"GET", "POST"})
     */
    public function new(Request $request, UsersRepository $usersRepository): Response
    {
        $user = new Users();
        $form = $this->createForm(UsersType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $usersRepository->add($user, true);


            return $this->redirectToRoute('app_users_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('users/new.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_users_show", methods={"GET"})
     */
    public function show(Users $user): Response
    {
        return $this->render('users/show.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_users_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Users $user, UsersRepository $usersRepository): Response
    {
        $form = $this->createForm(UsersType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $usersRepository->add($user, true);

            return $this->redirectToRoute('app_users_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('users/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_users_delete", methods={"POST"})
     */
    public function delete(Request $request, Users $user, UsersRepository $usersRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $usersRepository->remove($user, true);
        }

        return $this->redirectToRoute('app_users_index', [], Response::HTTP_SEE_OTHER);
    }
}
