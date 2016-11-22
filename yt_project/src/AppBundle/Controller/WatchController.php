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
        $aud = $request->query->all();
        $aud = json_encode($aud);
        $aud = json_encode($aud);
        $aud = json_encode($aud);
        $aud = json_encode($aud);
        $aud = json_encode($aud);
        $aud = json_encode($aud);
        $aud = json_encode($aud);
        $aud = json_encode($aud);
        // replace this example code with whatever you need
        return $this->render('default/watch.html.twig',[
            'aud' => $aud,
        ]);
    }
}
