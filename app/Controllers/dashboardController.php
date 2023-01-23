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
                header('location:' . URLROOT . '/dashboardController/dashboard');
                // $this->view('dashboardController/dashboard');
            } else {
                $this->view('updat_product',$data);
                
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

    // public function add_product()
    // {
    //     if (isset($_POST['submit'])) {

    //         $_POST = filter_input_array(INPUT_POST);
            
    //         for ($i = 0; count($_POST["name"]); $i++) {

               
                
    //             // $filename = $_FILES["picture"]["name"][$i];
    //             // $sizename = $_FILES["picture"]["tmp_name"][$i];
    //             // $folder = "./image/" . $filename;


    //             $name = $_POST['name'][$i];
    //             $price = $_POST['price'][$i];
    //             $quantity = $_POST['quantity'][$i];
    //             $picture = $_POST['picture'][$i];
    //             // $picture = $filename;
    //             $description = $_POST['Description'][$i];

    //             // move_uploaded_file($sizename, $folder);


    //             $this->productsModel->insertproduct($name, $price, $picture, $quantity, $description);

    //         }
    //         //    $this->view('dashboard');
    //         // header("location: " . URLROOT . "dashboardController/dashboard");
    //         $this->view('dashboard');
    //     } else {
    //         $this->view('add_product');
    //     }
    // }


    public function add_product()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if(isset($_POST["submit"])){

                
                
                $_POST = filter_input_array(INPUT_POST);

                
                for ($i = 0; $i < count($_POST["name"]); $i++) {
                    
                    // $filename = $_FILES["Picture"]["name"][$i];
                    // $tempname = $_FILES["Picture"]["tmp_name"][$i];
                    // $folder = "./images/" . $filename;
                    
                    
                    $name = $_POST['name'][$i];
                    $price = $_POST['price'][$i];
                    // $date = $_POST['date'][$i];
                    $Quantity = $_POST['quantity'][$i];
                    $description = $_POST['Description'][$i];
                    // $picture = $_POST['Picture'][$i];
                    
                    
                    // echo '<pre>';
                    // var_dump($picture);
                    // echo '</pre>';
                    // exit;
                // move_uploaded_file($tempname, $folder);
                $this->productsModel->insertproduct($name, $price, $Quantity,$description);
            }
            header('location:' . URLROOT . '/dashboardController/dashboard');
            }

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
