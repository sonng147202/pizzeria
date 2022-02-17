<?php
//Triệu gọi đến file xử lý thông qua request

if(isset($_SESSION['user']['role_id'])) {
    if ($_SESSION['user']['role_id'] == 1) {
        $config['default_module'] = 'admin';
    }
    if ($_SESSION['user']['role_id'] == 2) {
        $config['default_module'] = 'page';
    }
}

$request_path = MODULESPATH . DIRECTORY_SEPARATOR . get_module() . DIRECTORY_SEPARATOR . 'controllers' . DIRECTORY_SEPARATOR . get_controller().'Controller.php';

if (file_exists($request_path)) {
    require $request_path;
} else {
    echo "Không tìm thấy:$request_path ";
}

$action_name = get_action().'Action';

call_function(array('construct', $action_name));
