<?php
namespace App\PagesController;

use Core\View;
use View;

class PagesController{
	
	public function defaultAction(){


		$v = new View("homepage", "back");
		$v->assign("pseudo","prof");
	}
	

}