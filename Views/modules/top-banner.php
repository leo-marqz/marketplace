
<?php

$randomId = rand(1, $totalProducts->total);
$api = CurlController::api();

// relation product and category
$urlRelation = "{$api}relations?rel=products,categories&type=product,category&linkTo=id_product&equalTo={$randomId}";
$relationProductCategory = CurlController::request($urlRelation, 'GET', array(), array());
$urlCategory = $relationProductCategory->results[0]->url_category;

// Info product - banner
$urlProduct = "{$api}products?linkTo=id_product&equalTo={$randomId}";
$topBanner = CurlController::request($urlProduct, 'GET', array(), array())->results;
$infoTopBanner = json_decode($topBanner[0]->top_banner_product, true);
?>

<div class="ps-block--promotion-header bg--cover"  style="background: url(img/products/<?=$urlCategory?>/top/<?=$infoTopBanner['IMG tag']?>);">
        <div class="container">
            <div class="ps-block__left">
                <h3><?=$infoTopBanner['H3 tag']?></h3>
                <figure>
                    <p><?=$infoTopBanner['P1 tag']?></p>
                    <h4><?=$infoTopBanner['H4 tag']?></h4>
                </figure>
            </div>
            <div class="ps-block__center">
                <p><?=$infoTopBanner['P2 tag']?><span><?=$infoTopBanner['Span tag']?></span></p>
            </div><a class="ps-btn ps-btn--sm" href="#"><?=$infoTopBanner['Button tag']?></a>
        </div>
    </div>