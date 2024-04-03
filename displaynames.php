<?php
$first_name=$_POST['firstname'];
$last_name=$_POST['lastname'];
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
        <span><?php echo htmlspecialchars("$first_name $last_name"); ?></span>
        </main>
        
    </body>
</html>
