<?php

/**
 * @file      login.php
 * @brief     File description
 * @author    Created by Oceane.PICHONNAZ
 * @version   16.11.2021
 */

ob_start();
$title = "Sign up";
?>

<!-- login page -->
<section class="bgwhite p-t-66 p-b-60">
    <div class="container">
        <div class="row">

            <div class="col-md-12 p-b-30">

                <form class="leave-comment" action="index.php?action=signup" method="post" >
                    <h4 class="m-text26 p-b-36 p-t-15">
                        Enregistrez-vous
                    </h4>

                    <?php
                    if(isset($errorMessage)){
                        echo '<h4 class="alert-danger">' . $errorMessage.'</h4>';
                    }
                    ?>

                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="email" name="emailSignup" placeholder="Adresse email">
                    </div>

                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="pwdSignUp" placeholder="Mot de passe">
                    </div>

                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="pwd2" placeholder="Confirmation mot de passe">
                    </div>

                    <small>En soumettant votre demande de compte, vous validez les conditions générales d'utilisation.</small>
                    <input type="submit" value="S'enregister" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4"><br>
                    <input type="reset" value="Annuler" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                    <small>Déjà membre ? <a href="index.php?action=login"> Login</a></small>


                </form>
            </div>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
require "gabarit.php";