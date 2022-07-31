<?php

$dataProductsForSliderDefault = array_slice($dataProductsForSlider, 0, 2);

?>


<div class="ps-promotions">

    <div class="container">

        <div class="row">

        <?php
            foreach($dataProductsForSliderDefault as $productSliderDefault):
        ?>
            <div class="col-md-6 col-12 ">
                <a class="ps-collection" 
                href="<?php echo $path . $productSliderDefault->url_product; ?>">
                    <img 
                    src="img/products/<?=$productSliderDefault->url_category?>/default/<?=$productSliderDefault->default_banner_product?>" 
                    alt="<?=$productSliderDefault->name_product?>">
                </a>
            </div>
            <?php endforeach; ?>
        </div>

    </div>

</div><!-- End Home Promotions-->