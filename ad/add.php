 <?php

 include "../ad/brand.php"
 ?>
 <?php
$brand =new brand;

if($_SERVER['REQUEST_METHOD']==='POST'){
    $brand_name=$_POST['add'];
    $img="../img/";
            if(isset($_FILES['img'])){
              $name=$_FILES['img']['name'];
              $img="../img/".$name;
            };
    $insert_brand=$brand->insert_brand($brand_name,$img);
}
 ?>
 <div class="admin-content-right">
            <div class="admin-content-right-cartegory-add">
                <h1>Thêm Nhãn Hàng</h1>
                <form action="" method="POST" enctype="multipart/form-data">
                    <input required name="add" type="text" placeholder="Nhập Tên Nhãn Hàng">
                    <input type='file' name="img">
                    <button type="sumbit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>