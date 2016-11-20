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
        // replace this example code with whatever you need
        $conn = $this->get('database_connection');
        if($request->get('submit')){
            $ytlink = $request->get('idvid');
            $audio = $request->get('audurl');

        }

        // replace this example code with whatever you need

        /*
    {


        $conn = $this->get('database_connection');
        $opcat = $conn->fetchall('SELECT * FROM news');

        if($request->get('submit')) {
            $one = $request->get('title');
            $two = $request->get('text');
            $three = $request->get('scat');
            $conn = $this->get('database_connection');

            $conn->insert('news',
                [
                    'title' => $one,
                    'text' => $two,
                    'categ'=>$three,
                ]);
        }else{
            $one = 'none';
            $two = 'two';
            $three = 'three';
        }
        // replace this example code with whatever you need

        return $this->render('default/insert.html.twig', [
            'start'=>$start,
            'insert'=>$insert,
            'contact'=>$contact,
            'cat'=>$cat,
            'about'=>$about,
            'news'=>$news,
            'opcat'=>$opcat,


            'one'=>$one ,
            'two'=> $two,
            'three'=>$three,
        ]);
    }
}
         * */


        return $this->render('default/insert.html.twig',[
            'add_new_content' => $add_new_content,


        ]);
    }
}
