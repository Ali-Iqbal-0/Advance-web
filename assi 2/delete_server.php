<?php

include('product_class.php');
$id = $_REQUEST['id'];
$p =  new product;
$p->connectDb();
$p->deleteProduct($id);
?>