<?php

/**
 * Traemos todos los productos
 */

 $urlAllProducts = CurlController::api() . 'relations?rel=products,categories&type=product,category';
 $allHotProducts = CurlController::request(
    $urlAllProducts, 
    'GET', 
    array(), 
    array()
)->results;

//fecha actual
$today = date('Y-m-d');

foreach ($allHotProducts as $key => $hotProduct) {
    // preguntamos si el producto trae oferta y stock
    if($hotProduct->offer_product == null || $hotProduct->stock_product == 0)
    {
        //Eliminamos productos que no poseen oferta y stock
        unset($allHotProducts[$key]);
    }
    //Verificamos la fecha de los productos aun es vigente
    if($hotProduct->offer_product != null)
    {
        $productOffertDate = json_decode(
            $hotProduct->offer_product, 
            true
            )[2];
        if($today > date($productOffertDate))
        {
            unset($allHotProducts[$key]);   
        }
    }

}

//verificamos si vienen mas de 10 productos luego de filtrarlos
if(count($allHotProducts) > 10)
{
    //creamos variable con numero random para obtener productos aleatorios
    $randomHotProduct = rand(0, (count($allHotProducts) - 10));
    // echo 'random: ' . $randomHotProduct;
    //reducimos la cantidad a 10 productos
    $allHotProducts = array_slice($allHotProducts, $randomHotProduct, 10);
}

// var($allHotProducts);


