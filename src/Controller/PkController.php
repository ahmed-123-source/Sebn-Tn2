<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class PkController extends AbstractController
{
    /**
     * @Route("/", name="app_pk")
     */
    public function index(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        return $this->render('pk/index.html.twig', [
            'controller_name' => 'PkController',
        ]);
    }
}
