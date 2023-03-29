<a href="viewallproduct.php" class="previous" style="float:left; ">&laquo; Go Back to Dashboard</a>
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
    <title>products</title>
    <style>
        body {
            background-image: url("update.jpg");
	background-repeat: no-repeat;
  background-size: 2100px 1000px;
}

.login-box {
	width: 500px;
	background: #fff;
	color: #333;
    margin-top:10px;
	margin-right:80px;
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2);
    font-size: 20px;
    float:right;

}
.login-box1 {
	width: 500px;
	background: #fff;
	color: #333;
    margin-top:10px;
	margin-left:50px;
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2);
    font-size: 30px;
    float:left;
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
    
    <div class="login-box1">
    <?php
    echo " <h1> Previous Data </h1> ";
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
    <div class="login-box">
    <h1>UPDATE PRODUCT</h1>
    <form action="update_server.php" method="get">
        <h3>PRODUCT NAME:</h3>
        <input type="text" name="p_name" placeholder="Enter product Name" required/> 
        <h3>PRODUCT CODE:</h3>
        <input type="text" name="p_code" placeholder="Bar Code" required /> 
        <h3>QUANTITY:</h3>
        <input type="number" name="p_quantity" min="1" max="500">
        <h3>CATEGORY:</h3>
        <select name="p_category">
    <option value="laptops">laptops</option>
    <option value="computer">computers</option>
    <option value="mobile">Mobile</option>
    <option value="graphic_card">Graphic card</option>
</select>
        <h3>BRAND:</h3>
        <select name="p_brand">
    <option value="hp">Hp</option>
    <option value="dell">Dell</option>
    <option value="sony">Sony</option>
    <option value="samsung">Samsung</option>
</select>
        <h3>PRODUCT IMAGE:</h3>
        <input type="file" name="p_img" accept="image/*">
        <h3>PRODUCT DESCRIPTION:</h3>
        <textarea  name="p_descrp" rows="4" cols="50"></textarea><br>
         <input type="submit" />
    </form>
    </div>
    
</body>
</html>