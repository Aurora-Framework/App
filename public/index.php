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
include ROOT."Vendor/autoload.php";

/**
 * Set the configuration
 */
$Config = include APP . "Config/config.php";

/**
* Read the services
*/
$Injector = include APP . "Config/services.php";

$Application = new Aurora\Application($Config, $Injector);

/**
 * Routes
 */
$found = include APP . "Config/routes.php";

$Application->run($found["action"], $found["params"]);
