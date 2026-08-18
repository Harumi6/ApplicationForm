<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Navbar Component
 * 
 * Variables:
 * @var bool $show_sidebar_toggle Whether to show sidebar burger toggle (default: false)
 * @var string|null $back_url URL for back button (optional)
 * @var string $back_text Label for back button (default: 'หน้าแรก')
 * @var bool $show_apply_btn Whether to show application form link (default: true)
 * @var string $user_name Name of logged in user (default: 'Alexander Pierce')
 * @var string $user_role Role of logged in user (default: 'Web Developer')
 */
$show_sidebar = isset($show_sidebar_toggle) ? (bool)$show_sidebar_toggle : false;
$back_link = isset($back_url) ? $back_url : null;
$back_label = isset($back_text) ? $back_text : 'หน้าแรก';
$show_apply = isset($show_apply_btn) ? (bool)$show_apply_btn : true;
$name = isset($user_name) ? $user_name : 'Alexander Pierce';
$role = isset($user_role) ? $user_role : 'Web Developer';
?>
<!--begin::Header Navbar-->
<nav class="app-header navbar navbar-expand bg-body shadow-sm">
    <div class="container-fluid">
        <!--begin::Start Navbar Links-->
        <ul class="navbar-nav align-items-center gap-2">
            <?php if ($show_sidebar): ?>
                <li class="nav-item">
                    <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button" aria-label="Toggle sidebar">
                        <i class="bi bi-list fs-5"></i>
                    </a>
                </li>
            <?php endif; ?>

            <?php if ($back_link): ?>
                <li class="nav-item">
                    <a class="btn btn-outline-secondary btn-sm d-inline-flex align-items-center gap-1" href="<?= $back_link ?>">
                        <i class="bi bi-arrow-left-circle"></i> <span><?= htmlspecialchars($back_label) ?></span>
                    </a>
                </li>
            <?php endif; ?>

            <?php if ($show_apply): ?>
                <li class="nav-item d-none d-md-block">
                    <a href="<?= site_url('welcome/applicationform') ?>" class="btn btn-primary btn-sm d-inline-flex align-items-center gap-1 shadow-sm">
                        <i class="bi bi-file-earmark-text"></i> <span>กรอกใบสมัครงาน</span>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
        <!--end::Start Navbar Links-->

        <!--begin::End Navbar Links-->
        <ul class="navbar-nav ms-auto align-items-center gap-2">
            <!-- Theme Toggle Component -->
            <?php $this->load->view('components/theme_toggle'); ?>

            <!--begin::User Menu Dropdown-->
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img src="<?= base_url('assets/img/user2-160x160.jpg') ?>" class="user-image rounded-circle shadow" alt="User Profile" />
                    <span class="d-none d-md-inline"><?= htmlspecialchars($name) ?></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <!--begin::User Image-->
                    <li class="user-header text-bg-primary">
                        <img src="<?= base_url('assets/img/user2-160x160.jpg') ?>" class="rounded-circle shadow" alt="User Profile" />
                        <p>
                            <?= htmlspecialchars($name) ?> - <?= htmlspecialchars($role) ?>
                            <small>Member since Nov. 2023</small>
                        </p>
                    </li>
                    <!--end::User Image-->
                    <!--begin::Menu Body-->
                    <li class="user-body">
                        <div class="row">
                            <div class="col-4 text-center"><a href="#">Followers</a></div>
                            <div class="col-4 text-center"><a href="#">Sales</a></div>
                            <div class="col-4 text-center"><a href="#">Friends</a></div>
                        </div>
                    </li>
                    <!--end::Menu Body-->
                    <!--begin::Menu Footer-->
                    <li class="user-footer">
                        <a href="#" class="btn btn-outline-secondary">Profile</a>
                        <a href="#" class="btn btn-outline-danger float-end">Sign out</a>
                    </li>
                    <!--end::Menu Footer-->
                </ul>
            </li>
            <!--end::User Menu Dropdown-->
        </ul>
        <!--end::End Navbar Links-->
    </div>
</nav>
<!--end::Header Navbar-->
