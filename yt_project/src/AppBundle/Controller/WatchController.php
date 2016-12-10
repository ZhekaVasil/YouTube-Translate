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
        $array = $request->query->all();
        $json = json_encode($array);
        $audio = $array['audurl'];


        // replace this example code with whatever you need
        return $this->render('default/watch.html.twig',[
            'json' => $json,
            'audio' => $audio,
        ]);
    }
}
