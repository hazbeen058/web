<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Using PHP variablea, arrays and operators </title>
</head>
<body>
    <h1> PHP variables , arrays and operators</h1>

<?php
    $marks = array (85;85;95);
    $marks[0] = 90;
    $ave = ($marks[0] + $marks[1] + $marks[2])/3;
        if ($ave >=50)
            $status = PASS
        else
             $status = FAILED

echo "<p> The average score is $marks. You $status </p>";
?>
</body>
</html> 