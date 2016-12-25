<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdministratorController extends Controller
{
    /**
     * @Route("/administrator", name="administrator")
     */
    public function MainAction(Request $request)
    {





            // replace this example code with whatever you need
            $conn = $this->get('database_connection');


            // pagination

            if ($request->request->get('pageIndex')) {
                $pageIndex = $request->request->get('pageIndex');

                $res = $conn->query("SELECT * FROM `moderate` ORDER BY `moderate`.`#` DESC LIMIT $pageIndex, 12");
                $res->data_seek(0);
                $arr = '';
                $str = '';
                while ($row = $res->fetch_assoc()) {

                    if ($str != "") {
                        $str .= ",";
                    }
                    $str = "<div class='mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet'>" .
                        "<div class='demo-card-wide mdl-card mdl-shadow--2dp'>" .
                        "<div class='mdl-card__title'>" .
                        "<a href='?idvid=" . $row['idvid'] . "&audurl=" . $row['audurl'] . "'>" .
                        "<img src='" . $row['thumbnail'] . "'/>" .
                        "</a>" .
                        "</div>" .
                        "<div class='mdl-card__supporting-text' title='" . $row['descript'] . "'>" .
                        "<h2 class='mdl-card__title-text'>" . $row['descript'] . "</h2>" .
                        "</div>" .
                        "</div>" .
                        "</div>";
                    $arr .= '"' . $str . '"';
                };
                $json = '[' . $arr . ']';
                echo $json;
                exit();
            }


            $res = $conn->fetchall("SELECT * FROM `moderate` ORDER BY `moderate`.`#` DESC LIMIT 0,12");//main conn

            $watch = "http://127.0.0.1:8000/watch";
            $add_new_content = "http://127.0.0.1:8000/insert";

            // pagination

            if ($request->request->get('pageIndex')) {
                $pageIndex = $request->request->get('pageIndex');

                $res = $conn->query("SELECT * FROM `moderate` ORDER BY `moderate`.`#` DESC LIMIT $pageIndex, 12");
                $res->data_seek(0);
                $arr = '';
                $str = '';
                while ($row = $res->fetch_assoc()) {

                    if ($str != "") {
                        $str .= ",";
                    }
                    $str = "<div class='mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet'>" .
                        "<div class='demo-card-wide mdl-card mdl-shadow--2dp'>" .
                        "<div class='mdl-card__title'>" .
                        "<a href='?idvid=" . $row['idvid'] . "&audurl=" . $row['audurl'] . "'>" .
                        "<img src='" . $row['thumbnail'] . "'/>" .
                        "</a>" .
                        "</div>" .
                        "<div class='mdl-card__supporting-text' title='" . $row['descript'] . "'>" .
                        "<h2 class='mdl-card__title-text'>" . $row['descript'] . "</h2>" .
                        "</div>" .
                        "</div>" .
                        "</div>";
                    $arr .= '"' . $str . '"';
                };
                $json = '[' . $arr . ']';
                echo $json;
                exit();
            }

            if ($request->request->get('delete')) {
                $delID = $request->request->get('delete');
                $del = $conn->query("DELETE  FROM `moderate` WHERE `#`=$delID");
            }

            if ($request->request->get('public')) {//Публикация
                $publicID = $request->request->get('public');
                $rez = $conn->fetchassoc("SELECT * FROM `moderate` WHERE `#` = $publicID");//main conn

                $conn->insert('vid', [
                    'idvid' => $rez['idvid'] ,
                    'thumbnail' => $rez['thumbnail'],
                    'audurl'=> $rez['audurl'],
                    'title'=> $rez['title'],
                    'descript' => $rez['descript']
                ]);

                $del_p = $conn->query("DELETE  FROM `moderate` WHERE `#`=$publicID");

            }//END PUBLIC


            $res = $conn->fetchall("SELECT * FROM `moderate` ORDER BY `moderate`.`#` DESC LIMIT 0,12");//main conn
            $watch = "http://127.0.0.1:8000/watch";
            $add_new_content = "http://127.0.0.1:8000/insert";


            // replace this example code with whatever you need
            return $this->render('default/administrator.html.twig', [
                'conn' => $conn,
                'res' => $res,

                'file_watch_php' => $watch,
                'add_new_content' => $add_new_content,

            ]);

        //else $this->render('default/index.html.twig');
    }

}







