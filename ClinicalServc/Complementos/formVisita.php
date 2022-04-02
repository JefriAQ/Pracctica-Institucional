<head>
<title>Servicios clinicos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="css/estilosForm.css">
</head>

<body>
    <?php include_once("navbar2.php")?>
    <div class="container">
        <div class="row">
            <div class="col" style="padding:30px;margin:20px;">
            <h3 style="text-align:center;padding:10px;"><b>SERVICIO A DOMICILIO FORMULARIO DE RECEPCIÓN.</b></h3>
                <p >Servicio a Domicilio Nos trasladamos a la comodidad de su hogar o centro de trabajo a tomar la muestra para realizarse sus pruebas clínicas.</p>

                <p>Contáctenos y haga su cita llamando a nuestro Departamento de Servicio al Cliente al <b>809-000-0000 ext. 1</b> para Santo Domingo, o a una de nuestras sucursales a nivel nacional.</p>

                <p >Además puede hacer su solicitud en línea, completando el siguiente formulario, y recibirá la confirmación de su cita.</p>
            </div>
            <div class="formVisita" style="width: 40%;margin-left:auto;margin-right:auto">
                <form action="" method="post" style="padding:20px;">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"><b>Correo electronico</b></label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="correo@example.com">
                    </div>
                    <div class="mb-3"><label for=""><b>Nombres</b></label>
                        <input type="text" class="form-control" name="nombre" placeholder="Juan Francisco"
                            aria-label="nombre">
                    </div>
                    <div class="mb-3"><label for=""><b>Apellidos</b></label>
                        <input type="text" class="form-control" placeholder="Perez Ramirez" aria-label="apellido">
                    </div>
                    <div class="mb-3"><label for=""><b>Cedula</b></label>
                        <input type="text" class="form-control" placeholder="000-0000000-0" aria-label="">
                    </div>
                    <div class="mb-3"><label for=""><b>Fecha</b></label>
                        <input type="date" class="form-control" placeholder="" aria-label="">
                    </div>
                    <div class="mb-3"><label for=""><b>Telefono</b></label>
                        <input type="tel" class="form-control" placeholder="8092223344" aria-label="numero">
                    </div>
                    <div class="mb-3"><label for=""><b>Telefono adicional</b></label>
                        <input type="tel" class="form-control" placeholder="8092223344" aria-label="numero">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label"><b>Direccion y descripción del
                            domicilio</b></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label"><b>Cometario o descripción de
                            solicitud</b></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div>
                        <p>
                        Al precionar Enviar formulario nos informa que ha leido y aceptado  <a href="#">Terminos y Condiciones del Servicio</a>.

                    </p>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary btn-lg" type="submit"><b>Enviar formulario</b></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include_once("footer.php")?>
</body>