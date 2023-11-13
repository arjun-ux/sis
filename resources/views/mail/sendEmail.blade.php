
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Ini Sistem Informasi santri</h3>
    <h4>Selamat Bergabung, {{ $dataSiswa['nama'] }}</h4>
    <p>Berikut adalah Nomor Induk Santri yang di gunakan Login pada :</p>
    <a href="http://localhost:8000/login-santri">Klik Disini</a>
    <p>Ini NIS Anda, {{ $dataSiswa['nis'] }}</p>
    <p>password : pass123</p>
    <p>Harap Ganti Password Setelah Login demi Keamanan Data Anda</p>

</body>
</html>
