<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-dark text-warning">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-4">
                <h1>Clientes</h1>
                <form action="../objetos/objeto_cliente.php" method="get">
                    <div class="mb-3">
                        <label for="textNombre" class="form-label">Nombre</label>
                        <input type="text" id="textNombre" name="textNombre" class="form-control"
                            placeholder="Ingrese su nombre">
                        <div class="mb-3">
                            <label for="textApellido" class="form-label">Apellido</label>
                            <input type="text" id="textApellido" name="textApellido" class="form-control"
                                placeholder="Ingrese su apellido">
                        </div>
                        <div class="mb-3">
                            <label for="numNit" class="form-label">NIT</label>
                            <input type="number" id="numNit" name="numNit" class="form-control"
                                placeholder="Ingrese su numero de nit">
                        </div>
                        <div class="mb-3">
                            <label for="numTelefono" class="form-label">Telefono</label>
                            <input type="text" id="numTelefono" name="numTelefono" class="form-control"
                                placeholder="Ingrese su numero de telefono">
                        </div>
                        <div class="mb-3">
                            <label for="textDireccion" class="form-label">Dirección</label>
                            <input type="text" id="textDireccion" name="textDireccion" class="form-control"
                                placeholder="Ingrese su dirección">
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