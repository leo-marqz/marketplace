<div class="ps-breadcrumb">

    <div class="container">

        <ul class="breadcrumb">

            <li><a href="/">Home</a></li>

            <li>
                <?php 
                if(isset($dataShowProducts[0]->name_category)){
                    echo $dataShowProducts[0]->name_category;
                }else if(isset($dataShowProducts[0]->name_subcategory))
                {
                    echo $dataShowProducts[0]->name_subcategory;
                }
                ?>
            </li>

        </ul>

    </div>

</div>