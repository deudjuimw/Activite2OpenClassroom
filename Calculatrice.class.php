<?php

class Calculatrice {

	public static function additionner($a, $b)
	{
		return ($a+$b);
	}
	
	public static function soustraire($a, $b)
	{
		return ($a-$b);
	}
	
	public static function multiplier($a, $b)
	{
		return ($a*$b);
	}
	
	public static function diviser($a, $b)
	{
		if ($b == 0) throw new Exception('Impossible de diviser un nombre par 0 !!!');
		return ($a/$b);
	}

}