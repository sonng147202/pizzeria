<?php 

  function construct(){

    load_model('index');
  }
  function indexAction(){
      $id = (int)$_GET['id'];
      $list_page=get_list_page($id);
      $data['list_page']=$list_page;
      // show_array($list_page);
      
    load_view('index',$data);

  }

?>