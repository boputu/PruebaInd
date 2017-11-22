<?php

namespace BorjaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use BorjaBundle\Entity\Cervezas;


class CervezasController extends Controller
{
    /**
     * @Route("/sacarNombre/{nombre}", name="sacarNombre")
     */
    public function buscarCervezaAction($nombre='Mahou')
    {
        //Devolver la clase y asi poder acceder a la bd.
        $repository = $this->getDoctrine()->getRepository(Cervezas::class);
        //Buscar por lo que queramos en la bd, en este caso por nombre, por defecto Mahou.
        $cervezitas = $repository->findByNombre($nombre);
        return $this->render('BorjaBundle:Cervezas:sacarNombre.html.twig',array("cervezas" => $cervezitas));
    }

    /**
 * @Route("/sacarId/{id}", name="sacarId")
 */
public function sacarIdAction($id)
{
          //Devolver la clase y asi poder acceder a la bd.
    $repository = $this->getDoctrine()->getRepository(Cervezas::class);
      //Buscar por lo que queramos, en este caso le pasamos el id.
    $cervezitas = $repository->findById($id);
    return $this->render('BorjaBundle:Cervezas:sacarId.html.twig',array("cervezas" => $cervezitas));
}

}
