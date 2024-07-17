<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ventas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-dark text-danger">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-4">
                <h1>Ventas</h1>
                <form action="../objetos/objeto_ventas.php" method="get">
                    <div class="mb-3">
                        <label for="txtContratacion" class="form-label">Tipo de contratación</label>
                        <input type="text" id="txtContratacion" name="txtContratacion" class="form-control"
                            placeholder="Ingrese tipo">
                    </div>
                    <div class="mb-3">
                        <label for="txtSueldoBase" class="form-label">Sueldo base</label>
                        <input type="text" id="txtSueldoBase" name="txtSueldoBase" class="form-control"
                            placeholder="Ingrese su sueldo sase">
                    </div>
                    <div class="mb-3">
                        <label for="txtComision" class="form-label">Comisión de ventas</label>
                        <input type="text" id="txtComision" name="txtComision" class="form-control"
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