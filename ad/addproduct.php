<?php
include "../ad/product.php"
?>


<?php
$product = new product;
if($_SERVER['REQUEST_METHOD']==='POST'){
  
    $insert_product=$product->insert_product($_POST,$_FILES);
}
 ?>





 <div  class="admin-content-right center">
            <div class="admin-content-right-product-add">
                <h1>Thêm Sản Phẩm</h1>
                <form action="" method="POST">
                    <label for="">Tên Sản Phẩm : <span style="color:red">*</span></label>
                    <input required name="product_name" type="text" placeholder="Nhập Tên sản Phẩm">
                    <label for="">Nhập Giá Sản Phẩm : <span style="color:red">*</span></label>
                    <input required name="product_price" type="text" placeholder="Nhập Tên sản Phẩm">
                    <label for="">Nhập Quà : <span style="color:red">*</span></label>
                    <input required name="product_gift" type="text" placeholder="Nhập Tên sản Phẩm">
                    <label for="">Discount : <span style="color:red">*</span></label>
                    <input required name="product_discount" type="text" placeholder="Nhập Tên sản Phẩm">
                    <label for="">Đánh Giá : <span style="color:red">*</span></label>
                    <input required name="product_cm" type="text" placeholder="Nhập Tên sản Phẩm">
                    <label for="">Số lượng Đánh Giá : <span style="color:red">*</span></label>
                    <input required name="product_cmt" type="text" placeholder="Nhập Tên sản Phẩm">
                     <label for="">Chọn Nhãn Hàng : <span style="color:red">*</span></label>
                    <select name="product_brand" id="">
                        <option value="#">Chọn Nhãn hàng</option>
                        <?php
                            $show_brand=$product->show_brand();
                            if($show_brand){
                                while($result=$show_brand->fetch_assoc()){

                                ?>
                                <option value="<?php echo $result['ma_brand']?>"><?php echo $result['brand_ten']?></option>
                                <?php
                            }}
                        ?>
                    </select>
                    <input style="padding:10px 0"type='file' name="product_img">
                    <button   type="sumbit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>