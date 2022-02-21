<?php
    get_header();
    get_sidebar();
?>
<div class="container mb-5" style="margin-top: 100px;">
    <div class="d-flex justify-content-center row">
        <div class="col-md-8">
            <div class="pt-2">
                <h4>Shopping cart</h4>
            </div>

            <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
                <div class="w-25 mr-1">
                    <img class="rounded" src="https://upload.wikimedia.org/wikipedia/commons/b/bb/Pizza_Vi%E1%BB%87t_Nam_%C4%91%E1%BA%BF_d%C3%A0y%2C_x%C3%BAc_x%C3%ADch_%28SNaT_2018%29_%287%29.jpg" width="70">
                </div>
                <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">Basic T-shirt</span>
                    <div class="d-flex flex-row product-desc">
                        <div class="size mr-1">
                            <span class="text-grey">Size:</span>
                            <span class="font-weight-bold">M&nbsp;</span>
                        </div>
                        <div class="color">
                            <span class="text-grey">Color:</span>
                            <span class="font-weight-bold">Grey&nbsp;</span>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center qty"><i class="fa fa-minus text-danger"></i>
                    <div class="quantity">
                        <input class="quantity-prodc" type="number" min="1" max="100" step="1" value="1">
                    </div> 
                </div>
                <div>
                    <h5 class="text-grey">50.000₫</h5>
                </div>
                <div class="d-flex align-items-center"><i class="fa fa-trash mb-1 text-danger"></i></div>
            </div>
            
            <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded">
                <input type="text" class="form-control border-0 gift-card" placeholder="discount code/gift card">
                <button class="btn btn-outline-warning btn-sm ml-2" type="button">Apply</button>
            </div>
            <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded">
                <button class="btn btn-warning btn-block btn-lg ml-2 pay-button w-100" type="button">Proceed to Pay</button>
            </div>
        </div>
    </div>
</div>
<?php
    get_footer();
?>