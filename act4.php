<?php

class plus
{


	public $add;
    public $what;

	public function addition($number1, $number2)
	{
		return $number1 + $number2;
	}


	

}
$plus = new plus();
$number1 = 2;
$number2 = -3;
    echo "The sum of {$number1} and {$number2} is ". $plus->addition($number1,$number2)."\n";


?>