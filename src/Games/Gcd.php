<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\runner;

use const BrainGames\Engine\ROUND_COUNT;

function nod(int $num1, int $num2): int
{
    while ($num1 !== 0 && $num2 !== 0) {
        if ($num1 > $num2) {
            $num1 = $num1 % $num2;
        } else {
            $num2 = $num2 % $num1;
        }
    }
    return $num1 + $num2;
}

function run()
{
    $description = "Find the greatest common divisor of given numbers.";
    $arrWork = [];
    for ($i = 0; $i < ROUND_COUNT; $i++) {
        $num1 = rand(0, 100);
        $num2 = rand(0, 100);

        $correct = nod($num1, $num2);
        $question = "{$num1} {$num2}";
        $arrWork[$i]['question'] = $question;
        $arrWork[$i]['result'] = $correct;
    }

    runner($description, $arrWork);
}
