<?php 
	require_once "Models/Model.php";
	require_once "Views/View.php";

	class Controller{
		var $model, $view;
		public function __construct(){
			$this->model = new Model();
			$this->view = new View();
		}

		public function getPageHome(){
			$query = $this->model->getAllProduct();
			$this->view->getPageHome($query);
		}

		public function getPageInsert(){
			$listBrand = $this->model->getBrand();
			$this->view->getPageInsert($listBrand);
			if(isset($_POST['them'])){
				$this->model->InsertProduct();
			}
		}
		public function getPageUpdate(){
			if(isset($_GET['id'])){
		    $id = $_GET['id'];
		    $product = $this->model->getProductId($id);
		    $listBrand = $this->model->getBrand();
		    $this->view->getPageUpdate($product, $listBrand);
				if(isset($_POST['sua'])){
					$this->model->UpdateProduct($id);
				}
			}
		}

		public function getPageDelete(){
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$this->model->deleteProduct($id);
			}
		}
		
	}

 ?>