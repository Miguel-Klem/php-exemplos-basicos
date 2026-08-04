<?php

//Declaração das variáveis
$idade = 19;
$temDocumento = true;

// Condicional com operador (E)
if ($idade >= 18 && $temDocumento == true) {
    echo "Pode tirar a carteira de motorista";
} else {
    echo "Não pode tirar a carteira de motorista";
}

// Declaração das variáveis
$feriado = false;
$fimDeSemana = true;

// Condicional com operador (OU)
if ($feriado || $fimDeSemana) {
    echo "\nHoje não tem aula";
} else {
    echo "\nNão é feriado";
}