# View Components

โฟลเดอร์นี้รวบรวม UI Components ที่ใช้ซ้ำในหน้า Views ต่าง ๆ ของระบบ CodeIgniter 3

---

## หมวดที่ 1: Layout & Core Components

### 1. `components/head`
ส่วนหัว HTML (`<head>...</head>`) ประกอบด้วย Meta Tags, Theme Init, Fonts (`Noto Sans Thai`, `Google Sans`), Bootstrap Icons, AdminLTE CSS, และ OverlayScrollbars

**ตัวอย่างการใช้งาน:**
```php
<?php 
$this->load->view('components/head', [
    'title'      => 'หน้าแรก | ตำแหน่งงานที่เปิดรับสมัคร',
    'extra_head' => '<style>/* Custom CSS เฉพาะหน้านี้ */</style>'
]); 
?>
```

---

### 2. `components/navbar`
แถบเมนูด้านบน (Top Navigation Bar) รองรับปุ่มย้อนกลับ, ปุ่มเปิด/ปิด Sidebar, เมนูกรอกใบสมัคร, เมนูสลับโหมด Light/Dark, และ Dropdown ข้อมูลผู้ใช้งาน

**ตัวอย่างการใช้งาน:**
```php
<?php 
$this->load->view('components/navbar', [
    'show_sidebar_toggle' => true,                      // แสดงปุ่มแฮมเบอร์เกอร์สำหรับ Sidebar
    'back_url'            => site_url('welcome/index'), // แสดงปุ่มย้อนกลับ (ถ้ามี)
    'back_text'           => 'หน้าแรก',
    'show_apply_btn'      => true,                      // แสดงปุ่ม "กรอกใบสมัครงาน"
    'user_name'           => 'Alexander Pierce',
    'user_role'           => 'Web Developer'
]); 
?>
```

---

### 3. `components/sidebar`
แถบเมนูด้านข้าง (Sidebar Menu) แสดงโลโก้และรายการเมนูของระบบ

**ตัวอย่างการใช้งาน:**
```php
<?php 
$this->load->view('components/sidebar', [
    'active_menu' => 'home' // 'home' หรือ 'application'
]); 
?>
```

---

### 4. `components/footer`
ส่วนท้ายของหน้าเว็บ (`<footer>...</footer>`) แสดงข้อความลิขสิทธิ์และปีปัจจุบันอัตโนมัติ

**ตัวอย่างการใช้งาน:**
```php
<?php 
$this->load->view('components/footer', [
    'right_text' => 'Group Recruitment Portal'
]); 
?>
```

---

### 5. `components/scripts`
ไฟล์ JavaScript พื้นฐานของระบบ (OverlayScrollbars, Popper.js, Bootstrap 5, AdminLTE) และการตั้งค่า OverlayScrollbars อัตโนมัติ

**ตัวอย่างการใช้งาน:**
```php
<?php 
$this->load->view('components/scripts', [
    'extra_scripts' => '<script>/* Script เฉพาะหน้านี้ */</script>'
]); 
?>
```

---

### 6. `components/theme_toggle`
ปุ่มเลือกสลับธีม Light / Dark / Auto (ใช้เป็น `<li>` ภายใน Navbar)

**ตัวอย่างการใช้งาน:**
```php
<?php $this->load->view('components/theme_toggle'); ?>
```

---

## หมวดที่ 2: Section & Content Components

### 7. `components/hero_banner`
แบนเนอร์ภาพปกด้านบน (Cover Banner) พร้อมสโลแกนภาษาอังกฤษ-ไทย และการ์ดโลโก้บริษัทที่ซ้อนทับขอบล่าง

**ตัวอย่างการใช้งาน:**
```php
<?php 
$this->load->view('components/hero_banner', [
    'company' => $company // หรือส่ง 'bg', 'logo', 'title', 'title_en', 'slogan_en', 'slogan_th'
]); 
?>
```

---

### 8. `components/job_header_card`
การ์ดสรุปตำแหน่งงานด้านบน (ชื่อตำแหน่ง, วันที่ลงประกาศ, สถานที่, เงินเดือน, อัตรา, Badge สัมภาษณ์ออนไลน์ และปุ่ม Action)

**ตัวอย่างการใช้งาน:**
```php
<?php 
$this->load->view('components/job_header_card', [
    'company' => $company
]); 
?>
```

---

### 9. `components/job_requirements_card`
การ์ดรายการหน้าที่ความรับผิดชอบ (Responsibilities) และคุณสมบัติผู้สมัคร (Qualifications) พร้อมไอคอน Checklist สวยงาม

**ตัวอย่างการใช้งาน:**
```php
<?php 
$this->load->view('components/job_requirements_card', [
    'company' => $company // หรือส่ง 'responsibilities' => [...], 'qualifications' => [...]
]); 
?>
```

---

### 10. `components/benefits_card`
การ์ดสวัสดิการพนักงานแบบ 2 คอลัมน์ (คอลัมน์ซ้าย: คำโปรย + ทำไมต้องเลือกเรา / คอลัมน์ขวา: รายการสวัสดิการ 12+ ข้อ)

**ตัวอย่างการใช้งาน:**
```php
<?php 
$this->load->view('components/benefits_card', [
    'company' => $company
]); 
?>
```

---

### 11. `components/contact_card`
การ์ดข้อมูลติดต่อฝ่ายทรัพยากรบุคคล (HR) ประกอบด้วยชื่อหน่วยงาน, ที่อยู่, เบอร์โทรศัพท์ (คลิกโทรได้), ลิงก์เว็บไซต์ และ LINE ID Badge

**ตัวอย่างการใช้งาน:**
```php
<?php 
$this->load->view('components/contact_card', [
    'company' => $company
]); 
?>
```

---

### 12. `components/cta_banner`
กล่อง Call-to-Action สีน้ำเงินสะดุดตา ("สนใจร่วมงานกับเรา? เริ่มต้นก้าวแรกสู่อนาคตที่มั่นคง...") พร้อมปุ่มสมัครงานออนไลน์และปุ่มดูตำแหน่งงานอื่น ๆ

**ตัวอย่างการใช้งาน:**
```php
<?php 
$this->load->view('components/cta_banner', [
    'cta_title'    => 'สนใจร่วมงานกับเรา?',
    'cta_subtitle' => 'เริ่มต้นก้าวแรกสู่อนาคตที่มั่นคงและเติบโตไปด้วยกันกับเรา',
    'apply_url'    => site_url('welcome/applicationform'),
    'browse_url'   => site_url('welcome/index')
]); 
?>
```

---

### 13. `components/job_item`
การ์ดรายการตำแหน่งงานแต่ละรายการสำหรับหน้าแรก (Home) รองรับการแสดงชื่อตำแหน่ง, บริษัท, สถานที่, เงินเดือน, วันที่ และกล่องโลโก้

**ตัวอย่างการใช้งาน:**
```php
<?php 
$this->load->view('components/job_item', [
    'title'        => 'Programmers',
    'company'      => 'บริษัท สยาม เอที อุตสาหกรรม จำกัด',
    'company_code' => 'sati',
    'location'     => 'เขตสะพานสูง กรุงเทพมหานคร',
    'salary'       => '20,000 - 25,000 บาท',
    'date'         => '15 ส.ค. 69',
    'logo'         => 'assets/images/sati.png',
    'logo_alt'     => 'SATI Logo',
    'is_last'      => false
]); 
?>
```
