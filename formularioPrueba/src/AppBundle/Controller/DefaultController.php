<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function inicioAction(Request $request){
      return $this->render('AppBundle:default:index.html.twig');
    }

    public function welcomeAction(Request $request){
      if ('POST' === $request->getMethod()){
        //POST
        $name = $request->request->get('nombre');
        $surname = $request->request->get('apellido');
        //GET
        //$name = $request->query->get('nombre'); // GET
        //$surname = $request->query->get('apellido'); // GET

        return $this->render('AppBundle:default:welcome.html.twig', array( "dato1" => $name, "dato2" => $surname));
      }
    }
}
