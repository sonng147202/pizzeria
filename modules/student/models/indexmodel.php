<?php 

function get_list_users(){
  $result =db_fetch_array("SELECT * FROM `hht_store`");
  return $result;
}

