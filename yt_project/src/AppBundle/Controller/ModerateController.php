<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ModerateController extends Controller
{
    /**
     * @Route("/moderate", name="moderate")
     */
    public function indexAction(Request $request)
    {

        echo "dfsfdfdf";
        // replace this example code with whatever you need
        return $this->render('default/moderate.html.twig',[


        ]);
    }
}
