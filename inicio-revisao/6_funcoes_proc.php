<?php

//Função simples com retorno
function soma(float $a, float $b): float {
    return $a + $b;
}

// Criação da variável para armazenar o resultado da função (Deixar automatico)
$resultado = soma(13.5, 8.2);

// Exibindo resultado
echo "O resultado é: " . $resultado . "<br><br>";

// Procedimento (Função sem retorno)
function saudacao($nome = "aluno") {
    echo "Olá, $nome! Seja bem-vindo(a) ao PHP. <br>";
}

//Exibindo a saudação
saudacao();
saudacao("Maria");

// Outro procedimento
function mostraLinha() {
    echo "-------------------------- <br>";
}

mostraLinha();