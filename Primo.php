<?php

function Primo($inicial, $final)
{
    $array = [];
    for($index = $inicial + 1; $index < $final; $index++){
        $max_divisores = 2;
        for($aux = $index; $aux >= 1; $aux--){
            // Divide por todos os numeros possíveis entre 1 e $index, caso tenha exatamente 2 divisões inteiras, é primo
            if (($index % $aux) == 0) {
                $max_divisores--;
            }
        }
        // Insere os numeros primos no array
        if ($max_divisores == 0){
            array_push($array, $index);
        }
    }
    return($array);
}

// Exemplo
print_r(Primo(10, 29));