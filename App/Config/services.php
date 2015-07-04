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
$Twig->addExtension(new Aurora\Twig\Extension());

$Injector->define("Aurora\\MVC\\Presenter", [
	":Engine" => $Twig
]);

$Injector->share("Aurora\\Service\\Model");
$Injector->define("Aurora\\Service\\Model", [
	":Connection" => (new PDO($Config->get("database.dns")))
]);

return $Injector;
