<!-- Sidebar Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="<?php echo base_url('admin/'); ?>" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bold ms-1">D-Lemas System</span>
        </a>

        <a href="javascript:void(0);"
            class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Main Pages -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Admin</span></li>

        <!-- Input Siswa -->
        <li class="menu-item <?php echo $this->uri->segment(2) == '' ? 'active open' : ''; ?>">
            <a href="<?php echo base_url('admin/'); ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-package"></i>
                <div data-i18n="Basic">Input Siswa</div>
            </a>
        </li>

        <!-- Tampil Siswa -->
        <li class="menu-item <?php echo $this->uri->segment(2) == 'TampilData' ? 'active open' : ''; ?>">
            <a href="" class="menu-link">
                <?php if($this->uri->segment(2) == 'TampilData'): ?>
                    <i class="menu-icon tf-icons bx bx-spreadsheet"></i>
                <?php else: ?>
                    <i class="menu-icon disabled tf-icons bx bx-spreadsheet"></i>
                <?php endif; ?>
                <div data-i18n="Basic">Tampil Data Siswa</div>
            </a>
        </li>

    </ul>
    
</aside>
<!-- Akhir Sidebar Menu -->
