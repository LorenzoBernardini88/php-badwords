<?php 
    $stringa = "Tu non puoi passare! Sono un servitore del fuoco segreto e reggo la fiamma di Anor! Il fuoco oscuro non ti servirà a nulla, fiamma di Udun! Ritorna nell'ombra!  Tu non puoi passare!";
    echo strlen($stringa);
    $censura = $_GET["cens"];
    $cens = "*****";
    $stringa = str_replace($censura,$cens,$stringa);
    $font= "style = 'font-weight:bold; font-size:30px;'"
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
    <p <?php echo $font ?>><?php echo $stringa; ?></p>
</body>
</html>