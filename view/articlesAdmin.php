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
            GESTION DES ARTICLES
        </h2>

    </section>
    <section class="cart bgwhite p-t-70 p-b-100">
    <div class="container">
        <!-- Cart item -->
        <div class="container-table-cart pos-relative">
            <div class="wrap-table-shopping-cart bgwhite">
                <table class="table-shopping-cart">
                    <tr class="table-head">
                        <th class="column-1">ARTICLE</th>
                        <th class="column-2">PHOTO</th>
                        <th class="column-3">MODEL</th>
                        <th class="column-4 p-l-70">LONGEUR</th>
                        <th class="column-5">PRIX</th>
                        <th class="column-6">QUANTITE</th>
                        <th class="column-7">

                            <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 " style="color:white;">
                                <a href="index.php?action=addArticle">Ajouter</a>
                            </button>
                        </th>
                    </tr>

                    <?php
                        foreach ($articlesAdmin as $articl){?>
                    <tr class="table-row">
                        <td class="column-1">
                            <?php echo $articl["code"]?>
                        </td>
                        <td class="column-2">
                            <div class="cart-img-product b-rad-4 o-f-hidden">
                                <img src="<?php echo $articl["photo"]?>" alt="IMG-PRODUCT">
                            </div>
                        </td>
                        <td class="column-3"><?php echo$articl["model"]?></td>
                        <td class="column-4"><?php echo $articl["snowLength"]?></td>
                        <td class="column-5"><?php echo 'CHF '. number_format($articl["price"],2)?></td>
                        <td class="column-6"><?php echo $articl["qtyAvailable"]?></td>
                        <td class="column-7">
                            <a href="index.php?action=deleteArticle&id=<?php echo$articl["id"]?>">
                                <input class="btn-num-product-up flex-c-m size7 ">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </input>
                            </a>
                            <button class="btn-num-product-up flex-c-m size7 ">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </button>
                        </td>
                    </tr>
            <?php }  ?>

                </table>
            </div>
        </div>
    </div>
    </section>


<?php
$content = ob_get_clean();
require "gabarit.php";