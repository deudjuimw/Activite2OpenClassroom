<?php

class CalculatriceScientifique extends Calculatrice {

	public static function carre($a)
	{
		return self::multiplier($a, $a);
	}
	
	public static function inverse($a)
	{
		return self::diviser(1, $a);
	}
	
	public static function racineCarre($a)
	{
		return sqrt($a);
	}
	
	public static function estPositif($a)
	{
		return ($a>0);
	}

}