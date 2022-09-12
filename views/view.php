<?php include('layouts/navbar.php') ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Detail Siswa
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
                            
                                <div class="mb-3">
                                    <label>Nama Siswa</label>
                                    <p class="form-control">
                                        <?=$murid['nama'];?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Tanggal Lahir</label>
                                    <p class="form-control">
                                        <?=$murid['tgl_lahir'];?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Nomot Telepon</label>
                                    <p class="form-control">
                                        <?=$murid['no_telp'];?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Email</label>
                                    <p class="form-control">
                                        <?=$murid['email'];?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Kelas</label>
                                    <p class="form-control">
                                        <?=$murid['kelas'];?>
                                    </p>
                                </div>

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
    
<?php include('layouts/footer.php') ?>