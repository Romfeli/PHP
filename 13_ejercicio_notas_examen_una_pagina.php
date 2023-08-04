<?php 
    //visualizar en pantalla el contenido de un array
    //print_r($_GET);

    //inicializar variables utilizadas en el documento HTML
    $resultado = null;

    //detectar, de forma indirecta, cuando el usuario pulsa el botón del formulario
    if (isset($_GET['evaluar'])) {

        //recuperar la nota que llega del formulario
        $nota = $_GET['nota'];

        //evaluar la nota:    
        
        if (empty($nota)) {
            // Si no se introduce nada mostrar 'Nota obligatoria'
            $resultado = "Nota obligatoria";
        } else if (!is_numeric($nota)) {
            //Si la nota no es numérica mostrar el texto 'nota no numérica'
            $resultado =  "Nota no numérica";
        } else if ($nota < 0 || $nota > 10) {
            //Si la nota es menor que 0 o mayor que 10 mostrar 'nota no válida'
            $resultado =  "Nota no válida";
        } else if ($nota == 10) {
            //Si la nota es igual a 10 mostrar el texto 'Matrícula de Honor'
            $resultado =  "Matrícula de Honor";
        } else if ($nota >= 9) {
            //Si la nota es mayor o igual a 9 mostrar el texto "Excelente"
            $resultado =  "Excelente";
        } else if ($nota >= 7) {
            //Si la nota es mayor o igual a 7 mostrar el texto "Notable"
            $resultado =  "Notable";
        } else if ($nota > 5) {
            //Si la nota es mayor que 5 mostrar el texto “Aprobado"
            $resultado =  'Aprobado';
        } else if ($nota < 5) {
            //Si la nota es menor que 5 mostrar “Suspenso”
            $resultado =  "Suspenso";
        } else {
            //SI la nota es igual a 5 mostrar “Por los pelos”
            $resultado =  "Por los pelos";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Notas exámen</title>
</head>
<body>
    <form action="#" method="get">
        <label>Nota: </label>
        <input type="number" name="nota" step="0.01" min="0" max="10" required value="<?php echo $nota ?? null ?>">
        <input type="submit" value="Evaluar" name='evaluar'>
        <input type="text" disabled value="<?php echo $resultado ?>">
    </form>
</body>
</html>