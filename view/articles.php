<?php

/**
 * @file      articles.php
 * @brief     File description
 * @author    Created by Oceane.TORCHE
 * @version   30.11.2021
 */

ob_start();
$title = "SnowPoint . articles";
?>

    <!-- Title Page -->
    <section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(view/content/images/home_slide_2.jpg);">
        <h2 class="l-text2 t-center">
            Nos Snow
        </h2>

    </section>

<!-- Product -->
    <div class="col-sm-6 col-md-8 col-lg-9 p-b-50 mx-auto">

        <div class="row">

            <?php
                foreach ($articles as $art){?>

                <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
                    <!-- Block2 -->
                <div class="block2">
                    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">

                        <?php if(is_file($art["photo"])){
                            echo '<img src="'. $art["photo"] .'" alt="IMG-PRODUCT">';
                        }
                        ?>

                        <div class="block2-overlay trans-0-4">
                            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                            </a>

                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                <!-- Button -->
                                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                        Add to Cart
                        </button>
                            </div>
                        </div>
                    </div>

                    <div class="block2-txt p-t-20">
                        <a href="index.php?action=displayArticlesDetail&id= <?php echo $art["id"]?>" class="block2-name dis-block s-text3 p-b-5">
                            <?php echo $art['brand']. " " .$art["model"] ?>
                        </a>

                        <span class="block2-price m-text6 p-r-5">

                            CHF <?php  echo number_format( $art["price"],2) ?>
                        </span>
                    </div>

                </div>
                </div>



            <?php }  ?>


        </div>
    </div>


<?php
$content = ob_get_clean();
require "gabarit.php";