<?php
require_once "ConfigLocal.php";
require_once "../includes/funciones.php";
define("DIR_ROOT", dirname(__DIR__));
class Config {
	const LOCAL_HOST = ConfigLocal::LOCAL_HOST;
	const DEVWEBCAMP = ConfigLocal::DEVWEBCAMP;
	const BIENES_RAICES = ConfigLocal::BIENES_RAICES;
	const APPSALON = ConfigLocal::APPSALON;
	const UPTASK = ConfigLocal::UPTASK;
	const DIR_IMG_PRINCIPAL = '/build/img/principal/';
	const ABSOLUTE_DIR_IMG_PRINCIPAL = DIR_ROOT . '/no-sub' . self::DIR_IMG_PRINCIPAL;
	const IMAGE_TYPES = ['jpg', 'webp', 'avif'];
	/**
	 * Páginas que contiene esta aplicación. Se usan aquí para poner
	 * una imagen de cabecera diferente cada día
	 */
	const PAGES = [
		'index.php'
	];
}