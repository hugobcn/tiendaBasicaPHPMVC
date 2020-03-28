<?php
require_once 'models/categoria.php';
require_once 'models/producto.php';
class categoriaController{
        
        public function index(){
            Utils::isAdmin();
            $categoria =new Categoria();
            $categorias=$categoria->getAll();
            require_once 'views/categoria/index.php';
    }
    
    public function crear(){
        Utils::isAdmin();
        require_once 'views/categoria/crear.php';  
    }
    
    public function save() {
       if(isset($_POST) && isset($_POST['nombre'])){
			// Guardar la categoria en bd
			$categoria = new Categoria();
			$categoria->setNombre($_POST['nombre']);
			$save = $categoria->save();
		}
		header("Location:".base_url."categoria/index");
    }
    
    public function ver(){
        if(isset($_GET['id'])){
            //var_dump($_GET['id']);
            $id =$_GET['id'];
            
           $categoria =new Categoria();
           $categoria->setId($id);
            $categoria =$categoria->getOne();//getAll();
            //var_dump($categoria);
            
            //conseguir producto
            $producto = new Producto();
            $producto->setCategoria_id($id);
            $productos = $producto->getAllCategory();
            
        }
        
        require_once 'views/categoria/ver.php';
    }
}
?>
    

