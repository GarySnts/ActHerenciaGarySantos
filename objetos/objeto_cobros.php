<?php
    include_once('../clases/Cobros.php');
    $cobros = new Cobros();

    $cobros->bonificacion=$_GET['txtbono'];
    $cobros->comisionCobro=$_GET['txtComision'];
    //atributos que hereda de la clase empleado y persona
    //empleado    
    $cobros->codigo=$_GET['numCodigo'];
    $cobros->nivelAcademico="Técnico FullStack";
    $cobros->sueldoBase=$_GET['txtSueldoBase'];
    //persona
    $cobros->asignarNombre($_GET['txtNombre']);
    $cobros->apellido=$_GET['txtApellido'];
    $cobros->telefono=12345678;
    $cobros->direccion="Zona 5";

    echo "Sueldo liquido: ". $cobros->calcularSueldoLiquido();
    echo $cobros->verDatos();
?>