<?php
/**
 * Created by PhpStorm.
 * User: rrisser
 * Date: 02/05/17
 * Time: 11:49
 */

session_start();

include('verification/bddVerif.php');
include('verification/fieldVerif.php');
include('verification/mailVerif.php');

//affichage des erreurs
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

//définition de l'url du formulaire.
$dir=explode('generateController/generateController.php', $_SERVER['SCRIPT_NAME'])[0];

//variable booléenne pour vérifier la validité des test.
$valid=true;
$form_id = 'pf_std';

//vérification du champs BDD si il est activer.
if (isset($_POST['register_bdd'])){
  $data_bdd=[
    'driver'=>htmlentities($_POST['driver_bdd']),
    'charset'=>htmlentities($_POST['charset_bdd']),
    'username'=>htmlentities($_POST['username_bdd']),
    'password'=>htmlentities($_POST['password_bdd']),
    'host'=>htmlentities($_POST['host_bdd']),
    'port'=>htmlentities($_POST['port_bdd']),
    'name'=>htmlentities($_POST['name_bdd']),
  ];
  $valid=is_BDD($data_bdd);
}else{
  unset($_SESSION[$form_id]['message_error_bdd']);
  unset($_SESSION[$form_id]['field_bdd']);
}

if (isset($_POST['register_mail'])){
  $data_mail=[
    'host'=>htmlentities($_POST['host_mail']),
    'port'=>htmlentities($_POST['port_mail']),
    'username'=>htmlentities($_POST['username_mail']),
    'password'=>htmlentities($_POST['password_mail']),
    'encryption'=>htmlentities($_POST['encryption_mail']),
    'auth'=>htmlentities($_POST['auth_mail']),
  ];
  if(isset($_POST['to_form_mail']))$data_mail['to_form']=htmlentities($_POST['to_form_mail']);
  if(isset($_POST['to_provided_mail'])){
    $data_mail['to_provided_mail']=htmlentities($_POST['to_provided_mail']);
    if (!empty($_POST['to_mail'])){
      $data_mail['mail_provided']=htmlentities($_POST['to_mail']);
    }else{
      $_SESSION[$form_id]['message_error_mail']['to_mail']='Si vous souhaitez envoyer le mail à une adresse définit, entrez une adresse valide';
    }
  }
  
  $valid=is_Mail($data_mail);
}else{
  unset($_SESSION[$form_id]['message_error_mail']);
  unset($_SESSION[$form_id]['field_mail']);
}

if (!$valid || isset($_SESSION[$form_id]['message_error_bdd']) || isset($_SESSION[$form_id]['message_error_mail'])){
  if(isset($_POST['register_bdd']) || isset($_POST['register_mail'])){
    if(isset($data_bdd))$_SESSION[$form_id]['field_bdd']=$data_bdd;
    if(isset($data_mail))$_SESSION[$form_id]['field_mail']=$data_mail;
  }
  $_SESSION[$form_id]['field_bdd']['register_bdd']=htmlentities($_POST['register_bdd']);
  $_SESSION[$form_id]['field_mail']['register_mail']=htmlentities($_POST['register_mail']);
  header('Location:' . $dir.'generate.php');
}