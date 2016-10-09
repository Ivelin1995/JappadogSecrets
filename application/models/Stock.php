<?php

class Stock extends CI_Model {
  // Mock data used for our menu items and quantity on hand
	var $data = array(
		array('id' => '1',
          'name' => 'Terimayo',
          'quantity' => 3,
          'description' => 'JAPADOG\'s Signature Hot Dog: Teriyaki sauce, mayo and seaweed make for a winning combination',
          'price' => 5),
    array('id' => '2',
          'name' => 'Oroshi',
          'quantity' => 2,
          'description' => 'Freshly grated radish with a special soya sauce. East meets West',
          'price' => 6),
    array('id' => '3',
          'name' => 'SpicyCheese',
          'quantity' => 3,
          'description' => 'Another signature dog contains three types of cheese with a hint of spiciness in the sausage. All that topped with Terimayo sauce makes for a tasty hot dog',
          'price' => 7),
    array('id' => '4',
          'name' => 'SalmonDog',
          'quantity' => '2',
          'description' => 'Topped with fresh onion and our special dressing',
          'price' => 8),
    array('id' => '5',
          'name' => 'Tonkotsu',
          'quantity' => '6',
          'description' => 'Deep fried pork cutlet marinated in tonkatsu sauce topped with fresh cabbage',
          'price' => 5),
    array('id' => '6',
          'name' => 'Avocado',
          'quantity' => 1,
          'description' => 'Topped with Avocado, Cream cheese, Japanese mayo and Soy sauce',
          'price' => 9),
	);
	// Constructor
	public function __construct()
	{
		parent::__construct();
	}

	public function get($name)
	{
		// Iterate over the data until we find the one we want
		foreach ($this->data as $record)
			if ($record['name'] == $name)
				return $record;
		return null;
	}
	// Retrieve all of the menu items
	public function all()
	{
		return $this->data;
	}
}