<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController {
  /**
   * Le FRONT.
   *
   * @Route("/", name="index", methods="get")
   */
  public function index() {
    return $this->render('index.html.twig',[

      ]);
  }

}
