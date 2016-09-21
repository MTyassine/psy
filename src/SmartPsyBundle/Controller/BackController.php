<?php

namespace SmartPsyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BackController extends Controller
{
    public function indexAction()
    {
        return $this->render('SmartPsyBundle:BackOffice:index.html.twig', array());
    }
}
