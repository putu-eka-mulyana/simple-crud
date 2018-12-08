<?php
require 'config.php';
$nimerr = $clnderr = $judulerr = $latar_belakangerr = $tujuanerr= "";
$nim = $clnd = $judul = $latar_belakang = $tujuan ="";

if(isset($_POST['simpan'])){
    $length=strlen(trim($_POST['nim']));
    if(empty($_POST['nim'])){
        $nimerr =" tidak boleh kosong";
    }elseif (!($length >= 10 && $length <=12)) {
        $nimerr ="Masukan nim dengan benar";
    }elseif (!filter_var($_POST['nim'], FILTER_VALIDATE_INT)) {
        $nimerr ="Masukan nim berupa angka";
    }
    else{
        $nim=htmlspecialchars($_POST['nim']);
    }
    if(empty($_POST['calon_dosen_pembimbing'])){
        $clnderr="tidak boleh kosong";
    }else{
        $clnd=htmlspecialchars($_POST['calon_dosen_pembimbing']);
    }
    if(empty($_POST['judul'])){
        $judulerr="tidak boleh kosong";
    }else{
        $judul=htmlspecialchars($_POST['judul']);
    }
    if(empty($_POST['tujuan'])){
        $tujuanerr="tidak boleh kosong";
    }else{
        $tujuan=htmlspecialchars($_POST['tujuan']);
    }
    if(empty($_POST['latar_belakang'])){
        $latar_belakangerr="tidak boleh kosong";
    }else{
        $latar_belakang=htmlspecialchars($_POST['latar_belakang']);
    }
    if(!empty($nim && $clnd && $judul && $latar_belakang && $tujuan)){
        $result =insert("INSERT INTO tbl_sinopsis (nim, calon_dosen_pembimbing,judul,latar_belakang,tujuan) VALUES ('$nim','$clnd','$judul','$latar_belakang','$tujuan')");
    if($result){
        echo "<script>
        alert('success');
        // document.location.href='form.php';
        </script>";
    }else{
        echo "<script>
        alert('failed');
            // document.location.href='form.php';
        </script>";
    }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <style type="text/css">
        .error{
            color:red;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="alert alert-primary text-center">Bootstrap</h1>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">
            <img src="img/logo.png" width="28px" height="30px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="form.php">Pendaftaran</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Data Sinopsis
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="data.php">Semua Data</a>
                        <a class="dropdown-item" href="diterima.php">Diterima</a>
                        <a class="dropdown-item" href="ditolak.php">Ditolak</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <br>

    <div class="row">

        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5 ">
            <div class="alert alert-warning">
                sidebar
            </div>
        </div>

        <div class="col-xl-9 col-lg-9 col-md-8 col-sm-7">
            <div class="card">
                <div class="card-header bg-primary text-light">
                    Form Pendaftaran
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" id="nim" placeholder="Nim" name="nim"><span class="error"><?=$nimerr?></span>
                        </div>
                        <div class="form-group">
                            <label for="nama">calon desen pembimbing</label>
                            <input type="text" class="form-control" id="nama" name="calon_dosen_pembimbing" 
                                   placeholder="Nama dosen"><span class="error"><?=$clnderr?></span>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Judul</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="judul" 
                                   placeholder="judul"><span class="error"><?=$judulerr?></span>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">latar belakang</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="latar_belakang" rows="3"></textarea>
                            <span class="error"><?=$latar_belakangerr?></span>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tujuan</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="tujuan"rows="3"></textarea><span class="error"><?=$tujuanerr?></span>
                        </div>
                        <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">Link Terkait</div>
        <div class="col">Contact</div>
        <div class="col">Social Media</div>
    </div>
</div>
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/bootstrap.js"></script>
</body>
</html>