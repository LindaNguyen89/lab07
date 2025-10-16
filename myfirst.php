<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using PHP Variables, arrays and operators</title>
</head>
<body>
    <h1>PHP Variables, arrays and operators</h1>
<?php
    $marks = array(85,85,95);
    $marks[1] = 90;
    $ave = ($marks[1]+$marks[2]+$marks[3] )/3;
    if ($ave >= 50)
        $status = "PASSED";
    else
        $status = "FAILED";
    echo "<p>Your average score is $ave. Your status is $status.</p>";
?>
<p></p>
</body>
</html>