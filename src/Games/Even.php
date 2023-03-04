<?php
namespace BrainGames\Games\Even;
use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\runner;
use const BrainGames\Engine\ROUND_COUNT;

function isEven($num){
	if ($num %2 === 0){
	return 'yes';
	}
	else {
	return 'no';
	}
}

function test(){
$description = "Answer \"yes\" if the number is even, otherwise answer \"no\".";
$arrWork = [];

for ($i=0; $i<ROUND_COUNT; $i++){

	$randomNuber = rand(0, 100);	
	
	$statusRandomNumber = isEven($randomNuber);
	$arrWork[$i]['question'] = $randomNuber;
	$arrWork[$i]['result'] = $statusRandomNumber;	
}
	runner($description, $arrWork);
}