<?php
session_start();
//session_unset();
$form_id = 'pf_std'
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Génération</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: lightgrey" onload="hideMailToProvided();hideBDD();hideMail()">
<div class="container-fluid">
    <form method="post" action="generateController/generateController.php">
    <div class="row">
        <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="panel-title">Base de donnée</div>
                </div>
                <?php
                    if(isset($_SESSION[$form_id]['message_error_connection'])){
                        echo"
                            <div class=\"alert alert-danger alert-dismissable fade in\">
                                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                <strong>Erreur!</strong> ".$_SESSION[$form_id]['message_error_connection']."
                            </div>
                        ";
                    }
                ?>
                <div class="panel-body" >
                    <div class="form-group">
                        <div class="controls ">
                            <p class="alert-info">cocher si vous souhaitez un enregistrement en base de donnée </p>
                            <div id="div_id_register_bdd" class="checkbox required">
                                <label for="id_register_bdd" class=" requiredField">
                                    <input <?php if($_SESSION[$form_id]['field_bdd']['register_bdd'])echo'checked ';?> class="input-ms checkboxinput" id="id_register_bdd" name="register_bdd" style="margin-bottom: 10px" type="checkbox" onclick="hideBDD()"/>
                                    Enregistrement en base de donnée
                                </label>
                            </div>
                        </div>
                    </div>
                    <div id="bdd_fields">
                        <p class="text-center">_________________________</p>
                        <div id="div_id_driver" class="form-group required">
                            <label class="mr-sm-2" for="id_driver_bdd">Driver</label>
                            <select  class="custom-select form-control controls <?php if (isset($_SESSION[$form_id]['message_error_bdd']['driver'])){echo "alert-danger";} ?>" name="driver_bdd" title="<?=$_SESSION[$form_id]['message_error_bdd']['driver']?>">
                                <option <?php if (!isset($_SESSION[$form_id]['field_bdd']['driver'])){echo 'selected';}?> value="">-choisir-</option>
                                <option <?php if (isset($_SESSION[$form_id]['field_bdd']['driver']) && $_SESSION[$form_id]['field_bdd']['driver']=='mysql'){echo "selected";}?> value="mysql">MySQL</option>
                                <option <?php if (isset($_SESSION[$form_id]['field_bdd']['driver']) && $_SESSION[$form_id]['field_bdd']['driver']=='sqlite'){echo "selected";}?> value="sqlite">SQL Lite</option>
                                <option <?php if (isset($_SESSION[$form_id]['field_bdd']['driver']) && $_SESSION[$form_id]['field_bdd']['driver']=='pgsql'){echo "selected";}?> value="pgsql">PostGres SQL</option>
                            </select>
                        </div>
                        <div id="div_id_charset" class="form-group required">
                            <label class="mr-sm-2" for="id_charset_bdd">Charset</label>
                            <select  class="custom-select form-control controls <?php if (isset($_SESSION[$form_id]['message_error_bdd']['charset'])){echo "alert-danger";} ?>" name="charset_bdd" title="<?=$_SESSION[$form_id]['message_error_bdd']['charset']?>">
                                <option <?php if (!isset($_SESSION[$form_id]['field_bdd']['charset'])){echo 'selected';}?> value="">-choisir-</option>
                                <option <?php if (isset($_SESSION[$form_id]['field_bdd']['charset']) && $_SESSION[$form_id]['field_bdd']['charset']=='utf8'){echo "selected";}?> value="utf8">utf-8</option>
                                <option <?php if (isset($_SESSION[$form_id]['field_bdd']['charset']) && $_SESSION[$form_id]['field_bdd']['charset']=='utf16'){echo "selected";}?> value="utf16">utf-16</option>
                                <option <?php if (isset($_SESSION[$form_id]['field_bdd']['charset']) && $_SESSION[$form_id]['field_bdd']['charset']=='utf32'){echo "selected";}?> value="utf32">utf-32</option>
                                <option <?php if (isset($_SESSION[$form_id]['field_bdd']['charset']) && $_SESSION[$form_id]['field_bdd']['charset']=='latin1'){echo "selected";}?> value="latin1">latin 1</option>
                            </select>
                        </div>
                        <div id="div_id_username_bdd" class="form-group required">
                            <label for="id_username_bdd" class="control-label col-md-4  requiredField"> utilisateur<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input title="<?=$_SESSION[$form_id]['message_error_bdd']['username']?>" <?php if (isset($_SESSION[$form_id]['field_bdd']['username'])){echo 'value="'.$_SESSION[$form_id]['field_bdd']['username'].'"';}?> class="input-md  textinput textInput form-control <?php if (isset($_SESSION[$form_id]['message_error_bdd']['username'])){echo "alert-danger";} ?>" id="id_username_bdd" maxlength="30" name="username_bdd" placeholder="utilisateur de la base de donnée" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_password_bdd" class="form-group required">
                            <label for="id_password_bdd" class="control-label col-md-4  requiredField">mot de passe<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input title="<?=$_SESSION[$form_id]['message_error_bdd']['password']?>" <?php if (isset($_SESSION[$form_id]['field_bdd']['password'])){echo 'value="'.$_SESSION[$form_id]['field_bdd']['password'].'"';}?> class="input-md textinput textInput form-control <?php if (isset($_SESSION[$form_id]['message_error_bdd']['password'])){echo "alert-danger";} ?>" id="id_password_bdd" name="password_bdd" placeholder="mdp base de donnée" style="margin-bottom: 10px" type="password" />
                            </div>
                        </div>
                        <div id="div_id_host_bdd" class="form-group required">
                            <label for="id_host_bdd" class="control-label col-md-4  requiredField">host<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input title="<?=$_SESSION[$form_id]['message_error_bdd']['host']?>" <?php if (isset($_SESSION[$form_id]['field_bdd']['host'])){echo 'value="'.$_SESSION[$form_id]['field_bdd']['host'].'"';}?> class="input-md textinput textInput form-control <?php if (isset($_SESSION[$form_id]['message_error_bdd']['host'])){echo "alert-danger";} ?>" id="id_host_bdd" name="host_bdd" placeholder="host de la base de donnée" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_port_bdd" class="form-group required">
                            <label for="id_port_bdd" class="control-label col-md-4  requiredField">port<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input title="<?=$_SESSION[$form_id]['message_error_bdd']['port']?>" <?php if (isset($_SESSION[$form_id]['field_bdd']['port'])){echo 'value="'.$_SESSION[$form_id]['field_bdd']['port'].'"';}?> class="input-md textinput textInput form-control <?php if (isset($_SESSION[$form_id]['message_error_bdd']['port'])){echo "alert-danger";} ?>" id="id_port_bdd" name="port_bdd" placeholder="port de la base de donnée" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_name_bdd" class="form-group required">
                            <label for="id_name_bdd" class="control-label col-md-4  requiredField">Nom de la base<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input title="<?=$_SESSION[$form_id]['message_error_bdd']['name']?>" <?php if (isset($_SESSION[$form_id]['field_bdd']['name'])){echo 'value="'.$_SESSION[$form_id]['field_bdd']['name'].'"';}?> class="input-md textinput textInput form-control <?php if (isset($_SESSION[$form_id]['message_error_bdd']['name'])){echo "alert-danger";} ?>" id="id_name_bdd" name="name_bdd" placeholder="Nom de la base de donnée" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="panel-title">E-mail</div>
                </div>
                    <div class="panel-body" >
                        <div class="form-group">
                            <div class="controls ">
                                <p class="alert-info">cocher si vous souhaitez un envoie de mail</p>
                                <div id="div_id_register_mail" class="checkbox required">
                                    <label for="id_register_mail" class=" requiredField">
                                        <input <?php if($_SESSION[$form_id]['field_mail']['register_mail'])echo'checked ';?> class="input-ms checkboxinput" id="id_register_mail" name="register_mail" style="margin-bottom: 10px" type="checkbox" onclick="hideMail()"     />
                                        Envoie de mail
                                    </label>
                                </div>
                            </div>
                            <div id="mail_fields">
                                <p class="text-center">_________________________</p>
                                <div id="div_id_host_mail" class="form-group required">
                                    <label for="id_host_mail" class="control-label col-md-4  requiredField"> Host Mail<span class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 ">
                                        <input title="<?=$_SESSION[$form_id]['message_error_mail']['host']?>" <?php if (isset($_SESSION[$form_id]['field_mail']['host'])){echo 'value="'.$_SESSION[$form_id]['field_mail']['host'].'"';}?> class="input-md  textinput textInput form-control <?php if (isset($_SESSION[$form_id]['message_error_mail']['host'])){echo "alert-danger";} ?>" id="id_host_mail" maxlength="30" name="host_mail" placeholder="host mail" style="margin-bottom: 10px" type="text" />
                                    </div>
                                </div>
                                <div id="div_id_port_mail" class="form-group required">
                                    <label for="id_port_mail" class="control-label col-md-4  requiredField"> port Mail<span class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 ">
                                        <input title="<?=$_SESSION[$form_id]['message_error_mail']['port']?>" <?php if (isset($_SESSION[$form_id]['field_mail']['port'])){echo 'value="'.$_SESSION[$form_id]['field_mail']['port'].'"';}?> class="input-md  textinput textInput form-control <?php if (isset($_SESSION[$form_id]['message_error_mail']['port'])){echo "alert-danger";} ?>" id="id_port_mail" maxlength="30" name="port_mail" placeholder="port mail" style="margin-bottom: 10px" type="text" />
                                    </div>
                                </div>
                                <div id="div_id_username_mail" class="form-group required">
                                    <label for="id_username_mail" class="control-label col-md-4  requiredField"> utilisateur<span class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 ">
                                        <input title="<?=$_SESSION[$form_id]['message_error_mail']['username']?>" <?php if (isset($_SESSION[$form_id]['field_mail']['username'])){echo 'value="'.$_SESSION[$form_id]['field_mail']['username'].'"';}?> class="input-md  textinput textInput form-control <?php if (isset($_SESSION[$form_id]['message_error_mail']['username'])){echo "alert-danger";} ?>" id="id_username_mail" maxlength="30" name="username_mail" placeholder="utilisateur mail" style="margin-bottom: 10px" type="text" />
                                    </div>
                                </div>
                                <div id="div_id_password_mail" class="form-group required">
                                    <label for="id_password_mail" class="control-label col-md-4  requiredField">mot de passe<span class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 ">
                                        <input title="<?=$_SESSION[$form_id]['message_error_mail']['password']?>" <?php if (isset($_SESSION[$form_id]['field_mail']['password'])){echo 'value="'.$_SESSION[$form_id]['field_mail']['password'].'"';}?> class="input-md textinput textInput form-control <?php if (isset($_SESSION[$form_id]['message_error_mail']['password'])){echo "alert-danger";} ?>" id="id_password_mail" name="password_mail" placeholder="mdp mail" style="margin-bottom: 10px" type="password" />
                                    </div>
                                </div>
                                <div id="div_id_encryption" class="form-group required">
                                    <label class="mr-sm-2" for="id_encryption_mail">Encryptage</label>
                                    <select class="custom-select form-control controls <?php if (isset($_SESSION[$form_id]['message_error_mail']['encryption'])){echo "alert-danger";} ?>" name="encryption_mail">
                                        <option <?php if (isset($_SESSION[$form_id]['field_mail']['encryption']) && $_SESSION[$form_id]['field_mail']['encryption']=='null'){echo "selected";}?> value="null">Par défaut (null)</option>
                                        <option <?php if (isset($_SESSION[$form_id]['field_mail']['encryption']) && $_SESSION[$form_id]['field_mail']['encryption']=='tls'){echo "selected";}?> value="tls">TLS</option>
                                        <option <?php if (isset($_SESSION[$form_id]['field_mail']['encryption']) && $_SESSION[$form_id]['field_mail']['encryption']=='ssl'){echo "selected";}?> value="ssl">SSL</option>
                                    </select>
                                </div>
                                <div id="div_id_auth_mode" class="form-group required">
                                    <label class="mr-sm-2" for="auth_mail">Mode d'autentification</label>
                                    <select class="custom-select form-control controls <?php if (isset($_SESSION[$form_id]['message_error_mail']['auth'])){echo "alert-danger";} ?>" name="auth_mail">
                                        <option <?php if (isset($_SESSION[$form_id]['field_mail']['auth']) && $_SESSION[$form_id]['field_mail']['auth']=='null'){echo "selected";}?> value="null">Par défaut (null)</option>
                                        <option <?php if (isset($_SESSION[$form_id]['field_mail']['auth']) && $_SESSION[$form_id]['field_mail']['auth']=='plain'){echo "selected";}?> value="plain">plain</option>
                                        <option <?php if (isset($_SESSION[$form_id]['field_mail']['auth']) && $_SESSION[$form_id]['field_mail']['auth']=='login'){echo "selected";}?> value="login">login</option>
                                        <option <?php if (isset($_SESSION[$form_id]['field_mail']['auth']) && $_SESSION[$form_id]['field_mail']['auth']=='cram-md5'){echo "selected";}?> value="cram-md5">cram-md5</option>
                                    </select>
                                </div>
                                <p class="text-center">_________________________</p>
                                <div id="div_id_to_form_mail" class="checkbox required">
                                    <label for="id_to_form_mail" class=" requiredField">
                                        <input <?php if($_SESSION[$form_id]['field_mail']['to_form'])echo'checked ';?> class="input-ms checkboxinput" id="id_to_form_mail" name="to_form_mail" style="margin-bottom: 10px" type="checkbox" />
                                        Envoie au mail fournit dans la form
                                    </label>
                                </div>
                                <div id="div_id_to_provided_mail" class="checkbox required">
                                    <label for="id_to_provided_mail" class=" requiredField">
                                        <input <?php if($_SESSION[$form_id]['field_mail']['to_provided_mail'])echo'checked ';?> class="input-ms checkboxinput" id="id_to_provided_mail" name="to_provided_mail" style="margin-bottom: 10px" type="checkbox" onclick="hideMailToProvided()"/>
                                        Envoie au(x) mail(s) fournit.
                                    </label>
                                </div>
                                <div id="div_id_to_mail" class="form-group required">
                                    <label for="id_to_mail" class="control-label col-md-4  requiredField">Destinataire<span class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 ">
                                        <input class="input-md textinput textInput form-control" id="id_to_mail" name="to_mail" placeholder="destinataire" style="margin-bottom: 10px" type="email" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="panel-title">Champs</div>
                    </div>
                    <div class="panel-body" >
                        <p class="alert-warning">Les champs laisser vide ne seront pas ajoutez</p>
                        <p class="text-center">_________________________</p>
                        <h5 class="text-center">Info de base</h5>
                        <div id="div_id_field_mail" class="form-group">
                            <label for="id_field_mail" class="control-label col-md-4">Mail</label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_field_mail" maxlength="30" name="field_mail" placeholder="Nom dans la base de donnée" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_field_nom" class="form-group">
                            <label for="id_field_nom" class="control-label col-md-4">Nom</label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_field_nom" maxlength="30" name="field_nom" placeholder="Nom dans la base de donnée" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_field_prenom" class="form-group">
                            <label for="id_field_prenom" class="control-label col-md-4">prenom</label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_field_prenom" maxlength="30" name="field_prenom" placeholder="Nom dans la base de donnée" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <p class="text-center">_________________________</p>
                        <h5 class="text-center">adresse</h5>
                        <div id="div_id_field_numeroAdresse" class="form-group">
                            <label for="id_field_numeroAdresse" class="control-label col-md-4">Numéro</label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_field_numeroAdresse" maxlength="30" name="field_numeroAdresse" placeholder="Nom dans la base de donnée" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_field_voieAdresse" class="form-group">
                            <label for="id_field_voieAdresse" class="control-label col-md-4">Nom de la voie</label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_field_voieAdresse" maxlength="30" name="field_voieAdresse" placeholder="Nom dans la base de donnée" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_field_codePostal" class="form-group">
                            <label for="id_field_codePostal" class="control-label col-md-4">Code Postal</label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_field_codePostal" maxlength="30" name="field_codePostal" placeholder="Nom dans la base de donnée" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <p class="text-center">_________________________</p>
                        <h5 class="text-center">Info personnelle</h5>
                        <div id="div_id_field_telephone" class="form-group">
                            <label for="id_field_telephone" class="control-label col-md-4">Téléphone</label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_field_telephone" maxlength="30" name="field_telephone" placeholder="Nom dans la base de donnée" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_field_entreprise" class="form-group">
                            <label for="id_field_entreprise" class="control-label col-md-4">Entreprise</label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_field_entreprise" maxlength="30" name="field_entreprise" placeholder="Nom dans la base de donnée" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <p class="text-center">_________________________</p>
                        <h5 class="text-center">Bonus</h5>
                        <div id="div_id_field_message" class="form-group">
                            <label for="id_field_message" class="control-label col-md-4">Message</label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_field_message" maxlength="30" name="field_message" placeholder="Nom dans la base de donnée" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_field_optionnel" class="form-group">
                            <label for="id_field_optionnel" class="control-label col-md-4">Optionnel</label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_field_optionnel" maxlength="30" name="field_optionnel" placeholder="Nom dans la base de donnée" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <p class="text-center">_________________________</p>
                        <div class="form-group">
                            <p class="alert-danger text-center"><strong>Attention ! </strong> cette action est irréversible</p>
                            <div class="aab controls col-md-4 "></div>
                            <div class="controls col-md-8 ">
                                <input type="submit" name="Signup" value="Généré" class="btn btn-primary btn btn-danger" id="submit-id-signup" onclick="confirm('Voulez vous vraiment effectué cette action ?')" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    function hideBDD(){
        if (!document.getElementById('id_register_bdd').checked){
            document.getElementById('bdd_fields').style.display = 'none'
        }else{
            document.getElementById('bdd_fields').style.display = 'block'
        }
    }
    function hideMail(){
        if (!document.getElementById('id_register_mail').checked){
            document.getElementById('mail_fields').style.display = 'none'
        }else{
            document.getElementById('mail_fields').style.display = 'block'
        }
    }
    function hideMailToProvided(){
        if (!document.getElementById('id_to_provided_mail').checked){
            document.getElementById('div_id_to_mail').style.display = 'none'
        }else{
            document.getElementById('div_id_to_mail').style.display = 'block'
        }
    }
</script>
</body>
</html>