<?php

/**
 * Productos mas nuevos segun categoria y tienda
 */
$urlShowProducts = CurlController::api() .
    "relations?rel=products,categories,stores&type=product,category,store&linkTo=url_category&equalTo=" . $urlParams[0] . "&orderBy=id_product&orderMode=DESC&startAt=0&endAt=6";

$dataShowProducts = CurlController::request(
    $urlShowProducts,
    'GET',
    array(),
    array()
)->results;

if ($dataShowProducts == 'Not Found') {
    /**
     * Productos mas nuevos segun subcategoria y tienda
     */
    $urlShowProducts = CurlController::api() .
        "relations?rel=products,subcategories,stores&type=product,subcategory,store&linkTo=url_subcategory&equalTo=" . $urlParams[0] . "&orderBy=id_product&orderMode=DESC&startAt=0&endAt=6";

    $dataShowProducts = CurlController::request(
        $urlShowProducts,
        'GET',
        array(),
        array()
    )->results;
}


//----------------------------------------------------------------
// * Los productos mas vendidos de esta categoria o subcategoria *
//----------------------------------------------------------------

$urlShowProductsBestSales = CurlController::api() .
    "relations?rel=products,categories,stores&type=product,category,store&linkTo=url_category&equalTo=" . $urlParams[0] . "&orderBy=sales_product&orderMode=DESC&startAt=0&endAt=6";

$dataShowProductsBestSales = CurlController::request(
    $urlShowProductsBestSales,
    'GET',
    array(),
    array()
)->results;

if ($dataShowProductsBestSales == 'Not Found') {
    /**
     * Productos mas nuevos segun subcategoria y tienda
     */
    $urlShowProductsBestSales = CurlController::api() .
        "relations?rel=products,subcategories,stores&type=product,subcategory,store&linkTo=url_subcategory&equalTo=" . $urlParams[0] . "&orderBy=sales_product&orderMode=DESC&startAt=0&endAt=6";

    $dataShowProductsBestSales = CurlController::request(
        $urlShowProductsBestSales,
        'GET',
        array(),
        array()
    )->results;
}

// var_dump($dataShowProductsBestSales);

?>


<!--=====================================
Breadcrumb
======================================-->

<?php include 'modules/breadcrumb.php'; ?>

<!--=====================================
    Categories Content
    ======================================-->

