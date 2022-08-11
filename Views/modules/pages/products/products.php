<?php

/**
 * Productos mas nuevos segun categoria y tienda
 */
$urlShowProducts = CurlController::api() .
    "relations?rel=products,categories,stores&type=product,category,store&linkTo=url_category&equalTo=" . $urlParams[0] . "&orderBy=id_product&orderMode=DESC&startAt=0&endAt=12";

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
        "relations?rel=products,categories,subcategories,stores&type=product,category,subcategory,store&linkTo=url_subcategory&equalTo=" . $urlParams[0] . "&orderBy=id_product&orderMode=DESC&startAt=0&endAt=12";

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
    "relations?rel=products,categories,stores&type=product,category,store&linkTo=url_category&equalTo=" . $urlParams[0] . "&orderBy=sales_product&orderMode=DESC&startAt=0&endAt=12";

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
        "relations?rel=products,categories,subcategories,stores&type=product,category,subcategory,store&linkTo=url_subcategory&equalTo=" . $urlParams[0] . "&orderBy=sales_product&orderMode=DESC&startAt=0&endAt=12";

        $rs = CurlController::request(
            $urlShowProductsBestSales,
            'GET',
            array(),
            array()
        );

    $dataShowProductsBestSales = CurlController::request(
        $urlShowProductsBestSales,
        'GET',
        array(),
        array()
    )->results;
}

if($dataShowProductsBestSales == 'Not Found')
{
    $dataShowProductsBestSales = [];
}

/*****************************************************************/
//----------------------------------------------------------------
// * Los productos mas vistos de esta categoria o subcategoria *
//----------------------------------------------------------------

$urlShowProductsRecommended = CurlController::api() .
    "relations?rel=products,categories,stores&type=product,category,store&linkTo=url_category&equalTo=" . $urlParams[0] . "&orderBy=views_product&orderMode=DESC&startAt=0&endAt=12";

$dataShowProductsRecommended = CurlController::request(
    $urlShowProductsRecommended,
    'GET',
    array(),
    array()
)->results;

if ($dataShowProductsRecommended == 'Not Found') {
    /**
     * Productos mas nuevos segun subcategoria y tienda
     */
    $urlShowProductsRecommended = CurlController::api() .
        "relations?rel=products,categories,subcategories,stores&type=product,category,subcategory,store&linkTo=url_subcategory&equalTo=" . $urlParams[0] . "&orderBy=views_product&orderMode=DESC&startAt=0&endAt=12";

    $dataShowProductsRecommended = CurlController::request(
        $urlShowProductsRecommended,
        'GET',
        array(),
        array()
    )->results;
}

if($dataShowProductsRecommended == 'Not Found')
{
    $dataShowProductsRecommended = [];
}
/*****************************************************************/
//----------------------------------------------------------------
// * Los productos de categoria o subcategoria  *
//----------------------------------------------------------------

$urlShowProductsCategoryOrSubcategory = CurlController::api() .
    "relations?rel=products,categories,stores&type=product,category,store&linkTo=url_category&equalTo=" . $urlParams[0];

$dataShowProductsCategoryOrSubcategory = CurlController::request(
    $urlShowProductsCategoryOrSubcategory,
    'GET',
    array(),
    array()
);

$total = $dataShowProductsCategoryOrSubcategory->total ?? 0;
$dataShowProductsCategoryOrSubcategory = $dataShowProductsCategoryOrSubcategory->results;


if ($dataShowProductsCategoryOrSubcategory == 'Not Found') {
    /**
     * Productos mas nuevos segun subcategoria y tienda
     */
    $urlShowProductsCategoryOrSubcategory = CurlController::api() .
        "relations?rel=products,categories,subcategories,stores&type=product,category,subcategory,store&linkTo=url_subcategory&equalTo=" . $urlParams[0];

    $dataShowProductsCategoryOrSubcategory = CurlController::request(
        $urlShowProductsCategoryOrSubcategory,
        'GET',
        array(),
        array()
    );

    $total = $dataShowProductsCategoryOrSubcategory->total ?? 0;
    $dataShowProductsCategoryOrSubcategory = $dataShowProductsCategoryOrSubcategory->results;
}

// var_dump($dataShowProductsCategoryOrSubcategory);

if($dataShowProductsCategoryOrSubcategory == 'Not Found')
{
    $dataShowProductsCategoryOrSubcategory = [];
}

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

                    <?php include 'modules/recommended-items.php'; ?>

                <!--=====================================
    				Products found
    				======================================-->

                    <?php include 'modules/showcase.php'; ?>

            </section>

        </div><!-- End Layout Categories -->

    </div><!-- End Container -->

</div><!-- End Container Fluid -->