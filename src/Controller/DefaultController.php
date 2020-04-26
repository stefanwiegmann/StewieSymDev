<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    /**
    * @Route("/", name="home")
    */
    public function home()
    {
      return $this->render('default/home.html.twig', [
          'headline' => 'symdev headline',
          'content' => 'symdev content',
      ]);
    }
}
