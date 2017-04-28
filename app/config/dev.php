<?php
/**
 * Created by PhpStorm.
 * User: rrisser
 * Date: 06/04/17
 * Time: 14:39
 */

// inclus la définition de la base de données.
require __DIR__.'/prod.php';

//débug de silex, ne pas toucher pour le dev
$app['debug'] = true;

//définitions des champs

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

//permet de récupéré l'URL de base de l'appliquation, ne pas toucher
define('BASE_URL', explode('app.php', $_SERVER['SCRIPT_NAME'])[0]);

define('FIELD',$f);