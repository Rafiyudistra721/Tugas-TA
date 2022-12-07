<body class="bg-dark">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php
$user = $_POST['username'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$level = "user";

if ($pass1 == $pass2) {
    include "koneksi.php";

    $query = "INSERT INTO tb_pengguna VALUES ('$user','$passmd','$level')";
    $hasil = mysqli_query($con,$query);

    if ($hasil) {?>
        <header class="col-md-11 p-3 bg-secondary text-light mx-auto rounded my-3">
            <h2 class="mx-4">User Berhasil Terdaftar</h2>
            <a class="fs-3 mx-4 text-light" href='login.php'>Click to Login</a>
        </header>
    <?php } else {echo "Username sudah ada yang memiliki";}
} else {
    echo "Password yang dimasukkan tidak sama";
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>