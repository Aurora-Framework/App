<?php
/**
 * Aurora powerful MVC
 *
 * @package Aurora
 * @author Caroon co.
 * @license
 */

error_reporting(E_ALL);

define('AURORA', __DIR__."/../Aurora/");
define('APP', __DIR__."/../App/");
define('ROOT', __DIR__."/../");

/**
* Use auto-loader
*/
include ROOT."vendor/autoload.php";

/**
 * Set the configuration
 */
$Config = include APP . "Config/config.php";

/**
* Read the services
*/
$Resolver = include APP . "Config/services.php";

$Application = new Aurora\Application($Config, $Resolver);

/**
 * Routes
 */
$JSONAdapter = new Aurora\Adapter\JSON(APP."Config/");
$Router = (new Aurora\Router\Loader($JSONAdapter->loadFile("routes")))->load();
try {
   $found = $Router->findRoute($Router->findRequestMethod(), $Router->findUri());
} catch (RouteNotFoundException $Exception) {

} catch (MethodNotAllowedException $Exception) {

}

$Application->run($found["action"], $found["params"]);
