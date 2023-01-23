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

    public function get_one_product($id)
    {
       
       
        $this->db->query("SELECT * FROM products WHERE ID_product = :id");
        $this->db->bind(':id',$id);
        $this->db->execute();
        return $this->db->fetch();
        
    }


    public function insertproduct($name,$price ,$quantity,$picture ,$description)
    {
       
        $sql = "INSERT INTO `products` (name ,price, quantity, `picture`, Description ) VALUES (:name, :price, :quantity,:picture, :description)";
        $this->db->query($sql);
        $this->db->bind(':name',$name);
        $this->db->bind(':price',$price);
        $this->db->bind(':quantity',$quantity);
        $this->db->bind(':picture',$picture);
        $this->db->bind(':description',$description);
        // var_dump($this->db);
        // die;
        $this->db->execute();
    }

    public function price_product()
    {
        $this->db->query('SELECT SUM(price) FROM products');
        $this->db->execute();
        $count = $this->db->fetchColumn();
        return $count;
    }
    public function products_number()
    {
        $this->db->query("SELECT COUNT(*) FROM products");

        $this->db->execute();

        return $this->db->fetchColumn();
    }

    public function delete_product ($id){
       
        $this->db->query("DELETE FROM products WHERE ID_product = :id");
       $this->db->bind(':id',$id);
       $this->db->execute();
       
      }
}