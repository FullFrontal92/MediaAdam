<?php

namespace MediaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class DefaultController extends Controller
{
    public function indexAction()
    {

        return $this->render('MediaBundle:Default:index.html.twig');
    }
}
