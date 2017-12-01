<?php

class Customer extends Active{
	public $id;
	public $user_id;
	public $first_name;
	public $last_name;
	public $address;
	public $city;
	public $state;
	public $zip;
	public $country;

	public static $key = 'id';
	public static $table = 'customers';

}
