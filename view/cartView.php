<?php

/**
 * @file      articles_detail.php
 * @brief     File description
 * @author    Created by Oceane.TORCHE
 * @version   03.12.2021
 */

ob_start();
$title = "SnowPoint . cart";
?>
    <!-- Title Page -->
    <section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(view/content/images/home_slide_2.jpg);">
        <h2 class="l-text2 t-center">
            PANIER
        </h2>

    </section>

    <!-- Cart -->
    <section class="cart bgwhite p-t-70 p-b-100">
        <div class="container">
            <!-- Cart item -->
            <div class="container-table-cart pos-relative">
                <div class="wrap-table-shopping-cart bgwhite">
                    <table class="table-shopping-cart">
                        <tr class="table-head">
                            <th class="column-1">Article</th>
                            <th class="column-2">Aperçu</th>
                            <th class="column-3">Prix</th>
                            <th class="column-4 p-l-70">Quantité</th>
                            <th class="column-5">Total</th>
                        </tr>

                        <?php

                        foreach ($items as $it) { ?>

                        <tr class="table-row">
                            <td class="column-1"><?php print_r($it->GetArticleId())?></td>
                            <td class="column-2">
                                <div class="cart-img-product b-rad-4 o-f-hidden">
                                    <img src="<?php print_r($it->GetImgPath())?>" alt="IMG-PRODUCT">
                                </div>
                            </td>

                            <td class="column-3"><?php echo $it->GetPrice()?></td>
                            <td class="column-4">
                                <div class="flex-w bo5 of-hidden w-size17">
                                    <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                                        <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                                    </button>

                                    <input class="size8 m-text18 t-center num-product" type="number" name="num-product1" value="<?php echo $qty?>">

                                    <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                                        <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </td>
                            <td class="column-5"><?php echo $it->GetTotalPrice()?></td>
                        </tr>
                    <?php } ?>


                    </table>
                </div>
            </div>

            <div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
                <div class="flex-w flex-m w-full-sm">



                </div>

                <div class="size10 trans-0-4 m-t-10 m-b-10">
                    <!-- Button -->
                    <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                        Mettre à jour
                    </button>
                </div>
            </div>

            <!-- Total -->
            <div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
                <h5 class="m-text20 p-b-24">
                    Cart Totals
                </h5>

                <!--  -->
                <div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Subtotal:
					</span>

                    <span class="m-text21 w-size20 w-full-sm">
						<?php echo $it->GetTotalPrice()?>
					</span>
                </div>


                <!--  -->
                <div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Total:
					</span>

                    <span class="m-text21 w-size20 w-full-sm">
						<?php echo $it->GetTotalPrice()?>
					</span>
                </div>

                <div class="size15 trans-0-4">
                    <!-- Button -->
                    <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                        Proceed to Checkout
                    </button>
                </div>
            </div>
        </div>
    </section>

<?php
$content = ob_get_clean();
require "gabarit.php";