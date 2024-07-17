<?php
    include_once('../clases/Empleado.php');
    $emple = new Empleado();
    //atributos de la clase Empleado    
    $emple->codigo=$_GET['numCodigo'];
    $emple->nivelAcademico=$_GET['textNivelAcad'];
    $emple->sueldoBase=$_GET['numSueldo'];

    //atributos que hereda de la clase Persona
    $emple->asignarNombre($_GET['textNombre']);
    $emple->apellido=$_GET['textApellido'];
    $emple->telefono=$_GET['textTelefono'];
    $emple->direccion=$_GET['textDireccion'];

    echo "Sueldo liquido: ". $emple->calcularSueldoLiquido();
    echo $emple->verDatos();
?>