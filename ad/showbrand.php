 <?php
 include "../ad/brand.php"
 ?>
 <?php
$brand =new brand;
$show_brand= $brand->show_brand()


 ?>
 <div class="admin-content-right">
            <div class="admin-content-right-cartegory-list">
                <h1>Danh sách Nhãn Hàng</h1>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>Logo</th>
                        <th>Nhãn Hàng</th>
                        <th>Xóa</th>
                    </tr>
                    <?php
                    if($show_brand){
                        $i=0;
                        while($result=$show_brand->fetch_assoc())
                        {
                            $i++;
                        
                    ?>
                    <tr>
                        <td><?php echo $i?></td>
                        <td><img width="auto" height="48px" src="<?php echo $result['brand_img']?>" alt=""></td>
                        <td><?php echo $result['brand_ten']?></td>
                        <td> <a href="branddelete.php?brand_id=<?php echo $result['ma_brand']?>">xóa</a></td>

                    </tr>
                <?php
                        }
                    }
                    ?>
                </table>
            </div>
        </div>
    </section>
</body>
</html>
