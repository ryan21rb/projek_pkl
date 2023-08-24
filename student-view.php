<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student Create</title>
</head>
<body>
  
    <div class="container mt-5">

    <!DOCTYPE html>
<html>
<head>
    <title>Detail Deskripsi Siswa</title>
    <center><a href="tampil.php" class="btn btn-danger float-end">BACK</a></center>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            box-shadow: 0px 0px 5px #aaa;
        }
    
        h1 {
            color: #333;
        }
        strong {
            color: #666;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    
    // Contoh data detail siswa
    $siswa = array(
        'nama' => '',
        'Class' => '12 RPL 1',
        'subject' => 'RPL',
        'school' => 'SMKN11 Bandung',
        'major' => 'Rekayasa Perangkat Lunak',
        'first task' => 'Crud',
        'second task' => 'sesion login and logout',
    );  ?>

    <h1>Descripsion: <?php echo $siswa['nama']; ?></h1>
    <p><strong>Subject:</strong> <?php echo $siswa['subject']; ?> </p>
    <p><strong>Class:</strong> <?php echo $siswa['Class']; ?> </p>
    <p><strong>School:</strong> <?php echo $siswa['school']; ?></p>
    <p><strong>Major:</strong> <?php echo $siswa['major']; ?></p>
    <h2>Task:</h2>
    <ul>
        <p><strong>first task:</strong> <?php echo $siswa['first task']; ?></p>
        <p><strong>second task:</strong> <?php echo $siswa['second task']; ?></p>
        
    </ul>
    </div>

</body>
</html>

