<?php
  function get_list_page($id) {
    return db_fetch_array("SELECT * FROM list_page WHERE id =$id" );
  }

?>