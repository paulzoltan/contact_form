<?php

namespace App\Controller;

use App\Entity\Inquiry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ContactFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

class MainController extends AbstractController
{

  #[Route('/', name: 'app_contact')]
  public function contactFormPage(Request $request, EntityManagerInterface $em): Response
  {
    $form = $this->createForm(ContactFormType::class);

    $form->handleRequest($request);
    if ($form->isSubmitted() &&  $form->isValid()) {
      $inquiry = $form->getData();

      $em->persist($inquiry);
      $em->flush();

      return $this->render('app/contactFormSent.html.twig', [
        'contactForm'  => $form->createView()
      ]);
    } else {
      return $this->render('app/contactForm.html.twig', [
        'contactForm'  => $form->createView()
      ]);
    }
  }
}
