<?php

namespace MaterielBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use MaterielBundle\Entity\Stock;
use MaterielBundle\Form\StockType;

class StockController extends Controller
{
    public function ajouterAction(Request $request)
    {
        $modele= new  Stock();
        $form= $this->createForm(StockType::class,$modele);
        $form->handleRequest($request);
        if($form->isValid()){
            $em= $this->getDoctrine()->getManager();
            $em->persist($modele);
            $em->flush();
            return $this->redirectToRoute("afficherstock");
        }
        return $this->render("@Materiel/Stock/ajout.html.twig",array('form'=>$form->createView()));
    }

    public function afficherAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $tables = $em->getRepository('MaterielBundle:Stock')->findAll();
        return $this->render('@Materiel/Stock/afficher.html.twig',array(
            'tables' => $tables
        ));
    }

    public function showupdateAction($id, Request $request){
        $em = $this->getDoctrine()->getManager();
        $tables = $em->getRepository('MaterielBundle:Stock')->find($id);
        return $this->render('@Materiel/Stock/update.html.twig',array(
            'table' => $tables
        ));
    }

    public function deleteAction($id){
        $em = $this->getDoctrine()->getManager();
        $tables = $em->getRepository('MaterielBundle:Stock')->find($id);
        $em->remove($tables);
        $em->flush();
        return $this->redirectToRoute('afficherstock');
    }

    public function updateAction($id, Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $modele=$em->getRepository(Stock::class)->find($id);
        $modele->setNbre($modele->getNbre()+$request->get('quantite'));
        $em->persist($modele);
        $em->flush();
        return $this->redirectToRoute('afficherstock');
    }

}
