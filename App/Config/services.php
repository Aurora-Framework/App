<?php
$Resolver = new Aurora\Injector();

$Resolver->define("Aurora\\Http\\Request", [
	":get"    => $_GET,
	":post"   => $_POST,
	":cookie" => $_COOKIE,
	":files"  => $_FILES,
	":server" => $_SERVER,
], true);

$Loader = new Twig_Loader_Filesystem(APP."View/");
$Twig = new Twig_Environment($Loader, [
	'cache' => APP."Storage/Cache/",
]);
$Twig->addExtension(new Aurora\Twig\Extension($Resolver));

$Resolver->define("Aurora\\MVC\\View", [
	":Engine" => $Twig
]);

$Resolver->prepare("Aurora\\MVC\\Presenter", function($Instance) use ($Config) {
	$Instance->Cookie = new Aurora\Http\Cookie();
	$Instance->Cookie->raw = true;

	$Instance->Session = new Aurora\Session(null, $Config->get("session"));
	$Instance->Session->start();
});

return $Resolver;
