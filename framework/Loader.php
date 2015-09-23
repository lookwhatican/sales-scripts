<?php

class Loader
{
	public static function register()
	{
		spl_autoload_register(array(self, 'loadClass'));
	}


	public static function loadClass($className)
	{
		$frameworkFile = __DIR__ . '/../framework/' . $className . '.php';
		$controllerFile = __DIR__ . '/../controller/' . $className . '.php';
		$modelFile = __DIR__ . '/../model/' . $className . '.php';

		if (file_exists($frameworkFile)) {
			require $frameworkFile;
		}
		else if(file_exists($controllerFile)) {
			require $controllerFile;
		}
		else if(file_exists($modelFile)) {
			require $modelFile;
		}
	}
}