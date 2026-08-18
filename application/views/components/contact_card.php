<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Contact Info Card Component
 * 
 * Variables:
 * @var array|null $company Company data array
 * @var string|null $contact_dept Department name
 * @var string|null $title Company title
 * @var string|null $address Full address
 * @var string|null $phone Phone number(s)
 * @var string|null $website Website URL
 * @var string|null $line_id LINE ID handle
 */

$dept = isset($contact_dept) ? $contact_dept : (isset($company['contact_dept']) ? $company['contact_dept'] : 'งานสรรหาและจัดรับพนักงาน สายทรัพยากรบุคคล');
$c_title = isset($title) ? $title : (isset($company['title']) ? $company['title'] : '');
$addr = isset($address) ? $address : (isset($company['address']) ? $company['address'] : '');
$ph = isset($phone) ? $phone : (isset($company['phone']) ? $company['phone'] : '');
$web = isset($website) ? $website : (isset($company['website']) ? $company['website'] : '');
$line = isset($line_id) ? $line_id : (isset($company['line_id']) ? $company['line_id'] : '');
?>
<!--begin::Contact Information Section-->
<div class="content-card">
    <h4 class="section-title mb-3">
        <i class="bi bi-telephone-inbound-fill text-primary"></i> ติดต่อ
    </h4>
    <div class="contact-info-list">
        <?php if (!empty($dept)): ?>
            <div class="mb-1 text-body-secondary"><?= htmlspecialchars($dept) ?></div>
        <?php endif; ?>

        <?php if (!empty($c_title)): ?>
            <div class="fw-bold text-body mb-2 fs-6"><?= htmlspecialchars($c_title) ?></div>
        <?php endif; ?>

        <?php if (!empty($addr)): ?>
            <div class="mb-2 text-body">
                <i class="bi bi-geo-alt-fill text-danger me-1"></i> <?= htmlspecialchars($addr) ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($ph)): ?>
            <div class="mb-2 text-body">
                <i class="bi bi-telephone-fill text-success me-1"></i> โทรศัพท์: 
                <a href="tel:<?= preg_replace('/[^0-9]/', '', $ph) ?>" class="text-decoration-none text-danger fw-semibold">
                    <?= htmlspecialchars($ph) ?>
                </a>
            </div>
        <?php endif; ?>

        <?php if (!empty($web)): ?>
            <div class="mb-2 text-body">
                <i class="bi bi-globe text-primary me-1"></i> เว็บไซต์: 
                <a href="<?= htmlspecialchars($web) ?>" target="_blank" rel="noopener noreferrer" class="text-decoration-none text-danger fw-semibold">
                    <?= htmlspecialchars($web) ?>
                </a>
            </div>
        <?php endif; ?>

        <?php if (!empty($line)): ?>
            <div class="d-flex align-items-center gap-2 mt-2">
                <span class="badge bg-success px-2 py-1 d-inline-flex align-items-center gap-1">
                    <i class="bi bi-chat-dots-fill"></i> LINE ID
                </span>
                <span class="text-success fw-bold"><?= htmlspecialchars($line) ?></span>
            </div>
        <?php endif; ?>
    </div>
</div>
<!--end::Contact Information Section-->
