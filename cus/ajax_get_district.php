<?php 
       require("../connection.php");
    
    $province_id = $_GET['d'];
    
    $sql = "SELECT * FROM quan_huyen WHERE tp_ma = {$province_id}";
    $result = mysqli_query($conn, $sql);

    $data[0] = [
        'id' => null,
        'name' => 'Chọn một Quận/huyện'
    ];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = [
            'id' => $row['ma_qhuyen'],
            'name'=> $row['qhuyen_ten']
        ];
    }
    echo json_encode($data);
?>