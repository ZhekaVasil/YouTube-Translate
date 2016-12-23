<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
//use Acme\DemoBundle\Entity\User;

class CopyController extends Controller
{
    /**
     * @Route("/copy", name="copy")
     */
    public function indexAction(Request $request)
    {
        /*$user = new User();
        var_dump($user);
        $hash = $this->get('security.password_encoder')->encodePassword($user, 'пароль пользователя');
        // replace this example code with whatever you need*/
        return $this->render('default/copy.html.twig',['base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
}
