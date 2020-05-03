<?php
include_once "soluciones.php";    
?>
<!DOCTYPE html>
<html>
<title>TP 4 - PHP</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/estiloFormulario.css">        
<style>
    body, html {
        height: 100%;
        color: #777;
        line-height: 1.8;
        font-family: "Lato", sans-serif;
    }

    .background {
        background-image: url('./images/background.jpg');
        min-height: 100%;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        text-align: center;
    }

</style>
<body>

<div class="background w3-display-container w3-opacity-min">
    <div class="w3-display-middle">
        <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">
            Trabajo práctico IV PHP <br/>
            Manejo de vectores y formularios</span>
    </div>
</div>

<div class="w3-light-gray">
    <div class="w3-content w3-container  w3-padding-64">
        <h3 class="w3-center">Instructivo de uso</h3>
        <p>En los ejercicios solicitados a continuación usted deberá realizar los siguientes pasos:</p>
        <ul>
            <li>Crear y escribir la funcion solucionEjercicioX() que tome por parametro valores y devuelve una variable (debe ser un array si son varios valores).</li>
            <li>Indicar por pantalla que valores se le pasó a la función y que valor fue el resultante. Y si el ejercicio lo indica mostrar el html resultante (por ejemplo, una imagen)</li>
            <li>Si los ejercicios requieren el envío de un formulario, deberá crear en el index el formulario, y crear el archivo soluciónEjercicioX que tome los valores enviados por el formulario,
                realice la lógica necesaria en la función soluciónEjercicioX e imprima el html indicado.</li>
            <li>En todos los casos la lógica de la resolución del servidor debe realizarce en la función soluciónEjercicioX. Para facilitar el testeo, si la función depende de algo externo como la hora, se le pasará por parámetro.</li>
            <li>Los ejercicios del 1 al 5 poseen test que deben ejecutar exitosamente para entregar el TP. En el ejercicio 6 ustedes deberán escribir los test necesarios. En todos los casos, cada prueba extra que quieran realizar para validar su código, acompañenla del agregado de un test :)</li>
        </ul>
    </div>
</div>


