<?php

/**
 * @file      articles.php
 * @brief     File description
 * @author    Created by Oceane.TORCHE
 * @version   30.11.2021
 */

ob_start();
$title = "SnowPoint . gestion";
?>

    <!-- Title Page -->
    <section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(view/content/images/home_slide_2.jpg);">
        <h2 class="l-text2 t-center">
            AJOUT D'ARTICLE
        </h2>
    </section>

    <section class="cart bgwhite p-t-70 p-b-100">
        <div class="container">

            <form method="post" action="index.php?action=addArticle">

                <span class="s-text18 w-size19 w-full-sm">Nouvel article</span>


                <div class="size13 bo4 m-b-12">
                    <input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="code" placeholder="Code de l'article">
                </div>

                <div class="size13 bo4 m-b-22">
                    <input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="brand" placeholder="Marque">
                </div>

                <div class="size13 bo4 m-b-22">
                    <input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="model" placeholder="Model">
                </div>

                <div class="size13 bo4 m-b-22">
                    <input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="snowLength" placeholder="Longueur">
                </div>


                <div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size21 m-t-8 m-b-12">
                    Pour qui ?
                    <select class="selection-2" name="audience">
                        <option>Homme</option>
                        <option>Femme</option>
                        <option>Mixte</option>
                    </select>
                </div>

                <div class="size13 bo4 m-b-22">
                    <input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="qtyAvailable" placeholder="Quantité dispo">
                </div>

                <div class="size13 bo4 m-b-22">
                    <input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="description" placeholder="Description">
                </div>
                <div class="size13 bo4 m-b-22">
                    <input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="price" placeholder="Prix à l'unité">
                </div>

                <div class="size13 bo4 m-b-22">
                    <input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="descriptionFull" placeholder="Grande description">
                </div>

                <div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size21 m-t-8 m-b-12">
                    Quel niveau ?
                    <select class="selection-2" name="level">
                        <option>Pro</option>
                        <option>Standart</option>
                        <option>Débutant</option>
                        <option>Intermédiaire</option>
                    </select>
                </div>

                <div class="size13 bo4 m-b-22">
                    <input class="sizefull s-text7 p-l-15 p-r-15" type="file" accept=".image/jpg,.image/png" size="1000" name="photo" placeholder="Photo">
                </div>

                <div class="size14 trans-0-4 m-b-10">

                    <input type="submit" value="Ajouter" class="flex-c-m  bg4 bo-rad-23 hov1 m-text3 trans-0-4"><br>
                    <a href="index.php?action=gestion"><input value="annuler" class="flex-c-m  bg4 bo-rad-23 hov1 m-text3 trans-0-4"></a>
                </div>
            </form>

            <?php if(isset($errorMessage)) echo $errorMessage ?>
        </div>

        </section>





<?php
$content = ob_get_clean();
require "gabarit.php";