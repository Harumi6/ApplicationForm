<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Scripts Component
 * 
 * Variables:
 * @var string|null $extra_scripts Additional script tags or inline JS
 */
?>
<!--begin::Third Party & Plugin Scripts-->
<script src="<?= base_url('assets/javascript/overlayscrollbars.browser.es6.min.js') ?>"></script>
<script src="<?= base_url('assets/javascript/popper.min.js') ?>"></script>
<script src="<?= base_url('assets/javascript/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/javascript/adminlte.js') ?>"></script>
<!--end::Third Party & Plugin Scripts-->

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
            typeof OverlayScrollbarsGlobal !== 'undefined' &&
            OverlayScrollbarsGlobal.OverlayScrollbars !== undefined &&
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

<?php if (isset($extra_scripts)): ?>
    <?= $extra_scripts ?>
<?php endif; ?>
