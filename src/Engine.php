<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const ROUND_COUNT = 3;

function runner($description, $arrWork)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, {$name}");

    line($description);
    foreach ($arrWork as $item) {
        line("Question: {$item['question']}");
        $answer = prompt('Your answer');

        if ($answer == $item['result']) {
            line("Correct!");
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$item['result']}'. 
            \n Let's try again, {$name}!");
            return;
        }
    }

    return line("Congratulations, {$name}!");
}
