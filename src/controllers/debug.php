<?php
namespace your_project\controllers;

use nx\annotations\router\Get;
use nx\parts\callApp;

class debug{
	use callApp;

	#[Get("/debug")]
	public function hello(): void{
		$this->out(['hello' => 'world']);
	}
}