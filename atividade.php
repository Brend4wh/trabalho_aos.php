<?php

$produto = [
        "produto" => "Camisa DnD - Tamanho M",
        "data_pagamento" => "01/02/2024",        
        "pago" => false
        ];
        
function produtos($dados_informativos){
    
    if($dados_informativos["pago"]){
        echo "foi pago";
    }else{
        echo "nao foi pago";
    }
    
};

produtos($produto); //associa a função com a variavel 


$media = [
            "nome" => "João",
            "notas" => [
            "prova1" => 8,
            "prova2" => 7,
            "prova3" => 6,
            "prova4" => 9]
        ];
        
function medias($calculo){
    
    $calcular_media = 
    ($calculo["notas"]["prova1"] + //se chama 2 arrays associativas uma dentro da outra atravez de '[][]' 
    $calculo["notas"]["prova2"] +
    $calculo["notas"]["prova3"] +
    $calculo["notas"]["prova4"])/4;
    
    echo"\n{$calcular_media}\n";
    
};

medias($media);
?>
