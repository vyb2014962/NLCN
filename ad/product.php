<?php
include "../ad/database.php";
?>

<?php
class product {
    private $db;
    public function __construct() 
    {
        $this->db = new Database();
    }
      public function show_brand(){
        $query="select * from brand_mobie order by ma_brand desc";
         $result =$this->db->select($query);
    return $result;
    }

    public function insert_product(){
            $product_name=$_POST['product_name'];
            $product_price=$_POST['product_price'];
            $product_gift=$_POST['product_gift'];
            $product_discount =$_POST['product_discount'];
            $product_cm =$_POST['product_cm'];
            $product_cmt =$_POST['product_cmt'];
            $product_brand =$_POST['product_brand'];
            $product_img ="../img/";
            if(isset($_FILES['product_img'])){
              $name=$_FILES['product_img']['name'];
             $product_img="../img/".$name;
            };

        $query="insert into dien_thoai (dthoai_ten,price,gift,pres,ma_brand,dgia,dgia_sl,img) values(
            '$product_name',
            '$product_price',
            '$product_gift',
            '$product_discount',
             $product_brand ,
            '$product_cm',
            '$product_cmt',
            '$product_img')";
         $result =$this->db->insert($query);
    return $result;
    }
}

?>