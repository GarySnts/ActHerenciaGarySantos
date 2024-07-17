<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cobros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-dark text-danger">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-4">
                <h1>Cobros</h1>
                <form action="../objetos/objeto_Cobros.php" method="get">
                    <div class="mb-3">
                        <label for="txtNombre" class="form-label">Nombre</label>
                        <input type="text" id="txtNombre" name="txtNombre" class="form-control"
                            placeholder="Ingrese su nombre">
                    </div>
                    <div class="mb-3">
                        <label for="txtApellido" class="form-label">Apellido</label>
                        <input type="text" id="txtApellido" name="txtApellido" class="form-control"
                            placeholder="Ingrese su apellido">
                    </div>
                    <div class="mb-3">
                            <label for="numCodigo" class="form-label">Codigo</label>
                            <input type="number" id="numCodigo" name="numCodigo" class="form-control"
                                placeholder="Ingrese su numero de codigo">
                        </div>
                    <div class="mb-3">
                        <label for="txtSueldoBase" class="form-label">Sueldo base</label>
                        <input type="text" id="txtSueldoBase" name="txtSueldoBase" class="form-control"
                            placeholder="Ingrese su sueldo sase">
                    </div>

                    <div class="mb-3">
                        <label for="txtComision" class="form-label">Comisión de cobros</label>
                        <input type="number" id="txtComision" name="txtComision" class="form-control"
                            placeholder="Ingrese monto">
                    </div>
                    <div class="mb-3">
                        <label for="txtbono" class="form-label">Bonificación</label>
                        <input type="number" id="txtbono" name="txtbono" class="form-control"
                            placeholder="Ingrese monto">
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Enviar" class="form-control btn btn-primary" name="btnEnviar">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>