<?php 
include('layouts/navbar.php');

$pesan = "";
if (isset($_POST['login'])) {
    $user = "hikmah";
    $pass = "maulana";

    if ($_POST['username'] == $user && $_POST['password'] == $pass) {
        header('Location: index.php');
    } else {
        $pesan = "Username atau Password salah";
    }
}
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-3 position-absolute top-50 start-50 translate-middle">
            <div class="alert alert-danger">
                <?= $pesan ?>
            </div>
            <div class="card p-3">
                <h1>Login.</h1>
                <form action="" method="POST">
                    <div class="form-group mb-3">
                        <label for="username">Username</label>
                        <input class="form-control" type="text" name="username" placeholder="Username atau email" />
                    </div>
    
                    <div class="form-group mb-3">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password" placeholder="Password" />
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="login" value="Masuk" />
                </form>
            </div>
        </div>
    </div>
</div>