<?php

    function get_ma() {
        require "connection.php";

        $q_result = mysqli_query($conn,"SELECT MAX(dthoai_ma    ) as maxm FROM dien_thoai")
            or die("Query failed: " . mysqli_error($conn));
        
        //echo "maxm: " . mysql_result($q_result, 0, "maxm") . "; ";
            while($row=mysqli_fetch_assoc($q_result)){
                $id=$row['maxm'];
            }
        return  $id+ 1;
    }
    function get_data(){
        require "connection.php";

        $q_result = mysqli_query($conn,"SELECT * FROM dien_thoai")
            or die("Query failed: " . mysqli_error($conn));
    }

    function dropdown_options($tb_name, $value_col, $text_col, $none=false, $default='') {        
 
        require "connection.php";
        
        if ($none)
            echo "<option value=''></option>\n";
        
        $query = "SELECT " . $value_col . ", " . $text_col .
            " FROM " .  $tb_name;
        
        $q_result = mysqli_query($conn,$query) 
            or die("Query failed: " . mysqli_error($conn));
        
        //generate list of options
        while ($row = mysqli_fetch_array($q_result)) {
            echo "<option value='", $row[0], "' ";
            
            if ($row[0] == $default)
                echo "selected";
            
            echo ">", $row[1], "</option>\n";
        }      
    }


    
    function dropdown_options1($tb_name, $value_col, $text_col,$diachi,$id, $none=false, $default='') {        
 
        require "connection.php";
        
        if ($none)
            echo "<option value=''></option>\n";
        
        $query = "SELECT " . $value_col . ", " . $text_col .
            " FROM " .  $tb_name . "where ". $diachi."=".$id;
        
        $q_result = mysqli_query($conn,$query) 
            or die("Query failed: " . mysqli_error($conn));
        
        //generate list of options
        while ($row = mysqli_fetch_array($q_result)) {
            echo "<option value='", $row[0], "' ";
            
            if ($row[0] == $default)
                echo "selected";
            
            echo ">", $row[1], "</option>\n";
        }      
    }
?>