<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Call-To-Action (CTA) Banner Component
 * 
 * Variables:
 * @var string|null $cta_title Main heading text
 * @var string|null $cta_subtitle Subheading text
 * @var string|null $apply_url Apply button link
 * @var string|null $apply_text Apply button label
 * @var string|null $browse_url Secondary browse jobs link
 * @var string|null $browse_text Secondary browse jobs label
 */

$title = isset($cta_title) ? $cta_title : 'สนใจร่วมงานกับเรา?';
$subtitle = isset($cta_subtitle) ? $cta_subtitle : 'เริ่มต้นก้าวแรกสู่อนาคตที่มั่นคงและเติบโตไปด้วยกันกับเรา';
$app_url = isset($apply_url) ? $apply_url : site_url('welcome/applicationform');
$app_text = isset($apply_text) ? $apply_text : 'สมัครงานออนไลน์ตอนนี้';
$brw_url = isset($browse_url) ? $browse_url : site_url('welcome/index');
$brw_text = isset($browse_text) ? $browse_text : 'ดูตำแหน่งงานอื่น ๆ';
?>
<!--begin::Call To Action Banner-->
<div class="p-4 rounded-4 text-center bg-primary text-white shadow-sm mb-4">
    <h4 class="fw-bold mb-2"><?= htmlspecialchars($title) ?></h4>
    <p class="mb-3 opacity-75"><?= htmlspecialchars($subtitle) ?></p>
    <div class="d-flex justify-content-center flex-wrap gap-2">
        <a href="<?= $app_url ?>" class="btn btn-light btn-lg px-4 py-2 fw-bold text-primary shadow-sm">
            <i class="bi bi-pencil-square me-1"></i> <?= htmlspecialchars($app_text) ?>
        </a>
        <a href="<?= $brw_url ?>" class="btn btn-outline-light btn-lg px-4 py-2 fw-medium">
            <i class="bi bi-arrow-left me-1"></i> <?= htmlspecialchars($brw_text) ?>
        </a>
    </div>
</div>
<!--end::Call To Action Banner-->
