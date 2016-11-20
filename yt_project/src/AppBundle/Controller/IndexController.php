<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends Controller
{
    /**
     * @Route("/index", name="index")
     */
    public function indexAction(Request $request)
    {
        $conn = $this->get('database_connection');



        // pagination

        if ($request->request->get('pageIndex')){
            $pageIndex = $request->request->get('pageIndex');

            $res = $conn->query("SELECT * FROM `vid` ORDER BY `vid`.`#` DESC LIMIT $pageIndex, 10");
            $res->data_seek(0);
            while($row =$res->fetch_assoc() ){
                echo '<div class="itemWrapper"><div class="item"><a href="watch.php?idvid='.$row['idvid'].'&audurl='.$row['audurl'].'" target="_self" ><img width="600px" src="'.$row['thumbnail'].'"></a></div></div>';
            };
            exit();
        }


        $res = $conn->fetchall("SELECT * FROM `vid` LIMIT 0,10");//main conn
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

