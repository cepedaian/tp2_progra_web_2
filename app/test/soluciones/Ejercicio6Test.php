<?php

use PHPUnit\Framework\TestCase;

include_once './solucionEjercicioForm.php';

class Ejercicio6Test extends TestCase{ 
    // -----TEST DEL NOMBRE------
    public function test_devuelve_nombre(){
        $resultado = validarNombre("Pedro");
        $this->assertEquals("El nombre es correcto.", $resultado);    
    }

    public function test_valida_nombre_corto(){
        $resultado = validarNombre("ia");
        $this ->assertEquals("El nombre debe tener un mínimo de tres letras.",$resultado);    
    }

    public function test_valida_nombre_largo(){
        $resultado = validarNombre("la delio valdez");
        $this ->assertEquals("El nombre debe tener un máximo de diez letras.",$resultado);    
    }

    public function test_valida_nombre_letras(){
        $resultado = validarNombre("111111");
        $this ->assertEquals("El nombre deben ser solo letras.",$resultado);    
    }
    
    // -----TEST DEL APELLIDO------
    public function test_devuelve_apellido(){
        $resultado = validarApellido("Luque");
        $this->assertEquals("El apellido es correcto.", $resultado);    
    }

    public function test_valida_apellido_corto(){
        $resultado = validarApellido("ia");
        $this ->assertEquals("El apellido debe tener un mínimo de cinco letras.",$resultado);    
    }

    public function test_valida_apellido_largo(){
        $resultado = validarApellido("la delio valdez");
        $this ->assertEquals("El apellido debe tener un máximo de diez letras.",$resultado);    
    }

    public function test_valida_apellido_letras(){
        $resultado = validarApellido("111111");
        $this ->assertEquals("El apellido deben ser solo letras.",$resultado);    
    }
    // -----TEST DEL DNI------
    
    public function test_valida_dni_de_ocho_numeros(){
        $resultado = validarDni("11111111");
        $this ->assertEquals("El dni es correcto",$resultado);    
    }    
    public function test_valida_dni_menos_de_ocho_numeros(){
        $resultado = validarDni("111");
        $this ->assertEquals("El dni debe contener 8 números",$resultado);    
    }

    // -----TEST DEL MAIL------

    
    // -----TEST DEL SEXO------

    public function test_valida_sexo_masculino(){
        $resultado = imprimirSexo("M");
        $this ->assertEquals("Sexo masculino",$resultado);
    }

    public function test_valida_sexo_femenino(){
        $resultado = imprimirSexo("F");
        $this ->assertEquals("Sexo femenino",$resultado);
    }

    public function test_valida_sexo_no_binarie(){
        $resultado = imprimirSexo("NB");
        $this ->assertEquals("No Binarie",$resultado);
    }

    // -----TEST DE LA FECHA DE NACIMIENTO------

    public function test_valida_fecha_nacimiento_correcto(){
        $resultado = validarFechaNacimiento("11/11/1111");
        $this ->assertEquals("Fecha Válida",$resultado);
    }
    
    public function test_valida_fecha_nacimiento_incorrecto(){
        $resultado = validarFechaNacimiento("111/1/11");
        $this ->assertEquals("Fecha Inválida",$resultado);
    }
}

