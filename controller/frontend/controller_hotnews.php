<?php
	class controller_hotnews{
		public $model;
		public function __construct(){
			$this->model = new model();
			include "view/frontend/view_hotnews.php";
		}
	}
	new controller_hotnews();
?>