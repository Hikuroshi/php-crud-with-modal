<?php
session_start();
require 'koneksi.php';

if(isset($_POST['delete_murid']))
{
    $murid_id = mysqli_real_escape_string($konek, $_POST['delete_murid']);

    $query = "DELETE FROM siswa WHERE id='$murid_id' ";
    $query_run = mysqli_query($konek, $query);

    if($query_run)
    {
        $_SESSION['pesan'] = "Siswa berhasil dihapus";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['pesan'] = "Gagal menghapus siswa";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_murid']))
{
    $murid_id = mysqli_real_escape_string($konek, $_POST['murid_id']);

    $nama = mysqli_real_escape_string($konek, ucwords($_POST['nama']));
    $tgl_lahir = mysqli_real_escape_string($konek, $_POST['tgl_lahir']);
    $no_telp = mysqli_real_escape_string($konek, $_POST['no_telp']);
    $email = mysqli_real_escape_string($konek, $_POST['email']);
    $kelas = mysqli_real_escape_string($konek, strtoupper($_POST['kelas']));

    $query = "UPDATE siswa SET nama='$nama', tgl_lahir='$tgl_lahir', no_telp='$no_telp', email='$email', kelas='$kelas' WHERE id='$murid_id' ";
    $query_run = mysqli_query($konek, $query);

    if($query_run)
    {
        $_SESSION['pesan'] = "Siswa berhasil diperbarui";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['pesan'] = "Gagal Memperbarui siswa";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_murid']))
{
    $nama = mysqli_real_escape_string($konek, ucwords($_POST['nama']));
    $tgl_lahir = mysqli_real_escape_string($konek, $_POST['tgl_lahir']);
    $no_telp = mysqli_real_escape_string($konek, $_POST['no_telp']);
    $email = mysqli_real_escape_string($konek, $_POST['email']);
    $kelas = mysqli_real_escape_string($konek, strtoupper($_POST['kelas']));

    $query = "INSERT INTO siswa (nama, tgl_lahir, no_telp, email, kelas) VALUES ('$nama', '$tgl_lahir', '$no_telp', '$email', '$kelas')";

    $query_run = mysqli_query($konek, $query);
    if($query_run)
    {
        $_SESSION['pesan'] = "Siswa berhasil ditambahkan";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['pesan'] = "Gagal menambahkan siswa";
        header("Location: index.php");
        exit(0);
    }
}
?>