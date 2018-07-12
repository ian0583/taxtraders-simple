<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

$type = $_REQUEST['type'];
$number = $_REQUEST['value'];

switch ($type)
{
	case 'oddsum':
		$numbers = str_split($number);
		for($i = 0; $i < count($numbers); $i=$i+2)
		{
			$total += $numbers[$i];
		}
		break;
	case 'evensum':
		$numbers = str_split($number);
		for($i = 1; $i < count($numbers); $i=$i+2)
		{
			$total += $numbers[$i];
		}
		break;
	case 'allsum':
		$total = ($number * ($number + 1))/2;

		// for ($i = 0; $i <= $number; $i++)
		// {
		// 	$total += $i;
		// }

		break;
}

echo json_encode($total);