<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>From Regis PPDB</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body { font-family: Arial, sans-serif; }
        h1 { text-align: center; color: #333; margin-bottom: 20px; }
        .form-icon { width: 100%; height: auto; margin-bottom: 20px; }
        .form-icon img { width: 100%; height: auto; max-width: 100%; }
        form { max-width: 500px; }
        fieldset { border: 1px solid #ddd; border-radius: 5px; padding: 15px; margin-bottom: 20px; }
        h2 { width: auto; margin: 0 auto; font-weight: bold; font-size: 1.8em; text-align: center; }
        form label { display: block; margin-top: 10px; color: #666; }
        form input[type="text"], form input[type="date"], form input[type="submit"] { width: 100%; padding: 10px; margin-top: 5px; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 5px; }
        form input[type="submit"] { background-color: #5cb85c; color: white; border: none; cursor: pointer; transition: background-color 0.3s ease; }
        form input[type="submit"]:hover { background-color: #4cae4c; }
        .navbar { margin-bottom: 20px; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="https://upload.wikimedia.org/wikipedia/commons/9/9c/Logo_of_Ministry_of_Education_and_Culture_of_Republic_of_Indonesia.svg" alt="Logo" style="max-width: 50px; max-height: 50px;">
            PPDB Online SMA 2023/2024
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Pengumuman</a></li>
                <li class="nav-item active"><a class="nav-link" href="#">Mendaftar</a></li>
                <li class="nav-item"><a class="nav-link disabled" href="#">Contact</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h1>Pendaftaran Tahun Ajaran 2023/2024</h1>
        <div class="row">
            <div class="col-md-4 d-flex align-items-center justify-content-center">
                <div class="form-icon">
                    <img src="https://ptp.ft.unm.ac.id/wp-content/uploads/sites/23/2018/01/register.png" alt="b">
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-fields">
                    <form action="submit_registration" method="post">
                        <fieldset>
                        <h2>Data Pendaftaran</h2>
                            <div class="form-group"><label for="nisn">NISN</label><input type="text" id="nisn" name="nisn" class="form-control" placeholder="NISN" required></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="full_name">Nama Lengkap</label>
                                        <input type="text" id="full_name" name="full_name" class="form-control" placeholder="Nama Lengkap" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nickname">Nama Panggilan</label>
                                        <input type="text" id="nickname" name="nickname" class="form-control" placeholder="Nama Panggilan" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group"><label for="birth_place">Tempat Lahir</label><input type="text" id="birth_place" name="birth_place" class="form-control" placeholder="Tempat Lahir" required></div>
                            <div class="form-group"><label for="birth_date">Tanggal Lahir</label><input type="date" id="birth_date" name="birth_date" class="form-control" required></div>
                            <input type="submit" value="Submit" class="btn btn-primary">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
