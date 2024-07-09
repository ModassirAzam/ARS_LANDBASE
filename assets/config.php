<?php

define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/arslandbase');
define('SITE_PATH','http://localhost/development/arslandbase');

// define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT']);
// define('SITE_PATH','http://production.arslandbase.com');

$url = $_SERVER['REQUEST_URI'];
$current_page = basename($url);
if($current_page == "arslandbase" || $current_page == "index" ||$current_page == ""){
    $current_page = "home";
}
$current_page_arr = explode('.',$current_page);
$current_page = $current_page_arr[0];
// die($current_page);
$description = array(
    "home" => "ARS Landbase Desc",
);
$title = array(
    "home" => "ARS Landbase Title",
);
?>