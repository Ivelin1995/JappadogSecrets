<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sales extends Application
{
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/
	 * 	- or -
	 * 		http://example.com/welcome/index
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	//function for passing and rendering the information for the main Sales page which is the menu.
	public function index()
	{
		// View to be used
		$this->data['pagebody'] = 'sales/menu';
		// Title of the page
		$this->data['pagetitle'] = 'JappaDog';
		// Grab all items from Stock
		$source = $this->Stock->all();
		$menu = array ();
		foreach ($source as $record)
		{
			$menu[] = array ('name' => $record['name'], 'quantity' => $record['quantity'], 'description' => $record['description'], 'price' => $record['price']);
		}
		$this->data['menu'] = $menu;
		$this->render();
	}

	//function for passing and rendering information for a specific menu item's detailed page
	public function itemdetail($name)
	{
		// View to be used
		$this->data['pagebody'] = 'sales/itemdetail';
		// Grabs the specific menu item based on its name variable
		$menu = $this->Stock->get($name);
		$this->data['name'] = $menu['name'];
		$this->data['quantity'] = $menu['quantity'];
		$this->data['description'] = $menu['description'];
		$this->data['price'] = $menu['price'];
		$this->data['pagetitle'] = $menu['name'];
		$this->render();
	}
}