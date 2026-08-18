<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Job Header Card Component
 * 
 * Variables:
 * @var array|null $company Company data array (optional if individual vars are passed)
 * @var string|null $job_title Job position title
 * @var string|null $job_subtitle Job subtitle / department
 * @var string|null $date_posted Posting date
 * @var string|null $location Work location
 * @var string|null $salary Salary range or note
 * @var string|null $positions Number of open positions
 * @var bool|null $interview_online Online interview flag
 * @var string|null $details_target_id Anchor ID for scroll button (default: '#job-details-section')
 * @var string|null $apply_url URL for apply button (default: site_url('welcome/applicationform'))
 */

$j_title = isset($job_title) ? $job_title : (isset($company['job_title']) ? $company['job_title'] : 'Programmers');
$j_subtitle = isset($job_subtitle) ? $job_subtitle : (isset($company['job_subtitle']) ? $company['job_subtitle'] : '');
$d_posted = isset($date_posted) ? $date_posted : (isset($company['date_posted']) ? $company['date_posted'] : '17 ส.ค. 69');
$loc = isset($location) ? $location : (isset($company['location']) ? $company['location'] : 'กรุงเทพมหานคร / ชลบุรี');
$sal = isset($salary) ? $salary : (isset($company['salary']) ? $company['salary'] : 'ตามโครงสร้างบริษัทฯ');
$pos = isset($positions) ? $positions : (isset($company['positions']) ? $company['positions'] : 'หลายอัตรา');
$online_interview = isset($interview_online) ? (bool)$interview_online : (isset($company['interview_online']) ? (bool)$company['interview_online'] : true);
$target_id = isset($details_target_id) ? $details_target_id : '#job-details-section';
$app_link = isset($apply_url) ? $apply_url : site_url('welcome/applicationform');
?>
<!--begin::Job Overview Card-->
<div class="job-header-card">
    <div class="d-flex flex-wrap justify-content-between align-items-start gap-2 mb-3">
        <div>
            <h3 class="fw-bold text-body mb-1"><?= htmlspecialchars($j_title) ?></h3>
            <?php if (!empty($j_subtitle)): ?>
                <div class="text-body-secondary fs-6 mb-2"><?= htmlspecialchars($j_subtitle) ?></div>
            <?php endif; ?>
        </div>
        <div class="text-body-secondary fs-7">
            <span><?= htmlspecialchars($d_posted) ?></span>
        </div>
    </div>

    <!-- Meta info list with icons -->
    <div class="d-flex flex-column gap-2 mb-4">
        <div class="d-flex align-items-center gap-2">
            <i class="bi bi-geo-alt-fill text-danger fs-5"></i>
            <span class="text-body-secondary fw-medium" style="min-width: 120px;">สถานที่ปฏิบัติงาน</span>
            <span class="text-body fw-semibold"><?= htmlspecialchars($loc) ?></span>
        </div>
        <div class="d-flex align-items-center gap-2">
            <span class="job-currency-badge">฿</span>
            <span class="text-body-secondary fw-medium" style="min-width: 120px;">เงินเดือน</span>
            <span class="text-body fw-semibold"><?= htmlspecialchars($sal) ?></span>
        </div>
        <div class="d-flex align-items-center gap-2">
            <i class="bi bi-person-fill text-primary fs-5"></i>
            <span class="text-body-secondary fw-medium" style="min-width: 120px;">อัตรา</span>
            <span class="text-body fw-semibold"><?= htmlspecialchars($pos) ?></span>
        </div>
    </div>

    <!-- Badge & Action Buttons Row -->
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 pt-2">
        <div>
            <?php if ($online_interview): ?>
                <div class="badge-interview-online">
                    <i class="bi bi-person-video"></i> สัมภาษณ์งานออนไลน์
                </div>
            <?php endif; ?>
        </div>
        <div class="d-flex flex-wrap align-items-center gap-2">
            <a href="<?= htmlspecialchars($target_id) ?>" class="btn btn-orange px-4 py-2 shadow-sm d-inline-flex align-items-center gap-2">
                <i class="bi bi-card-text"></i> ดูรายละเอียดงาน
            </a>
            <a href="<?= $app_link ?>" class="btn btn-primary px-4 py-2 shadow-sm d-inline-flex align-items-center gap-2">
                <i class="bi bi-file-earmark-check"></i> กรอกใบสมัครงาน
            </a>
        </div>
    </div>
</div>
<!--end::Job Overview Card-->
