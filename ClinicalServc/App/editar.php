<?php 

include_once("conexion.php");
$id=$_GET["id"];
$sql="SELECT * FROM paciente WHERE Id='".$id."'";
$resultado=mysqli_query($con,$sql);
while($fila=mysqli_fetch_assoc($resultado)){

?>
<div class="">
<form action="" method="POST">
                    <input type="hidden" value="<?php echo $fila["id"] ?>">
                        <label for="exampleFormControlInput1" class="form-label"><b>Correo electronico</b></label>
                        <input type="email" class="form-control" name="email"  id="exampleFormControlInput1" value="<?php echo $fila["email"] ?>"
                            placeholder="correo@example.com">
                    </div>
                    <div class="mb-3"><label for=""><b>Nombres y apellido</b></label>
                        <input type="text" class="form-control" name="nombre" placeholder="Juan Francisco"value="<?php echo $fila["nombre"] ?>"
                            aria-label="nombre">
                    </div>
                    <div class="mb-3"><label for=""><b>Edad</b></label>
                        <input type="number" class="form-control" name="edad"  placeholder="33"value="<?php echo $fila["edad"] ?>"
                            aria-label="edad">
                    </div>
                    <div class="mb-3"><label for=""><b>Cedula</b></label>
                        <input type="text" class="form-control" name="cedula"  placeholder="000-0000000-0" aria-label="" value="<?php echo $fila["cedula"] ?>">
                    </div>
                    <div class="mb-3"><label for=""><b>Telefono</b></label>
                        <input type="tel" class="form-control" name="contacto"  placeholder="8092223344" aria-label="numero" value="<?php echo $fila["contacto"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label"><b>Adjuntar archivos</b></label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label"><b>Cometario o descripción de
                            solicitud</b></label>
                        <input class="form-control" name="sintomas" type="textarea"  id="exampleFormControlTextarea1" rows="3" value="<?php echo $fila["sintomas"] ?>"></input>
                    </div>
                    <div>
                        <p>
                        Al precionar Enviar formulario nos informa que ha leido y aceptado  <a href="#">Terminos y Condiciones del Servicio</a>.
                        </p>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary btn-lg" type="submit"><b>Modificar</b></button>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary btn-lg" type="submit"><b>Regresar</b></button>
                    </div>
                </form>
                <?php } ?>
</div>

<?php
$idp = $_GET["id"];
$nombre= $_POST["nombre"];
$edad=   $_POST["edad"];
$email=  $_POST["email"];
$cedula= $_POST["cedula"];
$sintomas= $_POST["sintomas"];
$contacto= $_POST["contacto"];

if ($nombre && $edad && $email && $cedula && $sintomas && $contacto) {
    $sql2="UPDATE paciente SET nombre= '".$nombre."', edad='".$edad."', email='".$email."',cedula='".$cedula."',sintomas='".$sintomas."',contacto='".$contacto."' WHERE id='".$idp."'";
    mysqli_query($con,$sql2);
    if($nombre==1){
        header("Location:index.php");
    }
}else{
    echo '<script type="text/javascript">
            alert("Favor validar y llenar formulario correctamente correctamente");
    </script>';
}


?>
