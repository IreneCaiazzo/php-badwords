<?php
$word = $_GET['word'];
$text = $_GET['message'];
$censorWord = str_replace($word, '***', $text);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bad Words</title>
</head>

<body>
    <p>Il testo che hai scritto è: <?= $text; ?> </p>
    <p>E ha <?= strlen($text); ?> caratteri</p>
    <p>Il testo con la parola censurata è: <?= $censorWord; ?> </p>
    <p>E ha <?= strlen($censorWord); ?> caratteri </p>
</body>

</html>