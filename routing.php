<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$var_getMenu = isset($_GET['menu']) ? $_GET['menu'] : 'inicio';
//$var_getMenu =$_GET['menu'];
switch ($var_getMenu) {
case "home":
require_once ('./views/home.php');
break;
case "datosdeintereses":
require_once('./views/datosdeinteres.php');
break;
case "datosgenerales":
require_once('./views/datosgenerales.php');
break;
case "login":
require_once('./views/login.php');
break;
default:
require_once('./views/home.php');
}
?>
