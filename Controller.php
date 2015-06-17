<?php
	Class Controller {
		protected $route;
		protected $model;
		protected $view;
		
		public function __construct($route) {
			$this->route = $route;
			$classmodel = $route["Controller"]."model";
			$this->model = new $classmodel($route);
			$this->view = new View($route);
		}
	}
?>