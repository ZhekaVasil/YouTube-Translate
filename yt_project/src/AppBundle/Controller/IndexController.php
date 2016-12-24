<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Cookie;
class IndexController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction(Request $request)
    {
        $conn = $this->get('database_connection');
        $cookies = $request->cookies;
        $admin = false;

        if ($cookies->has('user') and $cookies->get('user')=='admin' )
        {
            $admin = true;
        }


        // pagination

        if ($request->request->get('pageIndex')){
            $pageIndex = $request->request->get('pageIndex');

            $res = $conn->query("SELECT * FROM `vid` ORDER BY `vid`.`#` DESC LIMIT $pageIndex, 12");
            $res->data_seek(0);
            $arr = '';
            $str = '';
            while($row =$res->fetch_assoc() ){

                if ($str != "") {$str .= ",";}
                $str = "<div class='mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet'>".
                "<div class='demo-card-wide mdl-card mdl-shadow--2dp'>".
                    "<div class='mdl-card__title'>".
                        "<a href='?idvid=".$row['idvid']."&audurl=".$row['audurl']."'>".
                            "<img src='".$row['thumbnail']."'/>".
                        "</a>".
                    "</div>".
                    "<div class='mdl-card__supporting-text' title='".$row['descript']."'>".
                        "<h2 class='mdl-card__title-text'>".$row['descript']."</h2>".
                    "</div>".
                "</div>".
            "</div>";
                $arr .= '"'.$str.'"';
            };
            $json = '['.$arr.']';
            echo $json;
            exit();
        }

        if($request->request->get('authOk')){
            $login = $request->request->get('title');
            $pass = $request->request->get('idvid');
            $res = $conn->fetchall("SELECT * FROM `users` WHERE user_name=:login and password=:pass LIMIT 0,1",[':login'=>$login, ':pass'=>$pass]);
            if(count($res) == 1){
                $response = new Response();
                $response->headers->setCookie(new Cookie("user", 'admin'));
                $response->send();
               return $this->redirect('administrator');
            }
        }


        $res = $conn->fetchall("SELECT * FROM `vid` ORDER BY `vid`.`#` DESC LIMIT 0,12");//main conn
        $watch = "http://127.0.0.1:8000/watch";



       if ($request->request->get('inBtnSubmit')){
           $login = $request->request->get('login');
           $pass = $request->request->get('pass');
           if ($login == 'login' and ($pass) == 'pass'){
             $this->render('default/administator.html.twig');
               /*session_start();
               session_id(['admin']);*/
           }
           else{
               $this->render('default/index.html.twig');
           }

       }

      /*  $response = new Response();
        $response->headers->setCookie(new Cookie("user", 'Zheka'));
        $response->send();*/
        return $this->render('default/index.html.twig', [
            'conn' => $conn,
            'res' => $res,
            'file_watch_php' => $watch,
            'admin' => $admin

        ]);
    }
}

