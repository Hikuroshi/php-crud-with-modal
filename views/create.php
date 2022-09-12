<?php /* include('layouts/navbar.php') ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Tambah Siswa
                        <a href="index.php" class="btn btn-danger float-end">Kembali</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="/code.php" method="POST">

                        <div class="mb-3">
                            <label>Nama Siswa</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Nomor Telepon</label>
                            <input type="number" name="no_telp" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Kelas</label>
                            <input type="text" name="kelas" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="save_murid" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include('layouts/footer.php') */ ?>


<div class="modal fade" id="createsiswa" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/code.php" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="fs-6">Nama Siswa</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="fs-6">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="fs-6">Nomor Telepon</label>
                        <input type="number" name="no_telp" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="fs-6">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="fs-6">Kelas</label>
                        <input type="text" name="kelas" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" name="save_murid" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>