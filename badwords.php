<?php
$paragraph = $_GET["badwordsParagraph"];

$censor = $_GET["badwordsCensor"];



$censoredText = str_ireplace($censor, "***", $paragraph)  //Case insensitive
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bad Words</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <div class="container w-75">
   <h1 class="text-success">Your paragraph and its length:</h1>
   <p> <?php  echo $paragraph  ?></p>
   <p> <?php  echo strlen($paragraph)    ?></p>
 
   <h1 class="text-primary">Your new paragraph:</h1>
  <p class="fw-6"> <?php echo $censoredText ?></p>
  </div>
</body>
</html>