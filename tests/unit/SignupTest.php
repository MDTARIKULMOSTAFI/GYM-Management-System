<?php

class SignupTest extends \PHPUnit\Framework\TestCase
{
	//protected function getUserModel(){}

	protected $signup;

	public function setUp(): void
	{
		//the line below can be used to check whether setUp runs before each test block.
		//var_dump('1');

		$this->signup = new \App\Models\signup;

		//the line below shows actual use case of setUp() as repeating the line below for every test is unnecessary.
		//$this->user = new \App\Models\User;(['email' => 'alex@codesource.com']);
		
	}


	public function testThatWeCanGetTheUserName()
	{
		$this->signup->setUserName('admin');

		$this->assertEquals($this->signup->getUserName(), 'admin');
	}

	public function testThatWeCanGetThePasssword()
	{
		$this->signup->setPassword('pass');

		$this->assertEquals($this->signup->getPassword(), 'pass');
	}

}