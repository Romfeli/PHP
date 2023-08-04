<?php
	//inicializar variables que se utilicen en el formulario
	$noches = $precioTotal = $ciudad = $coche = $error = null;

	//verificar si se ha pulsado el botón de enviar
	if (isset($_POST['enviar'])) {
        try {
            //dentro de un bloque try colocaremos el código a ejecutar (validaciones y código que dependa de las validaciones)

            //PRECIO HOTEL:

            //recuperar el número de noches de hotel
            $noches = $_POST['noches'];
        
            //llamar a una función para calcular el precio del hotel y recoger el resultado en una variable
            $precioHotel = costeHotel($noches);

            //PRECIO AVIÓN:

            //recuperar la ciudad de destino
            $ciudad = $_POST['ciudad'];

            //llamar a una función para calcular el precio del avión y recoger el resultado en una variable
            $precioAvion = costeAvion($ciudad);

            //PRECIO ALQUILER COCHE

            //recuperar el numero de dias de alquiler
            $coche = $_POST['coche'];

            //llamar a una función para calcular el precio del Coche y recoger el resultado en una variable
            $precioCoche = costeCoche($coche, $noches);

            //crear una variable para calcular el precio total del viaje (precio hotel + precio avión + precio alquiler coche)
            $precioTotal = $precioHotel + $precioAvion + $precioCoche;
        } catch(Exception $er) { //capturar una excepción
            //código a ejecutar en caso de que se produzca un error
            $error = $er->getCode()." ".$er->getMessage(); //ejecutar un método de un objeto
        }
	}

	//FUNCIONES

	//definir la función de cálculo del precio del hotel
	function costeHotel($n) {
        //validar número de noches obligatorio
        if (empty($n)) {
            //arrojar/lanzar una excepción
            throw new Exception("Número de noches debe informarse", 10);    
        } 

        //validar número de noches numérico
        if (!is_numeric($n)) {
            throw new Exception("Número de noches debe ser numérico", 11);
        }

        //validar número de noches mayor o igual a 1
        if ($n < 1) {
            throw new Exception("Número de noches debe ser igual o mayor que 1", 12);
        }

        return $n * 60;
	}

	//definir la función de cálculo del precio del avión:
	function costeAvion($c) {
        //validar ciudad informada
        if (empty($c)) {
            throw new Exception("Se bebe seleccionar una ciudad", 20);
        }

		switch ($c) {
			case 'Madrid':
				return 150;
			case 'París':
				return 250;
			case 'Los Angeles':
				return 450;
			case 'Roma':
				return 200;
            default: 
                throw new Exception("Ciudad no válida", 13);
		}
	}

	//definir la función de cálculo del precio de alquiler de coche
	function costeCoche($a) {
        global $noches;

        //if (empty($a)) {$a = 0;}

        //validar dias de alquiler numérico
        if (!is_numeric($a) && !empty($a)) {
            throw new Exception("Días alquiler coche debe ser numérico", 14);
        }

        //validar dias de alquiler no inferior a 0
        if ((int)$a < 0) {
            throw new Exception("Días alquiler coche no puede ser inferior a 0", 15);
        }

        //validar dias alquiler si está informado no puede ser superior a número de noches
        if ($a > $noches) {
            throw new Exception("Dias alquiler coche no puede ser superior a noches de hotel", 16);
        }

        //casting para forzar que la variable $a sea numérica en caso que llegue sin informar
		$precio = (int)$a * 40; //precio total alquiler

		if ($a >= 7) {
			$precio = $precio - 50; //descuento por siete o más dias
		} elseif ($a >= 3) {
			$precio = $precio - 20; //descuento por tres o más dias
		}

		return $precio;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		label {
			width: 150px;
			display: inline-block;
		}
	</style>
</head>
<body>
	<form method="post" action="#">
		<label for="noches">Número de noches:</label>
		<input type="number" name="noches" id="noches" required min="1" value="<?php echo $noches ?>">
		<br><br>
		<label for="ciudad">Destino:</label>
		<select name="ciudad" id="ciudad">
			<option <?php if ($ciudad == 'Madrid') {echo 'selected'; }?>>Madrid</option>
			<option <?php if ($ciudad == 'París') {echo 'selected'; }?>>París</option>
			<option <?php if ($ciudad == 'Los Angeles') {echo 'selected'; }?>>Los Angeles</option>
			<option <?php if ($ciudad == 'Roma') {echo 'selected'; }?>>Roma</option>
		</select>
		<br><br>
		<label for="coche">Días alquiler coche:</label>
		<input type="number" name="coche" id="coche" min="0" value="<?php echo $coche ?>">
		<br><br>
		<input type="submit" name="enviar"><br><br>
		<label>Coste total: </label>
		<input type="text" disabled value="<?php echo $precioTotal ?>">
        <br><br>
        <label></label><span><?php echo $error; ?></span>
	</form>
</body>
</html>