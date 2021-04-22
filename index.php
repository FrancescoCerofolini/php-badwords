<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parolacce | 22-04-2021</title>
</head>
<body>
    <?php
    $text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, dolore? Laboriosam voluptatibus quibusdam ad amet nisi praesentium blanditiis, eveniet a incidunt eius, corrupti quaerat libero sit aliquam possimus adipisci voluptate?";

 
    $substitute = $_GET["badword"];
    $textReplaced = str_replace($substitute,"***",$text);

    ?> 
    <h1>Il paragrafo è lungo: <?php echo strlen($text); ?></h1>
    <h2><?php echo $text; ?></h2>
    <h1>Il paragrafo è lungo: <?php echo strlen($textReplaced); ?> </h1> 
    <h2><?php  echo $textReplaced; ?></h2> 
</body>
</html>