<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Cookie;

class AdministratorTopController extends Controller
{
    /**
     * @Route("/administrator/top", name="administrator/top")
     */
    public function MainAction(Request $request)
    {
        $cookies = $request->cookies;
        if($cookies->get('user')!='admin'){
            return $this->redirect('/');
        }

            // replace this example code with whatever you need
            $conn = $this->get('database_connection');





            $res = $conn->fetchall("SELECT * FROM `vid` ORDER BY `vid`.`#` DESC LIMIT 0,12");//main conn
            $countModerate = $conn->executeQuery("SELECT * FROM `moderate`")->rowCount();
            $countVid = $conn->executeQuery("SELECT * FROM `vid`")->rowCount();

            $watch = "http://127.0.0.1:8000/watch";
            $add_new_content = "http://127.0.0.1:8000/insert";


            // replace this example code with whatever you need
            return $this->render('default/administratorTop.html.twig', [
                'res' => $res,
                'file_watch_php' => $watch,
                'add_new_content' => $add_new_content,
                'countModerate' => $countModerate,
                'countVid' => $countVid
            ]);

        //else $this->render('default/index.html.twig');
    }

}







