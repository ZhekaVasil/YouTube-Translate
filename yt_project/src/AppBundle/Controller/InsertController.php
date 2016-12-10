<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class InsertController extends Controller
{
    /**
     * @Route("/insert", name="insert")
     */
    public function insertAction(Request $request)
    {
        $add_new_content = "http://127.0.0.1:8000/insert";

        return $this->render('default/insert.html.twig',[
            'add_new_content' => $add_new_content,
        ]);
    }
}
