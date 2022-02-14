<?php 
    $stringa = "ciao Lorenzo.Benvenuto in php.";
    $sensura = $_GET["Lorenzo"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    <p><?php echo $stringa; echo " "; echo strlen($stringa)?></p>
</body>
</html>