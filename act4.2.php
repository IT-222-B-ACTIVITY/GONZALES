<?php

class converter
{


	public $m;
    public $what;

	public function centimeters($convert)
	{
		if ($convert > 0) {
			$this->m *= $convert;
		}
	}


	

}
$convert = new converter();
$convert->what= "The centimeter is: ";
$convert->m= 20;
$convert->centimeters(10); 

echo $convert->what;
echo $convert-> m;

?>