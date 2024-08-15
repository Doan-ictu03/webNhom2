 <?php 
	class Model{
		public function __construct(){
			$db = mysqli_connect('localhost', 'root', '', 'de19');
			mysqli_set_charset($db, "utf8");
			$this->db=$db;
		}

		public function getAllProduct(){
			$query = "SELECT products.*, brands.brand_name FROM products, brands WHERE products.brand_id = brands.brand_id";
			$result = mysqli_query($this->db, $query);
			return $result;
		}

		public function getBrand(){
			$query = "SELECT * FROM brands";
			$result = mysqli_query($this->db, $query);
			return $result;
		}

		public function InsertProduct(){
			if(isset($_POST['them'])){
				$product_id = $_POST['product_id'];
				$product_name = $_POST['product_name'];
				$brand_id = $_POST['brand_id'];
				$create_date = $_POST['create_date'];
				$config = $_POST['config'];
				

				$query = "INSERT INTO products(product_id, product_name, brand_id, create_date, config) VALUES ('$product_id', '$product_name', '$brand_id', '$create_date', '$config')";
				$result = mysqli_query($this->db, $query);
				header('location: index.php?page_layout=pagehome');
				return $result;
			}
		}

		public function deleteProduct($id){
			$query = "DELETE FROM products WHERE product_id = '$id'";
			$result = mysqli_query($this->db, $query );
			header('location: index.php?page_layout=pagehome');
			return $result;
		}

		public function getProductId($id){
			$query = "SELECT * FROM products WHERE product_id = '$id'";
			$result = mysqli_query($this->db, $query);
			return $result;
		}
		public function UpdateProduct($id){
			if(isset($_POST['sua'])){
				$product_name = $_POST['product_name'];
				$brand_id = $_POST['brand_id'];
				$create_date = $_POST['create_date'];
				$config = $_POST['config'];

				$query = "UPDATE products SET product_name = '$product_name', brand_id = '$brand_id', create_date = '$create_date', config = '$config' WHERE product_id = '$id'";
				$result = mysqli_query($this->db, $query);
				header('location: index.php?page_layout=pagehome');
				return $result;
			}
		}
	}

 ?>