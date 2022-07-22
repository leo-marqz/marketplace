
<?php


/**
 * Traer el dominio principal
 */

$path = TemplateController::path();


/**
 * Traemos los productos desde la api marketplace
 */
$url = CurlController::api() . 'products';
$totalProducts = CurlController::request($url, 'GET', array(), array());

/**
 * capturamos las rutas de la URL
 */
$routesArray = explode("/", $_SERVER['REQUEST_URI']);
$routesArray = array_filter($routesArray);
 
if( !empty( array_filter($routesArray)[1] ) )
{
    $urlParams = explode("&", array_filter($routesArray)[1]);
    var_dump($urlParams);
}

if(!empty($urlParams[0]))
{
    $urlFilterCategories = CurlController::api() . 'categories?linkTo=url_category&equalTo=' . $urlParams[0];
    $dataUrlCategories = CurlController::request($urlFilterCategories, 'GET', array(), array());
    
    if($dataUrlCategories->status == 404)
    {
        $urFilterSubcategories = CurlController::api() . 'subcategories?linkTo=url_subcategory&equalTo=' . $urlParams[0];
        $dataUrlSubcategories = CurlController::request($urFilterSubcategories, 'GET', array(), array());
    
        if($dataUrlSubcategories->status == 404)
        {
            $urlFilterProduct = CurlController::api() . 'products?linkTo=url_product&equalTo=' .$urlParams[0];
            $dataUrlProduct = CurlController::request($urlFilterProduct, 'GET', array(), array());
            // var_dump($dataUrlProduct);
        }
    }
}


?>


<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="LeoMarqz">
    <meta name="keywords" content="">
    <meta name="description" content="">

	<title>MarketPlace | Home</title>
    <!-- Esta etiqueta me carga la ruta base para archivos css y js -->
    <base href="views/" target="">


	<link rel="icon" href="img/template/icono.png">

	<!--=====================================
	CSS
	======================================-->
	
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&display=swap" rel="stylesheet">

	<!-- font awesome -->
	<link rel="stylesheet" href="css/plugins/fontawesome.min.css">

	<!-- linear icons -->
	<link rel="stylesheet" href="css/plugins/linearIcons.css">

	<!-- Bootstrap 4 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/plugins/owl.carousel.css">

	<!-- Slick -->
	<link rel="stylesheet" href="css/plugins/slick.css">

	<!-- Light Gallery -->
	<link rel="stylesheet" href="css/plugins/lightgallery.min.css">

	<!-- Font Awesome Start -->
	<link rel="stylesheet" href="css/plugins/fontawesome-stars.css">

	<!-- jquery Ui -->
	<link rel="stylesheet" href="css/plugins/jquery-ui.min.css">

	<!-- Select 2 -->
	<link rel="stylesheet" href="css/plugins/select2.min.css">

	<!-- Scroll Up -->
	<link rel="stylesheet" href="css/plugins/scrollUp.css">
    
    <!-- DataTable -->
    <link rel="stylesheet" href="css/plugins/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="css/plugins/responsive.bootstrap.datatable.min.css">
	
	<!-- estilo principal -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Market Place 4 -->
	<link rel="stylesheet" href="css/market-place-4.css">

	<!--=====================================
	PLUGINS JS
	======================================-->

	<!-- jQuery library -->
	<script src="js/plugins/jquery-1.12.4.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<!-- Owl Carousel -->
	<script src="js/plugins/owl.carousel.min.js"></script>

	<!-- Images Loaded -->
	<script src="js/plugins/imagesloaded.pkgd.min.js"></script>

	<!-- Masonry -->
	<script src="js/plugins/masonry.pkgd.min.js"></script>

	<!-- Isotope -->
	<script src="js/plugins/isotope.pkgd.min.js"></script>

	<!-- jQuery Match Height -->
	<script src="js/plugins/jquery.matchHeight-min.js"></script>

	<!-- Slick -->
	<script src="js/plugins/slick.min.js"></script>

	<!-- jQuery Barrating -->
	<script src="js/plugins/jquery.barrating.min.js"></script>

	<!-- Slick Animation -->
	<script src="js/plugins/slick-animation.min.js"></script>

	<!-- Light Gallery -->
	<script src="js/plugins/lightgallery-all.min.js"></script>
    <script src="js/plugins/lg-thumbnail.min.js"></script>
    <script src="js/plugins/lg-fullscreen.min.js"></script>
    <script src="js/plugins/lg-pager.min.js"></script>

	<!-- jQuery UI -->
	<script src="js/plugins/jquery-ui.min.js"></script>

	<!-- Sticky Sidebar -->
	<script src="js/plugins/sticky-sidebar.min.js"></script>

	<!-- Slim Scroll -->
	<script src="js/plugins/jquery.slimscroll.min.js"></script>

	<!-- Select 2 -->
	<script src="js/plugins/select2.full.min.js"></script>

	<!-- Scroll Up -->
	<script src="js/plugins/scrollUP.js"></script>

    <!-- DataTable -->
    <script src="js/plugins/jquery.dataTables.min.js"></script>
    <script src="js/plugins/dataTables.bootstrap4.min.js"></script>
    <script src="js/plugins/dataTables.responsive.min.js"></script>

    <!-- Chart -->
    <script src="js/plugins/Chart.min.js"></script>
	
</head>

<body>

    <!--=====================================
    Preload
    ======================================-->

    <div id="loader-wrapper">
        <img src="img/template/loader.jpg">
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>  

	<!--=====================================
	Header Promotion
	======================================-->

	<?php include 'modules/top-banner.php'; ?>

    <!--=====================================
	Header
	======================================-->

    <?php include 'modules/header.php'; ?>

    <!--=====================================
	Header Mobile
	======================================-->
    
    <?php include 'modules/header-mobile.php'; ?>

    <!--=====================================
    Home Content
    ======================================-->  


    <!-- ********************************* -->
    <!-- ========== Start pages ========== -->
    
    <?php
    
    if(!empty($urlParams[0]))
    {
        if($dataUrlCategories->status == 200 || $dataUrlSubcategories->status == 200)
        {
            include 'modules/pages/products/products.php';
        }
        else if($dataUrlProduct->status == 200)
        {
            include 'modules/pages/product/product.php';
        }
        else
        {
            include 'modules/pages/404/404.php';
        }
    }else
    {
        include 'modules/pages/home/home.php';
    }
    
    ?>
        
    <!-- ========== End pages ========== -->
    <!-- ********************************* -->
    

    <!--=====================================
	Newletter
	======================================-->  

    <?php include 'modules/newletter.php'; ?>
    


    <!--=====================================
	Footer
	======================================-->  

    <?php include 'modules/footer.php'; ?>

    

	<!--=====================================
	JS PERSONALIZADO
	======================================-->

	<script src="js/main.js"></script>
	
</body>
</html>