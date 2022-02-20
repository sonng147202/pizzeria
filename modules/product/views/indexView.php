<?php
    get_header();
    get_sidebar();
?>
    <div class="container" style="margin-top: 100px;">
        <input type="text" class="form-control w-100 bg-white mb-4 rounded-3" id="searchBox">
        <div class="list-products bg-white p-2 rounded-3">
            <div class="products-container">
                <?php foreach ($arr_products as $key => $value):?>
                    
                    <div class="card">
                        <img src="<?= !empty($value['prodc_img']) ? $value['prodc_img'] : '???' ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-truncate"><?= !empty($value['prodc_name']) ? $value['prodc_name'] : '???' ?></h5>
                            <p class="card-text"><?= !empty($value['prodc_price']) ? currency_format($value['prodc_price']) : '???' ?>₫</p>
                            <a href="#" class="btn btn-warning">Add to cart</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php
    get_footer();
?>
<!-- <div class="product-item"> 
    <div class="product-img">
        <img src="" alt="...">
    </div>
    <h5 class="product-name"></h5>
    <span class="product-price">₫</span>
</div> -->