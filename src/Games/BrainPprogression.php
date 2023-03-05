<?php

namespace BrainGames\Games\BrainPprogression;

use function BrainGames\Engine\runner;

use const BrainGames\Engine\ROUND_COUNT;

function progression()
{
	$dlinaProgress = rand(5, 10);
	$startNum = rand(1, 10);
	$razd = rand(2, 10);

	$arefProgress = [];

	for ($i = 0; $i < $dlinaProgress; $i++) {
		$arefProgress[] = $startNum;
		$startNum = $startNum + $razd;
	}
	return $arefProgress;
}

function run()
{
	$description = 'What number is missing in the progression?';

	for ($i = 0; $i < 3; $i++) {
		$arr = progression();

		$randonNum = rand(0, count($arr) - 1);
		$arrWork[$i]['result'] = $arr[$randonNum];

		$arr[$randonNum] = "..";

		$arrWork[$i]['question'] = implode(" ", $arr);
	}
	runner($description, $arrWork);
}
