<div class="ps-shopping ps-tab-root">

    <!--=====================================
    Shoping Header
    ======================================-->

    <div class="ps-shopping__header">

        <p><strong> <?=$total?> </strong> Products found</p>

        <div class="ps-shopping__actions">

            <select class="ps-select" data-placeholder="Sort Items">

                <option>Sort by latest</option>
                <option>Sort by popularity</option>
                <option>Sort by average rating</option>
                <option>Sort by price: low to high</option>
                <option>Sort by price: high to low</option>

            </select>

            <div class="ps-shopping__view">

                <p>View</p>

                <ul class="ps-tab-list">

                    <li class="active">
                        <a href="#tab-1">
                            <i class="icon-grid"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#tab-2">
                            <i class="icon-list4"></i>
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </div>

    <!--=====================================
    Shoping Body
    ======================================-->

    <div class="ps-tabs">

        <!--=====================================
        Grid View
        ======================================-->

        <div class="ps-tab active" id="tab-1">

            <div class="ps-shopping-product">

                <div class="row">

                    <!--=====================================
                    Product
                    ======================================-->
                    <?php 
                        foreach($dataShowProductsCategoryOrSubcategory as $productInGrid):
                    ?>

                    <div class="col-lg-2 col-md-4 col-6">

                        <div class="ps-product">

                            <div class="ps-product__thumbnail">

                                <a href="<?=$path . $productInGrid->url_product?>">
                                    <img src="img/products/<?=$productInGrid->url_category?>/<?=$productInGrid->image_product?>" alt="">
                                </a>
                                <?php
                                    $strPercent = "";
                                    if(!is_null($productInGrid->offer_product))
                                    {
                                        $offer = json_decode(
                                            $productInGrid->offer_product,
                                            true
                                        );
                                        $strPercent = HelperController::offerDiscountPercentage(
                                            $productInGrid->price_product,
                                            $offer[1],
                                            $offer[0]
                                        );
                                        echo "<div class='ps-product__badge'>{$strPercent}%</div>";
                                    }else
                                    {
                                        echo "<div class='ps-product__badge out-stock'>out of stock</div>";
                                    }
                                ?>

                                <ul class="ps-product__actions">

                                    <li>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                            <i class="icon-bag2"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="<?=$path . $productInGrid->url_product?>" data-toggle="tooltip" data-placement="top" title="Quick View">
                                            <i class="icon-eye"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist">
                                            <i class="icon-heart"></i>
                                        </a>
                                    </li>



                                </ul>

                            </div>

                            <div class="ps-product__container">

                                <a class="ps-product__vendor" href="<?=$path . $productInGrid->url_store?>"> 
                                    <?=$productInGrid->name_store?> 
                                </a>

                                <div class="ps-product__rating">
                                <!-- valuacion del producto -->
                                <?php
                                    $arrReviews = json_decode($productInGrid->reviews_product, true);
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

                                <div class="ps-product__content">

                                    <a class="ps-product__title" href="product-default.html">
                                        <?=$productInGrid->name_product?>
                                    </a>

                                    <p class="ps-product__price">
                                    <?php
                                        if(!is_null($productInGrid->offer_product))
                                        {
                                            $offer = json_decode(
                                                $productInGrid->offer_product,
                                                true
                                            );
                                            $finalPrice = HelperController::finalOfferPrice(
                                                $productInGrid->price_product,
                                                $offer[1],
                                                $offer[0]
                                            );
                                            echo "<P class='ps-product__price sale'>$". $finalPrice . " <del>$" . $productInGrid->price_product . "</del></p>";
                                        }else
                                        {
                                            echo "$" . $productInGrid->price_product;
                                        }
                                    ?>
                                    </p>

                                </div>

                                <div class="ps-product__content hover">

                                    <a class="ps-product__title" href="<?=$path . $productInGrid->url_product?>">
                                        <?=$productInGrid->name_product?>
                                    </a>

                                    <p class="ps-product__price">
                                    <?php
                                        if(!is_null($productInGrid->offer_product))
                                        {
                                            $offer = json_decode(
                                                $productInGrid->offer_product,
                                                true
                                            );
                                            $finalPrice = HelperController::finalOfferPrice(
                                                $productInGrid->price_product,
                                                $offer[1],
                                                $offer[0]
                                            );
                                            echo "<P class='ps-product__price sale'>$". $finalPrice . " <del>$" . $productInGrid->price_product . "</del></p>";
                                        }else
                                        {
                                            echo "$" . $productInGrid->price_product;
                                        }
                                    ?>
                                    </p>

                                </div>

                            </div>
 
                        </div>

                    </div><!-- End Product -->
 
                    <?php endforeach; ?>

                </div>

            </div>

            <div class="ps-pagination">
                <?php
                    if(isset($urlParams[1]))
                    {
                        $currentPage = $urlParams[1];
                    }else{
                        $currentPage = 1;
                    }
                
                ?>

                <ul 
                    class="pagination" 
                    data-total-pages="<?php echo ceil($total/6); ?>"
                    data-current-page="<?=$currentPage?>"
                    data-url-page="<?=$_SERVER['REQUEST_URI']?>"
                >
                    <!-- <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">Next Page<i class="icon-chevron-right"></i></a></li> -->
                </ul>

            </div>

        </div><!-- End Grid View-->

        <!--=====================================
        List View
        ======================================-->

        <div class="ps-tab" id="tab-2">

            <div class="ps-shopping-product">

                <!--=====================================
                Product
                ======================================-->

                <?php 
                        foreach($dataShowProductsCategoryOrSubcategory as $productInLine):
                ?>
                <div class="ps-product ps-product--wide">

                    <div class="ps-product__thumbnail">

                        <a href="product-default.html">
                            <img src="img/products/<?=$productInLine->url_category?>/<?=$productInLine->image_product?>" alt="">
                        </a>

                    </div>

                    <div class="ps-product__container">

                        <div class="ps-product__content">

                            <a class="ps-product__title" href="<?=$path . $productInLine->url_product?>">
                                <?=$productInLine->name_product?>
                            </a>

                            <!-- NAME STORE -->
                            <p class="ps-product__vendor">Sold by:
                                <a href="<?=$path . $productInLine->url_store?>">
                                <?=$productInLine->name_store?>
                                </a>
                            </p>

                            <div class="ps-product__rating">
                                <!-- valuacion del producto -->
                                <?php
                                    $arrReviews = json_decode($productInLine->reviews_product, true);
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

                            <ul class="ps-product__desc">
                                <?php
                                    $summary = json_decode($productInLine->summary_product, true);
                                    foreach($summary as $item):
                                ?>
                                <li> <?=$item?></li>

                                <?php endforeach; ?>
                            </ul>

                        </div>

                        <div class="ps-product__shopping">

                            <p class="ps-product__price">
                            <?php
                                    if(!is_null($productInLine->offer_product))
                                    {
                                        $offer = json_decode(
                                            $productInLine->offer_product,
                                            true
                                        );
                                        $finalPrice = HelperController::finalOfferPrice(
                                            $productInLine->price_product,
                                            $offer[1],
                                            $offer[0]
                                        );
                                        echo "<P class='ps-product__price sale'>$". $finalPrice . " <del>$" . $productInLine->price_product . "</del></p>";
                                    }else
                                    {
                                        echo "$" . $productInLine->price_product;
                                    }
                                ?>
                            </p>

                            <a class="ps-btn" href="#">Add to cart</a>

                            <ul class="ps-product__actions">
                                <li><a href="<?=$path . $productInLine->url_product?>"><i class="icon-eye"></i>View</a></li>
                                <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                            </ul>

                        </div>

                    </div>

                </div> <!-- End Product -->

                <?php endforeach; ?>
            </div>

            <div class="ps-pagination">

                <ul 
                    class="pagination" 
                    data-total-pages="<?php echo ceil($total/6); ?>"
                    data-current-page="<?=$currentPage?>"
                    data-url-page="<?=$_SERVER['REQUEST_URI']?>"
                >

                    <!-- <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">Next Page<i class="icon-chevron-right"></i></a></li> -->

                </ul>

            </div>

        </div>

    </div>

</div>