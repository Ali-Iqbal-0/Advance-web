<style>
  body {
			background-image: url("view.jpg");
	background-repeat: no-repeat;
  background-size: 2100px 1000px;
}
    a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
  color: black;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2);
  font-size: 30px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: lightgray;
  color: black;
}
</style>
<a href="services.php" class="previous">&laquo; Go Back to Dashboard</a>

<?php
include('product_class.php');

$u =  new product;
$u->connectDb();
$r = $u->getAllproduct();

echo "<h1 style='font-family: cooper; text-align: center'> All Data </h1>";

$data = "<br/><br/> <table border='10'  align='center' cellspacing='0' cellpadding='20'> ";

foreach($r as $k=>$product)
{
  $data.="<tr class='info'> 
  <th>ID </th>
  <th>Product Name</th>
  <th>Product Code</th>
  <th>Product Quantity</th>
  <th>Product Category</th>
  <th>Product Brand</th>
  <th>Product Image</th>
  <th>Product Description</th>
  <th colspan='3'>  Operations  </th>
  </tr>";
    $data.= "<tr>";
    $data.= "<td>". $product['id'] . "</td>";
    $data.= "<td>". $product['product_name'] . "</td>";
    $data.= "<td>". $product['product_code'] . "</td>";
    $data.= "<td>". $product['quantity'] . "</td>";
    $data.= "<td>". $product['category'] . "</td> ";
    $data.= "<td>". $product['brand'] . "</td>";
    $data.= "<td>". $product['product_image'] . "</td>"; 
    $data.= "<td>". $product['product_des'] . "</td>";
    $data.=  "<td> <a href='delete_server.php?id=$product[product_code]'> Delete </a>" . "</td>";
    $data.=  "<td> <a href='update_product.php?name=$product[product_name] & 
    code=$product[product_code]&
    pquantity=$product[quantity]&
    pcategory=$product[category]&
    pbrand=$product[brand]&
    image=$product[product_image]&
    des=$product[product_des]'> Edit </a>" . "</td>";
    
    $data.=  "<td> <a href='details_product.php? 
    name=$product[product_name] & 
    code=$product[product_code]&
    pquantity=$product[quantity]&
    pcategory=$product[category]&
    pbrand=$product[brand]&
    image=$product[product_image]&
    des=$product[product_des]'> Details </a>" . "</td>
     </tr>";
}

$data.= "</table>";

echo $data;



?>

