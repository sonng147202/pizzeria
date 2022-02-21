<?php
    function get_prodc_id($id)
    {
        return db_fetch_row("SELECT `prodc_id`, `prodc_img`, `prodc_name`, `prodc_price`, `prodc_desc`, `cat_id` FROM `products` WHERE `prodc_id` = '$id'");
    }