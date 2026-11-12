<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>PHP - MySQL Search Template</title>
</head>
<body>
    <form method="get" action="search_result.php">
        <label for="model">Search Model</label> 
        <input type="text" id="model" name="model" pattern="[A-Za-z\s]+" required="required"/>
		<input type="submit" value="Submit"/>
    </form>
</body>
</html>