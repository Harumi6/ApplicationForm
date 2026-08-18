<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Hero Banner & Company Profile Component
 * 
 * Variables:
 * @var array|null $company Company data array (optional if individual vars are passed)
 * @var string|null $bg Background image path
 * @var string|null $logo Logo image path
 * @var string|null $title Company full title
 * @var string|null $title_en Company English title
 * @var string|null $short_name Company short name
 * @var string|null $slogan_en English slogan
 * @var string|null $slogan_th Thai slogan
 */

$bg_img = isset($bg) ? $bg : (isset($company['bg']) ? $company['bg'] : 'assets/images/sati-bg.jpg');
$logo_img = isset($logo) ? $logo : (isset($company['logo']) ? $company['logo'] : 'assets/images/sati.png');
$c_title = isset($title) ? $title : (isset($company['title']) ? $company['title'] : 'บริษัท สยาม เอที อุตสาหกรรม จำกัด (SATI)');
$c_title_en = isset($title_en) ? $title_en : (isset($company['title_en']) ? $company['title_en'] : 'SIAM AT INDUSTRY CO., LTD.');
$c_short = isset($short_name) ? $short_name : (isset($company['short_name']) ? $company['short_name'] : 'SATI');
$s_en = isset($slogan_en) ? $slogan_en : (isset($company['slogan_en']) ? $company['slogan_en'] : 'GROWING TOGETHER');
$s_th = isset($slogan_th) ? $slogan_th : (isset($company['slogan_th']) ? $company['slogan_th'] : 'เติบโตไปด้วยกันอย่างยั่งยืน');
?>
<!--begin::Hero Banner & Company Profile Card-->
<div class="card border-0 shadow-sm rounded-4 overflow-hidden mb-4">
    <div class="hero-banner-container">
        <img src="<?= base_url($bg_img) ?>" alt="<?= htmlspecialchars($c_title) ?> Cover Banner" class="hero-banner-img">
        <div class="hero-banner-overlay">
            <div class="hero-slogan-text">
                <div class="d-flex align-items-center justify-content-end gap-2 mb-1">
                    <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo" style="height: 32px; filter: drop-shadow(0 2px 4px rgba(0,0,0,0.5));">
                    <span class="hero-slogan-en"><?= htmlspecialchars($s_en) ?></span>
                </div>
                <div class="hero-slogan-th"><?= htmlspecialchars($s_th) ?></div>
            </div>
        </div>
    </div>

    <!-- Company Profile Bar with Overlapping Logo -->
    <div class="company-profile-bar">
        <div class="d-flex align-items-center gap-3">
            <div class="company-logo-badge">
                <img src="<?= base_url($logo_img) ?>" alt="<?= htmlspecialchars($c_short) ?> Logo">
            </div>
            <div class="pt-2">
                <h4 class="fw-bold mb-0 text-body"><?= htmlspecialchars($c_title) ?></h4>
                <div class="text-body-secondary fs-7"><?= htmlspecialchars($c_title_en) ?></div>
            </div>
        </div>
    </div>
</div>
<!--end::Hero Banner & Company Profile Card-->
