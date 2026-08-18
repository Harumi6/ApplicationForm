<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Job Item Card Component (for Job Listings)
 * 
 * Variables:
 * @var string $title Job position title
 * @var string $company Company name
 * @var string $company_code Company code (e.g., 'sati', 'atfb', 'ata')
 * @var string $location Work location
 * @var string $salary Salary or compensation
 * @var string $date Posted date
 * @var string $logo Logo image path
 * @var string|null $logo_alt Logo alt text
 * @var bool|null $is_last Whether this is the last item in the list (default: false)
 * @var string|null $url Custom job URL
 */

$j_title = isset($title) ? $title : (isset($job['title']) ? $job['title'] : 'ตำแหน่งงาน');
$c_name = isset($company) ? $company : (isset($job['company']) ? $job['company'] : '');
$c_code = isset($company_code) ? $company_code : (isset($job['company_code']) ? $job['company_code'] : 'all');
$loc = isset($location) ? $location : (isset($job['location']) ? $job['location'] : '');
$sal = isset($salary) ? $salary : (isset($job['salary']) ? $job['salary'] : 'ตามตกลง');
$d_post = isset($date) ? $date : (isset($job['date']) ? $job['date'] : '15 ส.ค. 69');
$l_path = isset($logo) ? $logo : (isset($job['logo']) ? $job['logo'] : 'assets/images/logo.png');
$l_alt = isset($logo_alt) ? $logo_alt : (isset($job['logo_alt']) ? $job['logo_alt'] : $c_name . ' Logo');
$last = isset($is_last) ? (bool)$is_last : false;
$link = isset($url) ? $url : site_url('welcome/job_info') . '?company=' . urlencode($c_code);
?>
<!--begin::Job Item-->
<a href="<?= $link ?>" class="job-item <?= !$last ? 'border-bottom border-secondary-subtle' : '' ?>" data-company="<?= htmlspecialchars($c_code) ?>">
    <div class="d-flex justify-content-between align-items-start gap-3">
        <div class="flex-grow-1">
            <h5 class="fw-bold text-body mb-1"><?= htmlspecialchars($j_title) ?></h5>
            <div class="text-body-secondary mb-3 fs-6"><?= htmlspecialchars($c_name) ?></div>
            <div class="d-flex flex-wrap align-items-center gap-3 gap-md-5">
                <div class="d-flex align-items-center text-body-secondary fs-7">
                    <i class="bi bi-geo-alt-fill text-danger me-2 fs-6"></i>
                    <span><?= htmlspecialchars($loc) ?></span>
                </div>
                <div class="d-flex align-items-center text-body-secondary fs-7">
                    <span class="job-currency-badge me-2">฿</span>
                    <span><?= htmlspecialchars($sal) ?></span>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column align-items-end flex-shrink-0">
            <span class="text-body-secondary fs-7 mb-2"><?= htmlspecialchars($d_post) ?></span>
            <div class="job-logo-box">
                <img src="<?= base_url($l_path) ?>" alt="<?= htmlspecialchars($l_alt) ?>" style="max-height: 48px; max-width: 64px; object-fit: contain;">
            </div>
        </div>
    </div>
</a>
<!--end::Job Item-->
