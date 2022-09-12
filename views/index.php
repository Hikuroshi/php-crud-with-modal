<?php include('layouts/navbar.php') ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Daftar Siswa
                        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#createsiswa">Tambah Siswa</button>
                        <?php include('create.php') ?>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Siswa</th>
                                <th>Tanggal Lahir</th>
                                <th>Nomor Telepon</th>
                                <th>Email</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $query = "SELECT * FROM siswa";
                                $query_run = mysqli_query($konek, $query);

                                if(mysqli_num_rows($query_run) > 0)
                                {
                                    foreach($query_run as $murid)
                                    {
                                        ?>
                                        <tr>
                                            <td><?= $murid['id'] ?></td>
                                            <td><?= $murid['nama']; ?></td>
                                            <td><?= $murid['tgl_lahir']; ?></td>
                                            <td><?= $murid['no_telp']; ?></td>
                                            <td><?= $murid['email']; ?></td>
                                            <td><?= $murid['kelas']; ?></td>
                                            <td>
                                                <a href="view.php?id=<?= $murid['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#edit-<?= $murid['id']; ?>" onclick="modal()">Edit</button>
                                                <form action="/code.php" method="POST" class="d-inline">
                                                    <button onclick="return confirm('Apakah yakin ingin menghapus <?= $murid['nama']; ?>?')" name="delete_murid" value="<?=$murid['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                            <?php include('edit.php') ?>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    echo "<h5> Data tidak ditemukan </h5>";
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php include('layouts/footer.php') ?>