<?php

namespace Dota2\HeroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('Dota2HeroBundle:Default:index.html.twig', array('name' => $name));
    }
}
