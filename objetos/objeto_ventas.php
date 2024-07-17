<?php
    include_once('../clases/Ventas.php');
    $ventas = new Ventas();

    $ventas->tipoContratacion=$_GET['txtContratacion'];
    $ventas->comisionVenta=$_GET['txtComision'];
    //atributos que hereda de la clase empleado y persona
    //empleado    
    $ventas->codigo=123;
    $ventas->nivelAcademico="Técnico FullStack";
    $ventas->sueldoBase=$_GET['txtSueldoBase'];
    //persona
    $ventas->asignarNombre('Fulanito');
    $ventas->apellido="de Tal";
    $ventas->telefono=12345678;
    $ventas->direccion="Zona 5";

    echo "Sueldo liquido: ". $ventas->calcularSueldoLiquido();
    echo $ventas->verDatos();
?>