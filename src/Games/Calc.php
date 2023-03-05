<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\runner;

use const BrainGames\Engine\ROUND_COUNT;

function run()
{
    $description = "What is the result of the expression?";

    $arrWork = [];

    $functionArr = [
        '*' => fn($num1, $num2) => $num1 * $num2,
        '+' => fn($num1, $num2) => $num1 + $num2,
        '-' => fn($num1, $num2) => $num1 - $num2,
    ];

    for ($i = 0; $i < ROUND_COUNT; $i++) {
        $num1 = rand(0, 10);
        $num2 = rand(0, 10);
        $oper = array_rand($functionArr);

        $correct = $functionArr[$oper]($num1, $num2);
        $question = "{$num1} {$oper} {$num2}";
        $arrWork[$i]['question'] = $question;
        $arrWork[$i]['result'] = $correct;
    }

    runner($description, $arrWork);
}
