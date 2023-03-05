<?php

namespace BrainGames\Games\Brainprime;

use function BrainGames\Engine\runner;

use const BrainGames\Engine\ROUND_COUNT;

function isPrime(int $num)
{
    for ($i = 2; $i < $num / 2; $i++) {
        if ($num % $i == 0) {
            return 'no';
        }
    }
    return 'yes';
}

function run()
{
    $description = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    for ($i = 0; $i < ROUND_COUNT; $i++) {
        $chislo = rand(3, 50);

        $res = isPrime($chislo);
        $arrWork[$i]['result'] = $res;

        $arrWork[$i]['question'] = $chislo;
    }
    runner($description, $arrWork);
}
