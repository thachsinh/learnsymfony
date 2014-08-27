<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller
{
  public function indexAction($firstName, $lastName, $color)
  {
    $response = $this->forward(
            'AcmeHelloBundle:Hello:fancy', 
            array('name' => $firstName.' '.$lastName, 'color' => $color)
    );
    return $response;
    /*
    return $this->redirect($this->generateUrl('contact'));
    /*
    return $this->render(
      'AcmeHelloBundle:Hello:index.html.twig', 
      array('firstName' => $firstName, 'lastName' => $lastName, 'color' => $color)
    );
     */
  }
  
  public function fancyAction($name, $color) {
    return new Response(
      json_encode(array('full name' => $name, 'color' => $color)), 
      200, 
      array('Content-type' => 'application/json')
    );
  }
}