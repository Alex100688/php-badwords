<?php
    $text = "Ciao a tutti, la mia password è testo";
    //echo strlen($text);
    $number_text = strlen($text);
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
    <h1><?php echo $text ?> </h1>
    <h2><?php echo $number_text ?></h2>
</body>
</html>