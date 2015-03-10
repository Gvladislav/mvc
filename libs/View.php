<?php

class View
{
	function __construct()
	{
		
	}

	public function render($name)
	{
		require_once 'view/header.php';
		require_once 'view/' . $name . '.php';
		require_once 'view/footer.php';
	}
}