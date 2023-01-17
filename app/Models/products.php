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

    public function delete_product ($id){
       
        $this->db->query("DELETE FROM products WHERE ID_product = :id");
       $this->db->bind(':id',$id);
       if ($this->db->execute()) {
        return true;
       } else {
        return false;
       }
       
      }
}