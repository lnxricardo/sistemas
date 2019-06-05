<?php

function segundos($segundos){
    $horas = floor($segundos / 3600);
    $minutos = floor($segundos % 3600 / 60);
    $segundos = $segundos % 60;
    return sprintf("%d:%02d:%02d", $horas, $minutos, $segundos);
}

require 'Cadastro.class.php';
$query  = new Cadastro();

$total = $query->getSomaHoras();

foreach($total as $resultado){
    echo $resultado['total_horas'];
}

    // print_r($total);

    // $lista = $total;
    // $soma = 0;
    // foreach($lista as $item){
    //     echo '<p>'.$item.'<p>';


    //     $calc = 0;
    //     list($horas,$minutos,$segundos) = explode(':',$item);
    //     $calc = $horas * 3600 + $minutos * 60 + $segundos;

    //     echo '<p>'.$item.' - em segundos '.$calc.'<p>';

    //     $soma = $soma + $calc;
    // }

    // echo '<p>'.segundos($soma).'<p>';


