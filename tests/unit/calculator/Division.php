<?php

class DivisionTest extends \PHPUnit\Framework\TestCase
{
	/** @test */
	public function divies_given_operands(){
		$division = new \App\Calculator\Divisio;
		$division->setOperands([100,2]);

		$this->assertEquals(50, $division->calculate());
	}

	/** @test */
	public function no_operands_throws_exception(){

		$this->expectException(App\Calculator\Exceptions\NoOperandsException::class);
		$division = new \App\Calculator\Division;
		$division->calculate();
	}

	/** @test */
	public function remove_division_by_zero(){
		$division = new \App\Calculator\Divisio;
		$division->setOperands([100, 0, 0, 5,0 ]);

		$this->assertEquals(2, $division->calculate());
	}
}