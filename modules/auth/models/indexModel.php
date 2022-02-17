<?php

    function fetchUser ($txt_name)
    {
        return db_fetch_row("SELECT * FROM `users` WHERE `user_name` = '$txt_name'");
    }

    function registerPermissions($role_id)
    {
        return db_fetch_array("SELECT * FROM `roles_permissions` WHERE `role_id`= '$role_id'");
    }