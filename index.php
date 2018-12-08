
<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
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
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
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
                <div class="card-header bg-primary">
                    Selamat Datang
                </div>
                <div class="card-body">
                    Selamat Datang Lagi
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