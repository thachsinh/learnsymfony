<?php
namespace Acme\DemoBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class MainController{
  
  public function contactAction() {
    
    return new Response('Contact page');
  }
}
