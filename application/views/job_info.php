<?php
defined('BASEPATH') or exit('No direct script access allowed');

// Available companies and job details dictionary
$company_key = isset($_GET['company']) ? strtolower(trim($_GET['company'])) : 'sati';

$companies_db = [
    'sati' => [
        'code' => 'sati',
        'short_name' => 'SATI',
        'title' => 'บริษัท สยาม เอที อุตสาหกรรม จำกัด (SATI)',
        'title_en' => 'SIAM AT INDUSTRY CO., LTD.',
        'job_title' => 'Programmers',
        'job_subtitle' => 'Software Developer & System Analyst',
        'date_posted' => '17 ส.ค. 69',
        'location' => 'กรุงเทพมหานคร / นิคมอุตสาหกรรมอมตะซิตี้ ชลบุรี',
        'salary' => '20,000 - 25,000 บาท',
        'positions' => 'หลายอัตรา',
        'employment_type' => 'งานประจำ (Full Time)',
        'education' => 'ปริญญาตรีขึ้นไป (วิทยาการคอมพิวเตอร์ / IT หรือสาขาที่เกี่ยวข้อง)',
        'interview_online' => true,
        'logo' => 'assets/images/sati.png',
        'bg' => 'assets/images/sati-bg.jpg',
        'slogan_en' => 'GROWING TOGETHER',
        'slogan_th' => 'เติบโตไปด้วยกันอย่างยั่งยืน',
        'about' => 'บริษัท สยาม เอที อุตสาหกรรม จำกัด (SATI) เป็นหนึ่งในผู้นำด้านการผลิตชิ้นส่วนยานยนต์และงานวิศวกรรมอุตสาหกรรมมาตรฐานระดับสากล ภายใต้เครือกลุ่มบริษัทไอชิน ทาคาโอก้า (Aisin Takaoka Group) โดยมีความมุ่งมั่นที่จะพัฒนาผลิตภัณฑ์ที่มีคุณภาพสูง พร้อมทั้งสนับสนุนและเสริมสร้างศักยภาพของบุคลากรให้เติบโตไปด้วยกันอย่างยั่งยืน ด้วยเจตนารมณ์ของการเป็นพันธมิตรที่พร้อมยืนเคียงข้างลูกค้า พัฒนาความสัมพันธ์อย่างต่อเนื่องยาวนานจากรุ่นสู่รุ่น และมุ่งมั่นดำเนินธุรกิจอย่างมีความรับผิดชอบต่อสังคมและสิ่งแวดล้อมในทุกมิติ',
        'responsibilities' => [
            'พัฒนา ออกแบบ และดูแลรักษาระบบซอฟต์แวร์ Web Application และระบบฐานข้อมูลภายในองค์กร',
            'พัฒนาระบบตาม Requirement ของผู้ใช้งาน และประสานงานร่วมกับทีมพัฒนาระบบและฝ่ายต่าง ๆ',
            'ทดสอบโปรแกรม (Unit Test / System Integration Test) และจัดทำคู่มือการใช้งานระบบ (User Manual)',
            'ให้คำปรึกษา แนะนำ ช่วยเหลือ และแก้ไขปัญหาทางด้านเทคนิค (Technical Support) แก่ผู้ใช้งาน',
            'ศึกษา ค้นคว้า และประยุกต์ใช้เทคโนโลยีหรือเครื่องมือใหม่ ๆ เพื่อเพิ่มประสิทธิภาพการทำงาน'
        ],
        'qualifications' => [
            'เพศชาย / หญิง อายุ 22 - 35 ปี',
            'วุฒิการศึกษาระดับปริญญาตรีขึ้นไป สาขาวิทยาการคอมพิวเตอร์, เทคโนโลยีสารสนเทศ (IT), วิศวกรรมคอมพิวเตอร์ หรือสาขาที่เกี่ยวข้อง',
            'มีความรู้ความสามารถและทักษะในการเขียนโปรแกรมภาษา PHP, JavaScript, HTML5, CSS3, SQL',
            'มีความเข้าใจใน Web Framework (เช่น CodeIgniter, Laravel) หรือเทคโนโลยีพัฒนาระบบ Web Application',
            'หากมีความรู้ความเข้าใจเกี่ยวกับระบบฐานข้อมูล (MySQL, MS SQL Server, Oracle) จะได้รับการพิจารณาเป็นพิเศษ',
            'มีความกระตือรือร้น มีความรับผิดชอบสูง ละเอียดรอบคอบ และมีทักษะการทำงานร่วมกับผู้อื่นเป็นอย่างดี',
            'ยินดีต้อนรับนักศึกษาจบใหม่ หรือผู้มีประสบการณ์ทำงาน 0 - 3 ปีขึ้นไป'
        ],
        'benefits_intro' => 'พนักงานคือหัวใจขององค์กร การดำเนินงานต่าง ๆ จะไม่สามารถสำเร็จได้หากปราศจากความร่วมมือของพนักงาน บริษัทฯ เชื่อมั่นว่าการปฏิบัติต่อพนักงานอย่างเท่าเทียมและเป็นธรรม การจัดสรรค่าตอบแทนและสวัสดิการอย่างเหมาะสม การดูแลด้านอาชีวอนามัยและความปลอดภัย และการดูแลความเป็นอยู่ที่ดีของพนักงานจะส่งผลให้พนักงานมีสุขภาพกายและสุขภาพจิตที่ดี เพิ่มความรักความผูกพันต่อองค์กร สามารถปฏิบัติงานได้อย่างเต็มศักยภาพซึ่งจะส่งผลให้บริษัทเติบโตและมีผลประกอบการที่ดีอย่างต่อเนื่อง',
        'why_join' => [
            'รายได้ ค่าตอบแทนที่มั่นคง สังคมที่อบอุ่น',
            'เงินสงเคราะห์ / เงินช่วยเหลือในโอกาสต่าง ๆ',
            'โอกาสในการเรียนรู้ พัฒนาทักษะ และความก้าวหน้าในสายอาชีพ'
        ],
        'benefits_list' => [
            'Fix Bonus 2 เดือน / Special Bonus 1-1.5 เดือน** (ตามผลประกอบการ)',
            'สิทธิการลา (ลาพักร้อน, ลากิจ, ลาป่วย, ลาคลอด)',
            'โปรแกรมการฝึกอบรมและพัฒนาศักยภาพบุคลากร',
            'กองทุนสำรองเลี้ยงชีพ**',
            'สวัสดิการเงินกู้อัตราพิเศษ** (ซื้อบ้าน, คอนโดมิเนียม, คอมพิวเตอร์, สมาร์ทโฟน, รถยนต์, อื่นๆ)',
            'ประกันสังคม',
            'ศูนย์บริการสุขภาพประจำสำนักงาน / ห้องพยาบาล',
            'ค่ารักษาพยาบาล / ค่าบริการทันตกรรม',
            'ประกันชีวิตและประกันอุบัติเหตุกลุ่ม',
            'ตรวจสุขภาพประจำปี',
            'ทำงาน 5 วันหยุด 2 วัน / หมุนเวียนตามรอบการทำงาน',
            'รถรับส่งพนักงาน, ค่าอาหาร, เบี้ยขยัน, เครื่องแบบพนักงาน (ยูนิฟอร์ม)'
        ],
        'contact_dept' => 'งานสรรหาและจัดรับพนักงาน สายทรัพยากรบุคคล',
        'address' => 'เลขที่ 700/606 หมู่ 4 นิคมอุตสาหกรรมอมตะซิตี้ ชลบุรี ต.บ้านเก่า อ.พานทอง จ.ชลบุรี 20160',
        'phone' => '038-454-800, 063-212-3054',
        'email' => 'hr-recruit@sati.co.th',
        'website' => 'http://www.sati.co.th/careers',
        'line_id' => '@saticareers'
    ],
    'ata' => [
        'code' => 'ata',
        'short_name' => 'AT-A',
        'title' => 'บริษัท ไอชิน ทาคาโอก้า เอเชีย จำกัด (AT-A)',
        'title_en' => 'AISIN TAKAOKA ASIA CO., LTD.',
        'job_title' => 'System Analyst & Programmer',
        'job_subtitle' => 'Application Design & Software Engineering',
        'date_posted' => '17 ส.ค. 69',
        'location' => 'นิคมอุตสาหกรรมอมตะซิตี้ จ.ชลบุรี',
        'salary' => '25,000 - 35,000 บาท',
        'positions' => 'หลายอัตรา',
        'employment_type' => 'งานประจำ (Full Time)',
        'education' => 'ปริญญาตรีขึ้นไป สาขาวิทยาการคอมพิวเตอร์ หรือสาขาที่เกี่ยวข้อง',
        'interview_online' => true,
        'logo' => 'assets/images/ata.png',
        'bg' => 'assets/images/ata-bg.jpg',
        'slogan_en' => 'INNOVATION & EXCELLENCE',
        'slogan_th' => 'สร้างสรรค์นวัตกรรม ก้าวสู่ความเป็นเลิศ',
        'about' => 'บริษัท ไอชิน ทาคาโอก้า เอเชีย จำกัด (AT-A) มุ่งเน้นการพัฒนาระบบเทคโนโลยีสารสนเทศและการบริหารจัดการระดับภูมิภาคเอเชีย เพื่อสนับสนุนกระบวนการผลิตและการดำเนินงานที่ก้าวหน้าในระดับสากล',
        'responsibilities' => [
            'วิเคราะห์ ออกแบบ และพัฒนาระบบ ERP / Web Application สำหรับธุรกิจ',
            'รวบรวมความต้องการทางธุรกิจจากผู้ใช้งาน และออกแบบ Workflow การทำงาน',
            'ดูแลและปรับปรุงประสิทธิภาพระบบฐานข้อมูล และระบบเครือข่ายที่เกี่ยวข้อง'
        ],
        'qualifications' => [
            'วุฒิปริญญาตรี สาขาวิทยาการคอมพิวเตอร์, เทคโนโลยีสารสนเทศ หรือสาขาที่เกี่ยวข้อง',
            'มีประสบการณ์ในการพัฒนาระบบ Web Application อย่างน้อย 1-3 ปี',
            'มีความเชี่ยวชาญภาษา PHP, JavaScript, SQL และการออกแบบ Database'
        ],
        'benefits_intro' => 'พนักงานคือหัวใจขององค์กร การดำเนินงานต่าง ๆ จะไม่สามารถสำเร็จได้หากปราศจากความร่วมมือของพนักงาน บริษัทฯ เชื่อมั่นว่าการปฏิบัติต่อพนักงานอย่างเท่าเทียมและเป็นธรรม การจัดสรรค่าตอบแทนและสวัสดิการอย่างเหมาะสม จะส่งผลให้พนักงานเติบโตไปพร้อมกับองค์กรอย่างมั่นคง',
        'why_join' => [
            'รายได้และโบนัสประจำปีที่มั่นคง',
            'โอกาสศึกษาดูงานและอบรมเทคโนโลยีระดับสากล',
            'สภาพแวดล้อมการทำงานที่เป็นมิตรและทันสมัย'
        ],
        'benefits_list' => [
            'โบนัสประจำปีตามผลประกอบการ',
            'กองทุนสำรองเลี้ยงชีพ',
            'ประกันสุขภาพและประกันอุบัติเหตุกลุ่ม',
            'ค่ารักษาพยาบาลและทันตกรรม',
            'ตรวจสุขภาพประจำปี',
            'รถรับส่งพนักงานและค่าเบี้ยเลี้ยง'
        ],
        'contact_dept' => 'งานสรรหาและจัดรับพนักงาน สายทรัพยากรบุคคล',
        'address' => '700/606 หมู่ 4 นิคมอุตสาหกรรมอมตะซิตี้ ชลบุรี ต.บ้านเก่า อ.พานทอง จ.ชลบุรี 20160',
        'phone' => '038-454-000 ต่อ 101-104 (HR)',
        'email' => 'hr@at-a.co.th',
        'website' => 'http://www.at-a.co.th/careers',
        'line_id' => '@atacareers'
    ],
    'atfb' => [
        'code' => 'atfb',
        'short_name' => 'ATFB',
        'title' => 'บริษัท ไอชิน ทาคาโอก้า ฟาวดริ บางปะกง จำกัด (ATFB)',
        'title_en' => 'AISIN TAKAOKA FOUNDRY BANGPAKONG CO., LTD.',
        'job_title' => 'IT SUPERVISOR / IT Support',
        'job_subtitle' => 'Infrastructure & Systems Operations',
        'date_posted' => '17 ส.ค. 69',
        'location' => 'อ.บางพลี จ.สมุทรปราการ / อมตะซิตี้ ชลบุรี',
        'salary' => 'ตามโครงสร้างบริษัทฯ / ตามตกลง',
        'positions' => 'หลายอัตรา',
        'employment_type' => 'งานประจำ (Full Time)',
        'education' => 'ปริญญาตรีขึ้นไป สาขาเทคโนโลยีสารสนเทศ หรือที่เกี่ยวข้อง',
        'interview_online' => true,
        'logo' => 'assets/images/atfb.png',
        'bg' => 'assets/images/atfb-bg.jpg',
        'slogan_en' => 'ADVANCING TOGETHER',
        'slogan_th' => 'ก้าวไกลสู่อนาคต มุ่งมั่นพัฒนาอย่างต่อเนื่อง',
        'about' => 'บริษัท ไอชิน ทาคาโอก้า ฟาวดริ บางปะกง จำกัด (ATFB) มุ่งมั่นผลิตชิ้นส่วนยานยนต์ที่มีคุณภาพสูง เพื่อตอบสนองความต้องการของอุตสาหกรรมยานยนต์ระดับโลก',
        'responsibilities' => [
            'ดูแลระบบคอมพิวเตอร์ เครือข่าย และ Hardware/Software ภายในโรงงาน',
            'แก้ไขปัญหา IT ประจำวัน และดูแลรักษาระบบรักษาความปลอดภัยข้อมูล',
            'ประสานงานกับผู้ให้บริการภายนอก และสนับสนุนงานด้าน IT ทั้งหมด'
        ],
        'qualifications' => [
            'วุฒิปริญญาตรี สาขา IT, วิศวกรรมคอมพิวเตอร์ หรือสาขาที่เกี่ยวข้อง',
            'มีประสบการณ์งาน IT Support / Network ไม่น้อยกว่า 2 ปี',
            'มีทักษะในการแก้ปัญหาเฉพาะหน้าและมีใจรักงานบริการ'
        ],
        'benefits_intro' => 'บริษัทฯ ให้ความสำคัญกับการดูแลคุณภาพชีวิตของพนักงานทุกคน พร้อมมอบสวัสดิการที่ตอบโจทย์และส่งเสริมความก้าวหน้าอย่างต่อเนื่อง',
        'why_join' => [
            'บรรยากาศการทำงานแบบครอบครัว',
            'สวัสดิการรถรับส่งพนักงาน ค่าอาหาร และเบี้ยขยัน'
        ],
        'benefits_list' => [
            'โบนัสประจำปี',
            'รถรับส่งพนักงานสายต่าง ๆ',
            'ค่าอาหารและเบี้ยขยันประจำเดือน',
            'ประกันสุขภาพกลุ่มและประกันอุบัติเหตุ',
            'กองทุนสำรองเลี้ยงชีพ'
        ],
        'contact_dept' => 'งานสรรหาและจัดรับพนักงาน สายทรัพยากรบุคคล',
        'address' => '700/350 หมู่ 6 นิคมอุตสาหกรรมอมตะซิตี้ ชลบุรี ต.ดอนหัวฬ่อ อ.เมืองชลบุรี จ.ชลบุรี 20000',
        'phone' => '038-468-200 ต่อ ฝ่ายบุคคล',
        'email' => 'recruit@atfb.co.th',
        'website' => 'http://www.atfb.co.th/careers',
        'line_id' => '@atfbcareers'
    ],
    'snf' => [
        'code' => 'snf',
        'short_name' => 'SNF',
        'title' => 'บริษัท นวโลหะไทย จำกัด (SNF)',
        'title_en' => 'NAWALOHA THAI CO., LTD.',
        'job_title' => 'Automation Engineering',
        'job_subtitle' => 'Industrial Automation & Control Systems',
        'date_posted' => '17 ส.ค. 69',
        'location' => 'เขตบึงกุ่ม กรุงเทพมหานคร / จ.สระบุรี',
        'salary' => 'ตามโครงสร้างบริษัทฯ / ตามตกลง',
        'positions' => 'หลายอัตรา',
        'employment_type' => 'งานประจำ (Full Time)',
        'education' => 'ปริญญาตรีขึ้นไป สาขาวิศวกรรมอัตโนมัติ / เมคคาทรอนิกส์ / ไฟฟ้า',
        'interview_online' => true,
        'logo' => 'assets/images/snf.png',
        'bg' => 'assets/images/snf-bg.jpg',
        'slogan_en' => 'ENGINEERING THE FUTURE',
        'slogan_th' => 'สร้างสรรค์วิศวกรรมสู่อนาคตที่ยั่งยืน',
        'about' => 'บริษัท นวโลหะไทย จำกัด (SNF) ผู้นำด้านงานหล่อและวิศวกรรมโลหะอุตสาหกรรม พร้อมมอบโอกาสการเติบโตในสายงานเทคโนโลยีขั้นสูง',
        'responsibilities' => [
            'ออกแบบ พัฒนา และดูแลระบบอัตโนมัติ (Automation & PLC) ในสายการผลิต',
            'ปรับปรุงกระบวนการทำงานเพื่อเพิ่มผลผลิตและลดความสูญเสีย',
            'ดูแลการบำรุงรักษาเชิงป้องกันของเครื่องจักรกลอัตโนมัติ'
        ],
        'qualifications' => [
            'วุฒิปริญญาตรี สาขาวิศวกรรมเมคคาทรอนิกส์, วิศวกรรมไฟฟ้า หรือที่เกี่ยวข้อง',
            'มีความรู้ด้าน PLC, SCADA, Robotics และระบบควบคุมทางอุตสาหกรรม'
        ],
        'benefits_intro' => 'เรามุ่งมั่นสร้างเสริมประสบการณ์และความก้าวหน้าในอาชีพ พร้อมสวัสดิการที่ครอบคลุมทุกด้าน',
        'why_join' => [
            'ทำงานกับเครื่องจักรและเทคโนโลยีที่ทันสมัย',
            'โอกาสเติบโตในสายงานวิศวกรรม'
        ],
        'benefits_list' => [
            'โบนัสประจำปี',
            'เบี้ยขยันและค่าทำงานล่วงเวลา',
            'ประกันสังคมและประกันอุบัติเหตุ',
            'ตรวจสุขภาพประจำปี'
        ],
        'contact_dept' => 'งานสรรหาและจัดรับพนักงาน สายทรัพยากรบุคคล',
        'address' => '1 หมู่ 1 ถ.พหลโยธิน ต.ปากเพรียว อ.เมืองสระบุรี จ.สระบุรี 18000',
        'phone' => '036-200-500 ต่อ ฝ่ายบุคคล',
        'email' => 'hr-snf@nawaloha.com',
        'website' => 'http://www.nawaloha.com/careers',
        'line_id' => '@snfcareers'
    ],
    'tep' => [
        'code' => 'tep',
        'short_name' => 'TEP',
        'title' => 'บริษัท ผลิตภัณฑ์วิศวไทย จำกัด (TEP)',
        'title_en' => 'THAI ENGINEERING PRODUCTS CO., LTD.',
        'job_title' => 'IT Manager',
        'job_subtitle' => 'IT Management & Strategy',
        'date_posted' => '17 ส.ค. 69',
        'location' => 'อ.ศรีราชา จ.ชลบุรี / อ.บางบ่อ จ.สมุทรปราการ',
        'salary' => 'ตามโครงสร้างบริษัทฯ',
        'positions' => '1 อัตรา',
        'employment_type' => 'งานประจำ (Full Time)',
        'education' => 'ปริญญาตรีขึ้นไป สาขา IT, วิศวกรรมคอมพิวเตอร์ หรือสาขาที่เกี่ยวข้อง',
        'interview_online' => true,
        'logo' => 'assets/images/tep.png',
        'bg' => 'assets/images/tep-bg.jpg',
        'slogan_en' => 'PRECISION & RELIABILITY',
        'slogan_th' => 'แม่นยำ มั่นคง ไว้วางใจได้',
        'about' => 'บริษัท ผลิตภัณฑ์วิศวไทย จำกัด (TEP) เชี่ยวชาญการผลิตชิ้นส่วนวิศวกรรมความแม่นยำสูง พร้อมบรรยากาศการทำงานที่เป็นมืออาชีพและอบอุ่น',
        'responsibilities' => [
            'วางแผน กำกับดูแล และบริหารจัดการระบบเทคโนโลยีสารสนเทศทั้งหมดของบริษัท',
            'ควบคุมดูแลโครงการด้าน IT และการพัฒนานวัตกรรมดิจิทัล'
        ],
        'qualifications' => [
            'มีประสบการณ์ด้านการบริหารงาน IT ในโรงงานอุตสาหกรรมอย่างน้อย 5 ปีขึ้นไป',
            'มีทักษะความเป็นผู้นำและการสื่อสารที่ดี'
        ],
        'benefits_intro' => 'ผลตอบแทนและสวัสดิการที่ยอดเยี่ยม พร้อมโอกาสการบริหารและพัฒนาทีมงานอย่างเต็มศักยภาพ',
        'why_join' => [
            'ตำแหน่งงานระดับบริหารที่มั่นคง',
            'ผลตอบแทนและสวัสดิการตามมาตรฐานองค์กรชั้นนำ'
        ],
        'benefits_list' => [
            'โบนัสประจำปีตามผลงาน',
            'กองทุนสำรองเลี้ยงชีพ',
            'ประกันสุขภาพและประกันอุบัติเหตุกลุ่ม',
            'ตรวจสุขภาพประจำปี'
        ],
        'contact_dept' => 'งานสรรหาและจัดรับพนักงาน สายทรัพยากรบุคคล',
        'address' => '88/8 หมู่ 3 ต.บางเพรียง อ.บางบ่อ จ.สมุทรปราการ 10560',
        'phone' => '02-708-5500 ต่อ ฝ่ายบุคคล',
        'email' => 'recruit@tep.co.th',
        'website' => 'http://www.tep.co.th/careers',
        'line_id' => '@tepcareers'
    ],
    'nic' => [
        'code' => 'nic',
        'short_name' => 'NIC',
        'title' => 'บริษัท นวโลหะอุตสาหกรรม จำกัด (NIC)',
        'title_en' => 'NAWALOHA INDUSTRY CO., LTD.',
        'job_title' => 'IT Officer (ประจำสาขาสุขสวัสดิ์ 70)',
        'job_subtitle' => 'System Support & IT Operations',
        'date_posted' => '17 ส.ค. 69',
        'location' => 'อ.พระประแดง จ.สมุทรปราการ / จ.สระบุรี',
        'salary' => 'ตามตกลง / ตามโครงสร้างบริษัทฯ',
        'positions' => 'หลายอัตรา',
        'employment_type' => 'งานประจำ (Full Time)',
        'education' => 'ปริญญาตรี สาขา IT หรือสาขาที่เกี่ยวข้อง',
        'interview_online' => true,
        'logo' => 'assets/images/nic.png',
        'bg' => 'assets/images/nic-bg.jpg',
        'slogan_en' => 'STRENGTH IN QUALITY',
        'slogan_th' => 'แข็งแกร่งด้วยคุณภาพ มั่นคงด้วยมาตรฐาน',
        'about' => 'บริษัท นวโลหะอุตสาหกรรม จำกัด (NIC) ผู้ผลิตและแปรรูปผลิตภัณฑ์โลหะอุตสาหกรรมชั้นนำในประเทศไทย',
        'responsibilities' => [
            'ดูแลและแก้ไขปัญหาการใช้งานระบบ IT ประจำสาขา',
            'บำรุงรักษาอุปกรณ์คอมพิวเตอร์และระบบเครือข่าย'
        ],
        'qualifications' => [
            'วุฒิปริญญาตรี สาขาคอมพิวเตอร์หรือสาขาที่เกี่ยวข้อง',
            'มีมนุษยสัมพันธ์ดี พร้อมเรียนรู้งานและมีทักษะการประสานงาน'
        ],
        'benefits_intro' => 'มีหอพักพนักงาน กองทุนสำรองเลี้ยงชีพ และสวัสดิการที่พร้อมดูแลพนักงานทุกคนอย่างทั่วถึง',
        'why_join' => [
            'มีหอพักพนักงานและสวัสดิการครบครัน',
            'ความมั่นคงในองค์กรชั้นนำ'
        ],
        'benefits_list' => [
            'โบนัสประจำปี',
            'หอพักพนักงาน',
            'กองทุนสำรองเลี้ยงชีพ',
            'ชุดยูนิฟอร์มและอุปกรณ์ PPE',
            'ตรวจสุขภาพประจำปี'
        ],
        'contact_dept' => 'งานสรรหาและจัดรับพนักงาน สายทรัพยากรบุคคล',
        'address' => '1 หมู่ 2 ถ.มิตรภาพ ต.ทับกวาง อ.แก่งคอย จ.สระบุรี 18260',
        'phone' => '036-329-800 ต่อ ฝ่ายบุคคล',
        'email' => 'hr-nic@nawaloha.com',
        'website' => 'http://www.nawaloha.com/careers',
        'line_id' => '@niccareers'
    ]
];

