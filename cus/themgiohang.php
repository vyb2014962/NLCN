
<?php
session_start();
 require "../connection.php";   


 if(isset($_GET['cong'])){
        $id=$_GET['cong'];
        foreach($_SESSION['cart']as $cart_item){
            if($cart_item['id']!=$id){
                $product[]=array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'hinhanh'=>$cart_item['hinhanh'],'gia'=>$cart_item['gia']);
                          $_SESSION['cart']=$product;
            }else{
                $tangsoluong=$cart_item['soluong'] +1 ;
                if($cart_item['soluong']<9){
                    $product[]=array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$tangsoluong,'hinhanh'=>$cart_item['hinhanh'],'gia'=>$cart_item['gia']);
                          $_SESSION['cart']=$product;
                }else{
                    $product[]=array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'hinhanh'=>$cart_item['hinhanh'],'gia'=>$cart_item['gia']);
                        
                }
                  $_SESSION['cart']=$product;
            }
        
        }
        header('location:../cus/cart.php');
    }





 if(isset($_GET['tru'])){
        $id=$_GET['tru'];
        foreach($_SESSION['cart']as $cart_item){
            if($cart_item['id']!=$id){
                $product[]=array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'hinhanh'=>$cart_item['hinhanh'],'gia'=>$cart_item['gia']);
                          $_SESSION['cart']=$product;
            }else{
                $tangsoluong=$cart_item['soluong'] -1 ;
                if($cart_item['soluong']>1){
                    $product[]=array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$tangsoluong,'hinhanh'=>$cart_item['hinhanh'],'gia'=>$cart_item['gia']);
                          $_SESSION['cart']=$product;
                }else{
                    $product[]=array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'hinhanh'=>$cart_item['hinhanh'],'gia'=>$cart_item['gia']);
                        
                }
                  $_SESSION['cart']=$product;
            }
        
        }
        header('location:../cus/cart.php');
    }
























 if(isset($_SESSION['cart'])&&isset($_GET['xoa'])){
        $id=$_GET['xoa'];
        foreach($_SESSION['cart']as $cart_item){
            if($cart_item['id']!=$id){
                $product[]=array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'hinhanh'=>$cart_item['hinhanh'],'gia'=>$cart_item['gia']);
                        
            }
            $_SESSION['cart']=$product;
        }
        header('location:../cus/cart.php');
    }
























if(isset($_POST['cart'])){
    // session_destroy();
    $id=$_GET['idsanpham'];
    $soluong=1;
    $query = "SELECT * FROM dien_thoai where dthoai_ma= $id limit 1";
    $q_result = mysqli_query($conn, $query)
            or die("Query failed");
    $row=mysqli_fetch_array($q_result); 
    if($row){
        $new_product=array(array('tensanpham'=>$row['dthoai_ten'],'id'=>$id,'soluong'=>$soluong,'hinhanh'=>$row['img'],'gia'=>$row['price']));
        if(isset($_SESSION['cart'])){
            $found=false;
           foreach($_SESSION['cart'] as $cart_item){
                if($cart_item['id']==$id){
                    $product[]=array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong']+1,'hinhanh'=>$cart_item['hinhanh'],'gia'=>$cart_item['gia']);
                        $found=true;
               
                }else{
                      $product[]=array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'hinhanh'=>$cart_item['hinhanh'],'gia'=>$cart_item['gia']);
            
                }
            }

            if($found==false){
                $_SESSION['cart']=array_merge($product,$new_product);
            }else{
                $_SESSION['cart']=$product;
            }
        }
        else{
            $_SESSION['cart'] = $new_product;
        }
    }
     header('location:../cus/shop.php');
  
}
?>
