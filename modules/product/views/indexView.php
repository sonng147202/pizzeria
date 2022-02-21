<?php
    get_header();
    get_sidebar();
?>
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col">
                <div class="bg-white p-3 rounded-3 mb-4">
                    <input type="text" class="form-control w-100 bg-white rounded-3" id="searchBox">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="bg-white p-3 rounded-3 mb-3">
                    <h2 class="text-center">Categories</h2>
                    <form action="" method="get">
                        <div class="inputGroup">
                            <input id="radio1" name="radio" type="radio" checked/>
                            <label for="radio1">Normal</label>
                        </div>
                        <div class="inputGroup">
                            <input id="radio2" name="radio" type="radio"/>
                            <label for="radio2">Combo</label>
                        </div>
                        <div class="inputGroup">
                            <input id="radio3" name="radio" type="radio"/>
                            <label for="radio3">Pizza</label>
                        </div>
                        <div class="inputGroup">
                            <input id="radio4" name="radio" type="radio"/>
                            <label for="radio4">Drinks</label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="list-products bg-white p-3 rounded-3">
                    <div class="row products-container">
                        <?php foreach ($arr_products as $key => $value):?>
                            <div class="col-md-6 col-lg-4 mb-3">
                                <div class="card">
                                    <img src="<?= !empty($value['prodc_img']) ? $value['prodc_img'] : '???' ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title text-truncate"><?= !empty($value['prodc_title']) ? $value['prodc_title'] : '???' ?></h5>
                                        <p class="card-text"><?= !empty($value['prodc_price']) ? currency_format($value['prodc_price']) : '???' ?>₫</p>
                                        <form action="" method="get">
                                            <select class="form-select mb-3" name="pizza_size">
                                                <option selected>Choose a size</option>
                                                <option value="1">S</option>
                                                <option value="2">M</option>
                                                <option value="3">L</option>
                                            </select>
                                            <button type="button" class="btn btn-warning">Add to cart</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
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