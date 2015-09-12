<?php
/*
Create a hash
 @param string $string
 @return string
 */

function getHash($string){
	return hash('sha256',$string);
}
function autoload($className){
	$file = dirname(_FILE).'/'.$className.'php';
	if(file_exists($file)){
		require $file;
	}
}
spl_autoload_register('autoload');