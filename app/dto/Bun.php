<?php

class bun
{

	const owner = 'Bakery inc.';
	public static $ownertwo = 'UAB kepykla';
	Private $a = 'A';
	protected $b = 'B';
	public $c = 'C';

}

$bun = new bun();

print_r(bun::owner);
print_r(bun::$ownertwo);
die();

print_r($bun);
print_r($bun->c);