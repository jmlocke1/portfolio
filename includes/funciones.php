<?php

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

function debuguearSinExit($variable)  {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
}

/**
 
 * @param string $type
 * @return string
 */
/**
 * Función que devuelve la ruta de una imagen diferente cada día del año.
 * La imagen se va rotando en función de la cantidad de imágenes que haya
 *
 * @param string $type
 * @param integer $offset
 * @return string
 */
function imageOfTheDay($type = 'jpg', $offset = 0): string {
	$offset = getIndexOfScript();
	if(!in_array($type, Config::IMAGE_TYPES)) $type = 'jpg';
	$dir = dir(Config::ABSOLUTE_DIR_IMG_PRINCIPAL);
	$images = [];
	while (false !== $entry = $dir->read()) {
		$img = explode('.', $entry);
		if(end($img) === $type){
			$images[] = Config::DIR_IMG_PRINCIPAL . $entry;
		}
	}
	$max = count($images);
	$day = (int) date('z');
	$index = ($day + $offset) % $max;
	return $images[$index];
}

function getIndexOfScript() {
	$offset = 0;
	$script = basename($_SERVER['SCRIPT_FILENAME']);
	$index = array_search($script, Config::PAGES);
	if(is_int($index)){
		$offset = $index;
	}
	return $offset;
}