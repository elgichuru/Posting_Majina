<?php
$first_name= filter_input(INPUT_POST, 'firstname');
$last_name= filter_input(INPUT_POST,'lastname');
$x=14;
$y=8;
$result=$x+$y;
$result1=$x-$y;
$result2=$x*$y;
$result3=$x/$y;
$date=date('D-M-y');
?>

<!Doctype html>
<html>
    <head>
        <title>Posting Names.</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <main>
            <label>First Name:</label>
            <span><b><?php echo htmlspecialchars($first_name); ?></b></span><br>
        <label>Last Names:</label>
        <span><b><?php echo htmlspecialchars($last_name); ?></b></span><br>
        <label>Full Name:</label>
        <span><?php echo htmlspecialchars("$first_name $last_name"); ?></span><br>
        <label>Today's Date:</label>
        <span><?php echo $date; ?></span><br>
        <label>Result </label>
        <span><b><?php echo htmlspecialchars($result); ?></b></span>
        </main>
        
    </body>
</html>
