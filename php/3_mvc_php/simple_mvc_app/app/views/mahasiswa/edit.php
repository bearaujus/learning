<div class="container mt-5">
    <table>
        <td>
            <h3 style="margin-right: 10px;">Daftar Mahasiswa</h3>
        </td>
        <td><a href="<?= BASEURL ?>/mahasiswa" class="btn btn-primary">BACK</a></td>
    </table>
    <form action="<?= BASEURL ?>/mahasiswa/update" method="post">
        <input type="hidden" name="id" value="<?= $data['selectedMhs']['id'] ?>">
        <div class="modal-body">
            <div class="mb-3">
                <label for="nrp" class="form-label">NRP</label>
                <input type="number" class="form-control" id="nrp" name="nrp" placeholder="NRP" value="<?= $data['selectedMhs']['nrp'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">NAMA</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="NAMA" value="<?= $data['selectedMhs']['nama'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">EMAIL</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="EMAIL" value="<?= $data['selectedMhs']['email'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">JURUSAN</label>
                <select id="jurusan" name="jurusan" class="form-select" required>
                    <option value="" active>Pilih Jurusan</option>
                    <option <?php if ($data['selectedMhs']['jurusan'] == 'Sistem Informasi') echo ' selected' ?> value="Sistem Informasi">Sistem Informasi</option>
                    <option <?php if ($data['selectedMhs']['jurusan'] == 'Teknik Informatika') echo ' selected' ?> value="Teknik Informatika">Teknik Informatika</option>
                    <option <?php if ($data['selectedMhs']['jurusan'] == 'Teknik Mesin') echo ' selected' ?> value="Teknik Mesin">Teknik Mesin</option>
                    <option <?php if ($data['selectedMhs']['jurusan'] == 'Akuntansi') echo ' selected' ?> value="Akuntansi">Akuntansi</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">SAVE</button>
    </form>
</div>