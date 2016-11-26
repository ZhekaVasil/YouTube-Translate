<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SubeditorController extends Controller
{
    /**
     * @Route("/subeditor", name="subeditor")
     */
    public function indexAction(Request $request)
    {
        $test = "sfdfdsfsfd";
        // replace this example code with whatever you need
        return $this->render('default/subeditor.html.twig',[
            'test' => $test,
        ]);
    }
}
