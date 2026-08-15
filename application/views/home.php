<?php
    defined('BASEPATH') or exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Home</title>
    <link rel="icon" href="<?= base_url('assets/images/logo.png') ?>" type="image/x-icon" />

    <!--begin::Theme Init (prevents flash of incorrect theme on load, #6043)-->
    <script>
      (() => {
        'use strict';
        const STORAGE_KEY = 'lte-theme';
        let stored = null;
        try {
          stored = localStorage.getItem(STORAGE_KEY);
        } catch {
          // localStorage may be unavailable (private mode, sandboxed iframe).
        }
        const prefersDark = globalThis.matchMedia('(prefers-color-scheme: dark)').matches;
        // Mirror the resolution in _scripts.astro: explicit "dark"/"light" win,
        // otherwise ("auto" or unset) fall back to the OS preference.
        let resolved = 'light';
        if (stored === 'dark' || stored === 'light') {
          resolved = stored;
        } else if (prefersDark) {
          resolved = 'dark';
        }
        document.documentElement.setAttribute('data-bs-theme', resolved);
        document.documentElement.style.colorScheme = resolved;
      })();
    </script>
    <!--end::Theme Init-->

    <!--begin::Accessibility Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="color-scheme" content="light dark" />
    <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)" />
    <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />
    <!--end::Accessibility Meta Tags-->

    <!--begin::Primary Meta Tags-->
    <meta name="title" content="AdminLTE 4 | Fixed Complete" />
    <meta name="author" content="ColorlibHQ" />
    <meta
      name="description"
      content="AdminLTE is a free Bootstrap 5 admin dashboard template with almost 50 example pages, built with vanilla JS and designed with accessibility in mind."
    />
    <meta
      name="keywords"
      content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard, accessible admin panel"
    />
    <!--end::Primary Meta Tags-->

    <!--begin::Accessibility Features-->
    <!-- Skip links will be dynamically added by accessibility.js -->
    <meta name="supported-color-schemes" content="light dark" />
    <link rel="preload" href="<?= base_url('assets/css/adminlte.css') ?>" as="style" />
    <!--end::Accessibility Features-->

    <!--begin::Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <!--end::Fonts-->

    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="<?= base_url('assets/css/overlayscrollbars.min.css') ?>" />
    <!--end::Third Party Plugin(OverlayScrollbars)-->

    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-icons.min.css') ?>" />
    <!--end::Third Party Plugin(Bootstrap Icons)-->

    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="<?= base_url('assets/css/adminlte.css') ?>" />
    <!--end::Required Plugin(AdminLTE)-->

    <style>
      body,
      .form-control,
      .form-select,
      .btn,
      h1,
      h2,
      h3,
      h4,
      h5,
      h6 {
        font-family: 'Google Sans', 'Noto Sans Thai', sans-serif !important;
      }
      .job-item {
        transition: all 0.2s ease-in-out;
        border-radius: 10px;
        text-decoration: none;
        color: inherit;
        display: block;
        padding: 18px 20px;
      }
      .job-item:hover {
        background-color: var(--bs-tertiary-bg);
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.05);
      }
      .job-logo-box {
        width: 82px;
        height: 82px;
        border-radius: 12px;
        background-color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 8px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.06);
        border: 1px solid var(--bs-border-color);
      }
      [data-bs-theme="dark"] .job-logo-box {
        background-color: #2b3035;
      }
      .job-currency-badge {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background-color: #fde8e4;
        color: #e04f32;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 11px;
        font-weight: bold;
        flex-shrink: 0;
      }
      [data-bs-theme="dark"] .job-currency-badge {
        background-color: rgba(224, 79, 50, 0.2);
        color: #ff765b;
      }
    </style>
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body class="layout-fixed fixed-header fixed-footer sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
      <nav class="app-header navbar navbar-expand bg-body">
        <!--begin::Container-->
        <div class="container-fluid">
          <!--begin::Start Navbar Links-->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a
                class="nav-link"
                data-lte-toggle="sidebar"
                href="#"
                role="button"
                aria-label="Toggle sidebar"
              >
                <i class="bi bi-list"></i>
              </a>
            </li>
            <li class="nav-item d-none d-md-block">
              <a href="<?= site_url('welcome/applicationform') ?>" class="nav-link">
                <i class="nav-icon bi bi-file-earmark"></i>
                <span>กรอกใบสมัครงาน</span>
              </a>
            </li>
          </ul>
          <!--end::Start Navbar Links-->

          <!--begin::End Navbar Links-->
          <ul class="navbar-nav ms-auto">
            <!--begin::Fullscreen Toggle-->
            <!-- <li class="nav-item">
              <a
                class="nav-link"
                href="#"
                data-lte-toggle="fullscreen"
                aria-label="Toggle fullscreen"
              >
                <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                <i data-lte-icon="minimize" class="bi bi-fullscreen-exit d-none"></i>
              </a>
            </li> -->
            <!--end::Fullscreen Toggle-->

            <!--begin::Color Mode Toggle (#6010)-->
            <li class="nav-item dropdown">
              <a
                class="nav-link"
                href="#"
                id="bd-theme"
                aria-label="Toggle color scheme"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="bi bi-sun-fill" data-lte-theme-icon="light"></i>
                <i class="bi bi-moon-fill d-none" data-lte-theme-icon="dark"></i>
                <i class="bi bi-circle-half d-none" data-lte-theme-icon="auto"></i>
              </a>
              <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="bd-theme"
                style="--bs-dropdown-min-width: 8rem"
              >
                <li>
                  <button
                    type="button"
                    class="dropdown-item d-flex align-items-center"
                    data-bs-theme-value="light"
                    aria-pressed="false"
                  >
                    <i class="bi bi-sun-fill me-2"></i>
                    Light
                    <i class="bi bi-check-lg ms-auto d-none"></i>
                  </button>
                </li>
                <li>
                  <button
                    type="button"
                    class="dropdown-item d-flex align-items-center"
                    data-bs-theme-value="dark"
                    aria-pressed="false"
                  >
                    <i class="bi bi-moon-fill me-2"></i>
                    Dark
                    <i class="bi bi-check-lg ms-auto d-none"></i>
                  </button>
                </li>
                <li>
                  <button
                    type="button"
                    class="dropdown-item d-flex align-items-center active"
                    data-bs-theme-value="auto"
                    aria-pressed="true"
                  >
                    <i class="bi bi-circle-half me-2"></i>
                    Auto
                    <i class="bi bi-check-lg ms-auto d-none"></i>
                  </button>
                </li>
              </ul>
            </li>
            <!--end::Color Mode Toggle-->

            <!--begin::User Menu Dropdown-->
            <li class="nav-item dropdown user-menu">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img
                  src="../assets/img/user2-160x160.jpg"
                  class="user-image rounded-circle shadow"
                  alt="Alexander Pierce"
                />
                <span class="d-none d-md-inline">Alexander Pierce</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <!--begin::User Image-->
                <li class="user-header text-bg-primary">
                  <img
                    src="../assets/img/user2-160x160.jpg"
                    class="rounded-circle shadow"
                    alt="Alexander Pierce"
                  />
                  <p>
                    Alexander Pierce - Web Developer
                    <small>Member since Nov. 2023</small>
                  </p>
                </li>
                <!--end::User Image-->
                <!--begin::Menu Body-->
                <li class="user-body">
                  <!--begin::Row-->
                  <div class="row">
                    <div class="col-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </div>
                  <!--end::Row-->
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
        <!--end::Container-->
      </nav>
      <!--end::Header-->
      <!--begin::Sidebar-->
      <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="../index.html" class="brand-link">
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
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Dashboard
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../index.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Dashboard v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../index2.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Dashboard v2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../index3.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Dashboard v3</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('welcome/applicationform') ?>" class="nav-link">
                  <i class="nav-icon bi bi-file-earmark"></i>
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

      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content-->
        <div class="app-content mt-4">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-12">
                <div class="card shadow-sm border-0">
                  <div class="card-header border-bottom py-3">
                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-2">
                      <h4 class="card-title mb-0 fw-bold text-body">
                        <i class="bi bi-briefcase-fill text-primary me-2"></i>ตำแหน่งงานที่เปิดรับสมัคร
                      </h4>
                      <div class="d-flex align-items-center gap-2">
                        <label for="company" class="form-label mb-0 fw-medium text-body-secondary text-nowrap">เลือกบริษัท :</label>
                        <select name="company" id="company" class="form-select form-select-sm" style="min-width: 220px;">
                          <option value="all">ทั้งหมด (ทุกบริษัท)</option>
                          <option value="ata">บริษัท เอที-เอเชีย จำกัด (AT-A)</option>
                          <option value="atfb">บริษัท ไอชิน ทาคาโอก้า ฟาวดริ บางปะกง จำกัด (ATFB)</option>
                          <option value="sati" selected>บริษัท สยาม เอที อุตสาหกรรม จำกัด (SATI)</option>
                          <option value="snf">บริษัท นวโลหะไทย จำกัด (SNF)</option>
                          <option value="tep">บริษัท ไทย แอนด์ ยูโรป ชิ้นส่วนแม่พิมพ์ จำกัด (TEP)</option>
                          <option value="nic">บริษัท นวโลหะอุตสาหกรรม จำกัด (NIC)</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="card-body p-4">
                    <!-- Remark & Company Info Box -->
                    <div id="company-info-box" class="p-3 mb-4 rounded-3 bg-body-secondary border border-secondary-subtle">
                      <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">
                        <div>
                          <div class="d-flex align-items-center gap-2 mb-1">
                            <span class="badge text-bg-primary px-2 py-1">ข้อมูลติดต่อ</span>
                            <h5 class="mb-0 fw-bold text-body" id="company-title">บริษัท สยาม เอที อุตสาหกรรม จำกัด (SATI)</h5>
                          </div>
                          <div class="text-body-secondary fs-7 mt-2" id="company-address">
                            <i class="bi bi-geo-alt-fill me-1 text-danger"></i> 700/606 หมู่ 4 นิคมอุตสาหกรรมอมตะซิตี้ ชลบุรี ต.บ้านเก่า อ.พานทอง จ.ชลบุรี 20160
                          </div>
                          <div class="d-flex flex-wrap gap-4 mt-2 text-body-secondary fs-7">
                            <span id="company-phone"><i class="bi bi-telephone-fill me-1 text-success"></i> 038-454-800 ต่อ ฝ่ายทรัพยากรบุคคล (HR)</span>
                            <span id="company-email"><i class="bi bi-envelope-fill me-1 text-primary"></i> hr-recruit@sati.co.th</span>
                          </div>
                          <div class="text-body-secondary fs-7 mt-2 pt-2 border-top border-secondary-subtle" id="company-remark">
                            <span class="fw-semibold text-body"><i class="bi bi-info-circle-fill text-warning me-1"></i> หมายเหตุ (Remark) :</span> 
                            <span id="company-remark-text">เปิดรับสมัครทุกวันจันทร์ - ศุกร์ (08:30 - 17:00 น.) กรุณาเตรียมเอกสารรูปถ่าย, สำเนาบัตรประชาชน, สำเนาทะเบียนบ้าน และวุฒิการศึกษา</span>
                          </div>
                        </div>
                        <div class="align-self-stretch align-self-md-center text-md-end">
                          <a href="<?= site_url('welcome/applicationform') ?>" class="btn btn-primary px-3 py-2 d-inline-flex align-items-center gap-2 text-nowrap shadow-sm">
                            <i class="bi bi-file-earmark-text"></i> กรอกใบสมัครงาน
                          </a>
                        </div>
                      </div>
                    </div>

                    <!-- Job Listings -->
                    <div id="job-listings-container" class="d-flex flex-column gap-2">
                      <!-- Job 1 -->
                      <a href="<?= site_url('welcome/applicationform') ?>" class="job-item border-bottom border-secondary-subtle" data-company="sati">
                        <div class="d-flex justify-content-between align-items-start gap-3">
                          <div class="flex-grow-1">
                            <h5 class="fw-bold text-body mb-1">Programmers</h5>
                            <div class="text-body-secondary mb-3 fs-6">บริษัท สยาม เอที อุตสาหกรรม จำกัด</div>
                            <div class="d-flex flex-wrap align-items-center gap-3 gap-md-5">
                              <div class="d-flex align-items-center text-body-secondary fs-7">
                                <i class="bi bi-geo-alt-fill text-danger me-2 fs-6"></i>
                                <span>เขตสะพานสูง กรุงเทพมหานคร</span>
                              </div>
                              <div class="d-flex align-items-center text-body-secondary fs-7">
                                <span class="job-currency-badge me-2">฿</span>
                                <span>20,000 - 25,000 บาท</span>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex flex-column align-items-end flex-shrink-0">
                            <span class="text-body-secondary fs-7 mb-2">15 ส.ค. 69</span>
                            <div class="job-logo-box">
                              <img src="<?= base_url('assets/images/sati.png') ?>" alt="SATI Logo" style="max-height: 48px; max-width: 64px; object-fit: contain;">
                            </div>
                          </div>
                        </div>
                      </a>

                      <!-- Job 2 -->
                      <a href="<?= site_url('welcome/applicationform') ?>" class="job-item border-bottom border-secondary-subtle" data-company="atfb">
                        <div class="d-flex justify-content-between align-items-start gap-3">
                          <div class="flex-grow-1">
                            <h5 class="fw-bold text-body mb-1">IT SUPERVISOR / IT Support</h5>
                            <div class="text-body-secondary mb-3 fs-6">บริษัท ไอชิน ทาคาโอก้า ฟาวดริ บางปะกง จำกัด (ATFB)</div>
                            <div class="d-flex flex-wrap align-items-center gap-3 gap-md-5">
                              <div class="d-flex align-items-center text-body-secondary fs-7">
                                <i class="bi bi-geo-alt-fill text-danger me-2 fs-6"></i>
                                <span>อ.บางพลี จ.สมุทรปราการ</span>
                              </div>
                              <div class="d-flex align-items-center text-body-secondary fs-7">
                                <span class="job-currency-badge me-2">฿</span>
                                <span>ตามตกลง</span>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex flex-column align-items-end flex-shrink-0">
                            <span class="text-body-secondary fs-7 mb-2">15 ส.ค. 69</span>
                            <div class="job-logo-box">
                              <img src="<?= base_url('assets/images/atfb.png') ?>" alt="ATFB Logo" style="max-height: 48px; max-width: 64px; object-fit: contain;">
                            </div>
                          </div>
                        </div>
                      </a>

                      <!-- Job 3 -->
                      <a href="<?= site_url('welcome/applicationform') ?>" class="job-item border-bottom border-secondary-subtle" data-company="snf">
                        <div class="d-flex justify-content-between align-items-start gap-3">
                          <div class="flex-grow-1">
                            <h5 class="fw-bold text-body mb-1">Automation Engineering</h5>
                            <div class="text-body-secondary mb-3 fs-6">บริษัท นวโลหะไทย จำกัด (SNF)</div>
                            <div class="d-flex flex-wrap align-items-center gap-3 gap-md-5">
                              <div class="d-flex align-items-center text-body-secondary fs-7">
                                <i class="bi bi-geo-alt-fill text-danger me-2 fs-6"></i>
                                <span>เขตบึงกุ่ม กรุงเทพมหานคร</span>
                              </div>
                              <div class="d-flex align-items-center text-body-secondary fs-7">
                                <span class="job-currency-badge me-2">฿</span>
                                <span>ตามตกลง</span>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex flex-column align-items-end flex-shrink-0">
                            <span class="text-body-secondary fs-7 mb-2">15 ส.ค. 69</span>
                            <div class="job-logo-box">
                              <img src="<?= base_url('assets/images/snf.png') ?>" alt="SNF Logo" style="max-height: 48px; max-width: 64px; object-fit: contain;">
                            </div>
                          </div>
                        </div>
                      </a>

                      <!-- Job 4 -->
                      <a href="<?= site_url('welcome/applicationform') ?>" class="job-item border-bottom border-secondary-subtle" data-company="tep">
                        <div class="d-flex justify-content-between align-items-start gap-3">
                          <div class="flex-grow-1">
                            <h5 class="fw-bold text-body mb-1">IT Manager</h5>
                            <div class="text-body-secondary mb-3 fs-6">บริษัท ผลิตภัณฑ์วิศวไทย จำกัด (TEP)</div>
                            <div class="d-flex flex-wrap align-items-center gap-3 gap-md-5">
                              <div class="d-flex align-items-center text-body-secondary fs-7">
                                <i class="bi bi-geo-alt-fill text-danger me-2 fs-6"></i>
                                <span>อ.ศรีราชา จ.ชลบุรี</span>
                              </div>
                              <div class="d-flex align-items-center text-body-secondary fs-7">
                                <span class="job-currency-badge me-2">฿</span>
                                <span>ตามโครงสร้างบริษัทฯ</span>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex flex-column align-items-end flex-shrink-0">
                            <span class="text-body-secondary fs-7 mb-2">15 ส.ค. 69</span>
                            <div class="job-logo-box">
                              <img src="<?= base_url('assets/images/tep.png') ?>" alt="TEP Logo" style="max-height: 48px; max-width: 64px; object-fit: contain;">
                            </div>
                          </div>
                        </div>
                      </a>

                      <!-- Job 5 -->
                      <a href="<?= site_url('welcome/applicationform') ?>" class="job-item border-bottom border-secondary-subtle" data-company="nic">
                        <div class="d-flex justify-content-between align-items-start gap-3">
                          <div class="flex-grow-1">
                            <h5 class="fw-bold text-body mb-1">IT Officer (ประจำสาขาสุขสวัสดิ์ 70)</h5>
                            <div class="text-body-secondary mb-3 fs-6">บริษัท นวโลหะอุตสาหกรรม จำกัด (NIC)</div>
                            <div class="d-flex flex-wrap align-items-center gap-3 gap-md-5">
                              <div class="d-flex align-items-center text-body-secondary fs-7">
                                <i class="bi bi-geo-alt-fill text-danger me-2 fs-6"></i>
                                <span>อ.พระประแดง จ.สมุทรปราการ</span>
                              </div>
                              <div class="d-flex align-items-center text-body-secondary fs-7">
                                <span class="job-currency-badge me-2">฿</span>
                                <span>ตามตกลง</span>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex flex-column align-items-end flex-shrink-0">
                            <span class="text-body-secondary fs-7 mb-2">15 ส.ค. 69</span>
                            <div class="job-logo-box">
                              <img src="<?= base_url('assets/images/nic.png') ?>" alt="NIC Logo" style="max-height: 48px; max-width: 64px; object-fit: contain;">
                            </div>
                          </div>
                        </div>
                      </a>

                      <!-- Job 6 -->
                      <a href="<?= site_url('welcome/applicationform') ?>" class="job-item" data-company="ata">
                        <div class="d-flex justify-content-between align-items-start gap-3">
                          <div class="flex-grow-1">
                            <h5 class="fw-bold text-body mb-1">System Analyst & Programmer</h5>
                            <div class="text-body-secondary mb-3 fs-6"> บริษัท ไอชิน ทากาโอกะ เอเชีย จำกัด (AT-A)</div>
                            <div class="d-flex flex-wrap align-items-center gap-3 gap-md-5">
                              <div class="d-flex align-items-center text-body-secondary fs-7">
                                <i class="bi bi-geo-alt-fill text-danger me-2 fs-6"></i>
                                <span>นิคมอุตสาหกรรมอมตะซิตี้ จ.ชลบุรี</span>
                              </div>
                              <div class="d-flex align-items-center text-body-secondary fs-7">
                                <span class="job-currency-badge me-2">฿</span>
                                <span>25,000 - 35,000 บาท</span>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex flex-column align-items-end flex-shrink-0">
                            <span class="text-body-secondary fs-7 mb-2">15 ส.ค. 69</span>
                            <div class="job-logo-box">
                              <img src="<?= base_url('assets/images/logo.png') ?>" alt="AT-A Logo" style="max-height: 48px; max-width: 64px; object-fit: contain;">
                            </div>
                          </div>
                        </div>
                      </a>

                      <!-- Empty state -->
                      <div id="no-jobs-alert" class="alert alert-secondary text-center py-4 d-none">
                        <i class="bi bi-info-circle fs-3 d-block mb-2 text-secondary"></i>
                        <span>ขณะนี้ยังไม่มีตำแหน่งงานที่เปิดรับสมัครสำหรับบริษัทที่เลือก</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
      <!--begin::Footer-->
      <footer class="app-footer">
        <!--begin::To the end-->
        <div class="float-end d-none d-sm-inline">Anything you want</div>
        <!--end::To the end-->
        <!--begin::Copyright-->
        <strong>
          Copyright &copy; 2014-2026&nbsp;
          <a href="https://adminlte.io" class="text-decoration-none">AdminLTE.io</a>.
        </strong>
        All rights reserved.
        <!--end::Copyright-->
      </footer>
      <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script src="<?= base_url('assets/javascript/overlayscrollbars.browser.es6.min.js') ?>"></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script src="<?= base_url('assets/javascript/popper.min.js') ?>"></script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script src="<?= base_url('assets/javascript/bootstrap.min.js') ?>"></script>
    <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="<?= base_url('assets/javascript/adminlte.js') ?>"></script>
    <!--end::Required Plugin(AdminLTE)-->
    <!--begin::OverlayScrollbars Configure-->
    <script>
      const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
      const Default = {
        scrollbarTheme: 'os-theme-light',
        scrollbarAutoHide: 'leave',
        scrollbarClickScroll: true,
      };
      document.addEventListener('DOMContentLoaded', function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);

        // Disable OverlayScrollbars on mobile devices to prevent touch interference
        const isMobile = window.innerWidth <= 992;

        if (
          sidebarWrapper &&
          OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined &&
          !isMobile
        ) {
          OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
            scrollbars: {
              theme: Default.scrollbarTheme,
              autoHide: Default.scrollbarAutoHide,
              clickScroll: Default.scrollbarClickScroll,
            },
          });
        }
      });
    </script>
    <!--end::OverlayScrollbars Configure-->

    <!--begin::Color Mode Toggle-->
    <!-- The light/dark/auto switcher ships in adminlte.js as the ColorMode
     module (since 4.1) — no page script needed. Only the no-flash snippet
     in <head> stays inline, because it must run before first paint. -->
    <!--end::Color Mode Toggle-->
    <!--end::Script-->
    <!--begin::Company Filter & Info Script-->
    <script>
      const companyData = {
        all: {
          title: 'เครือบริษัททั้งหมดในกลุ่มอุตสาหกรรม (All Companies)',
          address: 'นิคมอุตสาหกรรมอมตะซิตี้ ชลบุรี / สมุทรปราการ / สระบุรี',
          phone: '038-454-800 ต่อ ฝ่ายสรรหาและว่าจ้างบุคลากร',
          email: 'recruit-group@at-group.co.th',
          remark: 'สามารถเลือกดูตำแหน่งงานและสมัครในตำแหน่งงานที่สนใจของแต่ละบริษัทได้โดยตรงผ่านระบบออนไลน์'
        },
        ata: {
          title: 'บริษัท เอที-เอเชีย จำกัด (AT-A)',
          address: '700/606 หมู่ 4 นิคมอุตสาหกรรมอมตะซิตี้ ชลบุรี ต.บ้านเก่า อ.พานทอง จ.ชลบุรี 20160',
          phone: '038-454-000 ต่อ 101-104 (HR)',
          email: 'hr@at-a.co.th',
          remark: 'เปิดรับสมัครวันจันทร์ - ศุกร์ (08:30 - 17:00 น.) สอบถามข้อมูลเพิ่มเติมโทร 038-454-000'
        },
        atfb: {
          title: 'บริษัท ไอชิน ทาคาโอก้า ฟาวดริ บางปะกง จำกัด (ATFB)',
          address: '700/350 หมู่ 6 นิคมอุตสาหกรรมอมตะซิตี้ ชลบุรี ต.ดอนหัวฬ่อ อ.เมืองชลบุรี จ.ชลบุรี 20000',
          phone: '038-468-200 ต่อ ฝ่ายบุคคล',
          email: 'recruit@atfb.co.th',
          remark: 'มีสวัสดิการรถรับส่งพนักงาน, ค่าอาหาร, เบี้ยขยัน, โบนัสประจำปี และประกันสุขภาพกลุ่ม'
        },
        sati: {
          title: 'บริษัท สยาม เอที อุตสาหกรรม จำกัด (SATI)',
          address: '700/606 หมู่ 4 นิคมอุตสาหกรรมอมตะซิตี้ ชลบุรี ต.บ้านเก่า อ.พานทอง จ.ชลบุรี 20160',
          phone: '038-454-800 ต่อ ฝ่ายทรัพยากรบุคคล (HR)',
          email: 'hr-recruit@sati.co.th',
          remark: 'เปิดรับสมัครทุกวันจันทร์ - ศุกร์ (08:30 - 17:00 น.) กรุณาเตรียมเอกสารรูปถ่าย, สำเนาบัตรประชาชน, สำเนาทะเบียนบ้าน และวุฒิการศึกษา'
        },
        snf: {
          title: 'บริษัท นวโลหะไทย จำกัด (SNF)',
          address: '1 หมู่ 1 ถ.พหลโยธิน ต.ปากเพรียว อ.เมืองสระบุรี จ.สระบุรี 18000',
          phone: '036-200-500 ต่อ ฝ่ายบุคคล',
          email: 'hr-snf@nawaloha.com',
          remark: 'ยินดีรับทั้งผู้มีประสบการณ์และนักศึกษาจบใหม่ มีการฝึกอบรมพัฒนาทักษะอย่างต่อเนื่อง'
        },
        tep: {
          title: 'บริษัท ไทย แอนด์ ยูโรป ชิ้นส่วนแม่พิมพ์ จำกัด (TEP)',
          address: '88/8 หมู่ 3 ต.บางเพรียง อ.บางบ่อ จ.สมุทรปราการ 10560',
          phone: '02-708-5500 ต่อ ฝ่ายบุคคล',
          email: 'recruit@tep.co.th',
          remark: 'บรรยากาศการทำงานเป็นกันเอง พร้อมโอกาสเติบโตในสายงานและผลตอบแทนที่มั่นคง'
        },
        nic: {
          title: 'บริษัท นวโลหะอุตสาหกรรม จำกัด (NIC)',
          address: '1 หมู่ 2 ถ.มิตรภาพ ต.ทับกวาง อ.แก่งคอย จ.สระบุรี 18260',
          phone: '036-329-800 ต่อ ฝ่ายบุคคล',
          email: 'hr-nic@nawaloha.com',
          remark: 'มีหอพักพนักงาน, กองทุนสำรองเลี้ยงชีพ, ตรวจสุขภาพประจำปี และชุดยูนิฟอร์ม'
        }
      };

      document.addEventListener('DOMContentLoaded', function () {
        const selectCompany = document.getElementById('company');
        if (selectCompany) {
          selectCompany.addEventListener('change', function () {
            const selected = this.value;
            const info = companyData[selected] || companyData['all'];

            // Update info box
            document.getElementById('company-title').textContent = info.title;
            document.getElementById('company-address').innerHTML = `<i class="bi bi-geo-alt-fill me-1 text-danger"></i> ${info.address}`;
            document.getElementById('company-phone').innerHTML = `<i class="bi bi-telephone-fill me-1 text-success"></i> ${info.phone}`;
            document.getElementById('company-email').innerHTML = `<i class="bi bi-envelope-fill me-1 text-primary"></i> ${info.email}`;
            document.getElementById('company-remark-text').textContent = info.remark;

            // Filter jobs
            const jobItems = document.querySelectorAll('#job-listings-container .job-item');
            let visibleCount = 0;
            jobItems.forEach(item => {
              if (selected === 'all' || item.getAttribute('data-company') === selected) {
                item.classList.remove('d-none');
                visibleCount++;
              } else {
                item.classList.add('d-none');
              }
            });

            const noJobsAlert = document.getElementById('no-jobs-alert');
            if (noJobsAlert) {
              noJobsAlert.classList.toggle('d-none', visibleCount > 0);
            }
          });

          // Set default to "all" to show all jobs initially or trigger selected
          selectCompany.value = 'all';
          selectCompany.dispatchEvent(new Event('change'));
        }
      });
    </script>
    <!--end::Company Filter & Info Script-->
  </body>
  <!--end::Body-->
</html>
