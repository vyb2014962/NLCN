<?php 
    require("../connection.php");
    $district_id = $_GET['district_id'];

    // echo $district_id;
    
    $sql = "SELECT * FROM phuong_xa WHERE ma_qhuyen = {$district_id}";
    $result = mysqli_query($conn, $sql);


    $data[0] = [
        'id' => null,
        'name' => 'Chọn một xã/phường'
    ];

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = [
            'id' => $row['px_id'],
            'name'=> $row['name']
        ];
    }
    echo json_encode($data);
?>