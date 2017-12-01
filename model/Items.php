<?php

class Items extends Active{
	public $id;
	public $items;
	public $date;
	public $customer_id;

	public static $key = 'id';
	public static $table = 'order_items';

}


