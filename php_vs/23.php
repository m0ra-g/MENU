<html> 
<head> 
<title>Problema</title> 
</head> 
<body> 
<?php 
copy($_FILES['foto']['tmp_name'],$_FILES['foto']['name']); 
echo "aqui se encuentra la foto!.<br>"; 
$nom=$_FILES['foto']['name']; 
echo "<img src=\"$nom\">"; 
?> 
</body> 
</html> 