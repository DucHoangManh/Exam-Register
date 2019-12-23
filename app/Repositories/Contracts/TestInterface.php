<?php
	
namespace App\Repositories\Contracts;

interface TestInterface {
    public function isFull($id);
    
    public function status($id);
}