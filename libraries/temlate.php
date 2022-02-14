<?php
function get_header($version=""){
    if(!empty($version)){
    $path_header= "inc/header-{$version}.php";
    }else{
        $path_header="inc/header.php";
    }
    if(file_exists($path_header)){
        require $path_header;
    }else{
        echo "Không tồn tại trang này";
    }
}
function get_footer(){
    $path_footer="inc/footer.php";
    if(file_exists($path_footer)){
        require $path_footer;
    }else{
        echo "Không tồn tại trang này";
    }
}


?>