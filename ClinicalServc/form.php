<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios clinicos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilosForm.css">
</head>

<body>
    <?php include_once("Complementos/navbar.php")?>
    
    <br>
    <div class="container">
        <div class="row">
            <div class="formulario" style="width: 40%;margin-left:auto;margin-right:auto">
            <form action="App/agregar.php" method="POST">
                    <h2><b>Formulario de contacto</b></h2>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"><b>Correo electronico</b></label>
                        <input type="email" class="form-control" name="email"  id="exampleFormControlInput1"
                            placeholder="correo@example.com">
                    </div>
                    <div class="mb-3"><label for=""><b>Nombres y apellido</b></label>
                        <input type="text" class="form-control" name="nombre" placeholder="Juan Francisco"
                            aria-label="nombre">
                    </div>
                    <div class="mb-3"><label for=""><b>Edad</b></label>
                        <input type="number" class="form-control" name="edad"  placeholder="33"
                            aria-label="edad">
                    </div>
                    <div class="mb-3"><label for=""><b>Cedula</b></label>
                        <input type="text" class="form-control" name="cedula"  placeholder="000-0000000-0" aria-label="">
                    </div>
                    <div class="mb-3"><label for=""><b>Telefono</b></label>
                        <input type="tel" class="form-control" name="contacto"  placeholder="8092223344" aria-label="numero">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label"><b>Adjuntar archivos</b></label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label"><b>Cometario o descripción de
                            solicitud</b></label>
                        <textarea class="form-control" name="sintomas"  id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div>
                        <p>
                        Al precionar Enviar formulario nos informa que ha leido y aceptado  <a href="#">Terminos y Condiciones del Servicio</a>.
                        </p>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary btn-lg" type="submit"><b>Enviar formulario</b></button>
                    </div>
                    <div class="col-12"><a href="index.php"><button class="btn btn-primary btn-lg" type="button"><b>Regresar</b></button></a>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
 
    <?php include_once("Complementos/footer.php")?>
</body>