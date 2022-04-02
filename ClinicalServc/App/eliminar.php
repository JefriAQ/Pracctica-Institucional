<?php
include_once("conexion.php");
    $id=$_GET["id"];
    $sql="DELETE FROM paciente WHERE id='".$id."'";
    mysqli_query($con,$sql);
    header("location:app.php");
?>