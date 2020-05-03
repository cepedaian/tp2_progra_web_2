<?php

function solucionEjercicio1($hora){
    
    if(($hora >= 7) && ($hora < 12)){
        return "buenos días!";
    
    }else if (($hora >= 12)&&($hora < 20)){
        
        return "buenas tardes!";
    
    }else if (($hora >= 20)&&($hora <= 24)){

        return "buenas noches!";
    
    }else if ($hora < 7){

        return "buenas noches!";    
    
    }else if ($hora > 24){
        
        return "Error, hora inválida";}
    
}


function solucionEjercicio2($hora){
    
    if(($hora >= 7) && ($hora < 12)){
        
        return "<img src=\"images/buenosdias.jpg\">";
    
    }else if (($hora >= 12)&&($hora < 20)){
        
        return "<img src=\"images/buenastardes.jpg\">";
    
    }else if (($hora >= 20)&&($hora <= 24)){

        return "<img src=\"images/buenasnoches.jpeg\">";
    
    }else if ($hora < 7){

        return "<img src=\"images/buenasnoches.jpg\">";    
    
    }else if ($hora > 24){
        
        return "<img src=\"images/saludo.jpg\">";}

    }


function solucionEjercicio3($mascota){
    
    $mascotas = array(
         "Perro" => "Titan",
         "Gato" => "Galileo",
         "Serpiente" => "Liopis",
         "Caballo"=> "Porteña"
        );    
    
    $posicion = array("posicion" => array_search($mascota,array_keys($mascotas)));        
    
    $resultado = array("nombre" => $mascotas[$mascota],"posicion" => $posicion["posicion"]);

    return $resultado;
}


function solucionEjercicio4($cosas){
    
    $cosasInvertidas = array_reverse($cosas);
    
    return $cosasInvertidas;
}

function solucionEjercicio5($valores){
    return max($valores);
}
