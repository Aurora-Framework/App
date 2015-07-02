<?php
$Injector = new Aurora\Injector();

$Injector->define("Aurora\\Http\\Request",[
	":GET" => $_GET,
	":POST" => $_POST,
	":COOKIE" => $_COOKIE,
	":FILES" => $_FILES,
	":SERVER" => $_SERVER,
]);

return $Injector;