<div class="w3-content w3-container ">

    <div class="w3-padding-64">
        <h3 class="w3-center">Ejercicio 1</h3>
        <p>Cree una función que según la hora del día,
            devuelva el texto “buenos días”, “buenas tardes” o “buenas noches” según corresponda</p>
        <span>Criterio:</span>
        <ul>
            <li>de 7 a 12 dirá Buenos días</li>
            <li>de 12 a 20 dirá Buenas tardes</li>
            <li>de 20 a 7 dirá Buenas noches</li>
        </ul>
        <p class="w3-center w3-light-gray w3-padding">
            <em>
                <?php 
                   $hora = 13;
                   $saludo = solucionEjercicio1($hora);

                   echo "dada la hora: " .$hora .", " ."el saludo es: "  .$saludo;


                ?>
            </em>
        </p>
    </div>

    <hr class="rounded w3-border-amber">

    <div class="w3-padding-64">
        <h3 class="w3-center">Ejercicio 2 - Imágenes dinámicas</h3>
        <p>Cree una función que según la hora del
            día, muestre distintas imagenes (las mismas se encuentran en la carpeta images)</p>
        <p class="w3-center w3-light-gray w3-padding">
            <em>
            <?php 
                   $hora = 20;
                   $imagen = solucionEjercicio2($hora);

                   echo "Dada la hora: " .$hora .", " ."la imagen es: "  .$imagen;


                ?>
            </em>
        </p>
    </div>

    <hr class="rounded w3-border-amber">

    <div class="w3-padding-64">
        <h3 class="w3-center">Ejercicio 3 - Manejo de array</h3>
        <p>Teniendo como valor de referencia un array con datos. Cree una función que dada una mascota (perro, gato, etc) indique su nombre (y posición en el array)</p>
        <ol>
            <li>Perro -> Titan</li>
            <li>Gato -> Galileo</li>
            <li>Serpiente -> Liopis</li>
            <li>Caballo -> Porteña</li>
        </ol>
        <p class="w3-center w3-light-gray w3-padding">
            <em>
            <?php 
                   $mascota = "Gato";
                   $resultado = solucionEjercicio3($mascota);

                   echo "La mascota es: " .$mascota .", " ."el nombre y la posición es: ";
                   
                   foreach($resultado as $value){
                       print $value ."-";
                   }


                ?>
            </em>
        </p>
    </div>

    <hr class="rounded w3-border-amber">


    <div class="w3-padding-64">
        <h3 class="w3-center">Ejercicio 4 - Manejo de Arrays</h3>
        <p>Invertir Array: Tomando como base el siguiente array, recórrala por orden y de-
            vuelva otro array invirtiendo la posición de los elementos de la primera.</p>

        <p class="w3-center w3-light-gray w3-padding">
            <em>
            <?php 
                   $cosas = array ("gato","perro","caballo","pez","tomate", 2, 5.6);
                   $cosasInvertidas = solucionEjercicio4($cosas);

                    foreach($cosas as $cosa){
                        print $cosa ."-";
                    }
                    print "<br>";
                    foreach($cosasInvertidas as $cosa){
                        print $cosa ."-";
                    }    
                ?>
            </em>
        </p>
    </div>

    <hr class="rounded w3-border-amber">

    <div class="w3-padding-64">
        <h3 class="w3-center">Ejercicio 5 - Manejo de Arrays</h3>
        <p>Máximo: devuelva el máximo valor del array.</p>

        <p class="w3-center w3-light-gray w3-padding">
            <em>
                <?php
                    $valores=array(2,4,19,12,25,78,105,99);
                    $maximo = solucionEjercicio5($valores);

                    print "Dado el array: ";

                    foreach($valores as $val){
                        print $val ."-";
                    }

                    print "<br>El máximo valor es: " .$maximo;

                ?>
            </em>
        </p>
    </div>

    <hr class="rounded w3-border-amber">

    <div class="w3-padding-64">
        <h3 class="w3-center">Ejercicio 6 - Formulario, validaciones y ¿cómo atacar un requisito complejo?</h3>
        <p>Construya un formulario de registración aquí, el cual
            posea los siguientes campos obligatorios:</p>
        <ul>
            <li>Nombre (validar sólo letras, mínimo 5, máximo 10 letras)</li>
            <li>Apellido (validar sólo letras, mínimo 3, máximo 10 letras)</li>
            <li>Dni (validar 8 números)</li>
            <li>Email (validar que tenga 3 partes x@y.z donde x, y, z deben contener al menos 3 caracteres, que pueden ser letras o números)</li>
            <li>Sexo (seleccionar una opción mediante un radio button): F (Femenino) o M (mas-
                culino)</li>
            <li>Fecha de Nacimiento (validar formato dd/mm/yyyy)</li>
            <li>Documentacion Presentada: (seleccionar ninguna, una o más opciones): DNI, Partida de Nacimiento, Libreta de casamiento, Certificado de convivencia</li>
        </ul>
        <p>
            Existen 2 botones: 1 de tipo submit el cual envía los datos ingresados mediante

            POST a un archivo “registración.php”, y un botón cancelar, el cual limpia el formulario.

            En el archivo “registración.php”, deberá mostrar un mensaje de confirmación de recepción de datos, mostrando los datos recibidos y los errores de existir.
        </p>

        <p>
            Para guiar el desarrollo,solicitamos que realicen este ejecicio aplicando TDD, escribiendo primero los test de las funciones PHP de validación,
            luego la implementación de dichas validaciones. Además, trabajaremos de modo incremental  validando rápido nuestro desarrollo y encontrando los errores de a uno. Buscaremos dividir el problema en otros más simples aplicando la regla de "divide y trinfuras".
        </p>
        <span>Modo de trabajo:</span>
        <ul>
            <li>Comienzo con un formulario que envía sólo un nombre</li>
            <li>En regitro.php recibo variable nombre se envio a la funcion validarNombre que por ahora no hace nada.</li>
            <li>Imprimo el resultado por pantalla. Chequeo que esto funcione (ya garantizo envio de datos, llamada a función)</li>
            <li>Creo un test que valide un nombre correcto y lo devuelva. Ejecuto test, fallan. Implemento (en si, no hará más que devolver el nombre). Ejecuto test, pasan</li>
            <li>Creo un test que valide un nombre incorrecto por ser corto y devuelva el error. Ejecuto test, falla sólo este. Implemento validacion rango mínimo. Ejecuto test, pasan</li>
            <li>Creo un test que valide un nombre incorrecto por ser largo y devuelva el error. Ejecuto test, falla sólo este. Implemento validacion rango máximo. Ejecuto test, pasan</li>
            <li>Tomo siguiente elemento del formulario y realizo los pasos por cada uno.</li>
        </ul>
        <p>Cada iteración nos garantiza que todo lo anterior sigue funcionando gracias a los test :) </p>
        <p>A su vez, si tenemos un error, sólo será de los últimos minutos de desarrollo, y no de las últimas horas</p>
        <p class="w3-center w3-light-gray w3-padding">
            <em>
              <div class="formulario">  
                <form action="registracion.php" method="POST">
                    <label for="nombre">Nombre: </label>
                    <input type="text" name="nombre"> <br>
                    <label for="apellido">Apellido: </label>
                    <input type="text" name="apellido">     
                    <label for="dni">DNI: </label>
                    <input type="text" name="dni"> 
                    <label for="email">Email: </label>
                    <input type="text" name="email"> 
                    <label for="sexo">Sexo:</label>     
                    <div class="sexo">
                       <div><input type="radio" name="sexo" value="M"><p>Masculino</p></div>  
                       <div><input type="radio" name="sexo" value="F"><p>Femenino</p></div>     
                       <div><input type="radio" name="sexo" value="NB"><p>No Binarie</p></div> 
                    </div>
                    <label for="fechaNac">Fecha Nacimiento: </label>
                    <input type="text" name="fechaNac">    
                    <label for="tipoDoc">Documentación a Presentar: </label>
                    <select multiple size="4" name="tipoDoc[]">
                        <option value="DNI">DNI</option>
                        <option value="PDN">Partida de Nacimiento</option>
                        <option value="LDC">Libreta de Casamiento</option>
                        <option value="CCC">Certificado de Convivencia</option>
                    </select> <br> 
                    <div class="btn">
                        <input class="enviar" type="submit" value="Enviar">
                        <input class="limpiar" type="reset" value="Limpiar formulario">
                    </div>
                </form>
              </div>          
            </em>
        </p>
    </div>

    <!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
    <span>Programación web 2 - UNLaM</span>
</footer>


</body>
</html>