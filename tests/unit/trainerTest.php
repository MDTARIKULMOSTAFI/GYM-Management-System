<?php

class trainerTest extends \PHPUnit\Framework\TestCase
{
	//protected function getUserModel(){}

	protected $trainer;

	public function setUp(): void
	{
		//the line below can be used to check whether setUp runs before each test block.
		//var_dump('1');

		$this->trainer = new \App\Models\trainer;

		//the line below shows actual use case of setUp() as repeating the line below for every test is unnecessary.
		//$this->user = new \App\Models\User;(['email' => 'alex@codesource.com']);
		
	}


	public function testThatWeCanGetTheName()
	{
		$this->trainer->setName('Mehedi Siyam');

		$this->assertEquals($this->trainer->getName(), 'Mehedi Siyam');
	}

	public function testIDCanBeSet()
	{
		$trainer = new \App\Models\trainer;

		$trainer->setID(101);

		$this->assertEquals($trainer->getID(), 101);
	}
}