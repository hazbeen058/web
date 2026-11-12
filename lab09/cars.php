<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8 " />
	<title>PHP - MySQL Select (Check) Template</title>
	<!-- other meta here -->
</head>
<body>
<?php
	/*
			This is a template for SQL query such as
			- SELECT
	*/
	require_once "setting.php";	// Load MySQL log in credentials
    mysqli_report(MYSQLI_REPORT_OFF);
    
	$conn = @mysqli_connect ($host, $user, $pwd, $sql_db);	// Log in and use database
	if ($conn) { // check is database is available for use
		$query = "SELECT * FROM cars WHERE yom >= 2010";
        // "SELECT * from `cars`";	// Assign appropriate query here

		$result = mysqli_query ($conn, $query);
        //to check if a MySQL query result set contains one or more rows
        if ($result->num_rows > 0) 
        {
            echo "<br>
            <table border='1'>
                <tr>
                    <th>car_id</th>
                    <th>make</th>
                    <th>model</th>
                    <th>price</th>
                    <th>yom</th>
                </tr>";
            while ($row = $result->fetch_assoc()) { //to fetch the next row of data from a MySQL query result set as an associative array
                echo "<tr>
                        <td>" . $row["car_id"] . "</td>
                        <td>" . $row["make"] . "</td>
                        <td>" . $row["model"] . "</td>
                        <td>" . $row["price"] . "</td>
                        <td>" . $row["yom"] . "</td>
                    </tr>";
            }
            echo "</table>";
        } 
        else {
            echo "0 results";
        }
		mysqli_close ($conn);					// Close the database connect
	}else {
		echo "<p>There are no cars to display.</p>";
	}
?>	
</body>
</html>