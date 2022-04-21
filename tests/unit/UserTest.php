<?php

class UserTest extends \PHPUnit\Framework\TestCase
{
	protected $user;

	public function setUp():void{
		$this->user = new \App\Models\User;
	}

	/** @test */
	public function test_that_we_can_get_first_name(){
		//$user = new \App\Models\User;
		$this->user->setFirstName('Billy');

		$this->assertEquals($this->user->getFirstName(), 'Billy');
	}

	public function testThatWeCanGetLastName(){
		//$user = new \App\Models\User;
		$this->user->setLastName('Test');

		$this->assertEquals($this->user->getLastName(), 'Test');
	}

	public function testFullNameIsReturned(){
		//$user = new \App\Models\User;
		$this->user->setFirstName('Billy');
		$this->user->setLastName('Test');

		$this->assertEquals($this->user->getFullName(), 'Billy Test');
	}

	public function testFirstAndLastNameAreTrimmed(){
		//$user = new \App\Models\User;
		$this->user->setFirstName('Billy   ');
		$this->user->setLastName('   Test');

		$this->assertEquals($this->user->getFirstName(), 'Billy');
		$this->assertEquals($this->user->getLastName(), 'Test');
	}

	public function testEmailAddressCanBeSet(){
		$user = new \App\Models\User;
		$user->setEmail('billy@test.com');
		
		$this->assertEquals($user->getEmail(), 'billy@test.com');
	}

	public function testEmailVariablesContainCorrectValues(){
		$user = new \App\Models\User;
		$user->setFirstName('Billy');
		$user->setLastName('Test');
		$user->setEmail('billy@test.com');

		$emailVariables = $user->getEmailVariables();

		$this->assertArrayHasKey('full_name', $emailVariables);
		$this->assertArrayHasKey('email', $emailVariables);

		$this->assertEquals($emailVariables['full_name'], 'Billy Test');
		$this->assertEquals($emailVariables['email'], 'billy@test.com');
	}

}