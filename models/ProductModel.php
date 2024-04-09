<?php


/**
 * Author: Jalen Vaughn
 * Date: 4/8/24
 * File: ProductModel.php
 * Description:
 */
class ProductModel {
    private Database $db;  // Database object (shouldn't be used outside constructor)
    private mysqli $connection;  // Connection to database
    static private null|ProductModel $_instance = null;
    private string $table;
    
    private function __construct() {
        $this->db = Database::getInstance();
        $this->connection = $this->db->getConnection();
        $this->table = $this->db->getProductTable();
    }
    
    // Return the singular instance of the GuestModel
    static public function getInstance(): ProductModel {
        if (self::$_instance == null) {
            self::$_instance = new ProductModel();
        }
        return self::$_instance;
    }
    
    public function getAllProducts(): array {
        // Query all products from DB
        $sql = "SELECT * FROM $this->table ORDER BY productID DESC";
        $result = $this->connection->query($sql);
        
        // Check if query failed
        if (!$result) {
            //todo result technically failed so it should be displayed
            echo "Connection Error";
            exit();
        }
        
        // Create product obj from result
        $products = [];
        while ($row = $result->fetch_assoc()) {
            $product = new Product(
                $row["productID"],
                $row["name"],
                $row["price"],
                $row["description"]);
            $products[] = $product;
        }
        // List of Product objects
        return $products;
    }
    
    public function getProduct($id): false|int|Product {
        $sql = "SELECT * FROM $this->table WHERE productID=$id";
        
        $query = $this->connection->query($sql);
        
        if (!$query) return false;
        
        if ($query->num_rows == 0) return 0;
        
        $obj = $query->fetch_object();
        
        return new Product(
            $obj->productID,
            stripslashes($obj->name),
            $obj->price,
            stripslashes($obj->description));
    }
}