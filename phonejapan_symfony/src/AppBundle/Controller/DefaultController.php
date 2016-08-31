<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        $array=[];
        $em = $this->getDoctrine()->getRepository("AppBundle:Producto");
        $producto = $em->findBy(array('marca' => 'Samsung'));
        return $this->render('AppBundle:default:home.html.twig', array( "productos" => $producto));
    }

    public function detallesProductoAction($id,Request $request){
        //realizamos la busqueda sobre una entidad, en este caso productos
        $em = $this->getDoctrine()->getRepository("AppBundle:Producto");
        //query a la base de datos
        $consulta = $em->createQueryBuilder('p')
        ->where('p.codProd= :id' )
        ->setParameter('id', $id )
        ->getQuery();
        //devuelve el resultado de la query(en este caso un array)
        $resultQuery = $consulta->getResult();
        $producto = $resultQuery[0];
        //realizamos la busqueda sobre una entidad, en este caso caracteristicas a partir del id de producto
        $em = $this->getDoctrine()->getRepository("AppBundle:Caracteristicas");
        //query a la base de datos
        $consulta = $em->createQueryBuilder('c')
        ->where('c.codProd= :codProd' )
        ->setParameter('codProd', $producto->getCodProd())
        ->getQuery();
        //devuelve el resultado de la query(en este caso un array)
        $resultQuery = $consulta->getResult();
        $caracteristicasP = $resultQuery[0];

        return $this->render('AppBundle:default:detalles_producto.html.twig',
        array( 'producto' => $producto, 'cProducto' => $caracteristicasP));
    }
}
