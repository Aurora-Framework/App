<?php
$baseURI = $Config->get("application.baseURI");

$Router = new Aurora\Router($baseURI);
$Router->any('/?{user}', ["App\Controller\Welcome", "sayHello"]);

try {
   $found = $Router->findRoute($Router->findRequestMethod(), $Router->findUri());
} catch (RouteNotFoundException $Exception) {

} catch (MethodNotAllowedException $Exception) {

}

return $found;
