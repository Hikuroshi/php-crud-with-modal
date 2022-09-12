<?php /* include('layouts/navbar.php') ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Edit Siswa
                        <a href="index.php" class="btn btn-danger float-end">Kembali</a>
                    </h4>
                </div>
                <div class="card-body">

                    <?php
                    if(isset($_GET['id']))
                    {
                        $murid_id = mysqli_real_escape_string($konek, $_GET['id']);
                        $query = "SELECT * FROM siswa WHERE id='$murid_id' ";
                        $query_run = mysqli_query($konek, $query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                            $murid = mysqli_fetch_array($query_run);
                            ?>
                            <form action="/code.php" method="POST">
                                <input type="hidden" name="murid_id" value="<?= $murid['id']; ?>">

                                <div class="mb-3">
                                    <label>Nama Siswa</label>
                                    <input type="text" name="nama" value="<?=$murid['nama'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" value="<?=$murid['tgl_lahir'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Nomor Telepon</label>
                                    <input type="number" name="no_telp" value="<?=$murid['no_telp'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="email" name="email" value="<?=$murid['email'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Kelas</label>
                                    <input type="text" name="kelas" value="<?=$murid['kelas'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="update_murid" class="btn btn-primary">
                                        Perbarui
                                    </button>
                                </div>

                            </form>
                            <?php
                        }
                        else
                        {
                            echo "<h4>Siswa tidak ditemukan</h4>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

<?php include('layouts/footer.php') */ ?>

<div class="modal fade" id="edit-<?= $murid['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <?php
            
            $murid_id = $murid['id'];
            $query = "SELECT * FROM siswa WHERE id='$murid_id'";
            $query_run = mysqli_query($konek, $query);
            $edit_murid = mysqli_fetch_array($query_run);
            
            ?>
            <form action="/code.php" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="murid_id" value="<?= $edit_murid['id']; ?>">

                    <div class="mb-3">
                        <label>Nama Siswa</label>
                        <input type="text" name="nama" value="<?=$edit_murid['nama'];?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" value="<?=$edit_murid['tgl_lahir'];?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Nomor Telepon</label>
                        <input type="number" name="no_telp" value="<?=$edit_murid['no_telp'];?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" value="<?=$edit_murid['email'];?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Kelas</label>
                        <input type="text" name="kelas" value="<?=$edit_murid['kelas'];?>" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" name="update_murid" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>