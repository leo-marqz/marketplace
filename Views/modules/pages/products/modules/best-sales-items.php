
<div class="ps-block--shop-features">

    <div class="ps-block__header">

        <h3>Best Sale Items</h3>

        <div class="ps-block__navigation">

            <a class="ps-carousel__prev" href="#recommended1">
                <i class="icon-chevron-left"></i>
            </a>

            <a class="ps-carousel__next" href="#recommended1">
                <i class="icon-chevron-right"></i>
            </a>

        </div>

    </div>

    <div class="ps-block__content">

        <div class="owl-slider" id="recommended1" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="6" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">

            <!--=====================================
            Product
            ======================================-->
            <?php foreach($dataShowProductsBestSales as $bestSalesItem): ?>

            <div class="ps-product">

                <div class="ps-product__thumbnail">
                <!-- *************************************  -->
                <!-- IMAGE ******************************* -->
                <!-- *************************************  -->
                <a href="<?=$path . $bestSalesItem->url_product?>">
                    <img 
                    src="img/products/<?=$bestSalesItem->url_category?>/<?=$bestSalesItem->image_product?>" 
                    alt="<?=$bestSalesItem->url_product?>"
                    />
                </a>

                <?php
                    $strPercent = "";
                    if(!is_null($bestSalesItem->offer_product))
                    {
                        $offer = json_decode(
                            $bestSalesItem->offer_product,
                            true
                        );
                        $strPercent = HelperController::offerDiscountPercentage(
                            $bestSalesItem->price_product,
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
                        <!-- *************************************  -->
                        <!-- BTN ACTIONS ************************* -->
                        <!-- *************************************  -->
                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                <i class="icon-bag2"></i>
                            </a>
                        </li>

                        <li>
                            <a href="<?=$path . $bestSalesItem->url_product?>" data-toggle="tooltip" data-placement="top" title="Quick View">
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
                    <!-- *************************************  -->
                    <!-- STORE NAME ************************** -->
                    <!-- *************************************  -->
                    
                    <a class="ps-product__vendor" href="<?=$path . $bestSalesItem->url_store?>">
                        <?=$bestSalesItem->name_store?>
                    </a>

                    <div class="ps-product__content">

                        <a class="ps-product__title" href=" <?=$path . $bestSalesItem->url_product?>">
                            <?=$bestSalesItem->name_product?>
                        </a>

                            <!-- *************************************  -->
                            <!-- RATING ****************************** -->
                            <!-- *************************************  -->
                            <div class="ps-product__rating">
                                <!-- valuacion del producto -->
                                <?php
                                    $arrReviews = json_decode($bestSalesItem->reviews_product, true);
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
                                            ?> 
                                        )
                                    </span>

                                </div>


                                <p class="ps-product__price sale">
                                    <?php
                                        if(!is_null($bestSalesItem->offer_product))
                                        {
                                            $offer = json_decode(
                                                $bestSalesItem->offer_product,
                                                true
                                            );
                                            $finalPrice = HelperController::finalOfferPrice(
                                                $bestSalesItem->price_product,
                                                $offer[1],
                                                $offer[0]
                                            );
                                            echo "<P class='ps-product__price sale'>$". $finalPrice . " <del>$" . $bestSalesItem->price_product . "</del></p>";
                                        }else
                                        {
                                            echo "$" . $bestSalesItem->price_product;
                                        }
                                    ?>
                            </p>

                    </div>

                    <div class="ps-product__content hover">

                        <a class="ps-product__title" href="<?=$path . $bestSalesItem->url_product?>">
                            <?=$bestSalesItem->name_product?>
                        </a>

                        <p class="ps-product__price">
                        <?php
                            if(!is_null($bestSalesItem->offer_product))
                            {
                                $offer = json_decode(
                                    $bestSalesItem->offer_product,
                                    true
                                );
                                $finalPrice = HelperController::finalOfferPrice(
                                    $bestSalesItem->price_product,
                                    $offer[1],
                                    $offer[0]
                                );
                                echo "<P class='ps-product__price sale'>$". $finalPrice . " <del>$" . $bestSalesItem->price_product . "</del></P>";
                            }else
                            {
                                echo "$" . $bestSalesItem->price_product;
                            }
                        ?>
                        </p>

                    </div>

                </div>

            </div><!-- End Product -->
            <?php endforeach; ?>
        </div>
 
    </div>

</div><!-- End Best Sales Items -->