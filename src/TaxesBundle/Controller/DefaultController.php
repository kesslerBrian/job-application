<?php

namespace TaxesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TaxesBundle:Default:index.html.twig');
    }
}
