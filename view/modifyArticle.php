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

            <form method="post" action="index.php?action=modifyArticle">

                <span class="s-text18 w-size19 w-full-sm">Modification d'article</span>


                <div class="size13 bo4 m-b-12">
                    <input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="code" placeholder="<?php echo $articleInfos[0]['code']?>">
                </div>

                <div class="size13 bo4 m-b-22">
                    <input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="brand" placeholder="<?php echo $articleInfos[0]['brand']?>">
                </div>

                <div class="size13 bo4 m-b-22">
                    <input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="model" placeholder="<?php echo $articleInfos[0]['model']?>">
                </div>

                <div class="size13 bo4 m-b-22">
                    <input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="snowLength" placeholder="<?php echo $articleInfos[0]['snowLength']?>">
                </div>


                <div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size21 m-t-8 m-b-12">
                    Pour qui ?
                    <select class="selection-2" name="<?php echo $articleInfos[0]['audience']?>">
                        <option>Homme</option>
                        <option>Femme</option>
                        <option>Mixte</option>
                    </select>
                </div>

                <div class="size13 bo4 m-b-22">
                    <input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="qtyAvailable" placeholder="<?php echo $articleInfos[0]['qtyAvailable']?>">
                </div>

                <div class="size13 bo4 m-b-22">
                    <input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="description" placeholder="<?php echo $articleInfos[0]['description']?>">
                </div>
                <div class="size13 bo4 m-b-22">
                    <input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="price" placeholder="<?php echo $articleInfos[0]['price']?>">
                </div>

                <div class="size13 bo4 m-b-22">
                    <input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="descriptionFull" placeholder="<?php echo $articleInfos[0]['descriptionFull']?>">
                </div>

                <div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size21 m-t-8 m-b-12">
                    Quel niveau ?
                    <select class="selection-2" name="<?php echo $articleInfos[0]['level']?>">
                        <option>Pro</option>
                        <option>Standart</option>
                        <option>Débutant</option>
                        <option>Intermédiaire</option>
                    </select>
                </div>


                <div class="size14 trans-0-4 m-b-10">

                    <a href="index.php?action=modifyArticle&<?php echo $articleInfos[0]['id'] ?>"><input type="submit" value="Modifier" class="flex-c-m  bg4 bo-rad-23 hov1 m-text3 trans-0-4"></a><br>
                    <input value="annuler" class="flex-c-m  bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                </div>
            </form>

            <?php if(isset($errorMessage)) echo $errorMessage ?>
        </div>

        </section>





<?php
$content = ob_get_clean();
require "gabarit.php";