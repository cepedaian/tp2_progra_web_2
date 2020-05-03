<?php
include_once "solucionEjercicioForm.php";    

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$fechaNac = $_POST['fechaNac'];



 



print  validarNombre($nombre) ."<br>" .validarApellido($apellido) ."<br>" .validarDni($dni) ."<br>" .validarEmail($email)

."<br>" .imprimirSexo($sexo) ."<br>" .validarFechaNacimiento($fechaNac) ."<br>" ;


if(isset($_POST['tipoDoc'])){
    $tipoDoc = $_POST['tipoDoc'];
    validarDocumentacionPresentada($tipoDoc);
}else{
    print "No ha ingresado documentación";
}





?>