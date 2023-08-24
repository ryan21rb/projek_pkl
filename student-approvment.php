<?php
require 'koneksi.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student View</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Approvment
                            <a href="tampil.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                    <html>
<head><title>Pelajaran Favorit
box</title></head>
<center><body>
<FORM ACTION="tampil.php" METHOD="POST" NAME="input">
<h2>Pilih Mapel Favorit Anda :</h2>
<select name="mapel">
<option value="Matematika">Matematika</option>
<option value="PJOK">PJOK</option>
<option value="Bahasa.Indonesia">Bahasa.Indonesia</option>
<option value="IPA">IPA</option>
<option value="IPS">IPS</option>
<option value="PAI">PAI</option>
</select>
<input type="submit" name="Pilih" value="Pilih">
</FORM>
</body>
</center>
</html>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
