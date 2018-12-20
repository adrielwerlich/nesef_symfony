<?php

namespace nesef\src\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class SecurityController extends Controller
{


  /**
   * @Route("/login", name="login")
   */
  public function loginAction(){
    return $this->render('login.html.twig');
  }

  /**
   * @Route("/logout")
   * @throws \RuntimeException
   */
  public function logoutAction() {
    throw new \RuntimeException('this should never be called directly');
  }

}