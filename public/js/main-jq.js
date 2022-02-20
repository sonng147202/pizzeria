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

                    return `<div class="card">
                                <img src="${element.prodc_img}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-truncate">${element.prodc_name}</h5>
                                    <p class="card-text">${price}₫</p>
                                    <a href="#" class="btn btn-warning">Add to cart</a>
                                </div>
                            </div>`;
                });

                $('.products-container').html(str);
            });

    });
});
