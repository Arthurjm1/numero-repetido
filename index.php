<?php

$numerosSorteados = [];

for ($i = 0; $i < 20; $i++) {
    array_push($numerosSorteados, rand(1, 10));
}

$repeticoes = array_count_values($numerosSorteados);
$maisRepetido = max($repeticoes);

print_r($numerosSorteados);
echo '</br>O número que mais se repete é o ' . array_search($maisRepetido, $repeticoes);
echo '</br>Ele se repete ' . $maisRepetido.' vezes';