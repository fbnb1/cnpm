<?php
	class controller_news_product{
		public $model;
		public function __construct(){
			$this->model= new model();
			include "view/frontend/view_news_product.php";
		}
	}
	new controller_news_product();
?>