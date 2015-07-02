<?php
namespace App\Controller;

use Aurora\MVC\Controller;

class Welcome extends Controller
{
   public function sayHello($name = "friend")
   {
      echo "Welcome ".$name." to Aurora".PHP_EOL;
   }
}
