<?php

namespace Zlab\mopa1Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('Zlabmopa1Bundle:Default:index.html.twig');
    }
}
