<?php

namespace Stewie\SkeletonBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    /**
    * @Route("/", name="skeleton_home")
    */
    public function home()
    {
      return $this->render('default/home.html.twig', [
          'headline' => 'skeleton headline',
          'content' => 'skeleton content',
      ]);
    }
}
