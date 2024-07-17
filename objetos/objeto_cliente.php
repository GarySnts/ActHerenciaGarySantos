<?php
    //incluir el archivo Cliente.php para poder utilizar
    //el código que contienen
    include_once('../clases/Cliente.php');
    //crear un objeto de tipo Cliente = instanciar la clase
    $cliente = new Cliente();
    
    $cliente->nit=$_GET['numNit'];
    $cliente->telefono=$_GET['numTelefono'];
    $cliente->apellido=$_GET['textApellido'];
    $cliente->asignarNombre($_GET['textNombre']);
    $cliente->direccion=$_GET['textDireccion'];
    
    echo $cliente->verDatos();
    //echo "<br>". $cliente->nombreCompleto();
?>