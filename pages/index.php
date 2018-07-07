<!DOCTYPE html>
<html>
<head>
	<title>WebChat</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="main">

	<div id="info">
	<h2> login here</h2>
	<form action="login.php" method="post">
	<lable><b>Username:</b></lable>
	<input type="text" name="uname" id="uname" placeholder="User name"><br><br>
	<label><b>Password:</b></label>
	<input type="password" name="pass" id="pass" placeholder="password"><br><br>
	 <button style="background-color: white;color: black;" type="submit"><b>Login</b>	</button>

	</form>

	<form action ="signup.php" method="post">
		<h2>Don't have an account sign up here</h2>
		<lable><b>Username:</b></lable>
		<input type="text" name="uname" placeholder="User name"><br><br>
		<label><b>Email Id:</b></label>
		<input type="Email" name="Email" placeholder="Email"><br><br>

	     <label><b>Password:</b></label>
	     <input type="password" name="Password" placeholder="Password"><br><br>
	     <button style="background-color: white;color: black;" type= "submit"><b>Signup</b>	</button>  
	   </form>

`
	</div>

</div>
	 
</body>
</html>
