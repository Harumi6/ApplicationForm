<?php
    defined('BASEPATH') or exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <?php 
    $extra_head = '
    <style>
      .job-item {
        transition: all 0.2s ease-in-out;
        border-radius: 10px;
        text-decoration: none;
        color: inherit;
        display: block;
        padding: 18px 20px;
      }
      .job-item:hover {
        background-color: var(--bs-tertiary-bg);
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.05);
      }
      .job-logo-box {
        width: 82px;
        height: 82px;
        border-radius: 12px;
        background-color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 8px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.06);
        border: 1px solid var(--bs-border-color);
      }
      [data-bs-theme="dark"] .job-logo-box {
        background-color: #2b3035;
      }
      .job-currency-badge {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background-color: #fde8e4;
        color: #e04f32;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 11px;
        font-weight: bold;
        flex-shrink: 0;
      }
      [data-bs-theme="dark"] .job-currency-badge {
        background-color: rgba(224, 79, 50, 0.2);
        color: #ff765b;
      }
    </style>';
    $this->load->view('components/head', [
        'title' => 'Home - ตำแหน่งงานที่เปิดรับสมัคร',
        'extra_head' => $extra_head
    ]);
  ?>
  <!--end::Head-->
  <!--begin::Body-->
  <body class="layout-fixed fixed-header fixed-footer sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
      <?php 
        $this->load->view('components/navbar', [
            'show_sidebar_toggle' => true,
            'show_apply_btn'      => false
        ]); 
      ?>
      <!--end::Header-->

      <!--begin::Sidebar-->
      <?php 
        $this->load->view('components/sidebar', [
            'active_menu' => 'home'
        ]); 
      ?>
      <!--end::Sidebar-->

      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content-->
        <div class="app-content mt-4">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-12">
                <div class="card shadow-sm border-0">
                  <div class="card-header border-bottom py-3">
                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-2">
                      <h4 class="card-title mb-0 fw-bold text-body">
                        <i class="bi bi-briefcase-fill text-primary me-2"></i>ตำแหน่งงานที่เปิดรับสมัคร
                      </h4>
                      <div class="d-flex align-items-center gap-2">
                        <label for="company" class="form-label mb-0 fw-medium text-body-secondary text-nowrap">เลือกบริษัท :</label>
                        <select name="company" id="company" class="form-select form-select-sm" style="min-width: 220px;">
                          <option value="all" selected>ทั้งหมด (ทุกบริษัท)</option>
                          <option value="ata">บริษัท ไอชิน ทาคาโอก้า เอเชีย จำกัด (AT-A)</option>
                          <option value="atfb">บริษัท ไอชิน ทาคาโอก้า ฟาวดริ บางปะกง จำกัด (ATFB)</option>
                          <option value="sati">บริษัท สยาม เอที อุตสาหกรรม จำกัด (SATI)</option>
                          <option value="snf">บริษัท นวโลหะไทย จำกัด (SNF)</option>
                          <option value="tep">บริษัท ผลิตภัณฑ์วิศวไทย จำกัด (TEP)</option>
                          <option value="nic">บริษัท นวโลหะอุตสาหกรรม จำกัด (NIC)</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="card-body p-4">
                    <!-- Remark & Company Info Box -->
                    <div id="company-info-box" class="p-3 mb-4 rounded-3 bg-body-secondary border border-secondary-subtle">
                      <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">
                        <div>
                          <div class="d-flex align-items-center gap-2 mb-1">
                            <span class="badge text-bg-primary px-2 py-1">ข้อมูลติดต่อ</span>
                            <h5 class="mb-0 fw-bold text-body" id="company-title">บริษัท สยาม เอที อุตสาหกรรม จำกัด (SATI)</h5>
                          </div>
                          <div class="text-body-secondary fs-7 mt-2" id="company-address">
                            <i class="bi bi-geo-alt-fill me-1 text-danger"></i> 700/606 หมู่ 4 นิคมอุตสาหกรรมอมตะซิตี้ ชลบุรี ต.บ้านเก่า อ.พานทอง จ.ชลบุรี 20160
                          </div>
                          <div class="d-flex flex-wrap gap-4 mt-2 text-body-secondary fs-7">
                            <span id="company-phone"><i class="bi bi-telephone-fill me-1 text-success"></i> 038-454-800 ต่อ ฝ่ายทรัพยากรบุคคล (HR)</span>
                            <span id="company-email"><i class="bi bi-envelope-fill me-1 text-primary"></i> hr-recruit@sati.co.th</span>
                          </div>
                          <div class="text-body-secondary fs-7 mt-2 pt-2 border-top border-secondary-subtle" id="company-remark">
                            <span class="fw-semibold text-body"><i class="bi bi-info-circle-fill text-warning me-1"></i> หมายเหตุ (Remark) :</span> 
                            <span id="company-remark-text">เปิดรับสมัครทุกวันจันทร์ - ศุกร์ (08:30 - 17:00 น.) กรุณาเตรียมเอกสารรูปถ่าย, สำเนาบัตรประชาชน, สำเนาทะเบียนบ้าน และวุฒิการศึกษา</span>
                          </div>
                        </div>
                        <div class="align-self-stretch align-self-md-center text-md-end">
                          <a href="<?= site_url('welcome/applicationform') ?>" class="btn btn-primary px-3 py-2 d-inline-flex align-items-center gap-2 text-nowrap shadow-sm">
                            <i class="bi bi-file-earmark-text"></i> กรอกใบสมัครงาน
                          </a>
                        </div>
                      </div>
                    </div>

                    <!-- Job Listings -->
                    <?php
                    $job_list = [
                        [
                            'title'        => 'Programmers',
                            'company'      => 'บริษัท สยาม เอที อุตสาหกรรม จำกัด',
                            'company_code' => 'sati',
                            'location'     => 'เขตสะพานสูง กรุงเทพมหานคร',
                            'salary'       => '20,000 - 25,000 บาท',
                            'date'         => '15 ส.ค. 69',
                            'logo'         => 'assets/images/sati.png',
                            'logo_alt'     => 'SATI Logo',
                        ],
                        [
                            'title'        => 'IT SUPERVISOR / IT Support',
                            'company'      => 'บริษัท ไอชิน ทาคาโอก้า ฟาวดริ บางปะกง จำกัด (ATFB)',
                            'company_code' => 'atfb',
                            'location'     => 'อ.บางพลี จ.สมุทรปราการ',
                            'salary'       => 'ตามตกลง',
                            'date'         => '15 ส.ค. 69',
                            'logo'         => 'assets/images/atfb.png',
                            'logo_alt'     => 'ATFB Logo',
                        ],
                        [
                            'title'        => 'Automation Engineering',
                            'company'      => 'บริษัท นวโลหะไทย จำกัด (SNF)',
                            'company_code' => 'snf',
                            'location'     => 'เขตบึงกุ่ม กรุงเทพมหานคร',
                            'salary'       => 'ตามตกลง',
                            'date'         => '15 ส.ค. 69',
                            'logo'         => 'assets/images/snf.png',
                            'logo_alt'     => 'SNF Logo',
                        ],
                        [
                            'title'        => 'IT Manager',
                            'company'      => 'บริษัท ผลิตภัณฑ์วิศวไทย จำกัด (TEP)',
                            'company_code' => 'tep',
                            'location'     => 'อ.ศรีราชา จ.ชลบุรี',
                            'salary'       => 'ตามโครงสร้างบริษัทฯ',
                            'date'         => '15 ส.ค. 69',
                            'logo'         => 'assets/images/tep.png',
                            'logo_alt'     => 'TEP Logo',
                        ],
                        [
                            'title'        => 'IT Officer (ประจำสาขาสุขสวัสดิ์ 70)',
                            'company'      => 'บริษัท นวโลหะอุตสาหกรรม จำกัด (NIC)',
                            'company_code' => 'nic',
                            'location'     => 'อ.พระประแดง จ.สมุทรปราการ',
                            'salary'       => 'ตามตกลง',
                            'date'         => '15 ส.ค. 69',
                            'logo'         => 'assets/images/nic.png',
                            'logo_alt'     => 'NIC Logo',
                        ],
                        [
                            'title'        => 'System Analyst & Programmer',
                            'company'      => 'บริษัท ไอชิน ทากาโอกะ เอเชีย จำกัด (AT-A)',
                            'company_code' => 'ata',
                            'location'     => 'นิคมอุตสาหกรรมอมตะซิตี้ จ.ชลบุรี',
                            'salary'       => '25,000 - 35,000 บาท',
                            'date'         => '15 ส.ค. 69',
                            'logo'         => 'assets/images/ata.png',
                            'logo_alt'     => 'AT-A Logo',
                            'is_last'      => true,
                        ],
                    ];
                    ?>
                    <div id="job-listings-container" class="d-flex flex-column gap-2">
                      <?php foreach ($job_list as $job): ?>
                        <?php $this->load->view('components/job_item', $job); ?>
                      <?php endforeach; ?>

                      <!-- Empty state -->
                      <div id="no-jobs-alert" class="alert alert-secondary text-center py-4 d-none">
                        <i class="bi bi-info-circle fs-3 d-block mb-2 text-secondary"></i>
                        <span>ขณะนี้ยังไม่มีตำแหน่งงานที่เปิดรับสมัครสำหรับบริษัทที่เลือก</span>
                      </div>
                    </div>
                  </div>  
                </div>
              </div>
            </div>
            <!--end::Row-->

          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
      <!--begin::Footer-->
      <?php $this->load->view('components/footer'); ?>
      <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <?php $this->load->view('components/scripts'); ?>
    <!--end::Script-->
    <!--begin::Company Filter & Info Script-->
    <script>
      const companyData = {
        all: {
          title: 'เครือบริษัททั้งหมดในกลุ่มอุตสาหกรรม (All Companies)',
          address: 'นิคมอุตสาหกรรมอมตะซิตี้ ชลบุรี / สมุทรปราการ / สระบุรี',
          phone: '038-454-800 ต่อ ฝ่ายสรรหาและว่าจ้างบุคลากร',
          email: 'recruit-group@at-group.co.th',
          remark: 'สามารถเลือกดูตำแหน่งงานและสมัครในตำแหน่งงานที่สนใจของแต่ละบริษัทได้โดยตรงผ่านระบบออนไลน์'
        },
        ata: {
          title: 'บริษัท ไอชิน ทาคาโอก้า เอเชีย จำกัด (AT-A)',
          address: '700/606 หมู่ 4 นิคมอุตสาหกรรมอมตะซิตี้ ชลบุรี ต.บ้านเก่า อ.พานทอง จ.ชลบุรี 20160',
          phone: '038-454-000 ต่อ 101-104 (HR)',
          email: 'hr@at-a.co.th',
          remark: 'เปิดรับสมัครวันจันทร์ - ศุกร์ (08:30 - 17:00 น.) สอบถามข้อมูลเพิ่มเติมโทร 038-454-000'
        },
        atfb: {
          title: 'บริษัท ไอชิน ทาคาโอก้า ฟาวดริ บางปะกง จำกัด (ATFB)',
          address: '700/350 หมู่ 6 นิคมอุตสาหกรรมอมตะซิตี้ ชลบุรี ต.ดอนหัวฬ่อ อ.เมืองชลบุรี จ.ชลบุรี 20000',
          phone: '038-468-200 ต่อ ฝ่ายบุคคล',
          email: 'recruit@atfb.co.th',
          remark: 'มีสวัสดิการรถรับส่งพนักงาน, ค่าอาหาร, เบี้ยขยัน, โบนัสประจำปี และประกันสุขภาพกลุ่ม'
        },
        sati: {
          title: 'บริษัท สยาม เอที อุตสาหกรรม จำกัด (SATI)',
          address: '700/606 หมู่ 4 นิคมอุตสาหกรรมอมตะซิตี้ ชลบุรี ต.บ้านเก่า อ.พานทอง จ.ชลบุรี 20160',
          phone: '038-454-800 ต่อ ฝ่ายทรัพยากรบุคคล (HR)',
          email: 'hr-recruit@sati.co.th',
          remark: 'เปิดรับสมัครทุกวันจันทร์ - ศุกร์ (08:30 - 17:00 น.) กรุณาเตรียมเอกสารรูปถ่าย, สำเนาบัตรประชาชน, สำเนาทะเบียนบ้าน และวุฒิการศึกษา'
        },
        snf: {
          title: 'บริษัท นวโลหะไทย จำกัด (SNF)',
          address: '1 หมู่ 1 ถ.พหลโยธิน ต.ปากเพรียว อ.เมืองสระบุรี จ.สระบุรี 18000',
          phone: '036-200-500 ต่อ ฝ่ายบุคคล',
          email: 'hr-snf@nawaloha.com',
          remark: 'ยินดีรับทั้งผู้มีประสบการณ์และนักศึกษาจบใหม่ มีการฝึกอบรมพัฒนาทักษะอย่างต่อเนื่อง'
        },
        tep: {
          title: 'บริษัท ผลิตภัณฑ์วิศวไทย จำกัด (TEP)',
          address: '88/8 หมู่ 3 ต.บางเพรียง อ.บางบ่อ จ.สมุทรปราการ 10560',
          phone: '02-708-5500 ต่อ ฝ่ายบุคคล',
          email: 'recruit@tep.co.th',
          remark: 'บรรยากาศการทำงานเป็นกันเอง พร้อมโอกาสเติบโตในสายงานและผลตอบแทนที่มั่นคง'
        },
        nic: {
          title: 'บริษัท นวโลหะอุตสาหกรรม จำกัด (NIC)',
          address: '1 หมู่ 2 ถ.มิตรภาพ ต.ทับกวาง อ.แก่งคอย จ.สระบุรี 18260',
          phone: '036-329-800 ต่อ ฝ่ายบุคคล',
          email: 'hr-nic@nawaloha.com',
          remark: 'มีหอพักพนักงาน, กองทุนสำรองเลี้ยงชีพ, ตรวจสุขภาพประจำปี และชุดยูนิฟอร์ม'
        }
      };

      document.addEventListener('DOMContentLoaded', function () {
        const selectCompany = document.getElementById('company');
        if (selectCompany) {
          selectCompany.addEventListener('change', function () {
            const selected = this.value;
            const info = companyData[selected] || companyData['all'];

            // Update info box
            document.getElementById('company-title').textContent = info.title;
            document.getElementById('company-address').innerHTML = `<i class="bi bi-geo-alt-fill me-1 text-danger"></i> ${info.address}`;
            document.getElementById('company-phone').innerHTML = `<i class="bi bi-telephone-fill me-1 text-success"></i> ${info.phone}`;
            document.getElementById('company-email').innerHTML = `<i class="bi bi-envelope-fill me-1 text-primary"></i> ${info.email}`;
            document.getElementById('company-remark-text').textContent = info.remark;

            // Filter jobs
            const jobItems = document.querySelectorAll('#job-listings-container .job-item');
            let visibleCount = 0;
            jobItems.forEach(item => {
              if (selected === 'all' || item.getAttribute('data-company') === selected) {
                item.classList.remove('d-none');
                visibleCount++;
              } else {
                item.classList.add('d-none');
              }
            });

            const noJobsAlert = document.getElementById('no-jobs-alert');
            if (noJobsAlert) {
              noJobsAlert.classList.toggle('d-none', visibleCount > 0);
            }
          });

          // Set default to "all" to show all jobs initially or trigger selected
          selectCompany.value = 'all';
          selectCompany.dispatchEvent(new Event('change'));
        }
      });
    </script>
    <!--end::Company Filter & Info Script-->
  </body>
  <!--end::Body-->
</html>