// Active company data (defaults to SATI)
$company = isset($companies_db[$company_key]) ? $companies_db[$company_key] : $companies_db['sati'];
?>
<!DOCTYPE html>
<html lang="th">

<!--begin::Head-->
<?php 
$job_custom_css = '
<style>
    /* Hero Banner & Logo Style */
    .hero-banner-container {
        position: relative;
        width: 100%;
        height: 290px;
        border-radius: 16px 16px 0 0;
        overflow: hidden;
        background-color: #212529;
    }

    .hero-banner-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        filter: brightness(0.92);
        transition: transform 0.4s ease;
    }

    .hero-banner-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(180deg, rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.45) 100%);
        display: flex;
        align-items: center;
        justify-content: flex-end;
        padding: 24px 36px;
    }

    .hero-slogan-text {
        color: #ffffff;
        text-align: right;
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.7);
    }

    .hero-slogan-en {
        font-size: 2rem;
        font-weight: 800;
        letter-spacing: 2px;
        line-height: 1.1;
    }

    .hero-slogan-th {
        font-size: 1.5rem;
        font-weight: 600;
        letter-spacing: 0.5px;
    }

    /* Profile Overlapping Card */
    .company-profile-bar {
        position: relative;
        padding: 0 24px;
        margin-bottom: 24px;
    }

    .company-logo-badge {
        width: 110px;
        height: 110px;
        border-radius: 16px;
        background-color: #ffffff;
        border: 4px solid #ffffff;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.12);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 10px;
        margin-top: -55px;
        position: relative;
        z-index: 10;
        flex-shrink: 0;
    }

    [data-bs-theme="dark"] .company-logo-badge {
        background-color: #2b3035;
        border-color: #343a40;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.4);
    }

    .company-logo-badge img {
        max-width: 85%;
        max-height: 85%;
        object-fit: contain;
    }

    /* Job Header Card */
    .job-header-card {
        background-color: var(--bs-body-bg);
        border: 1px solid var(--bs-border-color);
        border-radius: 14px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.04);
        padding: 24px 28px;
        margin-bottom: 24px;
    }

    .job-currency-badge {
        width: 22px;
        height: 22px;
        border-radius: 50%;
        background-color: #fde8e4;
        color: #e04f32;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        font-weight: bold;
        flex-shrink: 0;
    }

    [data-bs-theme="dark"] .job-currency-badge {
        background-color: rgba(224, 79, 50, 0.2);
        color: #ff765b;
    }

    .badge-interview-online {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 6px 12px;
        border-radius: 6px;
        font-size: 0.875rem;
        font-weight: 500;
        color: #0d6efd;
        background-color: rgba(13, 110, 253, 0.08);
        border: 1px solid rgba(13, 110, 253, 0.35);
    }

    [data-bs-theme="dark"] .badge-interview-online {
        color: #6ea8fe;
        background-color: rgba(13, 110, 253, 0.15);
        border-color: rgba(110, 168, 254, 0.35);
    }

    /* Action Buttons */
    .btn-orange {
        background-color: #f25b38;
        border-color: #f25b38;
        color: #ffffff;
        font-weight: 600;
        transition: all 0.2s ease-in-out;
    }

    .btn-orange:hover,
    .btn-orange:focus {
        background-color: #e04f32;
        border-color: #e04f32;
        color: #ffffff;
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(242, 91, 56, 0.35);
    }

    /* Detail Cards & Sections */
    .content-card {
        background-color: var(--bs-body-bg);
        border: 1px solid var(--bs-border-color);
        border-radius: 14px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.04);
        padding: 28px 32px;
        margin-bottom: 24px;
    }

    .section-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: var(--bs-body-color);
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .benefit-bullet-list {
        list-style: none;
        padding-left: 0;
        margin-bottom: 0;
    }

    .benefit-bullet-list li {
        position: relative;
        padding-left: 1.5rem;
        margin-bottom: 0.65rem;
        line-height: 1.55;
        color: var(--bs-body-color);
    }

    .benefit-bullet-list li::before {
        content: "•";
        position: absolute;
        left: 0.25rem;
        top: 0;
        font-size: 1.25rem;
        color: var(--bs-secondary-color);
        line-height: 1.4;
    }

    .custom-checklist {
        list-style: none;
        padding-left: 0;
        margin-bottom: 0;
    }

    .custom-checklist li {
        position: relative;
        padding-left: 1.75rem;
        margin-bottom: 0.65rem;
        line-height: 1.6;
        color: var(--bs-body-color);
    }

    .custom-checklist li::before {
        content: "•";
        position: absolute;
        left: 0.25rem;
        top: 0;
        font-size: 1.3rem;
        color: #0d6efd;
        line-height: 1.4;
    }

    .contact-info-list {
        line-height: 1.8;
        color: var(--bs-body-color);
    }

    /* Sticky Apply Footer Bar on Mobile / Desktop */
    .sticky-apply-bar {
        position: sticky;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 99;
        background-color: var(--bs-body-bg);
        border-top: 1px solid var(--bs-border-color);
        box-shadow: 0 -4px 16px rgba(0, 0, 0, 0.08);
        padding: 12px 24px;
    }

    @media (max-width: 768px) {
        .hero-banner-container {
            height: 180px;
            border-radius: 0;
        }

        .hero-slogan-en {
            font-size: 1.35rem;
        }

        .hero-slogan-th {
            font-size: 1rem;
        }

        .company-logo-badge {
            width: 80px;
            height: 80px;
            margin-top: -40px;
        }

        .content-card {
            padding: 20px 18px;
        }

        .job-header-card {
            padding: 18px 16px;
        }
    }
