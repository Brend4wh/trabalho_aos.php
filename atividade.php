<?php

//Nomes:         2°Info
//Brenda Gabriela Penha Candido Duarte
//Rafaela Baú zanetti
//Gustavo Ricardo de carvalho

$produto = [
        "produto" => "Camisa DnD - Tamanho M",
        "data_pagamento" => "01/02/2024",        
        "pago" => false
        ];
        
function produtos($dados_informativos){
    
    if($dados_informativos["pago"]){
        echo "\nfoi pago\n";
    }else{
        echo "\nnao foi pago\n";
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


$alunos = 
    [
        [
            "nome" => "João",
            "idade" => 20
        ],
        [
            "nome" => "Maria",
            "idade" => 22
        ],
        [
            "nome" => "José",
            "idade" => 21
        ]
    ];

    function dados($dados_alunos){
        //foreach -> faz a assoaciação das arrays, fazendo q mostre todos os elementos contidos nela
        foreach ($dados_alunos as $dados_alunos){

        echo "\nNome: {$dados_alunos["nome"]} \nIdade: {$dados_alunos["idade"]} \n";
        };
    };
    dados($alunos);
    
    
    $usuario = 
    [
        [
            "nome" => "João",
            "idade" => 20,
            "email" => "email@email.com",
            "senha" => "12345678"
        ],
        [
            "nome" => "Guilherme",
            "idade" => 17,
            "email" => "meu.email@email.com",
            "senha" => "abc12312312"
        ]
    ];
    
    function cadastro($cadastro_usuario){
        foreach($cadastro_usuario as $cadastro_usuario){
            if (strlen($cadastro_usuario["nome"]) > 3) {
                echo "\n{$cadastro_usuario["nome"]} tem mais de 3 caracteres";
            }else{
                echo "\n{$cadastro_usuario["nome"]} tem menos de 3 caracteres";
            };
            
            if($cadastro_usuario["idade"] >18){ 
                echo"\n{$cadastro_usuario["idade"]} é maior que 18";
            }else{
                echo"\n{$cadastro_usuario["idade"]} é menor que 18";
            };
            
            if (strlen ($cadastro_usuario["email"]) > 10){
                echo "\n{$cadastro_usuario["email"]} tem mais de 10 caracteres";
            }else{
                echo "\n{$cadastro_usuario["email"]} não tem mais de 10 caracteres";
            };
            
            if (strlen ($cadastro_usuario["senha"]) > 10){
                echo "\n{$cadastro_usuario["senha"]} tem mais de 8 caracteres";
            }else{
                echo "\n{$cadastro_usuario["senha"]} não tem mais de 8 caracteres";
            };
            
            if($cadastro_usuario ["email"] = false){
                
                echo "\neste email ja esta cadastrado\n";
            }
            else{
                echo "\ncadastro feito com sucesso\n";
            };
    };
    };
    cadastro($usuario);

?>
