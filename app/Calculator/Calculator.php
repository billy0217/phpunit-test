<?php

namespace App\Calculator;

class Calculator {
	protected $operations= [];

	public function setOperation(OperationInterface $operation){
		$this->operations[] = $operation;
	}

	public function setOperations(array $operations){


		$fillterdOperations = array_filter($operations, function($operation){
			if(!$operation instanceof OperationInterface){
				return false;
			}

			return true;
		});

		$this->operations = array_merge($this->operations, $fillterdOperations);
	}

	public function getOperations(){
		return $this->operations;
	}

	public function calculate(){
		return $this->operations[0]->calculate();
	}
}