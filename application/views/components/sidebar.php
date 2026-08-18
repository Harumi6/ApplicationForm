<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Sidebar Component
 * 
 * Variables:
 * @var string|null $active_menu Active menu item identifier
 */
$active = isset($active_menu) ? $active_menu : 'home';
?>
<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
        <!--begin::Brand Link-->
        <a href="<?= site_url('welcome/index') ?>" class="brand-link">
            <!--begin::Brand Image-->
            <img
                src="<?= base_url('assets/images/logo.png') ?>"
                alt="Logo"
                class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">สมัครงาน</span>
            <!--end::Brand Text-->
        </a>
        <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand-->

    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2" aria-label="Main navigation">
            <!--begin::Sidebar Menu-->
            <ul
                class="nav sidebar-menu flex-column"
                data-lte-toggle="treeview"
                data-accordion="false"
                id="navigation"
            >
                <li class="nav-item">
                    <a href="<?= site_url('welcome/index') ?>" class="nav-link <?= ($active === 'home') ? 'active' : '' ?>">
                        <i class="nav-icon bi bi-briefcase"></i>
                        <p>ตำแหน่งงานที่เปิดรับ</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= site_url('welcome/applicationform') ?>" class="nav-link <?= ($active === 'application') ? 'active' : '' ?>">
                        <i class="nav-icon bi bi-file-earmark-text"></i>
                        <p>กรอกใบสมัครงาน</p>
                    </a>
                </li>
            </ul>
            <!--end::Sidebar Menu-->
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>
<!--end::Sidebar-->
