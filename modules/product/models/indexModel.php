<?php
    function get_products()
    {
        return db_fetch_array("SELECT * FROM `products`");
    }

    function fetch_products($key_search)
    {
        return db_fetch_array("SELECT * FROM `products` WHERE `prodc_title` LIKE '%$key_search%'");
    }