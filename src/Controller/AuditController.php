<?php

namespace App\Controller;

use App\Entity\Audit;
use App\Form\AuditType;
use App\Repository\AuditRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;


/**
 * @Route("/audit")
 */
class AuditController extends AbstractController
{
    /**
     * @Route("/", name="app_audit_index", methods={"GET"})
     */
    public function index(AuditRepository $auditRepository): Response
    {
        return $this->render('audit/index.html.twig', [
            'audits' => $auditRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_audit_new", methods={"GET", "POST"})
     */
    public function new(Request $request, AuditRepository $auditRepository): Response
    {
        $audit = new Audit();
        $form = $this->createForm(AuditType::class, $audit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $auditRepository->add($audit, true);

            return $this->redirectToRoute('app_audit_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('audit/new.html.twig', [
            'audit' => $audit,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_audit_show", methods={"GET"})
     */
    public function show(Audit $audit): Response
    {
        return $this->render('audit/show.html.twig', [
            'audit' => $audit,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_audit_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Audit $audit, AuditRepository $auditRepository): Response
    {
        $form = $this->createForm(AuditType::class, $audit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $auditRepository->add($audit, true);

            return $this->redirectToRoute('app_audit_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('audit/edit.html.twig', [
            'audit' => $audit,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_audit_delete", methods={"POST"})
     */
    public function delete(Request $request, Audit $audit, AuditRepository $auditRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$audit->getId(), $request->request->get('_token'))) {
            $auditRepository->remove($audit, true);
        }

        return $this->redirectToRoute('app_audit_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/exporter/pdf", name="exporterpdf", methods={"GET"})
     */
    public function exporter(AuditRepository $auditRepository): Response
    {


        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $audit = $auditRepository->findAll();

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('audit/index.html.twig', [
            'audits' => $audit,
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("audit.pdf", [
            "Attachment" => true
        ]);
    }
}
