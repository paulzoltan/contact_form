<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{

  #[Route('/', name: 'app_contact')]
  public function contactFormPage(): Response
  {


    return new Response('ASDF');
  }
}
