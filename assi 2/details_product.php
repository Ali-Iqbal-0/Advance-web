<?php

$p_name = $_REQUEST['name'];
$p_code = $_REQUEST['code'];
$p_quantity = $_REQUEST['pquantity'];
$p_category = $_REQUEST['pcategory'];
$p_brand = $_REQUEST['pbrand'];
$p_img = $_REQUEST['image'];
$p_descrp = $_REQUEST['des'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
			background-image: url("detail.jpg");
	background-repeat: no-repeat;
  background-size: 2100px 1200px;
}

.login-box {
	width: 700px;
	background: #fff;
	color: black;
	margin: 50px auto;
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2);
    text-align: center;
    font-size: 40px;
    
}

.login-box label {
	display: block;
	margin-bottom: 5px;
}

.login-box input[type="text"], .login-box input[type="password"] ,.login-box input[type="email"] {
	width: 100%;
	padding: 10px;
	margin-bottom: 20px;
	border: none;
	border-bottom: 1px solid #333;
	background: transparent;
}

.login-box input[type="submit"] {
	background: #333;
	color: #fff;
	border: none;
	padding: 10px;
	border-radius: 5px;
	cursor: pointer;
}

.login-box input[type="submit"]:hover {
	background: #444;
}

.login-box p {
	text-align: center;
	margin-top: 10px;
}

.login-box .error {
	color: #ff0000;
	margin-bottom: 10px;
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
</head>
<body>
<a href="viewallproduct.php" class="previous">&laquo; Go Back to Dashboard</a>
    <div class="login-box ">
    <h1>Details of Product</h1>
<?php
echo " Product Name: ";
echo"$p_name " ; 
echo"<br>";
echo "Product Code ";
echo"$p_code " ;
echo"<br>";
echo " Product Quantity:";
echo"$p_quantity" ;
echo"<br>";
echo " Product Category:";
echo"$p_category ";
echo"<br>";
echo " Product Brand:";
echo"$p_brand ";
echo"<br>";
echo " Product Image:";
echo"$p_img ";
echo"<br>";
echo " Product Description:";
echo"$p_descrp";
echo"<br>";
?>

    </div>
</body>
</html>