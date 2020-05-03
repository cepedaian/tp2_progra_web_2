<?php
include_once "solucionEjercicioForm.php";    

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$fechaNac = $_POST['fechaNac'];
$tipoDoc = $_POST['tipoDoc'];

print  validarNombre($nombre) ."<br>" .validarApellido($apellido) ."<br>" .validarDni($dni) ."<br>" .validarEmail($email)

."<br>" .imprimirSexo($sexo) ."<br>" .validarFechaNacimiento($fechaNac) ."<br>" ;

print "La documentación presentada es: ";

foreach($tipoDoc as $tipos){
    print $tipos ."-";
}



?>