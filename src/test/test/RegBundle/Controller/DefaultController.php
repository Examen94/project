<?php

namespace test\RegBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RegBundle:Default:index.html.twig');
    }
}
