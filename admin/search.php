

<?php
   if (isset($_POST['ma_dthoai_del'])) {
    //make connection and select DB
    require("../connection.php");

    $ma_dthoai = $_POST['ma_dthoai_del'];
    $d_query = "DELETE FROM dien_thoai WHERE dthoai_ma=" .$ma_dthoai;
    $s_query = "SELECT dthoai_ma FROM dien_thoai WHERE dthoai_ma= $ma_dthoai ";
    $sq_result = mysqli_query($conn,$s_query)
        or die("Retrieving data failed: " . mysqli_error());

    //hien thi thong bao da them bai viet moi
    $row = mysqli_fetch_assoc($sq_result);
    mysqli_query($conn,$d_query)
        or die("Không thể xóa san phẩm: " . mysqli_error());
    
}
    ?>
<body>
    
  
    
    <?php   //search
        if (isset($_POST['search_kw']))
            $keyword = trim($_POST['search_kw']);
        else
            $keyword = '';
        require "../connection.php";   


        if(isset($_GET['trang'])){
            $page =$_GET['trang'];
        }else{
            $page='';
        }
        if($page==''||$page==1){
            $begin=0;
        }else{
            $begin=($page*4)-4;
        }
        $new_kw = str_replace(" ", "%' OR lower(dthoai_ten) LIKE '%", $keyword);
        $query = "SELECT * FROM dien_thoai 
             WHERE 
             (dthoai_ten LIKE '%$new_kw%') ORDER BY dthoai_ma DESC LIMIT $begin,4";
        $q_result = mysqli_query($conn, $query) 
            or die("Query failed: " . mysqli_error());







        while ($row = mysqli_fetch_array($q_result)) {
            echo <<<_DELETE_FORM
            <div class='product-gallery-one-content-product-item'>
            <img src=$row[img] alt=''>
            <div class='product-gallery-one-content-product-item-text'>
              <li><img src='../img/icon1.webp' alt=''><p>Tuần lễ SamSung</p></li>
             <li>$row[dthoai_ten] </li>
             <li>$row[price] <sup>đ</sup> <span>$row[pres]</span></li>
              <li>$row[gift]<sup>đ</sup></li>
              <li>$row[dgia]<i class='fa-solid fa-star'></i>  $row[dgia_sl]</li>
            </div>
            <table>
            <tr>
            <td>
            <form action='' method='post'>
             <button type='submit' name='ma_dthoai_del' value='$row[dthoai_ma]' style='width: 60px;margin-right: 20px;margin-left:10px ;border-radius:2px;background-color:#FF0000;font-size:16px' onclick='return as_confirm1();'>Xoa</button> 
             </form></td>
            <td>
            <form action="" action="" method="post" width='40px' >
                    <input type='button' name='edit_spham' value='sửa' style='width: 60px;margin-right: 20px;border-radius:2px;background-color:#00CC00;font-size:16px' onclick="formfix($row[dthoai_ma],'$row[dthoai_ten]','$row[price]','$row[gift]','$row[pres]',$row[ma_brand])" >
            </form> </td></tr>
            </table>
          </div>
          _DELETE_FORM;
        }


    ?> 
