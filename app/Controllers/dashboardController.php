<?php

class dashboardController extends Controller
{
    private $productsModel;

    public function __construct()
    {
        $this->productsModel = $this->model('products');
    }



    public function updat_products($id)
    {
        if (isset($_POST['submit'])) {

            $_POST = filter_input_array(INPUT_POST);

            $data = [
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'quantity' => $_POST['quantity'],
                'picture' => $_POST['picture'],
                'description' => $_POST['Description']
            ];


            $url = $_GET['url'];
            $url = explode('/', $url);
            $id = $url[2];

            if ($this->productsModel->updat_products($id, $data)) {
                header('location:'.URLROOT.'/dashboardController/dashboard');
                // $this->view('dashboardController/dashboard');
            }else{
                $this->view('updat_product');
            }
        }
    }

    public function getedit()
    {
        $url = $_GET['url'];
        $url = explode('/', $url);
        $id = $url[2];
        $data = $this->productsModel->get_one_product($id);
        $this->view('updat_product', $data);
        // header('location:'.URLROOT.'dashboardController/updat_products');
    }








    public function dashboard()
    {

        // get the products

        $products = $this->productsModel->getproduct();


        if ($products) {
            $data = [
                'products' => $products
            ];
            $this->view('dashboard', $data);
        } else {
            echo ('product not found');
        }
    }


    public function statistics()
    {
        $products_price = $this->productsModel->price_product();
        $products_number = $this->productsModel->products_number();
        $data = [
            'price' => $products_price,
            'number' => $products_number
        ];

        $this->view('statistics', $data);
    }

    public function add_product()
    {
        if (isset($_POST['submit'])) {


            $name = $_POST['name'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $picture = $_POST['picture'];
            $description = $_POST['Description'];

            $this->productsModel->insertproduct($name, $price, $quantity, $picture, $description);
            //    $this->view('dashboard');
            header("location: " . URLROOT . "dashboardController/dashboard");
        } else {
            $this->view('add_product');
        }
    }

    public function home()
    {
        $this->view('home');
    }


    public function delete_product($id)
    {
        $this->productsModel->delete_product($id);

        $products = $this->productsModel->getproduct();
        $data = [
            'products' => $products
        ];
        $this->view('dashboard', $data);
    }
}
