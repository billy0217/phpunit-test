<?php

class AddtionTest extends \PHPUnit\Framework\TestCase
{
	/** @test */
	public function add_up_given_operands(){
		$addition = new \App\Calculator\Addition;
		$addition->setOperand([5,10]);

		$this->assertEquals(15, $addition->calculate());
	}

	/** @test */
	public function no_operands_throws_exception(){

		$this->expectException(App\Calculator\Exceptions\NoOperandsException::class);
		$addition = new \App\Calculator\Addition;
		$addition->calculate();
	}

}