<?php 
    $stringa = "Ciao Lorenzo.Benvenuto in php.";
    echo strlen($stringa);
    $censura = $_GET["cens"];
    $cens = "*****";
    $stringa = str_replace($censura,$cens,$stringa);
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
    <p><?php echo $stringa; ?></p>
</body>
</html>