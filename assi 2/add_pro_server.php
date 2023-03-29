<?php
include('product_class.php');

$p_name = $_REQUEST['p_name'];
$p_code = $_REQUEST['p_code'];
$p_quantity = $_REQUEST['p_quantity'];
$p_category = $_REQUEST['p_category'];
$p_brand = $_REQUEST['p_brand'];
$p_descrp = $_REQUEST['p_descrp'];

$file = $_FILES['pro_img']['tmp_name'];
$path = "images/".  $_FILES['pro_img']['name'];
move_uploaded_file($file,$path);


$u =  new product;
$u->connectDb();
$u->setproduct($p_name,$p_code,$p_quantity,$p_category,$p_brand,$file,$p_descrp);
?>