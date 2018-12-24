<?php
	class controller_product_detail{
		public $model;
		public function __construct(){
			$this->model = new model();
			include "view/frontend/view_product_detail.php";
		}
	}
	new controller_product_detail();
?>