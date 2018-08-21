<?php
/*
|--------------------------------------------------------------------------
| Detect The Application Environment
|--------------------------------------------------------------------------
*/

$env = $app->detectEnvironment(function(){
	$envPath = trim(__DIR__.'/../.env');
	$setEnv = trim(file_get_contents($envPath));
	if (file_exists($envPath))
	{
		putenv("APP_ENV=$setEnv");
		if (getenv('APP_ENV') && file_exists(__DIR__.'/../.' .getenv('APP_ENV') .'.env')) {
			Dotenv::load(__DIR__ . '/../', '.' . getenv('APP_ENV') . '.env');
		} 
	}
});

?>