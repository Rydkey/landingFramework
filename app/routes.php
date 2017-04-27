<?php
/**
 * Created by PhpStorm.
 * User: rrisser
 * Date: 06/04/17
 * Time: 14:44
 */
// Ce fichier permet d'indiquer les routes de l'application.

include('Controller.php');
use landingBundle\Entity\Landing;
use landingBundle\Form\Type\landingType;
use Symfony\Component\HttpFoundation\Request;

$dir='/public/landingFramework';

// Home page
$app->match($dir.'/', function (Request $request) use ($app) {
  return indexController($request,$app);
})->bind('home');

// Admin page
$app->match($dir.'/admin', function (Request $request) use ($app) {
  return adminController($request,$app);
})->bind('admin');