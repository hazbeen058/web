#get : url


<!DOCTYPE html>
<html lang="en">
<head>
	<!-- meta here -->
</head>
<body>
<?php include_once "header.inc"; ?>


   
<h2>login form</h2>
	<form method="post" action="process.php">
		

        <label for ="username">Username:</label>
        <input type="text" name="username"  /><br>

        <label for ="password">Password:</label>
        <input type="password" name="password"  /><br>

        <input type="hidden" name = "token" value="abc123">

        <input type="submit" value="login" />


		
	</form>
<?php include "footer.inc"; ?>

</body>
</html>