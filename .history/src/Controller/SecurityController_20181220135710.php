<?php

namespace src\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class SecurityController extends Controller
{



  public function loginAction(){
    return $this->render('login.html.twig');
  }

}