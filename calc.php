<?php


$num1 = (trim($_POST['num1']));
$num2 = (trim($_POST['num2']));

$somar = $num1 + $num2;

$subtração = $num1 -  $num2;

$multiplicacao = $num1 * $num2;

$divisao = $num1 / $num2;

$data = [
    'soma' => $soma,
    'subtracao' => $subtração,
    'multiplicacao' => $multiplicacao,
    'divisao' => $divisao
];

echo json_encode($data);

/**git remote add origin https://github.com/francinelevindo/aula7tarde.git
git branch -M main
git push -u origin main */