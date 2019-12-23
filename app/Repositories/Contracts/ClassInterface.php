<?php
	
namespace App\Repositories\Contracts;

interface ClassInterface {
	public function findByExam($id);

	public function registerStatus($id);
}