</style>';

$this->load->view('components/head', [
    'title' => $company['job_title'] . ' - ' . $company['title'],
    'extra_head' => $job_custom_css
]);
?>
<!--end::Head-->

<body class="layout-fixed fixed-header fixed-footer sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
        <!--begin::App Header-->
        <?php 
        $this->load->view('components/navbar', [
            'back_url'       => site_url('welcome/index'),
            'back_text'      => 'หน้าแรก',
            'show_apply_btn' => false
        ]); 
        ?>
        <!--end::App Header-->

        <!--begin::Main Content Container-->
        <main class="app-main">
            <div class="container py-4" style="max-width: 1040px;">

                <!-- 1. Hero Cover Banner Card -->
                <?php $this->load->view('components/hero_banner', ['company' => $company]); ?>

                <!-- 2. Job Overview Card -->
                <?php $this->load->view('components/job_header_card', ['company' => $company]); ?>

                <!-- 3. Company Overview / Introduction Paragraph -->
                <div class="content-card" id="job-details-section">
                    <p class="text-body mb-0" style="line-height: 1.85; text-align: justify;">
                        <?= nl2br(htmlspecialchars($company['about'])) ?>
                    </p>
                </div>

                <!-- 4. Job Responsibilities & Qualifications Section -->
                <?php $this->load->view('components/job_requirements_card', ['company' => $company]); ?>

                <!-- 5. Benefits & Welfare Section -->
                <?php $this->load->view('components/benefits_card', ['company' => $company]); ?>

                <!-- 6. Contact Information Section -->
                <?php $this->load->view('components/contact_card', ['company' => $company]); ?>

                <!-- 7. Call To Action Banner -->
                <?php $this->load->view('components/cta_banner'); ?>

            </div>
        </main>
        <!--end::Main Content Container-->

        <!--begin::App Footer-->
        <?php $this->load->view('components/footer'); ?>
        <!--end::App Footer-->
    </div>

    <!--begin::Scripts-->
    <?php $this->load->view('components/scripts'); ?>
    <!--end::Scripts-->
</body>

</html>