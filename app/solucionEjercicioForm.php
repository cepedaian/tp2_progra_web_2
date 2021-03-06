<?php


function validarNombre($nombre){
    
    $arrayNombre = str_split($nombre);

    if((sizeof($arrayNombre))<3){
        return "El nombre debe tener un mínimo de tres letras.";
    }else if(sizeof($arrayNombre)>11){
        return "El nombre debe tener un máximo de diez letras.";
    }else if(ctype_alpha($nombre)==false){
        return "El nombre deben ser solo letras.";
    }else{
        return "El nombre es correcto.";
    }

}

function validarApellido($apellido){
    $arrayApellido = str_split($apellido);

    if((sizeof($arrayApellido))<5){
        return "El apellido debe tener un mínimo de cinco letras.";
    }else if(sizeof($arrayApellido)>11){
        return "El apellido debe tener un máximo de diez letras.";
    }else if(ctype_alpha($apellido)==false){
        return "El apellido deben ser solo letras.";
    }else{
        return "El apellido es correcto.";
    }

}

function validarDni($dni){
   
    $arrayNum = str_split($dni);

    if((sizeof($arrayNum)==8)&&(is_numeric($dni))==true){
        return "El dni es correcto";
    }else{
        return "El dni debe contener 8 números";
    }
}

function validarEmail($email){    
if($email != null){
     $regex = "/^[a-zA-Z0-9]+$/";

     //parto el mail en dos substrings a partir del @.
     $parte1 = preg_split('/@/',$email);   
    
     //parto la parte que sigue al @ en dos substring a partir del "."
     $parte2 = preg_split('/[.]+/',$parte1[1]);

     //convierto substring en array para medirlo
     
     $arrayParte1 = str_split($parte1[0]);
     $arrayParte2 = str_split($parte2[0]);
     $arrayParte3 = str_split($parte2[1]);
     
     // validaciones   
     
     if( (!preg_match($regex,$parte1[0])) or (sizeof($arrayParte1)<3) ) {
        return "La parte x contiene menos de 3 caracteres o no es alfanumérica";
     }else if ( (!preg_match($regex,$parte2[0])) or (sizeof($arrayParte2)<3) ){
         return "La parte y contiene menos de 3 caracteres o no es alfanumérica";
     }else if ( (!preg_match($regex,$parte2[1])) or (sizeof($arrayParte3)<3) ){
         return "La parte z contiene menos de 3 caracteres o no es alfanumérica";
     }else{
         return "Email Válido";
     } 
    }else{
        return "No ha ingresado Email";
    }
    }

function imprimirSexo($sexo){
    if($sexo == "M"){
        $respuesta = "Sexo masculino";
    }else if($sexo == "F"){
        $respuesta = "Sexo femenino";
    }else if($sexo == "NB"){
        $respuesta = "No Binarie";
    }else{
        $respuesta = "Complete el sexo";
    }

    return $respuesta;
}

function validarFechaNacimiento($fechaNac){

  $fechaRegex = '/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])\2(\d{4})$/';

  if( preg_match($fechaRegex,$fechaNac) ){
        return "Fecha Válida";
    }else{
        return "Fecha Inválida";
    }  
}

function validarDocumentacionPresentada($tipoDoc){

    if($tipoDoc != true){
        print "La documentación presentada es: ";
        foreach($tipoDoc as $tipos){
            print $tipos;
        }
    }else{
        print "No ha ingresado documentación";
    }

}

?>
