<?php
    $this->load->view('layout/header');
    $this->load->view('layout/topbar');
?>

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Table Bus -->
        <div class="card">
            <h5 class="card-header d-flex justify-content-between align-items-center">
                Table Kelola Data Siswa
                <a  href="<?php echo base_url('admin/'); ?>" class="btn btn-primary d-none d-md-inline">
                    <i class="bx bx-plus-circle me-1"></i> Menambahkan Siswa
                </a>
                <a href="javascript:void(0);" class="btn btn-primary d-md-none">
                    <i class="bx bx-plus-circle"></i>
                </a>
            </h5>
            <div class="table-responsive text-nowrap px-4 mb-3">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>NAMA</th>
                            <th>NISN</th>
                            <th>KELAS</th>
                            <th>TANGGAL LAHIR</th>
                            <th>TEMPAT LAHIR</th>
                            <th>ALAMAT</th>
                            <th>JENIS KELAMIN</th>
                            <th>AGAMA</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                        <!-- Row 1 -->
                        <tr>
                            <td><?= $nama; ?></td>
                            <td>
                                <span class="badge bg-label-success me-1">
                                    <strong> <?= $nisn; ?> </strong></span>
                            </td>
                            <td><?= $kelas; ?></td>
                            <td><?= $tanggalLahir; ?></td>
                            <td><?= $tempatLahir; ?></td>
                            <td><?= $alamat; ?></td>
                            <td><?= $jenisKelamin; ?></td>
                            <td><?= $agama; ?></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"
                                            ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                        >
                                        <a class="dropdown-item" href="javascript:void(0);"
                                            ><i class="bx bx-trash me-1"></i> Delete</a
                                        >
                                    </div>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Hoverable Table rows -->
    </div>
    <!-- / Content -->

    <div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->

<?php 
    $this->load->view('layout/sidebar');
    $this->load->view('layout/footer');
?>