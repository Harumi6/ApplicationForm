<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="icon" href="<?= base_url('assets/images/logo.png') ?>" type="image/x-icon">
	<title>Application Form</title>

	<!--begin::Theme Init (prevents flash of incorrect theme on load)-->
	<script>
		(() => {
			'use strict';
			const STORAGE_KEY = 'lte-theme';
			let stored = null;
			try {
				stored = localStorage.getItem(STORAGE_KEY);
			} catch {
				// localStorage may be unavailable (private mode, sandboxed iframe).
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

	<!--begin::Accessibility Meta Tags-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
	<meta name="color-scheme" content="light dark" />
	<meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)" />
	<meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />
	<!--end::Accessibility Meta Tags-->

	<!--begin::Primary Meta Tags-->
	<meta name="title" content="Application Form" />
	<!--end::Primary Meta Tags-->

	<!--begin::Accessibility Features-->
	<meta name="supported-color-schemes" content="light dark" />
	<link rel="preload" href="<?= base_url('assets/css/adminlte.css') ?>" as="style" />
	<!--end::Accessibility Features-->

	<!--begin::Fonts-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<!--end::Fonts-->

	<!--begin::Third Party Plugin(OverlayScrollbars)-->
	<link
		rel="stylesheet"
		href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
		crossorigin="anonymous" />
	<!--end::Third Party Plugin(OverlayScrollbars)-->

	<!--begin::Third Party Plugin(Bootstrap Icons)-->
	<link
		rel="stylesheet"
		href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
		crossorigin="anonymous" />
	<!--end::Third Party Plugin(Bootstrap Icons)-->

	<!--begin::Required Plugin(AdminLTE)-->
	<link rel="stylesheet" href="<?= base_url('assets/css/adminlte.css') ?>" />
	<!--end::Required Plugin(AdminLTE)-->

	<style>
		body, .form-control, .form-select, .btn, h1, h2, h3, h4, h5, h6 {
			font-family: 'Google Sans', 'Noto Sans Thai', sans-serif !important;
		}

		.wizard-steps {
			counter-reset: step;
			list-style: none;
			padding: 0;
			display: flex;
			justify-content: space-between;
			position: relative;
		}

		.wizard-steps::before {
			content: '';
			position: absolute;
			top: 1rem;
			left: 0;
			right: 0;
			height: 2px;
			background: var(--bs-border-color);
			z-index: 0;
		}

		.wizard-steps li {
			position: relative;
			z-index: 1;
			background: var(--bs-body-bg);
			padding: 0 0.75rem;
			text-align: center;
			color: var(--bs-secondary-color);
			font-size: 0.875rem;
		}

		.wizard-steps li::before {
			counter-increment: step;
			content: counter(step);
			display: flex;
			align-items: center;
			justify-content: center;
			width: 2rem;
			height: 2rem;
			margin: 0 auto 0.5rem;
			border-radius: 50%;
			background: var(--bs-body-tertiary-bg);
			border: 2px solid var(--bs-border-color);
			color: var(--bs-secondary-color);
			font-weight: 600;
		}

		.wizard-steps li.active {
			color: var(--bs-primary);
			font-weight: 600;
		}

		.wizard-steps li.active::before {
			background: var(--bs-primary);
			border-color: var(--bs-primary);
			color: #fff;
		}

		.wizard-steps li.completed::before {
			background: var(--bs-success);
			border-color: var(--bs-success);
			color: #fff;
			content: '\f633';
			font-family: 'bootstrap-icons';
		}
	</style>
</head>

<body class="fixed-footer bg-body-tertiary">
	<div class="app-wrapper">
		<!--begin::Main Content-->
		<main class="app-main" style="margin-left: 0;">
			<div class="app-content" style="padding-top: 3rem;">
				<div class="container-fluid">
					<div class="row justify-content-center">
						<div class="col-lg-10 col-xl-8">
							<div class="card">
								<div class="card-body p-4">
									<!-- Step indicators -->
									<ol class="wizard-steps mb-4" id="wizard-steps">
										<li class="active" data-step="0"></li>
										<li data-step="1"></li>
										<li data-step="2"></li>
										<li data-step="3"></li>
										<li data-step="4"></li>
										<li data-step="5"></li>
										<li data-step="6"></li>
										<li data-step="7"></li>
										<li data-step="8"></li>
										<li data-step="9"></li>

									</ol>

									<!-- Form -->
									<form id="wizard-form" novalidate>
										<!-- Step 1 -->
										<fieldset class="wizard-step" data-step="0">
											<h2 class="h5 mb-4 border-bottom pb-2">ข้อมูลการสมัคร (Application Details)</h2>

											<div class="row g-4">
												<!-- Left Column: Inputs -->
												<div class="col-md-8">
													<div class="row g-3">
														<div class="col-md-12">
															<label class="form-label" for="wz-job1">ตำแหน่งงานที่ต้องการสมัคร 1 <span class="text-danger">*</span></label>
															<input type="text" class="form-control" id="wz-job1" name="job1" />
														</div>
														<div class="col-md-12">
															<label class="form-label" for="wz-job2">ตำแหน่งงานที่ต้องการสมัคร 2</label>
															<input type="text" class="form-control" id="wz-job2" name="job2" />
														</div>
														<div class="col-md-12">
															<label class="form-label" for="wz-job3">เงินเดือนที่ต้องการ (Expected Salary) <span class="text-danger">*</span></label>
															<input type="number" class="form-control" id="wz-expected_salary" name="expected_salary" />
														</div>
														<div class="col-12 mt-4">
															<label class="form-label" for="wz-email">อีเมลสำหรับติดต่อกลับ (Email) <span class="text-danger">*</span></label>
															<input type="email" class="form-control" id="wz-email" name="email" />
														</div>
													</div>
												</div>

												<!-- Right Column: Photo -->
												<div class="col-md-4 d-flex flex-column align-items-center justify-content-center border-start">
													<label class="form-label fw-semibold mb-3">รูปถ่ายผู้สมัคร <span class="text-danger">*</span></label>
													<div class="border rounded d-flex flex-column align-items-center justify-content-center bg-light position-relative overflow-hidden shadow-sm" style="width: 140px; height: 180px; border-style: dashed !important; border-width: 2px !important; border-color: #adb5bd !important;">

														<!-- Placeholder Content -->
														<div id="wz-photo-placeholder" class="text-center p-2">
															<i class="bi bi-person-bounding-box text-secondary" style="font-size: 2.5rem;"></i>
															<div class="mt-2 text-secondary" style="font-size: 0.8rem; line-height: 1.2;">คลิกหรือลากไฟล์<br>เพื่ออัปโหลด</div>
														</div>

														<!-- Image Preview -->
														<img id="wz-photo-preview" src="#" alt="Preview" style="display: none; width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0;" />
														<!-- required -->
														<input type="file" class="form-control position-absolute w-100 h-100 opacity-0" id="wz-photo" name="photo" accept="image/*" style="cursor: pointer; top: 0; left: 0; z-index: 10;" onchange="previewImage(event)" />
													</div>
													<div class="small text-muted mt-3 text-center" style="font-size: 0.75rem;">รองรับไฟล์ JPG, PNG<br>ขนาดที่แนะนำ 3x4 หรือ 4x6</div>
												</div>
											</div>
										</fieldset>

										<!-- Step 2 -->
										<fieldset class="wizard-step d-none" data-step="1">
											<h2 class="h5 mb-3">ข้อมูลส่วนตัวของผู้สมัคร / PERSONAL DETAILS</h2>
											<div class="row g-3">
												<!-- Row 1: Name -->
												<div class="col-md-2">
													<label class="form-label" for="inlineSelect">คำนำหน้าชื่อ <span class="text-danger">*</span></label>
													<select class="form-select" id="inlineSelect" name="title" required>
														<option selected value="0">นาย (Mr.)</option>
														<option value="1">นาง (Mrs.)</option>
														<option value="2">นางสาว (Miss)</option>
													</select>
												</div>
												<div class="col-md-5">
													<label class="form-label" for="wz-thai_name"> ชื่อ - นามสกุล (ภาษาไทย) <span class="text-danger">*</span></label>
													<input type="text" class="form-control" id="wz-thai_name" name="thai_name"  />
												</div>
												<div class="col-md-5">
													<label class="form-label" for="wz-eng_name"> Name - Surname (English) <span class="text-danger">*</span></label>
													<input type="text" class="form-control" id="wz-eng_name" name="eng_name"  />
												</div>

												<!-- Row 2: Physical & Birth -->
												<div class="col-md-3">
													<label class="form-label" for="wz-birthdate">วัน/เดือน/ปีเกิด </label>
													<input type="date" class="form-control" id="wz-birthdate" name="birthdate" />
												</div>
												<div class="col-md-2">
													<label class="form-label" for="wz-age"> อายุ (ปี) </label>
													<input type="number" class="form-control" id="wz-age" name="age" />
												</div>
												<div class="col-md-2">
													<label class="form-label" for="wz-height"> ส่วนสูง (ซม.) </label>
													<input type="number" step="0.1" class="form-control" id="wz-height" name="height" />
												</div>
												<div class="col-md-2">
													<label class="form-label" for="wz-weight"> น้ำหนัก (กก.) </label>
													<input type="number" step="0.1" class="form-control" id="wz-weight" name="weight" />
												</div>
												<div class="col-md-3">
													<label class="form-label" for="wz-nationality"> สัญชาติ </label>
													<input type="text" class="form-control" id="wz-nationality" name="nationality" />
												</div>

												<!-- Row 3: Origin & ID -->
												<div class="col-md-3">
													<label class="form-label" for="wz-race"> เชื้อชาติ </label>
													<input type="text" class="form-control" id="wz-race" name="race" />
												</div>
												<div class="col-md-3">
													<label class="form-label" for="wz-religion"> ศาสนา </label>
													<input type="text" class="form-control" id="wz-religion" name="religion" />
												</div>
												<div class="col-md-3">
													<label class="form-label" for="wz-province"> จังหวัดที่เกิด </label>
													<input type="text" class="form-control" id="wz-province" name="birth_province" />
												</div>
												<div class="col-md-3">
													<label class="form-label" for="wz-id_card"> เลขบัตรประชาชน </label>
													<input type="text" class="form-control" id="wz-id_card" name="id_card" maxlength="13" />
												</div>
											</div>
										</fieldset>

										<!-- Step 3: Family, Military, and Contact -->
										<fieldset class="wizard-step d-none" data-step="2">
											<h2 class="h5 mb-4 border-bottom pb-2">ข้อมูลครอบครัวและการติดต่อ / FAMILY & CONTACT</h2>
											<div class="row g-3">
												<!-- Row 1: Family -->
												<div class="col-md-6">
													<label class="form-label d-block mb-2"> สถานภาพสมรส </label>
													<div class="form-check form-check-inline">
														<input type="radio" class="form-check-input" name="wz-maritial_status" id="wz-maritial_status1" value="โสด">
														<label class="form-check-label" for="wz-maritial_status1">โสด</label>
													</div>
													<div class="form-check form-check-inline">
														<input type="radio" class="form-check-input" name="wz-maritial_status" id="wz-maritial_status2" value="สมรส">
														<label class="form-check-label" for="wz-maritial_status2">สมรส</label>
													</div>
													<div class="form-check form-check-inline">
														<input type="radio" class="form-check-input" name="wz-maritial_status" id="wz-maritial_status3" value="หย่า">
														<label class="form-check-label" for="wz-maritial_status3">หย่า</label>
													</div>
													<div class="form-check form-check-inline">
														<input type="radio" class="form-check-input" name="wz-maritial_status" id="wz-maritial_status4" value="หม้าย">
														<label class="form-check-label" for="wz-maritial_status4">หม้าย</label>
													</div>
												</div>
												<div class="col-md-2">
													<label class="form-label" for="wz-number_of_children"> จำนวนบุตร (คน) </label>
													<input type="number" class="form-control" id="wz-number_of_children" name="children_count" />
												</div>
												<div class="col-md-4">
													<label class="form-label" for="wz-phone"> เบอร์โทรศัพท์ที่ติดต่อได้สะดวก <span class="text-danger">*</span></label>
													<input type="text" class="form-control" id="wz-phone" name="phone"  />
												</div>

												<!-- Row 5: Contact -->
												<div class="col-md-12 mt-4">
													<label class="form-label" for="wz-address"> ที่อยู่ปัจจุบันของผู้สมัครซึ่งติดต่อได้สะดวก (Present Address) <span class="text-danger">*</span></label>
													<textarea class="form-control" id="wz-address" name="address" rows="1" ></textarea>
												</div>

												<!-- Row 3: Military Status -->
												<div class="col-md-12 mt-4">
													<label class="form-label d-block mb-3 fw-bold"> สถานภาพทางทหาร </label>
													
													<div class="row align-items-center mb-2">
														<div class="col-auto">
															<div class="form-check">
																<input class="form-check-input" type="radio" name="military_status" id="mil_status1" value="rotc">
																<label class="form-check-label" for="mil_status1">เรียนสำเร็จวิชารักษาดินแดนปีที่</label>
															</div>
														</div>
														<div class="col-auto">
															<input type="number" class="form-control form-control-sm" name="military_rotc_year" placeholder="ระบุปี (เช่น 3)">
														</div>
													</div>
													
													<div class="row align-items-center mb-2">
														<div class="col-auto">
															<div class="form-check">
																<input class="form-check-input" type="radio" name="military_status" id="mil_status2" value="exempted">
																<label class="form-check-label" for="mil_status2">ได้รับการยกเว้น</label>
															</div>
														</div>
													</div>
													
													<div class="row align-items-center mb-2">
														<div class="col-auto">
															<div class="form-check">
																<input class="form-check-input" type="radio" name="military_status" id="mil_status3" value="not_drafted">
																<label class="form-check-label" for="mil_status3">ยังไม่ได้เกณฑ์ จะถึงกำหนดเมื่อ</label>
															</div>
														</div>
														<div class="col-auto">
															<input type="text" class="form-control form-control-sm" name="military_draft_date" placeholder="ระบุปี/เดือน">
														</div>
													</div>
												</div>
											</div>
										</fieldset>

										<!-- Step 4 -->
										<fieldset class="wizard-step d-none" data-step="3">
											<h2 class="h5 mb-3">ประวัติการศึกษา / EDUCATION BACKGROUND</h2>
											<div class="table-responsive mb-5 shadow-sm rounded border">
												<table class="table table-bordered align-middle text-center mb-0">
													<thead class="table-light">
														<tr>
															<th scope="col" style="width: 20%;" class="fw-bold text-secondary">ระดับการศึกษา<br><small class="fw-normal">Education</small></th>
															<th scope="col" style="width: 22%;" class="fw-bold text-secondary">ชื่อสถานศึกษาและที่ตั้ง<br><small class="fw-normal">Institute name and location</small></th>
															<th scope="col" style="width: 16%;" class="fw-bold text-secondary">วุฒิที่ได้รับ<br><small class="fw-normal">Certificate</small></th>
															<th scope="col" style="width: 18%;" class="fw-bold text-secondary">วิชาเอก/สาขา<br><small class="fw-normal">Major subject</small></th>
															<th scope="col" style="width: 12%;" class="fw-bold text-secondary">คะแนนเฉลี่ย<br><small class="fw-normal">GPA</small></th>
															<th scope="col" style="width: 12%;" class="fw-bold text-secondary">เดือน/ปีที่จบ<br><small class="fw-normal">Month/Year</small></th>
														</tr>
													</thead>
													<tbody class="text-start">
														<!-- High School -->
														<tr>
															<td class="fw-bold text-secondary">มัธยมศึกษาตอนปลาย/ปวช.<br><small class="fw-normal">High school/Vocational</small></td>
															<td><input type="text" class="form-control form-control-sm" name="edu_hs_institute"></td>
															<td><input type="text" class="form-control form-control-sm" name="edu_hs_certificate"></td>
															<td><input type="text" class="form-control form-control-sm" name="edu_hs_major"></td>
															<td><input type="text" class="form-control form-control-sm text-center" name="edu_hs_gpa"></td>
															<td><input type="text" class="form-control form-control-sm text-center" name="edu_hs_grad_date" placeholder="MM/YYYY"></td>
														</tr>
														<!-- Diploma -->
														<tr>
															<td class="fw-bold text-secondary">อนุปริญญา/ปวส.<br><small class="fw-normal">Diploma/Vocational</small></td>
															<td><input type="text" class="form-control form-control-sm" name="edu_dip_institute"></td>
															<td><input type="text" class="form-control form-control-sm" name="edu_dip_certificate"></td>
															<td><input type="text" class="form-control form-control-sm" name="edu_dip_major"></td>
															<td><input type="text" class="form-control form-control-sm text-center" name="edu_dip_gpa"></td>
															<td><input type="text" class="form-control form-control-sm text-center" name="edu_dip_grad_date" placeholder="MM/YYYY"></td>
														</tr>
														<!-- Bachelor -->
														<tr>
															<td class="fw-bold text-secondary">ปริญญาตรี<br><small class="fw-normal">Bachelor Degree</small></td>
															<td><input type="text" class="form-control form-control-sm" name="edu_bachelor_institute"></td>
															<td><input type="text" class="form-control form-control-sm" name="edu_bachelor_certificate"></td>
															<td><input type="text" class="form-control form-control-sm" name="edu_bachelor_major"></td>
															<td><input type="text" class="form-control form-control-sm text-center" name="edu_bachelor_gpa"></td>
															<td><input type="text" class="form-control form-control-sm text-center" name="edu_bachelor_grad_date" placeholder="MM/YYYY"></td>
														</tr>
														<!-- Master -->
														<tr>
															<td class="fw-bold text-secondary">ปริญญาโท<br><small class="fw-normal">Master Degree</small></td>
															<td><input type="text" class="form-control form-control-sm" name="edu_master_institute"></td>
															<td><input type="text" class="form-control form-control-sm" name="edu_master_certificate"></td>
															<td><input type="text" class="form-control form-control-sm" name="edu_master_major"></td>
															<td><input type="text" class="form-control form-control-sm text-center" name="edu_master_gpa"></td>
															<td><input type="text" class="form-control form-control-sm text-center" name="edu_master_grad_date" placeholder="MM/YYYY"></td>
														</tr>
														<!-- Other -->
														<tr>
															<td class="fw-bold text-secondary">อื่นๆ<br><small class="fw-normal">Other</small></td>
															<td><input type="text" class="form-control form-control-sm" name="edu_other_institute"></td>
															<td><input type="text" class="form-control form-control-sm" name="edu_other_certificate"></td>
															<td><input type="text" class="form-control form-control-sm" name="edu_other_major"></td>
															<td><input type="text" class="form-control form-control-sm text-center" name="edu_other_gpa"></td>
															<td><input type="text" class="form-control form-control-sm text-center" name="edu_other_grad_date" placeholder="MM/YYYY"></td>
														</tr>
													</tbody>
												</table>
											</div>

											<div class="row g-4">
												<div class="col-md-6">
													<label class="form-label fw-bold " for="extracurricular">กิจกรรมพิเศษระหว่างศึกษา / Extracurricular activity</label>
													<textarea class="form-control" id="extracurricular" name="extracurricular" rows="3"></textarea>
												</div>
												<div class="col-md-6">
													<label class="form-label fw-bold " for="hobbies">งานอดิเรกหรือกิจกรรมที่สนใจ / Hobbies or activities</label>
													<textarea class="form-control" id="hobbies" name="hobbies" rows="3"></textarea>
												</div>
												<div class="col-md-6">
													<label class="form-label fw-bold " for="friend_opinion">เพื่อนสนิทหรือคนที่รู้จักคุณ คิดว่าคุณเป็นคนเช่นไร / What your close friend or people who knew you say about you</label>
													<textarea class="form-control" id="friend_opinion" name="friend_opinion" rows="3"></textarea>
												</div>
												<div class="col-md-6">
													<label class="form-label fw-bold " for="good_point">อธิบายจุดเด่นของคุณที่บริษัทฯ ควรรับคุณเข้าทำงาน / Describe your good point that Company should hire you</label>
													<textarea class="form-control" id="good_point" name="good_point" rows="3"></textarea>
												</div>
											</div>
										</fieldset>

										<!-- Step 5 -->
										<fieldset class="wizard-step d-none" data-step="4">
											<h2 class="h5 mb-0">ประวัติการทำงาน (เริ่มจากงานปัจจุบันแล้วย้อนหลังไปตามลำดับ)</h2>
											<small class="mt-0 mb-4 text-muted d-block border-bottom pb-2">WORKING EXPERIENCE (Start with your present and previous position)</small>

											<!-- Experience 1 -->
											<div class="table-responsive mb-4">
												<table class="table table-bordered table-sm align-middle text-start">
													<tbody>
														<tr>
															<td class="fw-bold" style="width: 15%;">1. ชื่อบริษัท<br><small class="fw-normal">Company's name</small></td>
															<td style="width: 35%;"><textarea class="form-control form-control-sm" name="exp1_company" rows="2"></textarea></td>
															<td class="fw-bold" style="width: 15%;">ที่อยู่บริษัท<br><small class="fw-normal">Company's address</small></td>
															<td style="width: 35%;" colspan="3"><textarea class="form-control form-control-sm" name="exp1_address" rows="2"></textarea></td>
														</tr>
														<tr>
															<td class="fw-bold">ตำแหน่ง<br><small class="fw-normal">Position</small></td>
															<td><textarea class="form-control form-control-sm" name="exp1_position" rows="2"></textarea></td>
															<td class="fw-bold">รายละเอียดงานที่รับผิดชอบ<br><small class="fw-normal">Description of work</small></td>
															<td colspan="3"><textarea class="form-control form-control-sm" name="exp1_description" rows="2"></textarea></td>
														</tr>
														<tr>
															<td class="fw-bold">ระยะเวลาทำงานจาก<br><small class="fw-normal">Employed Period from</small></td>
															<td>
																<div class="d-flex align-items-center">
																	<input type="text" class="form-control form-control-sm me-2" name="exp1_from">
																	<div class="text-center me-2 text-nowrap">
																		<span class="fw-bold">ถึง</span><br><small>to</small>
																	</div>
																	<input type="text" class="form-control form-control-sm" name="exp1_to">
																</div>
															</td>
															<td class="fw-bold">เงินเดือน<br><small class="fw-normal">Salary</small></td>
															<td style="width: 10%;"><input type="text" class="form-control form-control-sm" name="exp1_salary"></td>
															<td class="fw-bold text-nowrap" style="width: 10%;">สาเหตุที่ออก<br><small class="fw-normal">Reason for leaving</small></td>
															<td style="width: 15%;"><input type="text" class="form-control form-control-sm" name="exp1_reason"></td>
														</tr>
													</tbody>
												</table>
											</div>

											<!-- Experience 2 -->
											<div class="table-responsive mb-4">
												<table class="table table-bordered table-sm align-middle text-start">
													<tbody>
														<tr>
															<td class="fw-bold" style="width: 15%;">2. ชื่อบริษัท<br><small class="fw-normal">Company's name</small></td>
															<td style="width: 35%;"><textarea class="form-control form-control-sm" name="exp2_company" rows="2"></textarea></td>
															<td class="fw-bold" style="width: 15%;">ที่อยู่บริษัท<br><small class="fw-normal">Company's address</small></td>
															<td style="width: 35%;" colspan="3"><textarea class="form-control form-control-sm" name="exp2_address" rows="2"></textarea></td>
														</tr>
														<tr>
															<td class="fw-bold">ตำแหน่ง<br><small class="fw-normal">Position</small></td>
															<td><textarea class="form-control form-control-sm" name="exp2_position" rows="2"></textarea></td>
															<td class="fw-bold">รายละเอียดงานที่รับผิดชอบ<br><small class="fw-normal">Description of work</small></td>
															<td colspan="3"><textarea class="form-control form-control-sm" name="exp2_description" rows="2"></textarea></td>
														</tr>
														<tr>
															<td class="fw-bold">ระยะเวลาทำงานจาก<br><small class="fw-normal">Employed Period from</small></td>
															<td>
																<div class="d-flex align-items-center">
																	<input type="text" class="form-control form-control-sm me-2" name="exp2_from">
																	<div class="text-center me-2 text-nowrap">
																		<span class="fw-bold">ถึง</span><br><small>to</small>
																	</div>
																	<input type="text" class="form-control form-control-sm" name="exp2_to">
																</div>
															</td>
															<td class="fw-bold">เงินเดือน<br><small class="fw-normal">Salary</small></td>
															<td style="width: 10%;"><input type="text" class="form-control form-control-sm" name="exp2_salary"></td>
															<td class="fw-bold text-nowrap" style="width: 10%;">สาเหตุที่ออก<br><small class="fw-normal">Reason for leaving</small></td>
															<td style="width: 15%;"><input type="text" class="form-control form-control-sm" name="exp2_reason"></td>
														</tr>
													</tbody>
												</table>
											</div>

											<!-- Experience 3 -->
											<div class="table-responsive mb-4">
												<table class="table table-bordered table-sm align-middle text-start">
													<tbody>
														<tr>
															<td class="fw-bold" style="width: 15%;">3. ชื่อบริษัท<br><small class="fw-normal">Company's name</small></td>
															<td style="width: 35%;"><textarea class="form-control form-control-sm" name="exp3_company" rows="2"></textarea></td>
															<td class="fw-bold" style="width: 15%;">ที่อยู่บริษัท<br><small class="fw-normal">Company's address</small></td>
															<td style="width: 35%;" colspan="3"><textarea class="form-control form-control-sm" name="exp3_address" rows="2"></textarea></td>
														</tr>
														<tr>
															<td class="fw-bold">ตำแหน่ง<br><small class="fw-normal">Position</small></td>
															<td><textarea class="form-control form-control-sm" name="exp3_position" rows="2"></textarea></td>
															<td class="fw-bold">รายละเอียดงานที่รับผิดชอบ<br><small class="fw-normal">Description of work</small></td>
															<td colspan="3"><textarea class="form-control form-control-sm" name="exp3_description" rows="2"></textarea></td>
														</tr>
														<tr>
															<td class="fw-bold">ระยะเวลาทำงานจาก<br><small class="fw-normal">Employed Period from</small></td>
															<td>
																<div class="d-flex align-items-center">
																	<input type="text" class="form-control form-control-sm me-2" name="exp3_from">
																	<div class="text-center me-2 text-nowrap">
																		<span class="fw-bold">ถึง</span><br><small>to</small>
																	</div>
																	<input type="text" class="form-control form-control-sm" name="exp3_to">
																</div>
															</td>
															<td class="fw-bold">เงินเดือน<br><small class="fw-normal">Salary</small></td>
															<td style="width: 10%;"><input type="text" class="form-control form-control-sm" name="exp3_salary"></td>
															<td class="fw-bold text-nowrap" style="width: 10%;">สาเหตุที่ออก<br><small class="fw-normal">Reason for leaving</small></td>
															<td style="width: 15%;"><input type="text" class="form-control form-control-sm" name="exp3_reason"></td>
														</tr>
													</tbody>
												</table>
											</div>

											<!-- Experience 4 -->
											<div class="table-responsive mb-4">
												<table class="table table-bordered table-sm align-middle text-start">
													<tbody>
														<tr>
															<td class="fw-bold" style="width: 15%;">4. ชื่อบริษัท<br><small class="fw-normal">Company's name</small></td>
															<td style="width: 35%;"><textarea class="form-control form-control-sm" name="exp4_company" rows="2"></textarea></td>
															<td class="fw-bold" style="width: 15%;">ที่อยู่บริษัท<br><small class="fw-normal">Company's address</small></td>
															<td style="width: 35%;" colspan="3"><textarea class="form-control form-control-sm" name="exp4_address" rows="2"></textarea></td>
														</tr>
														<tr>
															<td class="fw-bold">ตำแหน่ง<br><small class="fw-normal">Position</small></td>
															<td><textarea class="form-control form-control-sm" name="exp4_position" rows="2"></textarea></td>
															<td class="fw-bold">รายละเอียดงานที่รับผิดชอบ<br><small class="fw-normal">Description of work</small></td>
															<td colspan="3"><textarea class="form-control form-control-sm" name="exp4_description" rows="2"></textarea></td>
														</tr>
														<tr>
															<td class="fw-bold">ระยะเวลาทำงานจาก<br><small class="fw-normal">Employed Period from</small></td>
															<td>
																<div class="d-flex align-items-center">
																	<input type="text" class="form-control form-control-sm me-2" name="exp4_from">
																	<div class="text-center me-2 text-nowrap">
																		<span class="fw-bold">ถึง</span><br><small>to</small>
																	</div>
																	<input type="text" class="form-control form-control-sm" name="exp4_to">
																</div>
															</td>
															<td class="fw-bold">เงินเดือน<br><small class="fw-normal">Salary</small></td>
															<td style="width: 10%;"><input type="text" class="form-control form-control-sm" name="exp4_salary"></td>
															<td class="fw-bold text-nowrap" style="width: 10%;">สาเหตุที่ออก<br><small class="fw-normal">Reason for leaving</small></td>
															<td style="width: 15%;"><input type="text" class="form-control form-control-sm" name="exp4_reason"></td>
														</tr>
													</tbody>
												</table>
											</div>
										</fieldset>

										<fieldset class="wizard-step d-none" data-step="5">
											<div class="table-responsive mb-4">
												<table class="table table-bordered table-sm align-middle text-start">
													<thead>
														<tr>
															<th colspan="4" class="fw-bold">ประวัติการฝึกอบรม-สัมมนา / Training Course and seminar</th>
														</tr>
														<tr class="text-center align-middle">
															<th class="fw-bold" style="width: 25%;">ชื่อสถาบัน/ <span class="fw-normal">Institute's name</span></th>
															<th class="fw-bold" style="width: 35%;">หัวข้อการฝึกอบรม/ <span class="fw-normal">Course's name</span></th>
															<th class="fw-bold" style="width: 20%;">ระยะเวลา/ <span class="fw-normal">Period</span></th>
															<th class="fw-bold" style="width: 20%;">วัน/เดือน/ปี <span class="fw-normal">Date/Month/Year</span></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td><input type="text" class="form-control form-control-sm" name="train1_institute"></td>
															<td><input type="text" class="form-control form-control-sm" name="train1_course"></td>
															<td><input type="text" class="form-control form-control-sm" name="train1_period"></td>
															<td><input type="text" class="form-control form-control-sm" name="train1_date"></td>
														</tr>
														<tr>
															<td><input type="text" class="form-control form-control-sm" name="train2_institute"></td>
															<td><input type="text" class="form-control form-control-sm" name="train2_course"></td>
															<td><input type="text" class="form-control form-control-sm" name="train2_period"></td>
															<td><input type="text" class="form-control form-control-sm" name="train2_date"></td>
														</tr>
														<tr>
															<td><input type="text" class="form-control form-control-sm" name="train3_institute"></td>
															<td><input type="text" class="form-control form-control-sm" name="train3_course"></td>
															<td><input type="text" class="form-control form-control-sm" name="train3_period"></td>
															<td><input type="text" class="form-control form-control-sm" name="train3_date"></td>
														</tr>
														<tr>
															<td><input type="text" class="form-control form-control-sm" name="train4_institute"></td>
															<td><input type="text" class="form-control form-control-sm" name="train4_course"></td>
															<td><input type="text" class="form-control form-control-sm" name="train4_period"></td>
															<td><input type="text" class="form-control form-control-sm" name="train4_date"></td>
														</tr>
													</tbody>
												</table>
											</div>
										</fieldset>

										<fieldset class="wizard-step d-none" data-step="6">
											<h2 class="h5 mb-3 text-white">ความสามารถ / Ability</h2>
											<hr>
											
											<!-- Row 1: Computer -->
											<div class="row mb-3">
												<div class="col-md-3">
													<div class="fw-bold text-white">ความสามารถทางคอมฯ โปรแกรม</div>
													<div class="text-white" style="font-size: 13px;">Computer skill</div>
												</div>
												<div class="col-md-9">
													<div class="d-flex flex-wrap align-items-start gap-3">
														<div class="form-check mb-0">
															<input class="form-check-input rounded-1 shadow-none border-secondary" type="checkbox" name="comp_word" id="comp_word">
															<label class="form-check-label fw-bold text-white" for="comp_word">Ms.Word</label>
														</div>
														<div class="form-check mb-0">
															<input class="form-check-input rounded-1 shadow-none border-secondary" type="checkbox" name="comp_excel" id="comp_excel">
															<label class="form-check-label fw-bold text-white" for="comp_excel">Ms.Excel</label>
														</div>
														<div class="form-check mb-0">
															<input class="form-check-input rounded-1 shadow-none border-secondary" type="checkbox" name="comp_powerpoint" id="comp_powerpoint">
															<label class="form-check-label fw-bold text-white" for="comp_powerpoint">Ms.Power Point</label>
														</div>
														<div class="d-flex align-items-start">
															<div class="form-check mb-0 me-2">
																<input class="form-check-input rounded-1 shadow-none border-secondary" type="checkbox" name="comp_other_check" id="comp_other_check">
																<label class="form-check-label fw-bold text-white" for="comp_other_check">อื่นๆ</label>
																<div class="text-white" style="font-size: 13px; line-height: 1;">Others</div>
															</div>
															<input type="text" class="form-control form-control-sm rounded-0 shadow-none border-secondary text-dark" name="comp_other" style="width: 250px; background-color: #efefef; ">
														</div>
													</div>
												</div>
											</div>

											<!-- Row 2: English -->
											<div class="row mb-3">
												<div class="col-md-3">
													<div class="fw-bold text-white">ความสามารถทางภาษา อังกฤษ</div>
													<div class="text-white" style="font-size: 13px;">English skill</div>
												</div>
												<div class="col-md-9">
													<div class="d-flex flex-wrap align-items-start gap-4">
														<div class="d-flex align-items-start gap-3">
															<div class="form-check mb-0">
																<input class="form-check-input shadow-none border-secondary" type="radio" name="eng_skill" id="eng_excellent" value="excellent" checked>
																<label class="form-check-label fw-bold text-white" for="eng_excellent">ดีมาก</label>
																<div class="text-white" style="font-size: 13px; line-height: 1;">Excellent</div>
															</div>
															<div class="form-check mb-0">
																<input class="form-check-input shadow-none border-secondary" type="radio" name="eng_skill" id="eng_good" value="good">
																<label class="form-check-label fw-bold text-white" for="eng_good">ดี</label>
																<div class="text-white" style="font-size: 13px; line-height: 1;">Good</div>
															</div>
															<div class="form-check mb-0">
																<input class="form-check-input shadow-none border-secondary" type="radio" name="eng_skill" id="eng_fair" value="fair">
																<label class="form-check-label fw-bold text-white" for="eng_fair">พอใช้</label>
																<div class="text-white" style="font-size: 13px; line-height: 1;">Fair</div>
															</div>
														</div>
														
														<div class="d-flex align-items-start">
															<div class="me-2 text-nowrap">
																<input class="form-check-input shadow-none border-secondary" type="radio" name="other_lang_check" id="other_lang_check" value="other">
																<div class="fw-bold text-white">ภาษาอื่นๆ (ระบุ)</div>
																<div class="text-white" style="font-size: 13px;">Other languages (Please specify)</div>
															</div>
															<input type="text" class="form-control form-control-sm rounded-0 shadow-none border-secondary text-dark" name="other_lang_name" style="width: 150px; background-color: #fdf2fa;">
														</div>

														<div class="d-flex align-items-start gap-3">
															<div class="form-check mb-0">
																<input class="form-check-input shadow-none border-secondary" type="radio" name="other_lang_skill" id="other_lang_excellent" value="excellent">
																<label class="form-check-label fw-bold text-white" for="other_lang_excellent">ดีมาก</label>
																<div class="text-white" style="font-size: 13px; line-height: 1;">Excellent</div>
															</div>
															<div class="form-check mb-0">
																<input class="form-check-input shadow-none border-secondary" type="radio" name="other_lang_skill" id="other_lang_good" value="good">
																<label class="form-check-label fw-bold text-white" for="other_lang_good">ดี</label>
																<div class="text-white" style="font-size: 13px; line-height: 1;">Good</div>
															</div>
															<div class="form-check mb-0">
																<input class="form-check-input shadow-none border-secondary" type="radio" name="other_lang_skill" id="other_lang_fair" value="fair">
																<label class="form-check-label fw-bold text-white" for="other_lang_fair">พอใช้</label>
																<div class="text-white" style="font-size: 13px; line-height: 1;">Fair</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<!-- Row 3: Driving -->
											<div class="row mb-3">
												<div class="col-md-3">
													<div class="fw-bold text-white">ความสามารถในการขับขี่</div>
													<div class="text-white" style="font-size: 13px;">Driving ability</div>
												</div>
												<div class="col-md-9">
													<div class="d-flex flex-wrap align-items-start gap-4">
														<div class="d-flex align-items-start gap-3">
															<div class="form-check mb-0">
																<input class="form-check-input rounded-1 shadow-none border-secondary" type="checkbox" name="drive_car" id="drive_car">
																<label class="form-check-label fw-bold text-white" for="drive_car">รถยนต์</label>
																<div class="text-white" style="font-size: 13px; line-height: 1;">Car</div>
															</div>
															<div class="form-check mb-0">
																<input class="form-check-input rounded-1 shadow-none border-secondary" type="checkbox" name="drive_motorcycle" id="drive_motorcycle">
																<label class="form-check-label fw-bold text-white" for="drive_motorcycle">รถจักรยานยนต์</label>
																<div class="text-white" style="font-size: 13px; line-height: 1;">Motorcycle</div>
															</div>
														</div>
														
														<div class="d-flex align-items-start">
															<div class="me-2 text-nowrap">
																<div class="fw-bold text-white">อื่นๆ</div>
																<div class="text-white" style="font-size: 13px;">Other</div>
															</div>
															<input type="text" class="form-control form-control-sm rounded-0 shadow-none border-secondary text-dark" name="drive_other" style="width: 180px; background-color: #fdf2fa;">
														</div>
														
														<div class="d-flex align-items-start">
															<div class="me-2 text-nowrap">
																<div class="fw-bold text-white">ใบขับขี่รถหมายเลข</div>
																<div class="text-white" style="font-size: 13px;">Driven License NO.</div>
															</div>
															<input type="text" class="form-control form-control-sm rounded-0 shadow-none border-secondary text-dark" name="drive_license_no" style="width: 200px; background-color: #fdf2fa;">
														</div>
													</div>
												</div>
											</div>
										</fieldset>

										<fieldset class="wizard-step d-none" data-step="7">
											<h2 class="h5 mb-3">Interview</h2>
											<dl class="row mb-3" id="wz-summary"></dl>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="wz-terms" required />
												<label class="form-check-label" for="wz-terms">
													I agree to the <a href="#">terms of service</a>.
												</label>
												<div class="invalid-feedback">You must accept the terms to continue.</div>
											</div>	
										</fieldset>

										<!-- Navigation -->
										<div class="d-flex justify-content-between mt-4">
											<button
												type="button"
												class="btn btn-outline-secondary"
												id="wz-prev"
												disabled>
												<i class="bi bi-arrow-left me-1" aria-hidden="true"></i>
												Previous
											</button>
											<button type="button" class="btn btn-primary" id="wz-next">
												Next
												<i class="bi bi-arrow-right ms-1" aria-hidden="true"></i>
											</button>
											<button type="submit" class="btn btn-success d-none" id="wz-submit">
												<i class="bi bi-check-lg me-1" aria-hidden="true"></i>
												Submit
											</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!--end::Main Content-->

		<!--begin::Footer-->
		<footer class="app-footer">
			<div class="float-end d-none d-sm-inline"></div>
			<strong>
				Copyright &copy; 2026&nbsp; All rights reserved.
			</strong>
		</footer>
		<!--end::Footer-->
	</div>

	<!--begin::Third Party Plugins-->
	<script
		src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
		crossorigin="anonymous"></script>
	<script
		src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
		crossorigin="anonymous"></script>
	<script
		src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
		crossorigin="anonymous"></script>
	<script src="<?= base_url('assets/javascript/adminlte.js') ?>"></script>
	<!--end::Third Party Plugins-->

	<!--begin::OverlayScrollbars Configure-->
	<script>
		const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
		const Default = {
			scrollbarTheme: 'os-theme-light',
			scrollbarAutoHide: 'leave',
			scrollbarClickScroll: true,
		};
		document.addEventListener('DOMContentLoaded', function() {
			const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
			const isMobile = window.innerWidth <= 992;
			if (
				sidebarWrapper &&
				OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined &&
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

	<!--begin::Wizard Form Logic-->
	<script>
		function previewImage(event) {
			var reader = new FileReader();
			reader.onload = function() {
				var output = document.getElementById('wz-photo-preview');
				output.src = reader.result;
				output.style.display = 'block';
				document.getElementById('wz-photo-placeholder').style.display = 'none';
			};
			if (event.target.files[0]) {
				reader.readAsDataURL(event.target.files[0]);
			}
		}

		document.addEventListener('DOMContentLoaded', () => {
			const form = document.getElementById('wizard-form');
			const steps = form.querySelectorAll('.wizard-step');
			const indicators = document.querySelectorAll('#wizard-steps li');
			const prevBtn = document.getElementById('wz-prev');
			const nextBtn = document.getElementById('wz-next');
			const submitBtn = document.getElementById('wz-submit');
			let current = 0;

			const show = (i) => {
				steps.forEach((s, idx) => s.classList.toggle('d-none', idx !== i));
				indicators.forEach((li, idx) => {
					li.classList.toggle('active', idx === i);
					li.classList.toggle('completed', idx < i);
				});
				prevBtn.disabled = i === 0;
				const last = i === steps.length - 1;
				nextBtn.classList.toggle('d-none', last);
				submitBtn.classList.toggle('d-none', !last);
				if (last) renderSummary();
			};

			const validateStep = (i) => {
				const step = steps[i];
				const fields = step.querySelectorAll('input, select, textarea');
				let valid = true;
				fields.forEach((field) => {
					field.classList.remove('is-invalid');
					if (!field.checkValidity()) {
						field.classList.add('is-invalid');
						valid = false;
					}
				});
				return valid;
			};

			const renderSummary = () => {
				const summary = document.getElementById('wz-summary');
				const get = (id) => document.getElementById(id);
				const rows = [
					['Email', get('wz-email').value],
					['Username', get('wz-username').value],
					['Name', `${get('wz-first').value} ${get('wz-last').value}`],
					['Company', get('wz-company').value || '—'],
					['Role', get('wz-role').value || '—'],
					['Digest', get('wz-frequency').value],
				];
				summary.innerHTML = rows
					.map(
						([k, v]) =>
						`<dt class="col-sm-4 text-secondary fw-normal">${k}</dt><dd class="col-sm-8 fw-semibold">${v}</dd>`,
					)
					.join('');
			};

			nextBtn.addEventListener('click', () => {
				if (!validateStep(current)) return;
				if (current < steps.length - 1) {
					current++;
					show(current);
				}
			});

			prevBtn.addEventListener('click', () => {
				if (current > 0) {
					current--;
					show(current);
				}
			});

			form.addEventListener('submit', (e) => {
				e.preventDefault();
				if (!validateStep(current)) return;
				alert('Wizard complete! Form would submit here.');
			});

			show(0);
		});
	</script>
	<!--end::Wizard Form Logic-->
</body>

</html>