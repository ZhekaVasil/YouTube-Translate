<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Cookie;

class AdministratorController extends Controller
{
    /**
     * @Route("/administrator", name="administrator")
     */
    public function MainAction(Request $request)
    {
        $cookies = $request->cookies;
        if($cookies->get('user')!='admin'){
            return $this->redirect('/');
        }

            // replace this example code with whatever you need
            $conn = $this->get('database_connection');

        if ($request->request->get('delete')) {
            $delID = $request->request->get('delete');
            $conn->query("DELETE  FROM `moderate` WHERE `#`=$delID");
        }

        if ($request->request->get('public')) {//Публикация
            $publicID = $request->request->get('public');
            $rez = $conn->fetchAssoc("SELECT * FROM `moderate` WHERE `#` = $publicID");//main conn

            $conn->insert('vid', [
                'idvid' => $rez['idvid'] ,
                'thumbnail' => $rez['thumbnail'],
                'audurl'=> $rez['audurl'],
                'title'=> $rez['title'],
                'descript' => $rez['descript']
            ]);

            $conn->query("DELETE  FROM `moderate` WHERE `#`=$publicID");

        }//END PUBLIC




            $res = $conn->fetchall("SELECT * FROM `moderate` ORDER BY `moderate`.`#` DESC ");//main conn
            $countModerate = $conn->executeQuery("SELECT * FROM `moderate`")->rowCount();
            $countVid = $conn->executeQuery("SELECT * FROM `vid`")->rowCount();

            $watch = "http://127.0.0.1:8000/watch";
            $add_new_content = "http://127.0.0.1:8000/insert";


            // replace this example code with whatever you need
            return $this->render('default/administrator.html.twig', [
                'res' => $res,
                'file_watch_php' => $watch,
                'add_new_content' => $add_new_content,
                'countModerate' => $countModerate,
                'countVid' => $countVid

            ]);

        //else $this->render('default/index.html.twig');
    }

}







