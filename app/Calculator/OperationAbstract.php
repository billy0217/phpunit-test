<?php

namespace App\Calculator;

abstract class OperationAbstract{
	protected $operands;

	public function setOperand(array $operands){

		$this->operands = $operands;

	}

}