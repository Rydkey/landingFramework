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

$f=[
  'mail'=>'opt_mail',
  'nom'=>'opt_nom',
  'prenom'=>'opt_prenom',
  'numeroAdresse'=>'opt_numeroAdresse',
  'voieAdresse'=>'opt_voieAdresse',
  'codePostal'=>'opt_codePostal',
  'ville'=>'opt_ville',
  'telephone'=>'opt_telephone',
  'entreprise'=>'opt_entreprise',
  'message'=>'opt_message',
  'opt_in'=>'opt_opt_in',
];

$mail_config=[
  'host' => 'smtp.googlemail.com',
  'port' => '465',
  'username' => 'rydkeyproduction@gmail.com',
  'password' => 'azerty90',
  'encryption' => 'ssl',
  'auth_mode' => 'login'
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