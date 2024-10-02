<?php     
   $projectTitle = "PHP Bad Words"; 

  

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
<form class="container w-75">
<h1 class="text-primary"> <?php echo $projectTitle    ?>   </h1>

<div class="form-group mt-5">
    <label for="badwords-paragraph">Write a paragraph!</label>
    <textarea class="form-control" id="badwords-paragraph" rows="3"></textarea>
  </div>



  <div class="form-group">
    <label for="badwords-censored-word">Write a word to Censor!</label>
    <input type="text" class="form-control" id="badwords-censored-word" placeholder="">
  </div>
</form>

</body>
</html>