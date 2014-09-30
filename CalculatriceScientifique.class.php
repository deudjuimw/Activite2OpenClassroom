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
		if(!estPositif($a)) throw new Exception('Impossible de calculer la racine carre d\'un nombre négatif !!!');
		return sqrt($a);
	}
	
	public static function estPositif($a)
	{
		return ($a>0);
	}

}