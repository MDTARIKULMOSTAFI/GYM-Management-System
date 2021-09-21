<?php

class memberTest extends \PHPUnit\Framework\TestCase
{
	//protected function getUserModel(){}

	protected $member;

	public function setUp(): void
	{
		//the line below can be used to check whether setUp runs before each test block.
		//var_dump('1');

		$this->member = new \App\Models\member;

		//the line below shows actual use case of setUp() as repeating the line below for every test is unnecessary.
		//$this->user = new \App\Models\User;(['email' => 'alex@codesource.com']);
		
	}


	public function testThatWeCanGetTheFirstName()
	{
		$this->member->setFirstName('Safi');

		$this->assertEquals($this->member->getFirstName(), 'Safi');
	}

	public function testThatWeCanGetTheLastName()
	{
		$this->member->setLastName('Parvez');

		$this->assertEquals($this->member->getLastName(), 'Parvez');
	}

	public function testFullNameIsReturned()
	{
		$member = new \App\Models\member;

		$member->setFirstName('Safi');

		$member->setLastName('Parvez');

		$this->assertEquals($member->getFullName(), 'Safi Parvez');
	}

	public function testFirstAndLastNameAreTrimmed()
	{
		$member = new \App\Models\member;

		$member->setFirstName('Safi     ');

		$member->setLastName('     Parvez');

		$this->assertEquals($member->getFirstName(), 'Safi');

		$this->assertEquals($member->getLastName(), 'Parvez');
	}

	public function testIDCanBeSet()
	{
		$member = new \App\Models\member;

		$member->setID(1);

		$this->assertEquals($member->getID(), 1);
	}
}