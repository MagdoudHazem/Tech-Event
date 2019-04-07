<?php

namespace MaterielBundle\Controller;

namespace MaterielBundle\Controller;

use MaterielBundle\Entity\Materiel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MaterielBundle\Form\MaterielType;
use MaterielBundle\Form\RechercheType;

/**
 * Material controller.
 *
 */
class MaterielController extends Controller
{

    public function ajouterAction(Request $request)
    {
        $modele= new  Materiel();

        $form= $this->createForm(MaterielType::class,$modele);
        $form->handleRequest($request);
        if($form->isValid()){
            $em= $this->getDoctrine()->getManager();
            $em->persist($modele);
            $em->flush();
            return $this->redirectToRoute("ajout");
        }
        return $this->render("@Materiel/Default/ajout.html.twig",array('form'=>$form->createView()));
    }
    public function deleteAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $modele=$em->getRepository(Materiel::class)->find($id);
        $em->remove($modele);
        $em->flush();
        return $this->redirectToRoute("affiche");
    }
    public function afficherAction()
    {
        $enseignants=$this->getDoctrine()
            ->getRepository(Materiel::class)
            ->findAll();

        return $this->render('@Materiel/Default/affichage.html.twig',array("enseignants"=>$enseignants));

    }
    public function updateAction($id, Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $modele=$em->getRepository(Materiel::class)->find($id);
        $form=$this->createForm(MaterielType::class,$modele);
        $form=$form->handleRequest($request);
        if($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("affiche");}
        return $this->render("@Materiel/Default/ajout.html.twig",array('form'=>$form->createView()));
    }

    public function rechercherAction(Request $request)
    {
        $voiture= new Materiel();
        $form= $this->createForm(RechercheType::class,$voiture);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $voitures= $this->getDoctrine()->getRepository(Materiel::class)->findBy(array('serie'=>$voiture->getId()));

        }
        else{
            $voitures= $this->getDoctrine()->getRepository(Materiel::class)->findAll();
        }
        return $this->render("@Materiel/Default/recherche.html.twig",array("form"=>$form->createView(),'voitures'=>$voitures));

    }

}
