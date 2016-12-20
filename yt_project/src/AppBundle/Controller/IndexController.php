<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction(Request $request)
    {
        $conn = $this->get('database_connection');



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


        $res = $conn->fetchall("SELECT * FROM `vid` ORDER BY `vid`.`#` DESC LIMIT 0,12");//main conn
       /* $resmore = $conn->fetchall("SELECT * FROM `vid` LIMIT 10,10");//test conn*/
        $watch = "http://127.0.0.1:8000/watch";
        $add_new_content = "http://127.0.0.1:8000/insert";






        return $this->render('default/index.html.twig', [
            'conn' => $conn,
            'res' => $res,
            /*'resmore' => $resmore,*/
            'file_watch_php' => $watch,
            'add_new_content' => $add_new_content,

        ]);
    }
}

