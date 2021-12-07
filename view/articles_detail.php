<?php

/**
 * @file      articles_detail.php
 * @brief     File description
 * @author    Created by Oceane.TORCHE
 * @version   03.12.2021
 */

ob_start();
$title = "SnowPoint . article details";
?>


    <!-- Product Detail -->
    <div class="container bgwhite p-t-35 p-b-80">
        <div class="flex-w flex-sb">
            <div class="w-size13 p-t-30 respon5">
                <div class="wrap-slick3 flex-sb flex-w">
                    <div class="wrap-pic-w">

                        <?php

                        $fileLoc = dirname($articleInfos[0]['photo']); ?>

                        <img src="<?php

                        echo $fileLoc."/".$articleInfos[0]['code'].".jpg"?>" alt="IMG-PRODUCT">
                    </div>
                </div>
            </div>

            <div class="w-size14 p-t-30 respon5">
                <h4 class="product-detail-name m-text16 p-b-13">
                    <?php echo $articleInfos[0]['brand']. " " .  $articleInfos[0]['model'] ?>
                </h4>

                <span class="m-text17">
					 Prix : CHF <?php  echo number_format( $articleInfos[0]["price"],2) ?>
				</span>

                <p class="s-text8 p-t-10">
                    <?php  echo$articleInfos[0]["description"]?>
                </p>

                <!--  -->
                <div class="p-t-33 p-b-60">
                    <div class="flex-m flex-w p-b-10">
                        <div class="s-text15 w-size15 t-center">
                            Code
                        </div>

                        <div >
                            <?php  echo$articleInfos[0]["code"]?>
                        </div>
                    </div>

                    <div class="flex-m flex-w p-b-10">
                        <div class="s-text15 w-size15 t-center">
                            Longueur
                        </div>

                        <div >
                            <?php  echo$articleInfos[0]["snowLength"]?>
                        </div>
                    </div>

                    <div class="flex-m flex-w p-b-10">
                        <div class="s-text15 w-size15 t-center">
                            Niveau
                        </div>

                        <div >
                            <?php  echo$articleInfos[0]["level"]?>
                        </div>
                    </div>

                    <div class="flex-r-m flex-w p-t-10">
                        <div class="w-size16 flex-m flex-w">
                            <div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
                                <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                                    <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                                </button>

                                <input class="size8 m-text18 t-center num-product" type="number" name="num-product" value="1">

                                <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                                    <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                                </button>
                            </div>

                            <div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
                                <!-- Button -->
                                <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                    Ajouter au panier
                                </button>
                            </div>
                        </div>
                    </div>
                </div>



                <!--  -->
                <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
                    <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                        Description
                        <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                        <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                    </h5>

                    <div class="dropdown-content dis-none p-t-15 p-b-23">
                        <p class="s-text8">
                            <?php  echo$articleInfos[0]["descriptionFull"]?>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>



<?php
$content = ob_get_clean();
require "gabarit.php";