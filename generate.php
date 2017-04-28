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
<body style="background-color: darkgrey">


<div class="container-fluid">
    <div class="row">
        <form method="post" action="#">
            <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="panel-title">Base de donnée</div>
                    </div>
                    <div class="panel-body" >
                            <div id="div_id_driver" class="form-group required">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Driver</label>
                                <select required class="custom-select form-control controls" id="inlineFormCustomSelect" >
                                    <option selected value="">-choisir-</option>
                                    <option value="pdo_mysql">MySQL</option>
                                    <option value="pdo_sqlite">SQL Lite</option>
                                    <option value="pdo_pgsql">PostGres SQL</option>
                                </select>
                            </div>
                            <div id="div_id_charset" class="form-group required">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Charset</label>
                                <select required class="custom-select form-control controls" id="inlineFormCustomSelect">
                                    <option selected value="">-choisir-</option>
                                    <option value="utf8">utf-8</option>
                                    <option value="utf16">utf-16</option>
                                    <option value="utf32">utf-32</option>
                                    <option value="latin1">latin 1</option>
                                </select>
                            </div>
                            <div id="div_id_username" class="form-group required">
                                <label for="id_username" class="control-label col-md-4  requiredField"> utilisateur<span class="asteriskField">*</span> </label>
                                <div class="controls col-md-8 ">
                                    <input required="true" class="input-md  textinput textInput form-control" id="id_username" maxlength="30" name="username" placeholder="utilisateur de la base de donnée" style="margin-bottom: 10px" type="text" />
                                </div>
                            </div>
                            <div id="div_id_password1" class="form-group required">
                                <label for="id_password1" class="control-label col-md-4  requiredField">mot de passe<span class="asteriskField">*</span> </label>
                                <div class="controls col-md-8 ">
                                    <input required="true" class="input-md textinput textInput form-control" id="id_password1" name="password1" placeholder="mdp base de donnée" style="margin-bottom: 10px" type="password" />
                                </div>
                            </div>
                            <div id="div_id_host" class="form-group required">
                                <label for="id_host" class="control-label col-md-4  requiredField">host<span class="asteriskField">*</span> </label>
                                <div class="controls col-md-8 ">
                                    <input required="true" class="input-md textinput textInput form-control" id="id_host" name="host" placeholder="host de la base de donnée" style="margin-bottom: 10px" type="text" />
                                </div>
                            </div>
                            <div id="div_id_port" class="form-group required">
                                <label for="id_port" class="control-label col-md-4  requiredField">port<span class="asteriskField">*</span> </label>
                                <div class="controls col-md-8 ">
                                    <input required="true" class="input-md textinput textInput form-control" id="id_port" name="port" placeholder="port de la base de donnée" style="margin-bottom: 10px" type="text" />
                                </div>
                            </div>
                            <div id="div_id_nameBDD" class="form-group required">
                                <label for="id_nameBDD" class="control-label col-md-4  requiredField">Nom de la base<span class="asteriskField">*</span> </label>
                                <div class="controls col-md-8 ">
                                    <input required="true" class="input-md textinput textInput form-control" id="id_nameBDD" name="nameBDD" placeholder="Nom de la base de donnée" style="margin-bottom: 10px" type="text" />
                                </div>
                            </div>
                            <p class="text-center">_________________________</p>
                            <div class="form-group">
                                <div class="controls col-md-offset-4 col-md-8 ">
                                    <p class="alert-info">cocher si vous voulez que le formulaire enregistre dans la base de donnée ou non </p>
                                    <div id="div_id_register" class="checkbox required">
                                        <label for="id_register" class=" requiredField">
                                            <input class="input-ms checkboxinput" id="id_register" name="register" style="margin-bottom: 10px" type="checkbox" />
                                            Enregistrement en base de donnée
                                        </label>
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
                            <p class="alert-warning"><strong>Si laisser vide</strong> : Il n'y aura pas d'envoie de mail
                                <br>
                                Merci de laisser tout les champs vide si vous ne voulez pas envoyer de mail.</p>
                                <div id="div_id_host_mail" class="form-group required">
                                    <label for="id_host_mail" class="control-label col-md-4  requiredField"> Host Mail<span class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 ">
                                        <input class="input-md  textinput textInput form-control" id="id_host_mail" maxlength="30" name="host_mail" placeholder="host mail" style="margin-bottom: 10px" type="text" />
                                    </div>
                                </div>
                                <div id="div_id_port_mail" class="form-group required">
                                    <label for="id_port_mail" class="control-label col-md-4  requiredField"> port Mail<span class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 ">
                                        <input class="input-md  textinput textInput form-control" id="id_port_mail" maxlength="30" name="port_mail" placeholder="port mail" style="margin-bottom: 10px" type="text" />
                                    </div>
                                </div>
                                <div id="div_id_username_mail" class="form-group required">
                                    <label for="id_username_mail" class="control-label col-md-4  requiredField"> utilisateur<span class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 ">
                                        <input class="input-md  textinput textInput form-control" id="id_username_mail" maxlength="30" name="username_mail" placeholder="utilisateur mail" style="margin-bottom: 10px" type="text" />
                                    </div>
                                </div>
                                <div id="div_id_password1_mail" class="form-group required">
                                    <label for="id_password1_mail" class="control-label col-md-4  requiredField">mot de passe<span class="asteriskField">*</span> </label>
                                    <div class="controls col-md-8 ">
                                        <input class="input-md textinput textInput form-control" id="id_password1_mail" name="password1_mail" placeholder="mdp mail" style="margin-bottom: 10px" type="password" />
                                    </div>
                                </div>
                                <div id="div_id_encryption" class="form-group required">
                                    <label class="mr-sm-2" for="inlineFormCustomSelect">encryption</label>
                                    <select class="custom-select form-control controls" id="inlineFormCustomSelect">
                                        <option selected value="null">Par défaut (null)</option>
                                        <option value="tls">TLS</option>
                                        <option value="ssl">ssl</option>
                                    </select
                                <div id="div_id_auth_mode" class="form-group required">
                                    <label class="mr-sm-2" for="inlineFormCustomSelect">Mode d'autentification</label>
                                    <select class="custom-select form-control controls" id="inlineFormCustomSelect">
                                        <option selected value="null">Par défaut (null)</option>
                                        <option value="plain">plain</option>
                                        <option value="login">login</option>
                                        <option value="cram-md5">cram-md5</option>
                                    </select>
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
</div>


</body>
</html>
