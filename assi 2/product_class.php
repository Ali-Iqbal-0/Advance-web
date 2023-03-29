<?php
include('db.php');
class product extends db{
    private $p_name;
    private $p_code;
    private $p_quantity;
    private $p_category;
    private $p_brand;
    private $p_image;
    private $p_description;


    public function setproduct($t1, $t2, $t3,$t4,$t5,$t6,$t7){
         $this->p_name = $t1;
         $this->p_code = $t2;
         $this->p_quantity = $t3;
         $this->p_category = $t4;
         $this->p_brand = $t5;
         $this->p_image = $t6;
         $this->p_description = $t7;

    
        $q = "INSERT INTO products(product_name, product_code,quantity,category,brand,product_image,product_des) VALUES ('$t1', '$t2', '$t3','$t4','$t5','$t6','$t7')";
        $this->conn->exec($q);
       

        header("location: services.php");
    }
    public function getAllproduct(){
        $q = "SELECT * FROM products";
        $result = $this->conn->query($q);
        return $result;  

    }
    public function updateProduct($t1, $t2, $t3,$t4,$t5,$t6,$t7)
    {
      
       
        $q = "UPDATE products SET product_name='$t1',product_code='$t2',quantity='$t3',category='$t4',brand='$t5',product_image='$t6',product_des='$t7' WHERE product_code='$t2'";
        $this->conn->exec($q);
        header("location: services.php");

    }
   
    public function deleteProduct($id)
    {
        $q = "DELETE FROM products where product_code=$id";
        $this->conn->query($q);
        header("location: viewallproduct.php?msg=data removed");
    }
    
}
?>