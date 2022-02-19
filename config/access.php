<?php

$access_admin = [
    'admin' => [
        'index' => [
            'index'
        ],
    ],
];


if (is_array($arr)) {
    foreach ($arr as $keym => $mods) {
        if (get_module() == $keym) {
            $route_mod = get_module();

            if (is_array($mods)) {
                foreach ($mods as $keyc => $controllers) {
                    if (get_controller() == $keyc) {
                        $route_controllers = get_controller();

                        if (is_array($controllers)) {
                            foreach ($controllers as $keya => $action) {
                                if (get_action() == $action) {
                                    echo $action;
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}

