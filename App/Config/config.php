<?php
/*
 * Configuration
 *
 */

return new Aurora\Config([

	'database'	=> [
		'database_type'	=> 'mysql',
		'server'				=> '',
		'username'			=> '',
		'password'			=> '',
		'database_name'	=> '',
		'charset'			=> 'utf8mb4',
	],

	'application'	=> [
		"environment"			=> "development", // production, development
		"language_path"		=> APP . 'Lang/{LANGUAGE}/{LANGUAGE}.ini',
		"language"				=> "en", // Default language
		"language_fallback"	=> "en", // Fallback language when file isn"t available for default language
		"locale"					=> "en_US", // PHP set_locale() setting, null to not set
		"encoding"				=> "UTF-8",
		"server_gmt_offset"	=> 0,
		"default_timezone"	=> null,
		"baseURI"				=> "/Aurora/Framework",
	],

	"security" => [
		"app_key"			=> "Vj712WHJq4Oema7HT3Rg9gnLo6v4bC0C",
		/*
		"csrf_autoload"		=> false,
		"csrf_token_key"	=> ",
		"csrf_expiration"	=> 0,
		*/
		/*
		  A salt to make sure the generated security tokens are not predictable
		 */

		/*
		"token_salt"		      => "put your salt value here to make the token more secure",
		*/

		/*
		  Allow the Input class to use X headers when present
		 *
		 * Examples of these are HTTP_X_FORWARDED_FOR and HTTP_X_FORWARDED_PROTO, which
		 * can be faked which could have security implications
		 */

		/*
		"allow_x_headers"       => false,
		*/
	],


	"cookie" => [

		/* Number of seconds before the cookie expires */
		"expiration"  => 0,

		/* Restrict the path that the cookie is available to */
		"path"        => "/",

		/* Restrict the domain that the cookie is available to */
		"domain"      => null,

		/* Only transmit cookies over secure connections */
		"secure"      => false,

		/* Only transmit cookies over HTTP, disabling Javascript access */
		"http_only"   => false,
	],

	"session" => [
		"handler"	=> "Aurora\Session\Handler\File",
		"name"		=> "Aurora",
		"lifetime"	=> 86400,
		"path"		=> '/',
		"domain"		=> null,
		"secure"		=> false
	]
]);
