<?php
$msg="";

if( isset($_REQUEST['msg']) )
    $msg = $_REQUEST['msg'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        body {
			background-image: url("sign .jpg");
	background-repeat: no-repeat;
  background-size: 2100px 1000px;
}

.login-box {
	width: 500px;
	height:600px;
	background: #fff;
	color: #333;
	margin: 100px 200px;
	padding: 50px;
	border-radius: 10px;
	box-shadow: 0 0 50px 0 rgba(0, 0, 0, 0.336);
	float:right;
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
	font-size: x-large;
    
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

    <h3 style="color:red">   <?php  echo $msg; ?> </h3>
    <div class="login-box">
    <h1>Login Page</h1>
    <form action="signin_server.php" method="get">
        <h3>Email:</h3>
            <input type="email" name="u_email" placeholder="Email" /> <br/>
            <h3>Password:</h3>
            <input type="password" name="u_pwd" placeholder="Password" /> <br/>
            <input type="submit" />
			<h2> New here ? <a href="signup.html">Sign Up Here </a></h2>
    </form>
    </div>
    
</body>
</html>