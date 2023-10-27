

<?php
        
        require("../connection.php");
 
        $query = "SELECT * FROM  brand_mobie";
        $q_result = mysqli_query($conn, $query)
            or die("Query failed");
        
        echo"    
      <section class='menu-bar'>
      <div class='container'>
        <div class='menu-bar-content'>
        <ul>";
        while ($row = mysqli_fetch_array($q_result)) {

            echo" <li><a href='../cus/shop.php?logo=$row[brand_ten]&id=1'><img src='$row[brand_img]' alt=''></a></li>";

        }


echo"


        </ul>
      </div>
    </div>
  </section>"
  ?>