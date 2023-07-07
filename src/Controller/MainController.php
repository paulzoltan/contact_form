<?php

namespace App\Controller;

use App\Entity\Inquiry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ContactFormType;
use Symfony\Component\HttpFoundation\Request;

class MainController extends AbstractController
{

  #[Route('/', name: 'app_contact')]
  public function contactFormPage(Request $request): Response
  {
    $form = $this->createForm(ContactFormType::class);

    $form->handleRequest($request);
    if ($form->isSubmitted() &&  $form->isValid()) {
      $inquiry = $form->getData();
      dd($inquiry);

      $this->addFlash('success', 'Message Sent');
      return $this->render('app/contactForm.html.twig', [
        'contactForm'  => $form->createView()
      ]);
    } else {
      return $this->render('app/contactForm.html.twig', [
        'contactForm'  => $form->createView()
      ]);
    }
  }
}
