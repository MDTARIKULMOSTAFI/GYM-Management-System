<?php

namespace App\Models;

class member
{
	public $first_name;

	public $last_name;

	public $id;


	public function setFirstName($firstName)
	{
		$this->first_name = trim($firstName);

	}

	public function getFirstName()
	{
		return $this->first_name;
	}


	public function setLastName($lastName)
	{
		$this->last_name = trim($lastName);

	}

	public function getLastName()
	{
		return $this->last_name;
	}

	public function getFullName()
	{
		return $this->first_name . ' ' . $this->last_name;
	}

	public function setID($id)
	{
		$this->id = $id;
	}

	public function getID()
	{
		return $this->id;
	}


	public function getIDVariables()
	{
		return [
			'full_name' => $this->getFullName(),
			'email' => $this->getID
            (),
		];
	}

}