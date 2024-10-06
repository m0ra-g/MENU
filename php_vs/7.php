<?php
   require "functions.php";
   $respuesta="";
   if(isset($_FILES['files'])){
      $respuesta = uploadFiles($_FILES);

   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>album</title>
</head>
<body>
   
   <form action="" method="post" enctype="multipart/form-data">
      <h1>Elegir imagen</h1>
      <input type="file" name="files[]" multiple>
      <button type="submit" name="enviar">enviar</button>
      <?php
         if($respuesta == "bien"){
            echo "<p class=bien> archivo subido!! </p>";
         } else{
            echo "<p class=error> $respuesta </p>";
         }
      ?>
   </form>

</body>
</html>
