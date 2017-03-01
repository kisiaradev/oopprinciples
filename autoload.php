<?php

spl_autoload_register(function($class) {

	// $directories = [
 //            'libs/',
 //            'libs/classes/',
 //            'libs/interfaces/',
 //            'libs/traits/'
 //        ];

 //        foreach($directories as $directory) {

 //        	if(file_exists($directory . $class . '.php')) { 
 //        		// echo $class;       		
	// 			require_once($directory. $class . '.php');
	// 			break;
	// 		}
 //        }
	echo $class . "<br>";
	if(file_exists('libs/classes/'.$class.'.php')){
		echo $class . "=> I exist";
	}

});