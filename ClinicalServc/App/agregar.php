<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios clinicos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilosForm.css">
    <link rel="stylesheet" href="sweetalert2/dist/sweetalert2.css">
</head>


<?php 

$nombre= (empty($_POST["nombre"])) ? null:$_POST["nombre"];
$edad=   (empty($_POST["edad"])) ? null:$_POST["edad"];
$email=  (empty($_POST["email"])) ? null:$_POST["email"];
$cedula= (empty($_POST["cedula"])) ? null:$_POST["cedula"];
$sintomas= (empty($_POST["sintomas"])) ? null:$_POST["sintomas"];
$contacto= (empty($_POST["contacto"])) ? null:$_POST["contacto"];


if ($nombre && $edad && $email && $cedula && $sintomas && $contacto) {
    include_once("conexion.php");
    $sql="INSERT INTO paciente(nombre,edad,email,cedula,sintomas,contacto)values('".$nombre."','".$edad."','".$email."','".$cedula."','".$sintomas."','".$contacto."')";
    mysqli_query($con,$sql);
    ?><script type="text/javascript">
    Swal.fire({
      position: 'top-end',
      icon: 'success',
      title: 'Your work has been saved',
      showConfirmButton: false,
      timer: 1500
    })
        window.location.href="../index.php";
        </script>'
<?php
}else{

}


?>
<script type="module">
  import Swal from 'sweetalert2/src/sweetalert2.js'
</script>