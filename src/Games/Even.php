<?php
namespace BrainGames\Games\Even;
use function cli\line;
use function cli\prompt;
use function BrainGames\Cli\helloPeople;

function isEven($num){
	if ($num %2 === 0){
	return 'yes';
	}
	else {
	return 'no';
	}
}

function test(){
line('Welcome to the Brain Game!');
$name = prompt('May I have your name?');
line("Hello, %s!, {$name}");
line("Answer \"yes\" if the number is even, otherwise answer \"no\".");
$raund = 3;

for ($i=0; $i<$raund; $i++){

	$answe = fn($key) => $answeConst[$key];

	$randomNuber = rand(0, 100);	
	
	line("Question:' {$randomNuber}");
	
	$answer = prompt('Your answer:' .$randomNuber);
	
	$statusRandomNumber = isEven($randomNuber);
	
	if($statusRandomNumber === $answer){
		line("Correct!");
	}else{
		line("'{$answer}' is wrong answer ;(. Correct answer was '{$statusRandomNumber}'. \n Let's try again, {$name}!");
		return;	
	}
}
		return line("Congratulations, {$name}!");

}