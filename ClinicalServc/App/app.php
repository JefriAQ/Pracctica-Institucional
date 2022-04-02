<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
</head>
</head>
<body>
    <?php
        include_once("conexion.php");
        $sql="SELECT * FROM paciente";
        $resultado =mysqli_query($con,$sql);
    ?>
      <header>
      <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
      Bootstrap
    </a>
  </div>
</nav>
<br>
      </header>




    <div class="container">
    <a href="">Nueva</a>
    <table  class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Fecha de creacion</th>
                <th scope="col">Nombre</th>
                <th scope="col">Edad</th>
                <th scope="col">Email</th>
                <th scope="col">Cedula</th>
                <th scope="col">Sintomas</th>
                <th scope="col">Contacto</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($filas =mysqli_fetch_assoc($resultado)){;
            ?>
            <tr>
            <td><?php if(isset($filas["id"])){echo $filas["id"];}?></td>
            <td><?php if(isset($filas["fechai"])){echo $filas["fechai"];}?></td>
            <td><?php if(isset($filas["nombre"])){echo $filas["nombre"];}?></td>
            <td><?php if(isset($filas["edad"])){echo $filas["edad"]; }?></td>
            <td><?php if(isset($filas["email"])){echo $filas["email"]; }?></td>
            <td><?php if(isset($filas["cedula"])){echo $filas["cedula"]; }?></td>
            <td><?php if(isset($filas["sintomas"])){echo $filas["sintomas"]; }?></td>
            <td><?php if(isset($filas["contacto"])){echo $filas["contacto"]; }?></td>
        <td><a href="editar.php?id=<?php if(isset($filas["id"])){echo $filas["id"];}?>">editar</a>
            <a href="eliminar.php?id=<?php if(isset($filas["id"])){echo $filas["id"];}?>">Eliminar</a>
        </td>
        <?php }?>
        </tr>
        </tbody>
    </table>
    </div>
</body>
</html>