<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Footer Component
 * 
 * Variables:
 * @var string|null $footer_text Optional text on the right side
 */
$right_text = isset($footer_text) ? $footer_text : 'Group Recruitment Portal';
?>
<!--begin::Footer-->
<footer class="app-footer">
    <div class="float-end d-none d-sm-inline"><?= htmlspecialchars($right_text) ?></div>
    <strong>
        Copyright &copy; 2014-<?= date('Y') ?>&nbsp;
        <a href="https://www.attg.co.th/intranet" class="text-decoration-none" target="_blank">Aisin Takaoka Asia Co.,Ltd</a>.
    </strong>
    All rights reserved.
</footer>
<!--end::Footer-->
