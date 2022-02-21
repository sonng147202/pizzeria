$(document).ready(function () {
    $('#searchBox').keyup(function () { 
        const keySearch = $(this).val();
        fetch(`?mod=product&action=fetch&key_s=${keySearch}`)
            .then(response => response.json())
            .then(data => {
                const arr = data.arr_products;

                console.log(data);
                
                const str = $.map(arr, function (element) {
                    var price = parseInt(element.prodc_price).toLocaleString('vi-VN');

                    return `<div class="col-md-6 col-lg-4 mb-3">
                                <div class="card">
                                    <img src="${element.prodc_img}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title text-truncate">${element.prodc_title}</h5>
                                        <p class="card-text">${price}₫</p>
                                        <form action="" method="get">
                                            <select class="form-select mb-3" aria-label="Default select example">
                                                <option selected>Choose a size</option>
                                                <option value="1">S</option>
                                                <option value="2">M</option>
                                                <option value="3">L</option>
                                            </select>
                                            <button type="button" class="btn btn-warning">Add to cart</button>
                                        </form>
                                    </div>
                                </div>
                            </div>`;
                });

                $('.products-container').html(str);
            });

    });

    $('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
    $('.quantity').each(function() {
        var spinner = $(this),
            input = spinner.find('input[type="number"]'),
            btnUp = spinner.find('.quantity-up'),
            btnDown = spinner.find('.quantity-down'),
            min = input.attr('min'),
            max = input.attr('max');

        btnUp.click(function() {
            var oldValue = parseFloat(input.val());
            if (oldValue >= max) {
            var newVal = oldValue;
            } else {
            var newVal = oldValue + 1;
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");
        });

        btnDown.click(function() {
            var oldValue = parseFloat(input.val());
            if (oldValue <= min) {
            var newVal = oldValue;
            } else {
            var newVal = oldValue - 1;
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");
        });
    });
});


