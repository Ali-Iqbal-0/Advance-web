<?php

include('product_class.php');
$p_name = $_REQUEST['p_name'];
$p_code = $_REQUEST['p_code'];
$p_quantity = $_REQUEST['p_quantity'];
$p_category = $_REQUEST['p_category'];
$p_brand = $_REQUEST['p_brand'];
$p_img = $_REQUEST['p_img'];
$p_descrp = $_REQUEST['p_descrp'];


$p =  new product;
$p->connectDb();
$p->updateProduct($p_name,$p_code,$p_quantity,$p_category,$p_brand,$p_img,$p_descrp);



?>