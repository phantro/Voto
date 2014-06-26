<?php

function cargaEnsayos($datos) {
    $i = 0;

    foreach ($datos as $data) {
        $matriz[$i]["id"] = $data['id'];
        $matriz[$i]["usuario_id"] = $data['usuario_id'];
        $matriz[$i]["fecha"] = $data['fecha'];
        $matriz[$i]["inicio"] = $data['inicio'];
        $matriz[$i]["fin"] = $data['fin'];
        $matriz[$i]["reserva"] = $data['reserva'];
        $matriz[$i]["grupo"] = $data["grupo"];
        $i++;
    }

    $matriz[0]['cant'] = $i;

    return $matriz;
}

function horario($hora) {
    if ($hora <= 12) {
        $hora = "AM";
    } else {
        $hora = "PM";
    }
    return $hora;
}



?>