<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    /**
     * @Route("/admin", name="admin")
     */
    public function indexAction(Request $request)
    {
        $conn = $this->get('database_connection');
        if($request->request->get('submit')){
           $login =  $request->request->get('login');
           $pass = $request->request->get('pass');

            $res = $conn->fetchAll("SELECT * FROM users WHERE `login` LIKE '".$login."'AND `pass` LIKE '".$pass."' AND `role` LIKE 'admin'");

            if(count($res) == 1){
                echo "<div>Hi Admin</div>";

                /*Connect Mysql + 2 table moderate + DELETE Btns  */

                return $this->render('default/moderate.html.twig',[
                    //'res'=>$res,

                ]);
            }
            /*if(count($res) != 1){
                echo "<div>Check Pass</div>";
                return $this->render('default/insert.html.twig',[
                    //'res'=>$res,

                ]);
            }*/
            /*echo "<pre>";
            var_dump($res);
            echo "</pre>";*/
        }
        // replace this example code with whatever you need
       return $this->render('default/admin.html.twig',[
           //'res'=>$res,
       ]);
        }

}
