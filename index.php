<?php
    $text = "Ciao a tutti la mia password è testo";
    //echo strlen($text);
    $number_text = strlen($text);
    $text2 = $_GET["text"];
    $text2 = str_replace("testo", "***", $text );
    $number_text2 = strlen($text2);
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
    <h1><?php echo $text ?></h1>
    <h2><?php echo $number_text ?></h2>
    <h3><?php echo $text2 ?></h3>
    <h3><?php echo $number_text2 ?></h3>
</body>
</html>