<?php

namespace TemplateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Template/Default/index.html.twig');
    }
    public function gallerieAction()
    {
        return $this->render('@Template/Default/galerie.html.twig');
    }
    public function aboutAction()
    {
        return $this->render('@Template/Default/about.html.twig');
    }

    public function blogAction()
    {
        return $this->render('@Template/Default/blog.html.twig');
    }
    public function eventAction()
    {
        return $this->render('@Template/Default/eventwithout.html.twig');
    }
    public function contactAction()
    {
        return $this->render('@Template/Default/contact.html.twig');
    }
    public function detailAction()
    {
        return $this->render('@Template/Default/eventdetails.html.twig');
    }
    public function bookingAction()
    {
        return $this->render('@Template/Default/booking.html.twig');
    }


}
