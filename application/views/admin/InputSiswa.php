<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Form/</span> Input Data Siswa</h4>

        <!-- Form Pengisian Data Siswa -->
        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="<?= base_url('Admin/TampilData') ?>" method="post">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="input-nama-siswa">Nama</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text">
                                            <i class="bx bx-user"></i>
                                        </span>
                                        <input
                                            type="text"
                                            name="nama"
                                            class="form-control"
                                            id="input-nama-siswa"
                                            placeholder="Masukan Nama Siswa" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="input-nisn-siswa">NISN</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text">
                                            <i class="bx bx-id-card"></i>
                                        </span>
                                        <input
                                            type="text"
                                            name="nisn"
                                            id="input-nisn-siswa"
                                            class="form-control"
                                            placeholder="Masukan NISN Siswa" />
                                    </div>
                                    <div class="form-text">Masukan NISN sebanyak 12 Karakter</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="input-kelas-siswa">Kelas</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text">
                                            <i class="bx bx-building-house"></i>
                                        </span>
                                        <input
                                            type="text"
                                            name="kelas"
                                            id="input-kelas-siswa"
                                            class="form-control"
                                            placeholder="Masukan Kelas Siswa" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 form-label" for="input-tanggal-lahir-siswa">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text">
                                            <i class="bx bx-calendar"></i>
                                        </span>
                                        <input
                                            type="date"
                                            name="tanggalLahir"
                                            id="input-tanggal-lahir-siswa"
                                            class="form-control"
                                            placeholder="Masukan Tanggal Lahir Siswa" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 form-label" for="input-tempat-lahir-siswa">Tempat Lahir</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text">
                                            <i class="bx bx-map"></i>
                                        </span>
                                        <input
                                            type="text"
                                            name="tempatLahir"
                                            id="input-tempat-lahir-siswa"
                                            class="form-control"
                                            placeholder="Masukan Tempat Lahir Siswa" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 form-label" for="input-alamat-siswa">Alamat</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text">
                                            <i class="bx bx-map-pin"></i>
                                        </span>
                                        <textarea
                                            id="input-alamat-siswa"
                                            name="alamat"
                                            class="form-control"
                                            placeholder="Masukan Alamat Siswa"></textarea>
                                    </div>
                                    <div class="form-text">Tarik Kebawah jika form nya tidak cukup</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jenisKelamin" id="lakiLaki" value="Laki-Laki">
                                        <label class="form-check-label" for="lakiLaki">Laki-Laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jenisKelamin" id="perempuan" value="Perempuan">
                                        <label class="form-check-label" for="perempuan">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 form-label" for="input-agama-siswa">Agama</label>
                                <div class="col-sm-10">
                                    <select id="input-agama-siswa" class="form-select" name="agama">
                                        <option selected>Pilih Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Protestan">Protestan</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/ akhir form pengisian data siswa -->

    </div>
    <!-- / Content -->

    <div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->