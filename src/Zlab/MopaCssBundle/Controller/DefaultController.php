<?php

namespace Zlab\MopaCssBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ZlabMopaCssBundle:Default:index.html.twig');
    }
}
