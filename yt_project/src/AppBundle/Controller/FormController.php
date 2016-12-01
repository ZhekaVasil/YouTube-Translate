<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver;
use Symfony\Component\HttpFoundation\File\UploadedFile;



class FormController extends Controller
{
    /**
     * @Route("/form", name="form")
     */
    public function FormAction(Request $request)
    {
        //http://symfony.com/doc/3.1/components/form.html
        //http://php.net/move_uploaded_file

        //link composer symfony form
        //link composer sfforms
        //php composer.phar require symfony/twig-bridge

        //php composer.phar require vich/uploaded-bundle  !NOT USE
        //http://paperplane.su/kak-organizovat-zagruzku-fajlov-s-pomoshhyu-doctrine/  ENTITY use DOCTRINE
        // http://symfonydev.ru/iphpfilestorebundle/  WILL USE
        // Register Bundles for intity  bin/console doctrine:generate:entities AcmeDemoBundle:MyEntity
        //console doctrine:generate:entities MyBundle


        $defaults = array(
            'dueDate' => new \DateTime('tomorrow'),
        );
        /*$form = $formFactory->createBuilder()
            ->add('task', TextType::class)
            ->add('dueDate', DateType::class)
            ->getForm();*/

        //Создание формы конструктором use-form
        $form = $this->createFormBuilder($defaults)


            ->add('file', FileType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
            $data = $form->getData('file');
        //$name = $data['file'];
        //$dir = 'D:\OpenServer\domains\localhost\YouTube-Translate1\yt_project\web\example';
        //if(is_uploaded_file($data['file']))
       // if(isset($data))
            //move_uploaded_file($data['file'], $dir.$name);
          echo "<pre>";
        $print = print_r($data);
        echo "</pre>";

        $datemas = $data['file'];
        $datemas -> pathname;
        echo "<pre>";
        $print2 = print_r($datemas);
        echo "</pre>";

        // replace this example code with whatever you need
        return $this->render('default/form.html.twig', [

            'form' => $form->createView(),
            'data' => $data,
            'print'=>$print,
            'print2'=>$print2,
        ]);


    }   //end function


    // move_uploaded_file()


}
