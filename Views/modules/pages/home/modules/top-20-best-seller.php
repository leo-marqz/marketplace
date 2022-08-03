
<?php

    $urlTopBestSellers = CurlController::api() . "relations?rel=products,categories&type=product,category&orderBy=sales_product&orderMode=DESC&startAt=0&endAt=20";
    $top20BestSellers = CurlController::request(
        $urlTopBestSellers, 
        'GET', 
        array(), 
        array()
    )->results;

    $arrTotalSales = [];
    
    $cycles = ceil( count( $top20BestSellers ) / 4 );
    for($i=0; $i < $cycles; $i++)
    {
        array_push($arrTotalSales, array_slice($top20BestSellers, ($i * 4), 4 ));
    }

?>


<div class="col-xl-3 col-12 ">

    <aside class="widget widget_best-sale" data-mh="dealhot">

        <h3 class="widget-title">Top 20 Best Seller</h3>

        <div class="widget__content">

            <div class="owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">

            <?php
            foreach($arrTotalSales as $salesGroup):            
            ?>
                <div class="ps-product-group">

                <!--=====================================
                Product
                ======================================-->
                <?php
                foreach($salesGroup as $sale):
                ?>
                <div class="ps-product--horizontal">

                        <div class="ps-product__thumbnail">
                            <a href="product-default.html">
                                <img src="img/products/<?=$sale->url_category?>/<?=$sale->image_product?>" alt="">
                            </a>
                        </div>

                        <div class="ps-product__content">

                            <a class="ps-product__title" href="<?=$path . $sale->url_product?>">
                                <?=$sale->name_product?>
                            </a>

                            <p class="ps-product__price">
                                <?php if($sale->offer_product != null): ?>
                                    <p class="ps-product__price sale">
                                        <?php
                                                        $offer = json_decode($sale->offer_product, true);
                                                        
                                                        $finalOffer  = HelperController::finalOfferPrice(
                                                            $sale->price_product, 
                                                            $offer[1], 
                                                            $offer[0]
                                                        );
                                                        // $save = HelperController::amountSaveOnPurchase(300, 25, 'Discount');
                                                        echo "$" . $finalOffer;
                                                    ?> 
                                        <del> 
                                            $<?=$sale->price_product?>
                                        </del>
                                    </p>
                                <?php else: ?>
                                    $<?=$sale->price_product?>
                                <?php endif; ?>
                            </p>

                        </div>

                    </div><!-- End Product -->

                <?php endforeach; ?>
                </div><!-- End Product Group -->

                <?php endforeach; ?>

                <div class="ps-product-group">

                <!--=====================================
                Product
                ======================================-->

                    <div class="ps-product--horizontal">

                        <div class="ps-product__thumbnail">
                            <a href="product-default.html"><img src="img/products/technology/3.jpg" alt=""></a>
                        </div>

                        <div class="ps-product__content">

                            <a class="ps-product__title" href="product-default.html">ASUS Chromebook Flip – 10.2 Inch</a>

                            <div class="ps-product__rating">

                                <select class="ps-rating" data-read-only="true">
                                    <option value="1">1</option>
                                    <option value="1">2</option>
                                    <option value="1">3</option>
                                    <option value="1">4</option>
                                    <option value="2">5</option>
                                </select>

                                <span>02</span>

                            </div>

                            <p class="ps-product__price sale">$990.00 <del>$1250.00 </del></p>

                        </div>

                    </div><!-- End Product -->

                    <!--=====================================
Product
======================================-->

                    <div class="ps-product--horizontal">

                        <div class="ps-product__thumbnail">

                            <a href="product-default.html">
                                <img src="img/products/technology/4.jpg" alt="">
                            </a>

                        </div>

                        <div class="ps-product__content">

                            <a class="ps-product__title" href="product-default.html">Apple Macbook Retina Display 12”</a>

                            <div class="ps-product__rating">

                                <select class="ps-rating" data-read-only="true">
                                    <option value="1">1</option>
                                    <option value="1">2</option>
                                    <option value="1">3</option>
                                    <option value="1">4</option>
                                    <option value="2">5</option>
                                </select>

                                <span>04</span>
                            </div>

                            <p class="ps-product__price">$1090.00 <del>$1550.00 </del></p>

                        </div>

                    </div><!-- End Product -->

                    <!--=====================================
Product
======================================-->

                    <div class="ps-product--horizontal">

                        <div class="ps-product__thumbnail">

                            <a href="product-default.html">
                                <img src="img/products/technology/5.jpg" alt="">
                            </a>

                        </div>

                        <div class="ps-product__content">
                            <a class="ps-product__title" href="product-default.html">Samsung Gear VR Virtual Reality Headset</a>

                            <div class="ps-product__rating">
                                <select class="ps-rating" data-read-only="true">
                                    <option value="1">1</option>
                                    <option value="1">2</option>
                                    <option value="1">3</option>
                                    <option value="1">4</option>
                                    <option value="2">5</option>
                                </select>
                                <span>01</span>
                            </div>

                            <p class="ps-product__price">$85.00</p>

                        </div>

                    </div><!-- End Product -->

                    <!--=====================================
Product
======================================-->

                    <div class="ps-product--horizontal">

                        <div class="ps-product__thumbnail">
                            <a href="product-default.html">
                                <img src="img/products/technology/6.jpg" alt="">
                            </a>
                        </div>

                        <div class="ps-product__content">
                            <a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 64GB</a>

                            <div class="ps-product__rating">
                                <select class="ps-rating" data-read-only="true">
                                    <option value="1">1</option>
                                    <option value="1">2</option>
                                    <option value="1">3</option>
                                    <option value="1">4</option>
                                    <option value="2">5</option>
                                </select><span>01</span>
                            </div>

                            <p class="ps-product__price">$950.60</p>

                        </div>

                    </div><!-- End Product -->

                </div><!-- End Product Group -->

            </div>

        </div>

    </aside><!-- End Aside -->

</div><!-- End Columns -->