<?php
/**
 * Created by PhpStorm.
 * User: rrisser
 * Date: 06/04/17
 * Time: 14:44
 */

// Ce fichier permet d'indiquer les routes de l'application.

use landingBundle\Entity\Landing;
use landingBundle\Form\Type\landingType;
use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
//use Symfony\Component\Form\Extension\Core\Type\FormType;
//use Symfony\Component\Form\Extension\Core\Type\SubmitType;

$dir='/public/landingFramework';

// Home page
$app->match($dir.'/', function (Request $request) use ($app) {
    $em = $app['orm.em'];
    $entity = new Landing();
    $formBuilder= $app['form.factory']->createBuilder(landingType::class,$entity);
    $form=$formBuilder->getForm();
    $form->handleRequest($request);
    if($form->isSubmitted()){
        if($form->isValid()){
            $message = \Swift_Message::newInstance()
                ->setSubject('[Landing] Feedback')
                ->setFrom(array('noreply@landing.com'))
                ->setTo(array('r.risser@maetvaplanet.com'))
                ->setBody($request->get('message'));

            $app['mailer']->send($message);
            $em->persist($entity);
            $em->flush($entity);
            $app['session']->getFlashbag()->add('notice','Validée');
        }else{
            $app['session']->getFlashBag()->add('notice','Le formulaire comporte des erreurs');
        }
    }
    return $app['twig']->render('index.html.twig',array('form'=>$form->createView()));
})->bind('home');