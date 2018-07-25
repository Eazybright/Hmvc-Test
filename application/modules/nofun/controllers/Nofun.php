<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Nofun extends MX_Controller {

		function index()
		{
			echo "<h1>Hi, I'm looking good today</h1>";
		}

		function sayHello($name){
			echo "hello, $name";
		}

	}
