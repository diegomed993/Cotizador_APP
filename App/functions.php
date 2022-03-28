<?php

function get_view($view_name){
    $view = VIEWS.$view_name.'view.php';
 if(!is_file($view)){
     die('View not found');
 }

 require_once $view;
}

?>