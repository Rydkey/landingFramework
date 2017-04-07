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
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints as Assert;

$dir='/public/landingFramework';

// Home page
$app->match($dir.'/', function (Request $request) use ($app) {
    $em = $app['orm.em'];
    $entity = new Landing();
    $form= $app['form.factory']->create(landingType::class, $entity);
    $form->handleRequest($request);
    if($form->isSubmitted()){
        if($form->isValid()){
            $app['session']->getFlasbag()->add('success','Validée');
        }else{
            $form->addError(new FormError('Il y à une erreur dans le formulaire'));
            $app['session']->getFlashBag()->add('info','Le formulaire comporte des erreurs');
        }
    }
    $formView=$form->createView();
    return $app['twig']->render('index.html.twig', array(
        'form' => $formView)
    );
})->bind('home');