<?php

namespace SmartPsyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SmartPsyBundle:Default:index.html.twig', array());
    }

    public function accueilAction()
    {
        return $this->render('SmartPsyBundle:Default:accueil.html.twig', array());
    }

    public function accueilPationAction()
    {
        return $this->render('SmartPsyBundle:FrantOffice:accueilPation.html.twig', array());
    }

    public function accueilPsyAction()
    {
        return $this->render('SmartPsyBundle:FrantOffice:accueilPsy.html.twig', array());
    }

    public function TestAction()
    {
        return $this->render('SmartPsyBundle:FrantOffice:Test.html.twig', array());
    }

    public function ShowAction()
    {
        $em = $this->getDoctrine()->getManager();
        $patient = $em->getRepository('UserBundle:User')->findPatient();

        return $this->render('SmartPsyBundle:FrantOffice:show.html.twig', array(
            'entities' => $patient,
        ));
    }
}
