<?php

use Phalcon\Mvc\Controller;

class IndexController extends Controller
{

	public function indexAction()
	{
		$this->assets
		->addCss("bower_components/bootstrap/dist/css/bootstrap.min.css");
		$this->assets
		->addJs("bower_components/jquery/dist/jquery.min.js");
	}

}
