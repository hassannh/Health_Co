<?php

class dashboardController extends Controller
{
    private $productsModel;
  
    public function __construct()
    {
        $this->productsModel = $this->model('products');
        
    }
  

    public function dashboard()
    {
    
       // get the products
       
       $products = $this->productsModel->getproduct();


       if ($products) {
           $data = [
               'products' => $products
                   ];
                //    var_dump($data);
                //     exit;
           $this->view('dashboard',$data);
       } else {
           echo('product not found');
       }
   }


   public function delete_product($id)
   {
       $this->productsModel->delete_product($id);
       $this->view("dashboard");
    
   }
}