?>
    
            <div class="col-xl-9 col-12 ">

                <div class="ps-block--deal-hot" data-mh="dealhot">

                    <div class="ps-block__header">

                        <h3>Deal hot today</h3>

                        <div class="ps-block__navigation">
                            <a class="ps-carousel__prev" href=".ps-carousel--deal-hot">
                                <i class="icon-chevron-left"></i>
                            </a>
                            <a class="ps-carousel__next" href=".ps-carousel--deal-hot">
                                <i class="icon-chevron-right"></i>
                            </a>
                        </div>

                    </div>

                    <div class="ps-product__content">

                        <div class="ps-carousel--deal-hot ps-carousel--deal-hot owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">

                    <!--=====================================
                    Product Deal Home
                    ======================================-->

                    <?php foreach($allHotProducts as $hotProduct): ?>

                            <div class="ps-product--detail ps-product--hot-deal">

                                <div class="ps-product__header">

                                    <div class="ps-product__thumbnail" data-vertical="true">

                                        <figure>

                                            <div class="ps-wrapper">

                                                <div class="ps-product__gallery" data-arrow="true">
                                                    <?php
                                                        $gallery = json_decode($hotProduct->gallery_product, true);
                                                        foreach ($gallery as $image):                                                            
                                                    ?>
                                                    <div class="item">
                                                        <a href="img/products/<?=$hotProduct->url_category?>/gallery/<?=$image?>">
                                                            <img src="img/products/<?=$hotProduct->url_category?>/gallery/<?=$image?>" alt="">
                                                        </a>
                                                    </div>
                                                    <?php endforeach; ?>
                                                </div>

                                                <div class="ps-product__badge">
                                                    <span>Save <br> 
                                                            <?php
                                                                $offer = json_decode($hotProduct->offer_product, true);
                                                               
                                                                $save = HelperController::amountSaveOnPurchase(
                                                                    $hotProduct->price_product, 
                                                                    $offer[1], 
                                                                    $offer[0]
                                                                );
                                                                // $save = HelperController::amountSaveOnPurchase(300, 25, 'Discount');
                                                                echo "$" . $save;
                                                            ?>
                                                    </span>
                                                </div>

                                            </div>

                                        </figure>

                                        <div class="ps-product__variants" data-item="4" data-md="3" data-sm="3" data-arrow="false">

                                        <?php
                                            $gallery = json_decode($hotProduct->gallery_product, true);
                                            foreach ($gallery as $image):                                                            
                                            ?>
                                                    <div class="item">
                                                    <img src="img/products/<?=$hotProduct->url_category?>/gallery/<?=$image?>" alt="">
                                                    </div>
                                            <?php endforeach; ?>
                                        </div>

                                    </div>

                                    <div class="ps-product__info">

                                        <h5> <?=$hotProduct->name_category?> </h5>

                                        <h3 class="ps-product__name">
                                            <a href="<?=$path . $hotProduct->url_product?>">
                                                <?=$hotProduct->name_product?> 
                                            </a>
                                        </h3>

                                        <div class="ps-product__meta">

                                            <h4 class="ps-product__price sale">
                                                <?php
                                                                $offer = json_decode($hotProduct->offer_product, true);
                                                               
                                                                $finalOffer  = HelperController::finalOfferPrice(
                                                                    $hotProduct->price_product, 
                                                                    $offer[1], 
                                                                    $offer[0]
                                                                );
                                                                // $save = HelperController::amountSaveOnPurchase(300, 25, 'Discount');
                                                                echo "$" . $finalOffer;
                                                            ?> 
                                                <del> 
                                                    $<?=$hotProduct->price_product?>
                                                </del>
                                            </h4>

                                            <div class="ps-product__rating">

                                            <?php
                                                $arrReviews = json_decode($hotProduct->reviews_product, true);
                                                $reviews = HelperController::averageReviews($arrReviews);
                                            ?>
                                                <select class="ps-rating" data-read-only="true">
                                                    <?php 
                                                        if($reviews > 0)
                                                        {
                                                            for($i=0; $i < 5; $i++){
                                                                if($reviews < ($i + 1))
                                                                {
                                                                    echo '<option value="1">' . ($i + 1) . '</option>';
                                                                }else{
                                                                    echo '<option value="2">' . ($i + 1) . '</option>';
                                                                }
                                                            }
                                                        }
                                                        else{
                                                            for($i=0; $i < 5; $i++)
                                                            {
                                                                echo '<option value="0">' . ($i + 1) . '</option>'; 
                                                            }
                                                        }
                                                    ?>

                                                </select>

                                                <span>
                                                    (
                                                        <?php 
                                                            if(!is_null($arrReviews)){
                                                                echo count($arrReviews);
                                                            }else{
                                                                echo 0;
                                                            } 
                                                        ?> review
                                                    )
                                                </span>

                                            </div>

                                            <div class="ps-product__specification">

                                                <p>Status:<strong class="in-stock"> In Stock</strong></p>

                                            </div>

                                        </div>

                                        <div class="ps-product__expires">

                                            <p>Expires In</p>

                                            <?php $offer = json_decode($hotProduct->offer_product, true); ?>
                                            <ul class="ps-countdown" data-time="<?=$offer[2]?>">

                                                <li><span class="days"></span>
                                                    <p>Days</p>
                                                </li>

                                                <li><span class="hours"></span>
                                                    <p>Hours</p>
                                                </li>

                                                <li><span class="minutes"></span>
                                                    <p>Minutes</p>
                                                </li>

                                                <li><span class="seconds"></span>
                                                    <p>Seconds</p>
                                                </li>

                                            </ul>

                                        </div>

                                        <div class="ps-product__processs-bar">

                                            <div class="ps-progress" data-value="<?=$hotProduct->stock_product?>">
                                                <span class="ps-progress__value"></span>
                                            </div>

                                            <p><strong> <?=$hotProduct->stock_product?> /79</strong> Sold</p>

                                        </div>

                                    </div>

                                </div>

                            </div><!-- End Product Deal Hot -->

                    <?php endforeach; ?>

                    <!--=====================================
                    Product Deal Home
                    ======================================-->

                            <div class="ps-product--detail ps-product--hot-deal">

                                <div class="ps-product__header">

                                    <div class="ps-product__thumbnail" data-vertical="true">

                                        <figure>

                                            <div class="ps-wrapper">

                                                <div class="ps-product__gallery" data-arrow="true">

                                                    <div class="item">
                                                        <a href="img/products/deal-hot/b-1.jpg">
                                                            <img src="img/products/deal-hot/b-1.jpg" alt="">
                                                        </a>
                                                    </div>

                                                    <div class="item">
                                                        <a href="img/products/deal-hot/b-2.jpg">
                                                            <img src="img/products/deal-hot/b-2.jpg" alt="">
                                                        </a>
                                                    </div>

                                                    <div class="item">
                                                        <a href="img/products/deal-hot/b-3.jpg">
                                                            <img src="img/products/deal-hot/b-3.jpg" alt="">
                                                        </a>
                                                    </div>

                                                    <div class="item">
                                                        <a href="img/products/deal-hot/b-4.jpg">
                                                            <img src="img/products/deal-hot/b-4.jpg" alt="">
                                                        </a>
                                                    </div>

                                                </div>

                                                <div class="ps-product__badge">
                                                    <span>Save <br> $9.000</span>
                                                </div>

                                            </div>

                                        </figure>

                                        <div class="ps-product__variants" data-item="4" data-md="3" data-sm="3" data-arrow="false">

                                            <div class="item">
                                                <img src="img/products/deal-hot/b-1.jpg" alt="">
                                            </div>

                                            <div class="item">
                                                <img src="img/products/deal-hot/b-2.jpg" alt="">
                                            </div>

                                            <div class="item">
                                                <img src="img/products/deal-hot/b-3.jpg" alt="">
                                            </div>

                                            <div class="item">
                                                <img src="img/products/deal-hot/b-4.jpg" alt="">
                                            </div>

                                        </div>

                                    </div>

                                    <div class="ps-product__info">

                                        <h5>Consumer Electrics</h5>

                                        <h3 class="ps-product__name">Evolution Sport Drilled and Slotted Brake Kit</h3>

                                        <div class="ps-product__meta">

                                            <h4 class="ps-product__price sale">$97.78 <del> $156.99</del></h4>

                                            <div class="ps-product__rating">

                                                <select class="ps-rating" data-read-only="true">

                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="2">5</option>

                                                </select>
                                                <span>(1 review)</span>

                                            </div>

                                            <div class="ps-product__specification">

                                                <p>Status:<strong class="in-stock"> In Stock</strong></p>

                                            </div>

                                        </div>

                                        <div class="ps-product__expires">

                                            <p>Expires In</p>

                                            <ul class="ps-countdown" data-time="July 21, 2020 23:00:00">

                                                <li><span class="days"></span>
                                                    <p>Days</p>
                                                </li>

                                                <li><span class="hours"></span>
                                                    <p>Hours</p>
                                                </li>

                                                <li><span class="minutes"></span>
                                                    <p>Minutes</p>
                                                </li>

                                                <li><span class="seconds"></span>
                                                    <p>Seconds</p>
                                                </li>

                                            </ul>

                                        </div>

                                        <div class="ps-product__processs-bar">

                                            <div class="ps-progress" data-value="60">
                                                <span class="ps-progress__value"></span>
                                            </div>

                                            <p><strong>30/50</strong> Sold</p>

                                        </div>

                                    </div>

                                </div>

                            </div><!-- End Product Deal Hot -->

                        </div><!-- End carousel Deal Hot -->

                    </div><!-- End product content Deal Hot -->

                </div><!-- End deal hot -->

            </div><!-- End Columns -->

    