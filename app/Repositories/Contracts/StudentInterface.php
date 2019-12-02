<?php
	
namespace App\Repositories\Contracts;

interface StudentInterface {
	public function findByName($name);

	public function findByCode($code);
}