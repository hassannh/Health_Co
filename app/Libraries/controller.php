<?php

//base controller 
//load the models and views

class Controller 
{
    //load model
    public function model($model){
        //require model file
        require_once '../app/Models/'.$model.'.php';

        //instatiate model
        return new $model(); 
    }
    //load view
    public function view($view ,$data = [])
    {
        //check for view file
        if(file_exists('../app/Views/'.$view.'.php'))
        {
            require_once '../app/Views/'.$view.'.php';
        }
        else{
            die('view does not exist');
        }
    }
}


?>