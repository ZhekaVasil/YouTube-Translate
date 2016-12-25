<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SubeditorController extends Controller
{
    /**
     * @Route("/subeditor", name="subeditor")
     */
    public function indexAction(Request $request)
    {

        $cookies = $request->cookies;
        $admin = false;

        if ($cookies->has('user') and $cookies->get('user')=='admin' )
        {
            $admin = true;
        }


        $id = '';
        $audio = NULL;
        $title = '';
        $descript = '';
        $audioTitle = '123';
        // проверяем есть ли POST запрос от формы
        if($request->request->get('idvid')) {
            //в переменную $id записываем id видюшки
            $mas = explode('v=', $request->request->get('idvid'));
            $part = $mas[1];
            $id = substr($part, 0, 11);

            // проверяем есть ли аудио в запросе
            if(is_uploaded_file($request->files->get('audio'))) {
                    $audio = true;
                //если аудио есть, то создаем папку внутри 'preview', папку именуем как id видюшки
                if(!is_dir('preview/'.$id)){
                    mkdir('preview/'.$id);
                };
                //перемещаем аудио в свою папку, и именуем ее как 'audio.mp3'
                move_uploaded_file($request->files->get('audio'), "preview/".$id."/audio.mp3");
                $audioTitle = $request->files->get('audio')->getClientOriginalName();
            }
            $title = $request->request->get('title');
            $descript = $request->request->get('descript');
            $descript =  str_replace("\r\n", '<br/>', $descript);

        }


        // просто выводим id видюшки в твиге
        return $this->render('default/subeditor.html.twig',[
            'id' => $id,
            'audio' => $audio,
            'title' => $title,
            'descript' => $descript,
            'audioTitle' => $audioTitle,
            'admin' => $admin
        ]);
    }
}
