<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        body {
            background-image: url("addproduct.jpg");
	background-repeat: no-repeat;
  background-size: 2100px 1200px;
}

.login-box {
	width: 500px;
	height:1000px;
	background: #fff;
	color: #333;
	margin: 10px 100px;
	padding: 50px;
	border-radius: 10px;
	box-shadow: 0 0 50px 0 rgba(0, 0, 0, 0.336);
	float:left;
	font-size: x-large;
    font-weight: bolder;
}

.login-box h1 {
	text-align: center;
	margin-bottom: 20px;
}
.login-box h3 {
	margin-bottom: 20px;
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
    </style>
</head>
<body>
    <div class="login-box">
    <h1>ADD PRODUCTS</h1>
    <form action="add_pro_server.php" method="post" enctype="multipart/form-data">
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
        <input type="file" name="pro_img" accept="image/*">
        <h3>PRODUCT DESCRIPTION:</h3>
        <textarea  name="p_descrp" rows="4" cols="50"></textarea><br>
         <input type="submit" />
    </form>
    </div>
    
</body>
</html>