<?php

namespace App\Models;

class trainer
{
	public $name;

	public $id;


	public function setName($name)
	{
		$this->name = $name;

	}

	public function getName()
	{
		return $this->name;
	}

	public function setID($id)
	{
		$this->id = $id;
	}

	public function getID()
	{
		return $this->id;
	}

}