<?php 

include 'conexion.php';

$id =$_POST["id"];
$query ="DELETE  FROM user WHERE id='$id'";
$result=mysqli_query($conexion,$query);
if($result){
    echo "datos eliminados";
}else{
    echo "error";
}

mysqli_close($conexion);

?>