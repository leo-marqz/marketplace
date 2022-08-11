<div class="ps-section--gray">

    <div class="container">

        <!--=====================================
        Products of category
        ======================================-->
        <?php
            foreach($dataTopCategories as $topCategory):
        ?>
        <div class="ps-block--products-of-category">

            <!--=====================================
            Menu subcategory
            ======================================-->

            <div class="ps-block__categories">

                <h3> <?=$topCategory->name_category?></h3>

                <ul>
                    <?php
                        $urlSubCategoriesInTheTopCategory = CurlController::api() . "subcategories?linkTo=id_category_subcategory&equalTo={$topCategory->id_category}";
                        $dataSubcategoriesInTheTopCategory = CurlController::request(
                            $urlSubCategoriesInTheTopCategory,
                            "GET",
                            array(), 
                            array()
                        )->results;

                        foreach($dataSubcategoriesInTheTopCategory as $subcategoryTopCategory):
                    ?>
                        <li><a href="<?=$path . $subcategoryTopCategory->url_subcategory?>"><?=$subcategoryTopCategory->name_subcategory?></a></li>
                    <?php endforeach; ?>
                </ul>

                <a class="ps-block__more-link" href="<?=$path . $topCategory->url_category?>">View All</a>

            </div>

            <!--=====================================
            Vertical Slider Category
            ======================================-->
            <?php
                $urlProductsForTopCategory = CurlController::api() . 
                "products?linkTo=id_category_product&equalTo={$topCategory->id_category}" .
                "&orderBy=views_product&orderMode=DESC&startAt=0&endAt=6";
                $dataProductsForTopCategory = CurlController::request(
                    $urlProductsForTopCategory,
                    'GET', 
                    array(),
                    array()
                )->results;

            ?>
            <div class="ps-block__slider">

                <div class="ps-carousel--product-box owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="500" data-owl-mousedrag="off">
                    
                <?php foreach($dataProductsForTopCategory as $productForTopCategory): ?>
                    <a href="<?=$path . $productForTopCategory->url_product?>">
                        <img src="img/products/<?=$topCategory->url_category?>/vertical/<?=$productForTopCategory->vertical_slider_product?>" alt="<?=$productForTopCategory->name_product?>">
                    </a>
                <?php endforeach; ?>


                </div>

            </div>

            <!--=====================================
            Block Product Box
            ======================================-->

            <div class="ps-block__product-box">

                <!--=====================================
                Product Simple
                ======================================-->

                <?php foreach($dataProductsForTopCategory as $productForTopCategory): ?>
                <div class="ps-product ps-product--simple">

                    <div class="ps-product__thumbnail">

                        <a href="<?=$path . $productForTopCategory->url_product?>">

                            <img 
                            src="img/products/<?=$topCategory->url_category?>/<?=$productForTopCategory->image_product?>" 
                            alt="<?=$productForTopCategory->url_product?>"
                            />

                        </a>

                        <?php
                            $strPercent = "";
                            if(!is_null($productForTopCategory->offer_product))
                            {
                                $offer = json_decode(
                                    $productForTopCategory->offer_product,
                                    true
                                );
                                $strPercent = HelperController::offerDiscountPercentage(
                                    $productForTopCategory->price_product,
                                    $offer[1],
                                    $offer[0]
                                );
                                echo "<div class='ps-product__badge'>{$strPercent}%</div>";
                            }else
                            {
                                echo "<div class='ps-product__badge out-stock'>out of stock</div>";
                            }
                        ?>
                        

                    </div>

                    <div class="ps-product__container">

                        <div class="ps-product__content" data-mh="clothing">

                            <a class="ps-product__title" href="product-default.html">
                                <?=$productForTopCategory->name_product?>
                            </a>

                            <div class="ps-product__rating">
                                <!-- valuacion del producto -->
                                <?php
                                    $arrReviews = json_decode($productForTopCategory->reviews_product, true);
                                    $reviews = HelperController::averageReviews($arrReviews);
                                ?>
                                    <select class="ps-rating" data-read-only="true">
                                        <?php 
                                            HelperController::printRating($reviews);
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

                            <p class="ps-product__price sale">
                                <?php
                                    if(!is_null($productForTopCategory->offer_product))
                                    {
                                        $offer = json_decode(
                                            $productForTopCategory->offer_product,
                                            true
                                        );
                                        $finalPrice = HelperController::finalOfferPrice(
                                            $productForTopCategory->price_product,
                                            $offer[1],
                                            $offer[0]
                                        );
                                        echo "$". $finalPrice . " <del>$" . $productForTopCategory->price_product . "</del>";
                                    }else
                                    {
                                        echo "$" . $productForTopCategory->price_product;
                                    }
                                ?>
                                
                                
                            </p>

                        </div>

                    </div>

                </div> <!-- End Product Simple -->

               <?php endforeach; ?>

            </div><!-- End Block Product Box -->

        </div><!-- End Products of category -->
        <?php endforeach; ?>
        
    </div><!-- End Container-->

</div><!-- End Section Gray-->