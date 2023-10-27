<?php
include "../ad/database.php";
?>

<?php
class brand {
    private $db;


    public function __construct() 
    {
        $this->db = new Database();
    }

    public function insert_brand($brand_name,$img){
    $query= "insert into brand_mobie(brand_ten,brand_img) VALUE('$brand_name','$img')";
    $result =$this->db->insert($query);
    return $result;
    }
    public function show_brand(){
        $query="select * from brand_mobie order by ma_brand desc";
         $result =$this->db->select($query);
    return $result;
    }

     public function delete_brand($brand_id){
        $query="delete  from brand_mobie where ma_brand='$brand_id'";
        $result =$this->db->delete($query);
        header('location:admin.php?menu=showbrand');
        return $result;
    }
}
