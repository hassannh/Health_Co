<?php

class dashboardController extends Controller
{
    private $productsModel;
  
    public function __construct()
    {
        $this->productsModel = $this->model('products');
        
    }

    public function edit_product($id)
    {
        
        $product = $this->productsModel->get_one_product($id);
        if ($product) {
            $data = [
                'product' => $product
                    ];
            $this->view('edit_product',$data);
        } else {
            echo('product not founddd');
        }
    }
  

    public function dashboard()
    {
    
       // get the products
       
       $products = $this->productsModel->getproduct();


       if ($products) {
           $data = [
               'products' => $products
                   ];
           $this->view('dashboard',$data);
       } else {
           echo('product not found');
       }
   }


   public function statistics()
   { 
     $products_price = $this->productsModel->price_product();
     $products_number = $this->productsModel->products_number();
     $data = [
        'price'=> $products_price ,
        'number'=> $products_number
     ];

     $this->view('statistics',$data);
   }

   public function add_product()
   {
       if (isset($_POST['submit'])) {
   
   
           $name = $_POST['name'];
           $price = $_POST['price'];
           $quantity = $_POST['quantity'];
           $description = $_POST['Description'];
        
           $this->productsModel->insertproduct($name,$price ,$quantity ,$description);
        //    $this->view('dashboard');
        header("location: ". URLROOT ."dashboardController/dashboard");
        
       }else{
           $this->view('add_product');
       }
       
   }


   public function delete_product($id)
   {
       $this->productsModel->delete_product($id);

       $products = $this->productsModel->getproduct();
           $data = [
               'products' => $products
                   ];
           $this->view('dashboard',$data);
       
    
   }
}