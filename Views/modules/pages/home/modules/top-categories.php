
<?php

    $urlTopCategories = CurlController::api() . "categories?orderBy=views_category&orderMode=DESC&startAt=0&endAt=6";
    $dataTopCategories = CurlController::request(
        $urlTopCategories, 
        'GET', 
        array(), 
        array()
    )->results;

    // var_dump($dataTopCategories);

?>

<div class="ps-top-categories">

    <div class="container">

        <h3>Top categories of the month</h3>

        <div class="row">

        <?php
            foreach($dataTopCategories as $topCategory):
        ?>
            <div class="col-xl-2 col-lg-3 col-sm-4 col-6 ">
                <div class="ps-block--category">
                    <a class="ps-block__overlay" href="<?=$path . $topCategory->url_category?>"></a>
                    <img src="img/categories/<?=$topCategory->image_category?>" alt="<?=$topCategory->name_category?>">
                    <p><?=$topCategory->name_category?></p>
                </div>
            </div>
        <?php endforeach; ?>

        </div>
    </div>

</div><!-- End Top Categories -->