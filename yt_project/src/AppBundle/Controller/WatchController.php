<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class WatchController extends Controller
{
    /**
     * @Route("/watch", name="watch")
     */
    public function WatchAction(Request $request)
    {
        $conn = $this->get('database_connection');

        $cookies = $request->cookies;
        $admin = false;

        if ($cookies->has('user') and $cookies->get('user')=='admin' )
        {
            $admin = true;
        }

        $array = $request->query->all();
        $json = json_encode($array);
        $audio = $array['audurl'];
        $idvid = $array['idvid'];
        $moderation = false;
        $id = false;
        $res = '';
        if(isset($array['m']) and isset($array['id']) and $array['m'] == 'true' and $admin){
            $moderation = true;
            $id = $array['id'];
        }
        if($moderation){
            $res = $conn->fetchAssoc("SELECT * FROM moderate WHERE idvid LIKE '".$idvid."'");
        } else {
            $res = $conn->fetchAssoc("SELECT * FROM vid WHERE idvid LIKE '".$idvid."'");
        }

        if($res['title'] == ''){
            return $this->redirectToRoute('index');
        }

        // replace this example code with whatever you need
        return $this->render('default/watch.html.twig',[
            'json' => $json,
            'audio' => $audio,
            'res' => $res,
            'admin' => $admin,
            'moderation' => $moderation,
            'id' => $id
        ]);
    }
}
