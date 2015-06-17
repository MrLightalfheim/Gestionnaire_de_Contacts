<?php
	Class View {
		protected $route;
		protected $data;
		
		public function __construct($route) {
			$this->route = $route;
		}
		
		public function display ($view) {
			$data = $this->data;
			if(file_exists("View/".$this->route["Controller"]."/".$view.".php")) {
				include("View/".$this->route["Controller"]);
			}
			else {
				throwexception("Vue Introuvable !");
			}
		}
		
		public function __set($key, $value) {
			$this->data[$key], $value;
		}
	}
?>