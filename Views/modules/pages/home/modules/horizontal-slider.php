<?php

$randomStartProduct = rand(0, ($totalProducts->total - 5));

$urlGetProductsForSlider = CurlController::api() . 
"relations" .
"?rel=products,categories" . 
"&type=product,category" . 
"&orderBy=id_product" . 
"&orderMode=ASC" . 
"&startAt=" . $randomStartProduct .
"&endAt=5";

$dataProductsForSlider = CurlController::request(
    $urlGetProductsForSlider, 
    'GET', 
    array(), 
    array()
)->results;

?>


    <div class="ps-home-banner">
        <div class="ps-carousel--nav-inside owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on" data-owl-animate-in="fadeIn" data-owl-animate-out="fadeOut">

        <?php
            foreach($dataProductsForSlider as $productForOneSlider):

                $infoProductSlider = json_decode(
                    $productForOneSlider->horizontal_slider_product,
                    true
                );
                // echo "<p>" . $productForOneSlider->name_product . $productForOneSlider->id_product . "</p>";
        ?>
            <div class="ps-banner--market-4" 
            data-background="img/products/<?=$productForOneSlider->url_category?>/horizontal/<?=$infoProductSlider['IMG tag']?>"
            >
                <img src="img/products/<?=$productForOneSlider->url_category?>/horizontal/<?=$infoProductSlider['IMG tag']?>" alt="<?=$productForOneSlider->name_product?>">
                <div class="ps-banner__content">
                    <h4> <?=$infoProductSlider['H4 tag']?> </h4>
                    <h3> <?=$infoProductSlider['H3-1 tag']?> <br />
                        <?=$infoProductSlider['H3-2 tag']?> <br />
                        <p> <?=$infoProductSlider['H3-3 tag']?> 
                        <strong> <?=$infoProductSlider['H3-4s tag']?> </strong></p>
                    </h3>
                    <a class="ps-btn" href="<?php echo $path . $productForOneSlider->url_product?>"> <?=$infoProductSlider['Button tag']?> </a>
                </div>
            </div>

            <?php endforeach; ?>

        </div>

    </div><!-- End Home Banner-->
