<div class="container mt-5">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash() ?>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <table class="mb-2">
                <td>
                    <h3 style="margin-right: 10px;">Daftar Mahasiswa</h3>
                </td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formAdd">ADD</button>
                </td>
            </table>
            <form action="<?= BASEURL ?>/mahasiswa/search" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search Mahasiswa" name="keyword" id="keyword" autocomplete="off">
                    <button class="btn btn-outline-primary" type="submit" id="searchbtn">Search</button>
                </div>
            </form>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item">
                        <a class="badge bg-primary" href="<?= BASEURL ?>/mahasiswa/details/<?= $mhs['id'] ?>">DETAILS</a>
                        <?= $mhs['nrp'] . ' - ' . $mhs['nama'] ?>
                        <a class="badge bg-danger" href="<?= BASEURL ?>/mahasiswa/delete/<?= $mhs['id'] ?>" onclick="return confirm('Are you sure ?')" style="float: right; margin-left: 5px;">DELETE</a>
                        <a class="badge bg-primary" href="<?= BASEURL ?>/mahasiswa/edit/<?= $mhs['id'] ?>" style="float: right;">EDIT</a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>


<div class="modal fade" id="formAdd" tabindex="-1" aria-labelledby="titleAdd" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="titleAdd">Tambah Data Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- form add mahasiswa -->
            <form action="<?= BASEURL ?>/mahasiswa/tambah" method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <input type="number" class="form-control" id="nrp" name="nrp" placeholder="NRP" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="NAMA" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="EMAIL" required>
                    </div>
                    <div class="mb-3">
                        <select id="jurusan" name="jurusan" class="form-select" required>
                            <option value="" active>Pilih Jurusan</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Akuntansi">Akuntansi</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
                    <button type="submit" class="btn btn-primary">INSERT DATA</button>
                </div>
            </form>
        </div>
    </div>
</div>