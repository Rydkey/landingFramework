<?php
/**
 * Created by PhpStorm.
 * User: rrisser
 * Date: 06/04/17
 * Time: 14:44
 */

// Ce fichier permet d'indiquer les routes de l'application.

use landingBundle\Entity\Landing;
use landingBundle\Form\Type\adminType;
use landingBundle\Form\Type\landingType;
use Symfony\Component\HttpFoundation\Request;

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
                ->setTo(array($form['mail']->getData()))
                ->setBody('Test');
            $app['mailer']->send($message);
            $em->persist($entity);
            $em->flush($entity);
            $app['session']->getFlashbag()->add('notice', 'Merci, un mail viens d\'ếtre envoyer à l\'adresse mail suivante : '.$form['mail']->getData());
        }else{
            $app['session']->getFlashBag()->add('notice','Le formulaire comporte des erreurs');
        }
    }
    return $app['twig']->render('index.html.twig',array('form'=>$form->createView()));
})->bind('home');

// Admin page
$app->match($dir.'/admin', function (Request $request) use ($app) {
  $formBuilder= $app['form.factory']->createBuilder(adminType::class);
  $form=$formBuilder->getForm();
  $form->handleRequest($request);
  if($form->isSubmitted()){
    if($form->isValid()){
      $app['session']->getFlashbag()->add('notice', $form['opt_mail']->getData());
    }else{
      $app['session']->getFlashBag()->add('error','Le formulaire comporte des erreurs');
    }
  }
  return $app['twig']->render('admin/admin.html.twig',['DUMP'=>FIELD,'form'=>$form->createView()]);
})->bind('admin');