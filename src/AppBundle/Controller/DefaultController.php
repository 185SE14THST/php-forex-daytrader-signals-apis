<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        //** Mock 3rd Party API source **// @ToDo Refactor 3rd Party logic into service container (best practices)
        $qa = ['0.69999', '1.17985', '2.5', '500.98765', '2', 'Go all in!'];
        $rnd = array_rand($qa);

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'test' => $qa[$rnd]
        ]);
    }
}
