<?php
$Injector = new Aurora\Injector();

$Injector->define("Aurora\\Http\\Request", [
	":GET" => $_GET,
	":POST" => $_POST,
	":COOKIE" => $_COOKIE,
	":FILES" => $_FILES,
	":SERVER" => $_SERVER,
]);

$Loader = new Twig_Loader_Filesystem(APP."View/");
$Twig = new Twig_Environment($Loader, array(
	'cache' => APP."Storage/Cache/",
));
$Twig->addExtension(new Aurora\Twig\Extension($Injector));

$Injector->define("Aurora\\MVC\\Presenter", [
	":Engine" => $Twig
]);

return $Injector;
