<?php
/**
 * Created by PhpStorm.
 * User: rrisser
 * Date: 02/05/17
 * Time: 14:18
 */

session_start();
/**
 * @param array $posts
 *
 * @return bool
 */
function is_BDD(array $posts){
  $form_id = 'pf_std';
  unset($_SESSION[$form_id]['message_error_bdd']);
  unset($_SESSION[$form_id]['message_error_connection']);
  $msg=[];
  foreach ($posts as $key => $v){
    if (empty($v)) {
      $msg[$key] = 'le champ ' . $key . ' est vide';
    }
  }
  if(!in_array($posts['driver'],['mysql','sqlite','pgsql'])) $msg['driver']='le champs Driver n\'est pas une valeur valide';
  if(!in_array($posts['charset'],['utf8','utf16','utf32','latin1'])) $msg['charset']='le champs Charset n\'est pas une valeur valide';
  if(!is_numeric($posts['port']) && empty($msg['port']))$msg['port']='Le champs port n\'est pas un nombre';
  
  foreach ($msg as $key => $message){
    $_SESSION[$form_id]['message_error_bdd'][$key]=$message;
  }
  
  if (empty($_SESSION[$form_id]['message_error_bdd'])){
    try{
      $bdd= new PDO($posts['driver'].':host='.$posts['host'].';dbname='.$posts['name'].';charset='.$posts['charset'],$posts['username'],$posts['password']);
    }catch (PDOException $e){
      $_SESSION[$form_id]['message_error_connection']=$e->getMessage();
    }
  }
  
  if(!empty($_SESSION[$form_id]['message_error_bdd']) || !empty($_SESSION[$form_id]['message_error_connection'])) return false;
  return true;
  
}