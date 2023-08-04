<?php 

    //el array escalar para guardar datos relacionados entre si NO es demasiado útil

    $datosPersona[0] = 'Luis Rodriguez';
    $datosPersona[1] = '44444444P';
    $datosPersona[2] = 'c/ Pepe Gotera s/n';
    $datosPersona[3] = 'Barcelona';
    $datosPersona[4] = '08000';

    echo "$datosPersona[0] // $datosPersona[2]";
    echo '<hr>';

    //mismo ejemplo pero utilizando un array asociativo:

    $datosPersonaAsoc['nombre'] = 'Luis Rodriguez';
    $datosPersonaAsoc['nif'] = '44444444P';
    $datosPersonaAsoc['direccion'] = 'c/ Pepe Gotera s/n';
    $datosPersonaAsoc['poblacion'] = 'Barcelona';
    $datosPersonaAsoc['cp'] = '08000';

    echo "$datosPersonaAsoc[nombre] - $datosPersonaAsoc[direccion]";
?>