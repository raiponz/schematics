<?php
/**
 * Created by PhpStorm.
 * User: hugo
 * Date: 15/05/2016
 * Time: 08:58
 */

$usernamedata=array(
    'class'=>"form-control size18",
    'name'=>'username',
    'id'=>'username',
    "placeholder"=>"dandre, ecadic ...",
    'value'=>set_value('username')
);
$passdata=array(
    'class'=>"form-control size18",
    'name'=>'password',
    'id'=>'password',
    "placeholder"=>"*****",
);

$confirmpassdata=array(
    'class'=>"form-control size18",
    'name'=>'passwordConfirmation',
    'id'=>'passwordConfirmation',
    "placeholder"=>"*****"
);

$maildata=array(
    'type'=>"email",
    'class'=>"form-control size18",
    'name'=>'mail',
    'id'=>'mail',
    "placeholder"=>"nom.prenom@mail.com",
    'value'=>set_value('mail')
);
?>


<!-- Modal -->
<div id="registeryModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm">

        <div class="modal-content" id="registery-content">

            <div class="modal-body">

                <div class="container formulaire modal-content">
                    <form action="<?php echo site_url("User/register")?>" method="post" >
                        <fieldset>
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">S'enregistrer</h4>
                            </div>
                            <?php

                            //######   username   ############//

                            echo '<h4><label for="username">Nom d\'utilisateur :</label></h4>';
                            if(form_error('username')!=null){

                                echo  '<div class="form-group has-error has-feedback">';

                                echo form_input($usernamedata);
                                echo form_error('username');
                                echo ' <span class="glyphicon glyphicon-remove form-control-feedback"></span>';
                                echo "</div>";
                            }
                            else {
                                echo form_input($usernamedata);
                            }

                            //######   password   ############//


                            echo '<h4><label for="password" class="size18">Mot de passe</label></h4>';
                            if(form_error('password')!=null){

                                echo  '<div class="form-group has-error has-feedback">';

                                echo form_password($passdata);
                                echo form_error('password');
                                echo ' <span class="glyphicon glyphicon-remove form-control-feedback"></span>';
                                echo "</div>";
                            }
                            else {
                                echo form_password($passdata);
                            }

                            //####  password confirmation  ###//

                            echo '<h4><label for="passwordConfirmation">Répeter le mot de passe</label></h4>';
                            if(form_error('passwordConfirmation')!=null){

                                echo  '<div class="form-group has-error has-feedback">';

                                echo form_password($confirmpassdata);
                                echo form_error('passwordConfirmation');
                                echo ' <span class="glyphicon glyphicon-remove form-control-feedback"></span>';
                                echo "</div>";
                            }
                            else {
                                echo form_password($confirmpassdata);
                            }

                            //#########   mail    ############//

                            echo '<h4><label for="mail">Email</label></h4>';
                            if(form_error('mail')!=null){

                                echo  '<div class="form-group has-error has-feedback">';

                                echo form_input($maildata);
                                echo form_error('mail');
                                echo ' <span class="glyphicon glyphicon-remove form-control-feedback"></span>';
                                echo "</div>";
                            }
                            else {
                                echo form_input($maildata);
                            }

                            ?>

                            <h4>Choisir un avatar :</h4>

                            <div class="form-group container-fluid">
                                <div class="row">
                                    <select name="sel-avatar" size=5 id="sel-avatar" class="form-control col-sm-6">
                                        <?php foreach ($map as $image){
    echo  '
    <option value="'.$image.'"></option>';
}?>
                                    </select>
                                    <div class="div col-sm-6">
                                        <p class="text-center">Choisir mon propre avatar</p>
                                        <input type="button" class="btn btn-default btn-block my-style size18" onclick='console.log("hi")' value="Selectionner mon fichier" />
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">       
                                <input class="btn btn-default btn-block my-style size18" type="submit"value="S'enregistrer">
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="<?php echo site_url('assets/js/avatar.js'); ?>" ></script>