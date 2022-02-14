<?php 

function construct(){
  load_model('index');

}
function indexAction(){
  load('helper','format');
  $list_users = get_list_users();
  $data['list_users']=$list_users;
  load_view('index',$data);
}


?>