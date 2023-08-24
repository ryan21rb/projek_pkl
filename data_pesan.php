

<?php

    // melakukan koneksi 
    $connect = mysqli_connect('localhost', 'root', '', 'test2');

    //mengambil data 5 pesan terbaru 
    $sql = mysqli_query($connect, "SELECT * FROM notif ORDER BY id_pesan DESC limit 5");
    $result = array();
    
    while ($row = mysqli_fetch_assoc($sql)) {
        $data[] = $row;
    }

    echo json_encode(array("result" => $data));
?>