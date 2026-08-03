<?php
if (! defined('ABSPATH')) {
	header('HTTP/1.0 403 Forbidden');
	die();
}

spl_autoload_register(['btn_briefing_autoloader', 'load']);

final class btn_briefing_autoloader {

	private static $classes = false;
	private static $paths   = false;

	private static function init() {
		self::$classes = [
            'btn_briefing' 	=> BTN_BRIEFING_CLASS_DIR . 'btn-briefing',
        ];
		self::$paths = [
			BTN_BRIEFING_CLASS_DIR,
		];
	}

	public static function load( $class ) {
		if ( ! self::$classes ) {
			self::init();
		}

		$class = trim( $class );
		if ( array_key_exists( $class, self::$classes ) && file_exists( self::$classes[$class] . '.php' ) ) {
			include_once self::$classes[$class] . '.php';
		}
		else {
			foreach(self::$paths as $path) {

				$file = $path . substr($class,13) . '.php';
				if (file_exists($file)) {
					include_once $file;
				}
			}
		}
		if (substr($class, 0, 12) <> 'btn_briefing') {
			return;
		}
	}

}
