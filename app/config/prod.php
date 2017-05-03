<?php
/**
 * Created by PhpStorm.
 * User: rrisser
 * Date: 06/04/17
 * Time: 14:39
 */

$config=[
  'db_register'=>true,
  'mail_send'=>true,
];

$db_config=[
      'driver'   => 'pdo_mysql', //définit le driver pour la BDD
      'charset'  => 'utf8', //définit le charset pour la BDD
      'host'     => 'localhost',  //serveur pour la BDD
      'port'     => '3306',  //port du serveur
      'dbname'   => 'landingFramework',  //nom de la BDD
      'user'     => 'root', //Utilisateur
      'password' => 'remy9097*', //mot de passe
];

$f_bool=[
  'mail'=>true,
  'nom'=>false,
  'prenom'=>false,
  'numeroAdresse'=>false,
  'voieAdresse'=>false,
  'codePostal'=>false,
  'ville'=>false,
  'telephone'=>false,
  'entreprise'=>false,
  'message'=>false,
  'opt_in'=>false,
];

$mail_config=[
  'host' => 'smtp.googlemail.com',
  'port' => '465',
  'username' => 'rydkeyproduction@gmail.com',
  'password' => 'azerty90',
  'encryption' => 'ssl',
  'auth_mode' => 'login'
];

$mail_bool=[
  'form'=>true,
  'provided'=>false,
];

$mail_to=[
  'r.risser@maetvaplanet.com',
];


$app['orm.proxies_dir'] = __DIR__.'/../cache/doctrine/proxies';
$app['orm.default_cache'] = 'array';
$app['orm.em.options'] = array(
    'mappings' => array(
        array(
            'type' => 'annotation',
            'path' => __DIR__.'/../../src',
            'namespace' => 'landingBundle\Entity',
        ),
    ),
);