<?php
//Triệu gọi đến file xử lý thông qua request

if (is_admin()) {
    $config['default_module'] = 'admin';
}
if (is_user()) {
    $config['default_module'] = 'page';
}

$route_mod = get_module();

$route_controllers = get_controller();

$route_action = get_action();

$request_path = MODULESPATH . DIRECTORY_SEPARATOR . $route_mod . DIRECTORY_SEPARATOR . 'controllers' . DIRECTORY_SEPARATOR . $route_controllers .'Controller.php';

if (file_exists($request_path)) {
    require $request_path;
} else {
    echo "Không tìm thấy:$request_path ";
}

$action_name = $route_action.'Action';

call_function(array('construct', $action_name));
