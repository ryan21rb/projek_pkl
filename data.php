<?php

    // melakukan koneksi 
    $connect = mysqli_connect('localhost', 'root', '', 'test2');
    
    //menghitung jumlah pesan dari tabel pesan
    $query= mysqli_query($connect, "Select Count(id_pesan) as jumlah From notif");
    
    //menampilkan data
    $hasil = mysqli_fetch_array($query);
    
    //membuat data json
    echo json_encode(array('jumlah' => $hasil['jumlah']));
    
    ?>