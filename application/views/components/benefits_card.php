<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Benefits & Welfare Card Component
 * 
 * Variables:
 * @var array|null $company Company data array
 * @var string|null $benefits_intro Intro paragraph text
 * @var string|null $short_name Company short name
 * @var array|null $why_join Array of why join reasons
 * @var array|null $benefits_list Array of benefit bullet points
 */

$b_intro = isset($benefits_intro) ? $benefits_intro : (isset($company['benefits_intro']) ? $company['benefits_intro'] : '');
$c_short = isset($short_name) ? $short_name : (isset($company['short_name']) ? $company['short_name'] : 'เรา');
$reasons = isset($why_join) ? $why_join : (isset($company['why_join']) ? $company['why_join'] : []);
$b_list = isset($benefits_list) ? $benefits_list : (isset($company['benefits_list']) ? $company['benefits_list'] : []);
?>
<!--begin::Benefits & Welfare Section (2 Columns)-->
<div class="content-card">
    <h4 class="section-title mb-4">
        <i class="bi bi-gift-fill text-primary"></i> สวัสดิการ
    </h4>
    <div class="row g-4">
        <!-- Left Column: Description & Why Join -->
        <div class="col-lg-6">
            <?php if (!empty($b_intro)): ?>
                <p class="text-body mb-4" style="line-height: 1.8; text-align: justify;">
                    <?= htmlspecialchars($b_intro) ?>
                </p>
            <?php endif; ?>

            <?php if (!empty($reasons)): ?>
                <div class="p-3 rounded-3 bg-body-tertiary border border-secondary-subtle">
                    <h6 class="fw-bold text-body mb-2">
                        ทำไม? ต้องเลือกร่วมงานกับ <?= htmlspecialchars($c_short) ?> !!!
                    </h6>
                    <ul class="benefit-bullet-list">
                        <?php foreach ($reasons as $reason): ?>
                            <li><?= htmlspecialchars($reason) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>

        <!-- Right Column: Benefits Bullet Points List -->
        <div class="col-lg-6">
            <ul class="benefit-bullet-list">
                <?php foreach ($b_list as $benefit): ?>
                    <li><?= htmlspecialchars($benefit) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
<!--end::Benefits & Welfare Section-->
