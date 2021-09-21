<?php

namespace App\Models;

class Signup
{
	public $username;

	public $password;


	public function setUserName($userName)
	{
		$this->username = $userName;

	}

	public function getUserName()
	{
		return $this->username;
	}

	public function setPassword($password)
	{
		$this->password = $password;
	}

	public function getPassword()
	{
		return $this->password;
	}

}