<div class="container-fuid bg-white my-4">

    <div class="container">

        <!--=====================================
			Layout Categories
			======================================-->

        <div class="ps-layout--shop">

            <section>

                <!--=====================================
                Best Sale Items
                ======================================-->

                <?php include 'modules/best-sales-items.php'; ?>
                
                <!--=====================================
    				Recommended Items
    				======================================-->

                <div class="ps-block--shop-features">

                    <div class="ps-block__header">

                        <h3>Recommended Items</h3>

                        <div class="ps-block__navigation">

                            <a class="ps-carousel__prev" href="#recommended">
                                <i class="icon-chevron-left"></i>
                            </a>

                            <a class="ps-carousel__next" href="#recommended">
                                <i class="icon-chevron-right"></i>
                            </a>

                        </div>

                    </div>

                    <div class="ps-block__content">

                        <div class="owl-slider" id="recommended" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="6" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">

                            <!--=====================================
    							Product
    							======================================-->

                            <div class="ps-product">

                                <div class="ps-product__thumbnail">

                                    <a href="product-default.html">
                                        <img src="img/products/shop/recommended/1.jpg" alt="">
                                    </a>

                                    <div class="ps-product__badge">-37%</div>

                                    <ul class="ps-product__actions">

                                        <li>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                <i class="icon-bag2"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Quick View">
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

                                    <a class="ps-product__vendor" href="#">Young Shop</a>

                                    <div class="ps-product__content">

                                        <a class="ps-product__title" href="product-default.html">
                                            Ciate Palemore Lipstick Bold Red Color</a>

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

                                        <p class="ps-product__price sale">$42.99 <del>$60.00 </del></p>

                                    </div>

                                    <div class="ps-product__content hover">

                                        <a class="ps-product__title" href="product-default.html">
                                            Ciate Palemore Lipstick Bold Red Color</a>

                                        <p class="ps-product__price sale">$42.99 <del>$60.00 </del></p>

                                    </div>

                                </div>

                            </div><!-- End Product -->

                            <!--=====================================
    							Product
    							======================================-->

                            <div class="ps-product">

                                <div class="ps-product__thumbnail">

                                    <a href="product-default.html">
                                        <img src="img/products/shop/recommended/2.jpg" alt="">
                                    </a>

                                    <div class="ps-product__badge">-37%</div>

                                    <ul class="ps-product__actions">

                                        <li>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                <i class="icon-bag2"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Quick View">
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

                                    <a class="ps-product__vendor" href="#">Robert's Store</a>

                                    <div class="ps-product__content">

                                        <a class="ps-product__title" href="product-default.html">
                                            Set 30 Piece Korea StartSkin Natural Mask</a>

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

                                        <p class="ps-product__price sale">$32.99 <del>$60.00 </del></p>

                                    </div>

                                    <div class="ps-product__content hover">

                                        <a class="ps-product__title" href="product-default.html">
                                            Set 30 Piece Korea StartSkin Natural Mask</a>

                                        <p class="ps-product__price sale">$32.99 <del>$60.00 </del></p>

                                    </div>

                                </div>

                            </div><!-- End Product -->

                            <!--=====================================
    							Product
    							======================================-->

                            <div class="ps-product">

                                <div class="ps-product__thumbnail">

                                    <a href="product-default.html">
                                        <img src="img/products/shop/recommended/3.jpg" alt="">
                                    </a>

                                    <div class="ps-product__badge">-25%</div>

                                    <ul class="ps-product__actions">

                                        <li>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                <i class="icon-bag2"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Quick View">
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

                                    <a class="ps-product__vendor" href="#">Go Pro</a>

                                    <div class="ps-product__content">

                                        <a class="ps-product__title" href="product-default.html">
                                            Baxter Care Hair Kit For Bearded Mens</a>

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

                                        <p class="ps-product__price sale">$93.00 <del>$60.00 </del></p>

                                    </div>

                                    <div class="ps-product__content hover">

                                        <a class="ps-product__title" href="product-default.html">
                                            Baxter Care Hair Kit For Bearded Mens</a>

                                        <p class="ps-product__price sale">$93.00 <del>$60.00 </del></p>

                                    </div>

                                </div>

                            </div><!-- End Product -->

                            <!--=====================================
    							Product
    							======================================-->

                            <div class="ps-product">

                                <div class="ps-product__thumbnail">

                                    <a href="product-default.html">
                                        <img src="img/products/shop/recommended/4.jpg" alt="">
                                    </a>

                                    <div class="ps-product__badge">-46%</div>

                                    <ul class="ps-product__actions">

                                        <li>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                <i class="icon-bag2"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Quick View">
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

                                    <a class="ps-product__vendor" href="#">Go Pro</a>

                                    <div class="ps-product__content">

                                        <a class="ps-product__title" href="product-default.html">
                                            Letter Printed Cushion Cover Cotton</a>

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

                                        <p class="ps-product__price sale">$13.00 <del>$20.00 </del></p>

                                    </div>

                                    <div class="ps-product__content hover">

                                        <a class="ps-product__title" href="product-default.html">
                                            Letter Printed Cushion Cover Cotton</a>

                                        <p class="ps-product__price sale">$13.00 <del>$20.00 </del></p>

                                    </div>

                                </div>

                            </div>

                            <div class="ps-product">

                                <div class="ps-product__thumbnail">

                                    <a href="product-default.html">
                                        <img src="img/products/shop/recommended/5.jpg" alt="">
                                    </a>

                                    <div class="ps-product__badge">-46%</div>

                                    <ul class="ps-product__actions">

                                        <li>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                <i class="icon-bag2"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Quick View">
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

                                    <a class="ps-product__vendor" href="#">Young Shop</a>

                                    <div class="ps-product__content">

                                        <a class="ps-product__title" href="product-default.html">
                                            Amcrest Security Camera in White Color</a>

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

                                        <p class="ps-product__price sale">$13.00 <del>$20.00 </del></p>

                                    </div>

                                    <div class="ps-product__content hover">

                                        <a class="ps-product__title" href="product-default.html">
                                            Amcrest Security Camera in White Color</a>

                                        <p class="ps-product__price sale">$13.00 <del>$20.00 </del></p>

                                    </div>

                                </div>

                            </div> <!-- End Product -->

                            <!--=====================================
    							Product
    							======================================-->

                            <div class="ps-product">

                                <div class="ps-product__thumbnail">

                                    <a href="product-default.html">
                                        <img src="img/products/shop/recommended/6.jpg" alt="">
                                    </a>

                                    <div class="ps-product__badge">-28%</div>

                                    <ul class="ps-product__actions">

                                        <li>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                <i class="icon-bag2"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Quick View">
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

                                    <a class="ps-product__vendor" href="#">Young Shop</a>

                                    <div class="ps-product__content">

                                        <a class="ps-product__title" href="product-default.html">
                                            LG White Front Load Steam Washer</a>

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

                                        <p class="ps-product__price sale">$1025.00 <del>$1422.00 </del></p>

                                    </div>

                                    <div class="ps-product__content hover">

                                        <a class="ps-product__title" href="product-default.html">
                                            LG White Front Load Steam Washer</a>

                                        <p class="ps-product__price sale">$1025.00 <del>$1422.00 </del></p>

                                    </div>

                                </div>

                            </div><!-- End Product -->

                            <!--=====================================
    							Product
    							======================================-->

                            <div class="ps-product">

                                <div class="ps-product__thumbnail">

                                    <a href="product-default.html">
                                        <img src="img/products/shop/recommended/7.jpg" alt="">
                                    </a>

                                    <ul class="ps-product__actions">

                                        <li>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                <i class="icon-bag2"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Quick View">
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

                                    <a class="ps-product__vendor" href="#">Robert's Store</a>

                                    <div class="ps-product__content">

                                        <a class="ps-product__title" href="product-default.html">Samsung UHD TV 24inch</a>

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

                                        <p class="ps-product__price">$599.00</p>

                                    </div>

                                    <div class="ps-product__content hover">

                                        <a class="ps-product__title" href="product-default.html">Samsung UHD TV 24inch</a>

                                        <p class="ps-product__price">$599.00</p>

                                    </div>

                                </div>

                            </div><!-- End Product -->

                        </div>

                    </div>

                </div><!-- End Recommended Items -->

                <!--=====================================
    				Products found
    				======================================-->

                <div class="ps-shopping ps-tab-root">

                    <!--=====================================
    					Shoping Header
    					======================================-->

                    <div class="ps-shopping__header">

                        <p><strong> 36</strong> Products found</p>

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

                                    <div class="col-lg-2 col-md-4 col-6">

                                        <div class="ps-product">

                                            <div class="ps-product__thumbnail">

                                                <a href="product-default.html">
                                                    <img src="img/products/shop/1.jpg" alt="">
                                                </a>

                                                <ul class="ps-product__actions">

                                                    <li>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                            <i class="icon-bag2"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Quick View">
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

                                                <a class="ps-product__vendor" href="#">ROBERT’S STORE</a>

                                                <div class="ps-product__content">

                                                    <a class="ps-product__title" href="product-default.html">
                                                        Apple iPhone Retina 6s Plus 64GB</a>

                                                    <p class="ps-product__price">$1310.00</p>

                                                </div>

                                                <div class="ps-product__content hover">

                                                    <a class="ps-product__title" href="product-default.html">
                                                        Apple iPhone Retina 6s Plus 64GB</a>

                                                    <p class="ps-product__price">$1310.00</p>

                                                </div>

                                            </div>

                                        </div>

                                    </div><!-- End Product -->

                                    <!--=====================================
    									Product
    									======================================-->

                                    <div class="col-lg-2 col-md-4 col-6">
                                        <div class="ps-product">
                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/1.jpg" alt=""></a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="icon-bag2"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>

                                                </ul>
                                            </div>
                                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 64GB</a>
                                                    <p class="ps-product__price">$1150.00</p>
                                                </div>
                                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 64GB</a>
                                                    <p class="ps-product__price">$1150.00</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Product -->

                                    <!--=====================================
    									Product
    									======================================-->

                                    <div class="col-lg-2 col-md-4 col-6">
                                        <div class="ps-product">
                                            <div class="ps-product__thumbnail">
                                                <a href="product-default.html">
                                                    <img src="img/products/shop/2.jpg" alt="">
                                                </a>

                                                <ul class="ps-product__actions">
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="icon-bag2"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>

                                                </ul>
                                            </div>

                                            <div class="ps-product__container">

                                                <a class="ps-product__vendor" href="#">Go Pro</a>

                                                <div class="ps-product__content">
                                                    <a class="ps-product__title" href="product-default.html">Marshall Kilburn Portable Wireless Speaker</a>

                                                    <div class="ps-product__rating">
                                                        <select class="ps-rating" data-read-only="true">
                                                            <option value="1">1</option>
                                                            <option value="1">2</option>
                                                            <option value="1">3</option>
                                                            <option value="1">4</option>
                                                            <option value="2">5</option>
                                                        </select><span>01</span>
                                                    </div>
                                                    <p class="ps-product__price">$42.99 - $60.00</p>
                                                </div>
                                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Marshall Kilburn Portable Wireless Speaker</a>
                                                    <p class="ps-product__price">$42.99 - $60.00</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Product -->

                                    <!--=====================================
    									Product
    									======================================-->

                                    <div class="col-lg-2 col-md-4 col-6">
                                        <div class="ps-product">
                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/3.jpg" alt=""></a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="icon-bag2"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>

                                                </ul>
                                            </div>
                                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Herschel Leather Duffle Bag In Brown Color</a>
                                                    <div class="ps-product__rating">
                                                        <select class="ps-rating" data-read-only="true">
                                                            <option value="1">1</option>
                                                            <option value="1">2</option>
                                                            <option value="1">3</option>
                                                            <option value="1">4</option>
                                                            <option value="2">5</option>
                                                        </select><span>01</span>
                                                    </div>
                                                    <p class="ps-product__price">$125.30</p>
                                                </div>
                                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Herschel Leather Duffle Bag In Brown Color</a>
                                                    <p class="ps-product__price">$125.30</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Product -->

                                    <!--=====================================
    									Product
    									======================================-->

                                    <div class="col-lg-2 col-md-4 col-6">
                                        <div class="ps-product">
                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/4.jpg" alt=""></a>
                                                <div class="ps-product__badge hot">hot</div>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="icon-bag2"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>

                                                </ul>
                                            </div>
                                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Xbox One Wireless Controller Black Color</a>
                                                    <div class="ps-product__rating">
                                                        <select class="ps-rating" data-read-only="true">
                                                            <option value="1">1</option>
                                                            <option value="1">2</option>
                                                            <option value="1">3</option>
                                                            <option value="1">4</option>
                                                            <option value="2">5</option>
                                                        </select><span>01</span>
                                                    </div>
                                                    <p class="ps-product__price">$55.99</p>
                                                </div>
                                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Xbox One Wireless Controller Black Color</a>
                                                    <p class="ps-product__price">$55.99</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Product -->

                                    <!--=====================================
    									Product
    									======================================-->

                                    <div class="col-lg-2 col-md-4 col-6">
                                        <div class="ps-product">
                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/5.jpg" alt=""></a>
                                                <div class="ps-product__badge">-37%</div>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="icon-bag2"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>

                                                </ul>
                                            </div>
                                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Robert's Store</a>
                                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Grand Slam Indoor Of Show Jumping Novel</a>
                                                    <div class="ps-product__rating">
                                                        <select class="ps-rating" data-read-only="true">
                                                            <option value="1">1</option>
                                                            <option value="1">2</option>
                                                            <option value="1">3</option>
                                                            <option value="1">4</option>
                                                            <option value="2">5</option>
                                                        </select><span>01</span>
                                                    </div>
                                                    <p class="ps-product__price sale">$32.99 <del>$41.00 </del></p>
                                                </div>
                                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Grand Slam Indoor Of Show Jumping Novel</a>
                                                    <p class="ps-product__price sale">$32.99 <del>$41.00 </del></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Product -->

                                    <!--=====================================
    									Product
    									======================================-->

                                    <div class="col-lg-2 col-md-4 col-6">
                                        <div class="ps-product">
                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/6.jpg" alt=""></a>
                                                <div class="ps-product__badge">-5%</div>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="icon-bag2"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>

                                                </ul>
                                            </div>
                                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Youngshop</a>
                                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                                    <div class="ps-product__rating">
                                                        <select class="ps-rating" data-read-only="true">
                                                            <option value="1">1</option>
                                                            <option value="1">2</option>
                                                            <option value="1">3</option>
                                                            <option value="1">4</option>
                                                            <option value="2">5</option>
                                                        </select><span>01</span>
                                                    </div>
                                                    <p class="ps-product__price sale">$100.99 <del>$106.00 </del></p>
                                                </div>
                                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                                    <p class="ps-product__price sale">$100.99 <del>$106.00 </del></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Product -->

                                    <!--=====================================
    									Product
    									======================================-->

                                    <div class="col-lg-2 col-md-4 col-6">
                                        <div class="ps-product">
                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/7.jpg" alt=""></a>
                                                <div class="ps-product__badge">-16%</div>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="icon-bag2"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>

                                                </ul>
                                            </div>
                                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Youngshop</a>
                                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Korea Long Sofa Fabric In Blue Navy Color</a>
                                                    <div class="ps-product__rating">
                                                        <select class="ps-rating" data-read-only="true">
                                                            <option value="1">1</option>
                                                            <option value="1">2</option>
                                                            <option value="1">3</option>
                                                            <option value="1">4</option>
                                                            <option value="2">5</option>
                                                        </select><span>01</span>
                                                    </div>
                                                    <p class="ps-product__price sale">$567.89 <del>$670.20 </del></p>
                                                </div>
                                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Korea Long Sofa Fabric In Blue Navy Color</a>
                                                    <p class="ps-product__price sale">$567.89 <del>$670.20 </del></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Product -->

                                    <!--=====================================
    									Product
    									======================================-->

                                    <div class="col-lg-2 col-md-4 col-6">
                                        <div class="ps-product">
                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/8.jpg" alt=""></a>
                                                <div class="ps-product__badge">-16%</div>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="icon-bag2"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>

                                                </ul>
                                            </div>
                                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young shop</a>
                                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Unero Military Classical Backpack</a>
                                                    <div class="ps-product__rating">
                                                        <select class="ps-rating" data-read-only="true">
                                                            <option value="1">1</option>
                                                            <option value="1">2</option>
                                                            <option value="1">3</option>
                                                            <option value="1">4</option>
                                                            <option value="2">5</option>
                                                        </select><span>02</span>
                                                    </div>
                                                    <p class="ps-product__price sale">$35.89 <del>$42.20 </del></p>
                                                </div>
                                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Unero Military Classical Backpack</a>
                                                    <p class="ps-product__price sale">$35.89 <del>$42.20 </del></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Product -->

                                    <!--=====================================
    									Product
    									======================================-->

                                    <div class="col-lg-2 col-md-4 col-6">
                                        <div class="ps-product">
                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/9.jpg" alt=""></a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="icon-bag2"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>

                                                </ul>
                                            </div>
                                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young shop</a>
                                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Rayban Rounded Sunglass Brown Color</a>
                                                    <div class="ps-product__rating">
                                                        <select class="ps-rating" data-read-only="true">
                                                            <option value="1">1</option>
                                                            <option value="1">2</option>
                                                            <option value="1">3</option>
                                                            <option value="1">4</option>
                                                            <option value="2">5</option>
                                                        </select><span>02</span>
                                                    </div>
                                                    <p class="ps-product__price">$35.89</p>
                                                </div>
                                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Rayban Rounded Sunglass Brown Color</a>
                                                    <p class="ps-product__price">$35.89</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Product -->

                                    <!--=====================================
    									Product
    									======================================-->

                                    <div class="col-lg-2 col-md-4 col-6">
                                        <div class="ps-product">
                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/10.jpg" alt=""></a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="icon-bag2"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>

                                                </ul>
                                            </div>
                                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                                                    <div class="ps-product__rating">
                                                        <select class="ps-rating" data-read-only="true">
                                                            <option value="1">1</option>
                                                            <option value="1">2</option>
                                                            <option value="1">3</option>
                                                            <option value="1">4</option>
                                                            <option value="2">5</option>
                                                        </select><span>01</span>
                                                    </div>
                                                    <p class="ps-product__price">$29.39 - $39.99</p>
                                                </div>
                                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                                                    <p class="ps-product__price">$29.39 - $39.99</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Product -->

                                    <!--=====================================
    									Product
    									======================================-->

                                    <div class="col-lg-2 col-md-4 col-6">
                                        <div class="ps-product">
                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/11.jpg" alt=""></a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="icon-bag2"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>

                                                </ul>
                                            </div>
                                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Robert's Store</a>
                                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Men’s Sports Runnning Swim Board Shorts</a>
                                                    <div class="ps-product__rating">
                                                        <select class="ps-rating" data-read-only="true">
                                                            <option value="1">1</option>
                                                            <option value="1">2</option>
                                                            <option value="1">3</option>
                                                            <option value="1">4</option>
                                                            <option value="2">5</option>
                                                        </select><span>01</span>
                                                    </div>
                                                    <p class="ps-product__price">$13.43</p>
                                                </div>
                                                <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Men’s Sports Runnning Swim Board Shorts</a>
                                                    <p class="ps-product__price">$13.43</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Product -->

                                </div>

                            </div>

                            <div class="ps-pagination">

                                <ul class="pagination">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">Next Page<i class="icon-chevron-right"></i></a></li>
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

                                <div class="ps-product ps-product--wide">

                                    <div class="ps-product__thumbnail">

                                        <a href="product-default.html">
                                            <img src="img/products/shop/1.jpg" alt="">
                                        </a>

                                    </div>

                                    <div class="ps-product__container">

                                        <div class="ps-product__content">

                                            <a class="ps-product__title" href="product-default.html">
                                                Apple iPhone Retina 6s Plus 64GB</a>

                                            <p class="ps-product__vendor">Sold by:
                                                <a href="#">ROBERT’S STORE</a>
                                            </p>

                                            <ul class="ps-product__desc">
                                                <li> Unrestrained and portable active stereo speaker</li>
                                                <li> Free from the confines of wires and chords</li>
                                                <li> 20 hours of portable capabilities</li>
                                                <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                            </ul>

                                        </div>

                                        <div class="ps-product__shopping">

                                            <p class="ps-product__price">$1310.00</p>

                                            <a class="ps-btn" href="#">Add to cart</a>

                                            <ul class="ps-product__actions">
                                                <li><a href="#"><i class="icon-eye"></i>View</a></li>
                                                <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                            </ul>

                                        </div>

                                    </div>

                                </div> <!-- End Product -->

                                <!--=====================================
    								Product
    								======================================-->

                                <div class="ps-product ps-product--wide">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/1.jpg" alt=""></a>
                                    </div>
                                    <div class="ps-product__container">
                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 64GB</a>
                                            <p class="ps-product__vendor">Sold by:<a href="#">Young Shop</a></p>
                                            <ul class="ps-product__desc">
                                                <li> Unrestrained and portable active stereo speaker</li>
                                                <li> Free from the confines of wires and chords</li>
                                                <li> 20 hours of portable capabilities</li>
                                                <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__shopping">
                                            <p class="ps-product__price">$1150.00</p><a class="ps-btn" href="#">Add to cart</a>
                                            <ul class="ps-product__actions">
                                                <li><a href="#"><i class="icon-eye"></i>View</a></li>
                                                <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- End Product -->

                                <!--=====================================
    								Product
    								======================================-->

                                <div class="ps-product ps-product--wide">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/2.jpg" alt=""></a>
                                    </div>
                                    <div class="ps-product__container">
                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Marshall Kilburn Portable Wireless Speaker</a>
                                            <div class="ps-product__rating">
                                                <select class="ps-rating" data-read-only="true">
                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="2">5</option>
                                                </select><span>01</span>
                                            </div>
                                            <p class="ps-product__vendor">Sold by:<a href="#">Go Pro</a></p>
                                            <ul class="ps-product__desc">
                                                <li> Unrestrained and portable active stereo speaker</li>
                                                <li> Free from the confines of wires and chords</li>
                                                <li> 20 hours of portable capabilities</li>
                                                <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__shopping">
                                            <p class="ps-product__price">$42.99 - $60.00</p><a class="ps-btn" href="#">Add to cart</a>
                                            <ul class="ps-product__actions">
                                                <li><a href="#"><i class="icon-eye"></i>View</a></li>
                                                <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- End Product -->

                                <!--=====================================
    								Product
    								======================================-->

                                <div class="ps-product ps-product--wide">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/3.jpg" alt=""></a>
                                    </div>
                                    <div class="ps-product__container">
                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Herschel Leather Duffle Bag In Brown Color</a>
                                            <div class="ps-product__rating">
                                                <select class="ps-rating" data-read-only="true">
                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="2">5</option>
                                                </select><span>01</span>
                                            </div>
                                            <p class="ps-product__vendor">Sold by:<a href="#">Go Pro</a></p>
                                            <ul class="ps-product__desc">
                                                <li> Unrestrained and portable active stereo speaker</li>
                                                <li> Free from the confines of wires and chords</li>
                                                <li> 20 hours of portable capabilities</li>
                                                <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__shopping">
                                            <p class="ps-product__price">$125.30</p><a class="ps-btn" href="#">Add to cart</a>
                                            <ul class="ps-product__actions">
                                                <li><a href="#"><i class="icon-eye"></i>View</a></li>
                                                <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- End Product -->

                                <!--=====================================
    								Product
    								======================================-->

                                <div class="ps-product ps-product--wide">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/4.jpg" alt=""></a>
                                    </div>
                                    <div class="ps-product__container">
                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Xbox One Wireless Controller Black Color</a>
                                            <div class="ps-product__rating">
                                                <select class="ps-rating" data-read-only="true">
                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="2">5</option>
                                                </select><span>01</span>
                                            </div>
                                            <p class="ps-product__vendor">Sold by:<a href="#">Global Office</a></p>
                                            <ul class="ps-product__desc">
                                                <li> Unrestrained and portable active stereo speaker</li>
                                                <li> Free from the confines of wires and chords</li>
                                                <li> 20 hours of portable capabilities</li>
                                                <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__shopping">
                                            <p class="ps-product__price">$55.99</p><a class="ps-btn" href="#">Add to cart</a>
                                            <ul class="ps-product__actions">
                                                <li><a href="#"><i class="icon-eye"></i>View</a></li>
                                                <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- End Product -->

                                <!--=====================================
    								Product
    								======================================-->

                                <div class="ps-product ps-product--wide">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/5.jpg" alt=""></a>
                                        <div class="ps-product__badge">-37%</div>
                                    </div>
                                    <div class="ps-product__container">
                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Grand Slam Indoor Of Show Jumping Novel</a>
                                            <div class="ps-product__rating">
                                                <select class="ps-rating" data-read-only="true">
                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="2">5</option>
                                                </select><span>01</span>
                                            </div>
                                            <p class="ps-product__vendor">Sold by:<a href="#">Robert's Store</a></p>
                                            <ul class="ps-product__desc">
                                                <li> Unrestrained and portable active stereo speaker</li>
                                                <li> Free from the confines of wires and chords</li>
                                                <li> 20 hours of portable capabilities</li>
                                                <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__shopping">
                                            <p class="ps-product__price sale">$32.99 <del>$41.00 </del></p><a class="ps-btn" href="#">Add to cart</a>
                                            <ul class="ps-product__actions">
                                                <li><a href="#"><i class="icon-eye"></i>View</a></li>
                                                <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- End Product -->

                                <!--=====================================
    								Product
    								======================================-->

                                <div class="ps-product ps-product--wide">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/6.jpg" alt=""></a>
                                        <div class="ps-product__badge">-5%</div>
                                    </div>
                                    <div class="ps-product__container">
                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                            <div class="ps-product__rating">
                                                <select class="ps-rating" data-read-only="true">
                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="2">5</option>
                                                </select><span>01</span>
                                            </div>
                                            <p class="ps-product__vendor">Sold by:<a href="#">Youngshop</a></p>
                                            <ul class="ps-product__desc">
                                                <li> Unrestrained and portable active stereo speaker</li>
                                                <li> Free from the confines of wires and chords</li>
                                                <li> 20 hours of portable capabilities</li>
                                                <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__shopping">
                                            <p class="ps-product__price sale">$100.99 <del>$106.00 </del></p><a class="ps-btn" href="#">Add to cart</a>
                                            <ul class="ps-product__actions">
                                                <li><a href="#"><i class="icon-eye"></i>View</a></li>
                                                <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- End Product -->

                                <!--=====================================
    								Product
    								======================================-->

                                <div class="ps-product ps-product--wide">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/7.jpg" alt=""></a>
                                        <div class="ps-product__badge">-16%</div>
                                    </div>
                                    <div class="ps-product__container">
                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Korea Long Sofa Fabric In Blue Navy Color</a>
                                            <div class="ps-product__rating">
                                                <select class="ps-rating" data-read-only="true">
                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="2">5</option>
                                                </select><span>01</span>
                                            </div>
                                            <p class="ps-product__vendor">Sold by:<a href="#">Youngshop</a></p>
                                            <ul class="ps-product__desc">
                                                <li> Unrestrained and portable active stereo speaker</li>
                                                <li> Free from the confines of wires and chords</li>
                                                <li> 20 hours of portable capabilities</li>
                                                <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__shopping">
                                            <p class="ps-product__price sale">$567.89 <del>$670.20 </del></p><a class="ps-btn" href="#">Add to cart</a>
                                            <ul class="ps-product__actions">
                                                <li><a href="#"><i class="icon-eye"></i>View</a></li>
                                                <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- End Product -->

                                <!--=====================================
    								Product
    								======================================-->

                                <div class="ps-product ps-product--wide">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/8.jpg" alt=""></a>
                                        <div class="ps-product__badge">-16%</div>
                                    </div>
                                    <div class="ps-product__container">
                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Unero Military Classical Backpack</a>
                                            <div class="ps-product__rating">
                                                <select class="ps-rating" data-read-only="true">
                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="2">5</option>
                                                </select><span>02</span>
                                            </div>
                                            <p class="ps-product__vendor">Sold by:<a href="#">Young shop</a></p>
                                            <ul class="ps-product__desc">
                                                <li> Unrestrained and portable active stereo speaker</li>
                                                <li> Free from the confines of wires and chords</li>
                                                <li> 20 hours of portable capabilities</li>
                                                <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__shopping">
                                            <p class="ps-product__price sale">$35.89 <del>$42.20 </del></p><a class="ps-btn" href="#">Add to cart</a>
                                            <ul class="ps-product__actions">
                                                <li><a href="#"><i class="icon-eye"></i>View</a></li>
                                                <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- End Product -->

                                <!--=====================================
    								Product
    								======================================-->

                                <div class="ps-product ps-product--wide">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/9.jpg" alt=""></a>
                                    </div>
                                    <div class="ps-product__container">
                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Rayban Rounded Sunglass Brown Color</a>
                                            <div class="ps-product__rating">
                                                <select class="ps-rating" data-read-only="true">
                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="2">5</option>
                                                </select><span>02</span>
                                            </div>
                                            <p class="ps-product__vendor">Sold by:<a href="#">Young shop</a></p>
                                            <ul class="ps-product__desc">
                                                <li> Unrestrained and portable active stereo speaker</li>
                                                <li> Free from the confines of wires and chords</li>
                                                <li> 20 hours of portable capabilities</li>
                                                <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__shopping">
                                            <p class="ps-product__price">$35.89</p><a class="ps-btn" href="#">Add to cart</a>
                                            <ul class="ps-product__actions">
                                                <li><a href="#"><i class="icon-eye"></i>View</a></li>
                                                <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- End Product -->

                                <!--=====================================
    								Product
    								======================================-->

                                <div class="ps-product ps-product--wide">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/10.jpg" alt=""></a>
                                    </div>
                                    <div class="ps-product__container">
                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                                            <div class="ps-product__rating">
                                                <select class="ps-rating" data-read-only="true">
                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="2">5</option>
                                                </select><span>01</span>
                                            </div>
                                            <p class="ps-product__vendor">Sold by:<a href="#">Go Pro</a></p>
                                            <ul class="ps-product__desc">
                                                <li> Unrestrained and portable active stereo speaker</li>
                                                <li> Free from the confines of wires and chords</li>
                                                <li> 20 hours of portable capabilities</li>
                                                <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__shopping">
                                            <p class="ps-product__price">$29.39 - $39.99</p><a class="ps-btn" href="#">Add to cart</a>
                                            <ul class="ps-product__actions">
                                                <li><a href="#"><i class="icon-eye"></i>View</a></li>
                                                <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- End Product -->

                                <!--=====================================
    								Product
    								======================================-->

                                <div class="ps-product ps-product--wide">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/11.jpg" alt=""></a>
                                    </div>
                                    <div class="ps-product__container">
                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Men’s Sports Runnning Swim Board Shorts</a>
                                            <div class="ps-product__rating">
                                                <select class="ps-rating" data-read-only="true">
                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="2">5</option>
                                                </select><span>01</span>
                                            </div>
                                            <p class="ps-product__vendor">Sold by:<a href="#">Robert's Store</a></p>
                                            <ul class="ps-product__desc">
                                                <li> Unrestrained and portable active stereo speaker</li>
                                                <li> Free from the confines of wires and chords</li>
                                                <li> 20 hours of portable capabilities</li>
                                                <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__shopping">
                                            <p class="ps-product__price">$13.43</p><a class="ps-btn" href="#">Add to cart</a>
                                            <ul class="ps-product__actions">
                                                <li><a href="#"><i class="icon-eye"></i>View</a></li>
                                                <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- End Product -->

                            </div>

                            <div class="ps-pagination">

                                <ul class="pagination">

                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">Next Page<i class="icon-chevron-right"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </section>

        </div><!-- End Layout Categories -->

    </div><!-- End Container -->

</div><!-- End Container Fluid -->