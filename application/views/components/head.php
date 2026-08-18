<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Head Component
 * 
 * Variables:
 * @var string|null $title Page title (default: 'Recruitment Portal')
 * @var string|null $extra_head Additional HTML/CSS for <head>
 */
$page_title = isset($title) && !empty($title) ? $title : 'Recruitment Portal';
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?= htmlspecialchars($page_title) ?></title>
    <link rel="icon" href="<?= base_url('assets/images/logo.png') ?>" type="image/x-icon" />

    <!--begin::Theme Init (prevents flash of incorrect theme on load)-->
    <script>
        (() => {
            'use strict';
            const STORAGE_KEY = 'lte-theme';
            let stored = null;
            try {
                stored = localStorage.getItem(STORAGE_KEY);
            } catch {
                // localStorage may be unavailable
            }
            const prefersDark = globalThis.matchMedia('(prefers-color-scheme: dark)').matches;
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

    <!--begin::Accessibility & Viewport Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="color-scheme" content="light dark" />
    <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)" />
    <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />
    <!--end::Accessibility & Viewport Meta Tags-->

    <!--begin::Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <!--end::Fonts-->

    <!--begin::Third Party & Plugin Styles-->
    <link rel="stylesheet" href="<?= base_url('assets/css/overlayscrollbars.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-icons.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/adminlte.css') ?>" />
    <!--end::Third Party & Plugin Styles-->

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
    </style>

    <?php if (isset($extra_head)): ?>
        <?= $extra_head ?>
    <?php endif; ?>
</head>
