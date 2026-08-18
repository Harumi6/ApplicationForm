<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Job Requirements Card Component (Responsibilities & Qualifications)
 * 
 * Variables:
 * @var array|null $company Company data array
 * @var array|null $responsibilities Array of responsibility strings
 * @var array|null $qualifications Array of qualification strings
 */

$resp_list = isset($responsibilities) ? $responsibilities : (isset($company['responsibilities']) ? $company['responsibilities'] : []);
$qual_list = isset($qualifications) ? $qualifications : (isset($company['qualifications']) ? $company['qualifications'] : []);
?>
<!--begin::Job Responsibilities & Qualifications Section-->
<div class="content-card">
    <!-- Responsibilities -->
    <?php if (!empty($resp_list)): ?>
        <div class="mb-4 pb-3 border-bottom border-secondary-subtle">
            <h5 class="section-title">
                <i class="bi bi-list-check text-primary"></i> หน้าที่ความรับผิดชอบ (Job Responsibilities)
            </h5>
            <ul class="custom-checklist">
                <?php foreach ($resp_list as $resp): ?>
                    <li><?= htmlspecialchars($resp) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <!-- Qualifications -->
    <?php if (!empty($qual_list)): ?>
        <div>
            <h5 class="section-title">
                <i class="bi bi-person-badge text-primary"></i> คุณสมบัติผู้สมัคร (Qualifications)
            </h5>
            <ul class="custom-checklist">
                <?php foreach ($qual_list as $qual): ?>
                    <li><?= htmlspecialchars($qual) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
</div>
<!--end::Job Responsibilities & Qualifications Section-->
