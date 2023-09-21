<?php

require("_header.php");

$request = $_SERVER["REQUEST_URI"];
$path = "src/controller/";

switch($request) {
  case '/pokemon/home':
    require $path . "home.php";
    break;
  case '/pokemon/blog':
    require $path . "blog.php";
    break;
  case '/pokemon/events':
    require $path . "events.php";
    break;
  default:
    http_response_code(404);
}