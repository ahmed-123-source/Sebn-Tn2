<?php

namespace App\Controller;

use App\Entity\Pdca;
use App\Form\PdcaType;
use App\Repository\PdcaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/pdca")
 */
class PdcaController extends AbstractController
{
    /**
     * @Route("/", name="app_pdca_index", methods={"GET"})
     */
    public function index(PdcaRepository $pdcaRepository): Response
    {
        return $this->render('pdca/index.html.twig', [
            'pdcas' => $pdcaRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_pdca_new", methods={"GET", "POST"})
     */
    public function new(Request $request, PdcaRepository $pdcaRepository): Response
    {
        $pdca = new Pdca();
        $form = $this->createForm(PdcaType::class, $pdca);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pdcaRepository->add($pdca, true);

            return $this->redirectToRoute('app_pdca_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('pdca/new.html.twig', [
            'pdca' => $pdca,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_pdca_show", methods={"GET"})
     */
    public function show(Pdca $pdca): Response
    {
        return $this->render('pdca/show.html.twig', [
            'pdca' => $pdca,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_pdca_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Pdca $pdca, PdcaRepository $pdcaRepository): Response
    {
        $form = $this->createForm(PdcaType::class, $pdca);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pdcaRepository->add($pdca, true);

            return $this->redirectToRoute('app_pdca_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('pdca/edit.html.twig', [
            'pdca' => $pdca,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_pdca_delete", methods={"POST"})
     */
    public function delete(Request $request, Pdca $pdca, PdcaRepository $pdcaRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pdca->getId(), $request->request->get('_token'))) {
            $pdcaRepository->remove($pdca, true);
        }

        return $this->redirectToRoute('app_pdca_index', [], Response::HTTP_SEE_OTHER);
    }
}
