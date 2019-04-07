<?php

namespace MaterialBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Material/Default/index.html.twig');
    }


    public function newAction()
    {
        return $this->render('@Material/material/new.html.twig');
    }

}
