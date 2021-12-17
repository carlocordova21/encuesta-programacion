<?php
   include_once("survey.php");
   $survey = new Survey();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
   <form action="" method="post">
      <?php 
         if(isset($_POST["lenguaje"])) {
            $survey->setOptionSelected($_POST["lenguaje"]);
            $survey->vote();
         }
      ?>
      <h2>Cual es tu lenguaje de programacion favorito?</h2>
      <?php foreach($survey->listOptions() as $key => $value) {?>
         <input type="radio" name="lenguaje" id="" value="<?php echo $value["opcion"] ?>"> <?php echo $value["opcion"] ?><br>
      <?php } ?>
      <input type="submit" value="Votar">
   </form>

</body>
</html>