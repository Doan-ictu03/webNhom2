<?php 
	class View{
		public function getPageHome($query){
			include_once "Templates/Home.php";
		}
		public function getPageInsert($listBrand){
			include_once "Templates/FormThem.php";
		}
		public function getPageUpdate($product, $listBrand){
			include_once "Templates/FormSua.php";
		}
	}

 ?>