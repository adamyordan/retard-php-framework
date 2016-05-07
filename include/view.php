<?php
	class View {
		private function __construct() {}

		private function __clone() {}

		public static function render($page, $data) {
			$data['__content__'] = 'views/' . $page . '.php';
			require_once ('views/layout.php');
		}
	}
?>