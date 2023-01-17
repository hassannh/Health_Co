<?php

class products{   
    private $db;
    

    public function __construct()
    {
        $this->db = new database;
        
    }


public function getproduct()
    {
       
        $this->db->query("SELECT * FROM products");
        $this->db->execute();
        return $this->db->fetchAll();
      
    }


    public function insertproduct($name,$price ,$quantity ,$description)
    {
        $this->db->query("INSERT INTO 'products'('name','price','quantity','description') VALUES(:name, :price, :quantity, :description)");
        $this->db->bind(':name',$name);
        $this->db->bind(':price',$price);
        $this->db->bind(':quantity',$quantity);
        $this->db->bind(':description',$description);
        $this->db->execute();
    }

    public function delete_product ($id){
       
        $this->db->query("DELETE FROM products WHERE ID_product = :id");
       $this->db->bind(':id',$id);
       $this->db->execute();
       
      }
}