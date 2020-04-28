<?php

namespace App;

class Model1
{
    public $name;
	public $city;
	public $country;
	public function __construct($name = null,$city = null,$country = null)
	{
		$this->name = $name;
		$this->city = $city;
		$this->country = $country;
	}
	public function getAllUser()
	{
		return array(
		"Ram" => new Model1("Ram","Delhi","India"),
		"John Doe" => new Model1("John Doe","Boston","USA"),
		"Nastya Kolos" => new Model1("Nastya Kolos","Kiev","Ukraine"),
		"Troye Black" => new Model1("Troye Black","Sidney","Australia")
		);
	}
	public function getUser($name)
	{
		$users = $this->getAllUser();
		return $users[$name];
	}

}
