<?php

namespace App\Presenter;

use Aurora\MVC\Presenter;

class Home extends Presenter
{
	public function index()
	{
		$this->createCookie("test", "c");
		echo $this->getCookie("test");
		$this->removeCookie("test");
		$this->Session->set("d", 4);
		echo $this->Session->get("d");
	}
}
