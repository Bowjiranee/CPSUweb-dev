<?php

use Illuminate\Database\Seeder;

class DocumentTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('document')->delete();
        
        \DB::table('document')->insert(array (
            0 => 
            array (
                'id' => 1,
                'file' => 36,
                'name' => 'มศก.1',
                'slug' => 'มศก.1',
                'description' => 'คำร้องทั่วไป',
                'category' => 'แบบฟอร์มทั่วไป',
                'status' => 'show',
                'created_at' => '2017-08-18 21:33:25',
                'updated_at' => '2017-08-18 21:33:25',
            ),
            1 => 
            array (
                'id' => 2,
                'file' => 37,
                'name' => 'มศก.2',
                'slug' => 'มศก.2',
                'description' => 'คำร้องขอหนังสือสำคัญ',
                'category' => 'แบบฟอร์มทั่วไป',
                'status' => 'show',
                'created_at' => '2017-08-18 21:34:13',
                'updated_at' => '2017-08-18 21:34:13',
            ),
            2 => 
            array (
                'id' => 3,
                'file' => 38,
                'name' => 'มศก.3',
                'slug' => 'มศก.3',
            'description' => 'ใบมอบฉันทะ (กรณีรับเงินแทน)',
                'category' => 'แบบฟอร์มทั่วไป',
                'status' => 'show',
                'created_at' => '2017-08-18 21:35:49',
                'updated_at' => '2017-08-18 21:51:37',
            ),
            3 => 
            array (
                'id' => 4,
                'file' => 39,
                'name' => 'มศก.4',
                'slug' => 'มศก.4',
                'description' => 'คําร้องขอลงทะเบียน / เพิ่ม / ถอน ช้าเป็นกรณีพิเศษ',
                'category' => 'แบบฟอร์มทั่วไป',
                'status' => 'show',
                'created_at' => '2017-08-18 21:36:48',
                'updated_at' => '2017-08-18 21:36:48',
            ),
            4 => 
            array (
                'id' => 5,
                'file' => 40,
                'name' => 'มศก.5',
                'slug' => 'มศก.5',
                'description' => 'คําร้องขอลงทะเบียนหน่วยกิตน้อยกว่าหรือมากกว่าเกณฑ์',
                'category' => 'แบบฟอร์มทั่วไป',
                'status' => 'show',
                'created_at' => '2017-08-18 21:39:18',
                'updated_at' => '2017-08-18 21:39:18',
            ),
            5 => 
            array (
                'id' => 6,
                'file' => 41,
                'name' => 'มศก.6',
                'slug' => 'มศก.6',
            'description' => 'บัตรถอนรายวิชา(ติด W)',
                'category' => 'แบบฟอร์มทั่วไป',
                'status' => 'show',
                'created_at' => '2017-08-18 21:40:26',
                'updated_at' => '2017-08-18 21:40:26',
            ),
            6 => 
            array (
                'id' => 7,
                'file' => 42,
                'name' => 'มศก.7',
                'slug' => 'มศก.7',
                'description' => 'คำร้องขอลาพักการศึกษา',
                'category' => 'แบบฟอร์มทั่วไป',
                'status' => 'show',
                'created_at' => '2017-08-18 21:41:30',
                'updated_at' => '2017-08-18 21:41:30',
            ),
            7 => 
            array (
                'id' => 8,
                'file' => 43,
                'name' => 'มศก.8',
                'slug' => 'มศก.8',
                'description' => 'คำร้องขอกลับเข้าศึกษา',
                'category' => 'แบบฟอร์มทั่วไป',
                'status' => 'show',
                'created_at' => '2017-08-18 21:42:34',
                'updated_at' => '2017-08-18 21:42:34',
            ),
            8 => 
            array (
                'id' => 9,
                'file' => 44,
                'name' => 'มศก.9',
                'slug' => 'มศก.9',
                'description' => 'คำร้องขอสำเร็จการศึกษาระดับปริญญาบัณฑิต และอนุปริญญา',
                'category' => 'แบบฟอร์มทั่วไป',
                'status' => 'show',
                'created_at' => '2017-08-18 21:44:03',
                'updated_at' => '2017-08-18 21:44:03',
            ),
            9 => 
            array (
                'id' => 10,
                'file' => 45,
                'name' => 'มศก.10',
                'slug' => 'มศก.10',
                'description' => 'คำร้องขอเข้ารับพระราชทานปริญญาบัตรที่ไม่ตรงปีการศึกษาที่สำเร็จ',
                'category' => 'แบบฟอร์มทั่วไป',
                'status' => 'show',
                'created_at' => '2017-08-18 21:45:20',
                'updated_at' => '2017-08-18 21:45:20',
            ),
            10 => 
            array (
                'id' => 11,
                'file' => 46,
                'name' => 'มศก.11',
                'slug' => 'มศก.11',
                'description' => 'คำร้องขอลาออกจากการเป็นนักศึกษา มหาวิทยาลัยศิลปากร',
                'category' => 'แบบฟอร์มทั่วไป',
                'status' => 'show',
                'created_at' => '2017-08-18 21:46:16',
                'updated_at' => '2017-08-18 21:46:16',
            ),
            11 => 
            array (
                'id' => 12,
                'file' => 47,
                'name' => 'มศก.12',
                'slug' => 'มศก.12',
            'description' => 'คำร้องขอรับคืนเงินค่าประกันของเสียหาย (สำหรับนักศึกษาวังท่าพระ)',
                'category' => 'แบบฟอร์มทั่วไป',
                'status' => 'show',
                'created_at' => '2017-08-18 21:47:46',
                'updated_at' => '2017-08-18 21:47:46',
            ),
            12 => 
            array (
                'id' => 13,
                'file' => 48,
                'name' => 'มศก.13',
                'slug' => 'มศก.13',
            'description' => 'คำร้องขอรับคืนเงินค่าประกันของเสียหาย (สำหรับนักศึกษาวิทยาเขตพระราชวังสนามจันทร์)',
                'category' => 'แบบฟอร์มทั่วไป',
                'status' => 'show',
                'created_at' => '2017-08-18 21:49:07',
                'updated_at' => '2017-08-18 21:49:07',
            ),
            13 => 
            array (
                'id' => 14,
                'file' => 49,
                'name' => 'มศก.14',
                'slug' => 'มศก.14',
            'description' => 'คำร้องขอรับคืนเงินค่าประกันของเสียหาย (สำหรับนักศึกษาวิทยาเขตสารสนเทศเพชรบุรี)',
                'category' => 'แบบฟอร์มทั่วไป',
                'status' => 'show',
                'created_at' => '2017-08-18 21:50:27',
                'updated_at' => '2017-08-18 21:50:27',
            ),
            14 => 
            array (
                'id' => 15,
                'file' => 50,
                'name' => 'มศก.15',
                'slug' => 'มศก.15',
            'description' => 'ใบมอบฉันทะ (กรณีรับเอกสารแทน)',
                'category' => 'แบบฟอร์มทั่วไป',
                'status' => 'show',
                'created_at' => '2017-08-18 21:52:25',
                'updated_at' => '2017-08-18 21:52:25',
            ),
            15 => 
            array (
                'id' => 16,
                'file' => 51,
                'name' => 'มศก.16',
                'slug' => 'มศก.16',
                'description' => 'คำร้องขอโอนสังกัดคณะ',
                'category' => 'แบบฟอร์มทั่วไป',
                'status' => 'show',
                'created_at' => '2017-08-18 21:53:17',
                'updated_at' => '2017-08-18 21:53:17',
            ),
            16 => 
            array (
                'id' => 17,
                'file' => 52,
                'name' => 'มศก.17',
                'slug' => 'มศก.17',
                'description' => 'คำร้องขอสละสิทธิ์การเป็นนักศึกษา',
                'category' => 'แบบฟอร์มทั่วไป',
                'status' => 'show',
                'created_at' => '2017-08-18 21:54:08',
                'updated_at' => '2017-08-18 21:54:08',
            ),
            17 => 
            array (
                'id' => 18,
                'file' => 53,
                'name' => 'มศก.18',
                'slug' => 'มศก.18',
                'description' => 'ใบสมัครเข้าเป็นนักศึกษาพิเศษ',
                'category' => 'แบบฟอร์มทั่วไป',
                'status' => 'show',
                'created_at' => '2017-08-18 21:55:01',
                'updated_at' => '2017-08-18 21:55:01',
            ),
            18 => 
            array (
                'id' => 19,
                'file' => 54,
                'name' => 'CP00R',
                'slug' => 'CP00R',
                'description' => 'แบบคำร้องขอเข้ารับการจัดสรรกลุ่มสำหรับการจัดทำโครงงานปริญญานิพนธ์',
            'category' => 'แบบฟอร์มโครงงานปริญญานิพนธ์(1)',
                'status' => 'show',
                'created_at' => '2017-08-18 22:02:57',
                'updated_at' => '2017-08-19 01:30:14',
            ),
            19 => 
            array (
                'id' => 20,
                'file' => 55,
                'name' => 'CP00X',
                'slug' => 'CP00X',
                'description' => 'แบบแจ้งความประสงค์แลกเปลี่ยนกลุ่มโครงงานปริญญานิพนธ์',
            'category' => 'แบบฟอร์มโครงงานปริญญานิพนธ์(1)',
                'status' => 'show',
                'created_at' => '2017-08-18 22:04:04',
                'updated_at' => '2017-08-18 22:04:04',
            ),
            20 => 
            array (
                'id' => 21,
                'file' => 56,
                'name' => 'CS00G',
                'slug' => 'CS00G',
            'description' => 'แบบขอตรวจสอบคุณสมบัติในการมีสิทธิขอจัดทําโครงงานปริญญานิพนธ์ (สาขาวิชาวิทยาการคอมพิวเตอร์) (หลักสูตร 51)',
            'category' => 'แบบฟอร์มโครงงานปริญญานิพนธ์(1)',
                'status' => 'show',
                'created_at' => '2017-08-18 22:06:15',
                'updated_at' => '2017-08-18 22:06:15',
            ),
            21 => 
            array (
                'id' => 22,
                'file' => 57,
                'name' => 'CS00G-55',
                'slug' => 'CS00G-55',
            'description' => 'แบบขอตรวจสอบคุณสมบัติในการมีสิทธิขอจัดทําโครงงานปริญญานิพนธ์ (สาขาวิชาวิทยาการคอมพิวเตอร์) (หลักสูตร 55)',
            'category' => 'แบบฟอร์มโครงงานปริญญานิพนธ์(1)',
                'status' => 'show',
                'created_at' => '2017-08-18 22:07:01',
                'updated_at' => '2017-08-18 22:07:01',
            ),
            22 => 
            array (
                'id' => 23,
                'file' => 58,
                'name' => 'IT00G',
                'slug' => 'IT00G',
            'description' => 'แบบขอตรวจสอบคุณสมบัติในการมีสิทธิขอจัดทําโครงงานปริญญานิพนธ์ (สาขาวิชาเทคโนโลยีสารสนเทศ) (หลักสูตร 51)',
            'category' => 'แบบฟอร์มโครงงานปริญญานิพนธ์(1)',
                'status' => 'show',
                'created_at' => '2017-08-18 22:08:19',
                'updated_at' => '2017-08-18 22:08:19',
            ),
            23 => 
            array (
                'id' => 24,
                'file' => 59,
                'name' => 'IT00G-55',
                'slug' => 'IT00G-55',
            'description' => 'แบบขอตรวจสอบคุณสมบัติในการมีสิทธิขอจัดทําโครงงานปริญญานิพนธ์ (สาขาวิชาเทคโนโลยีสารสนเทศ) (หลักสูตร 55)',
            'category' => 'แบบฟอร์มโครงงานปริญญานิพนธ์(1)',
                'status' => 'show',
                'created_at' => '2017-08-18 22:09:07',
                'updated_at' => '2017-08-18 22:09:07',
            ),
            24 => 
            array (
                'id' => 25,
                'file' => 60,
                'name' => 'CS01S/IT01S',
                'slug' => 'CS01S/IT01S',
                'description' => 'แบบคําร้องขอเสนอหัวข้อโครงงานปริญญานิพนธ์',
            'category' => 'แบบฟอร์มโครงงานปริญญานิพนธ์(1)',
                'status' => 'show',
                'created_at' => '2017-08-18 22:10:11',
                'updated_at' => '2017-08-19 01:51:12',
            ),
            25 => 
            array (
                'id' => 26,
                'file' => 61,
                'name' => 'CS01D/IT01D Template',
                'slug' => 'CS01D/IT01D-Template',
                'description' => 'ไฟล์ต้นแบบเอกสารประกอบการเสนอหัวข้อโครงงานปริญญานิพนธ์',
            'category' => 'แบบฟอร์มโครงงานปริญญานิพนธ์(1)',
                'status' => 'show',
                'created_at' => '2017-08-18 22:11:33',
                'updated_at' => '2017-08-19 01:50:56',
            ),
            26 => 
            array (
                'id' => 27,
                'file' => 62,
                'name' => 'CS01D/IT01D Example',
                'slug' => 'CS01D/IT01D-Example',
                'description' => 'ตัวอย่างเอกสารประกอบการเสนอหัวข้อโครงงานปริญญานิพนธ์',
            'category' => 'แบบฟอร์มโครงงานปริญญานิพนธ์(1)',
                'status' => 'show',
                'created_at' => '2017-08-18 22:12:22',
                'updated_at' => '2017-08-19 01:50:36',
            ),
            27 => 
            array (
                'id' => 28,
                'file' => 63,
                'name' => 'CS02S/IT02S',
                'slug' => 'CS02S/IT02S',
                'description' => 'แบบคําร้องขอสอบข้อเสนอโครงงานปริญญานิพนธ์',
            'category' => 'แบบฟอร์มโครงงานปริญญานิพนธ์(1)',
                'status' => 'show',
                'created_at' => '2017-08-18 22:13:13',
                'updated_at' => '2017-08-19 01:50:10',
            ),
            28 => 
            array (
                'id' => 29,
                'file' => 64,
                'name' => 'CS02D/IT02D Template',
                'slug' => 'CS02D/IT02D-Template',
                'description' => 'ไฟล์ต้นแบบเอกสารประกอบการสอบข้อเสนอโครงงานปริญญานิพนธ์',
            'category' => 'แบบฟอร์มโครงงานปริญญานิพนธ์(1)',
                'status' => 'show',
                'created_at' => '2017-08-18 22:14:22',
                'updated_at' => '2017-08-19 01:49:54',
            ),
            29 => 
            array (
                'id' => 30,
                'file' => 65,
                'name' => 'CS02R/IT02R',
                'slug' => 'CS02R/IT02R',
                'description' => 'แบบประเมินผลการสอบข้อเสนอโครงงานปริญญานิพพนธ์',
            'category' => 'แบบฟอร์มโครงงานปริญญานิพนธ์(1)',
                'status' => 'show',
                'created_at' => '2017-08-18 22:15:54',
                'updated_at' => '2017-08-19 01:49:38',
            ),
            30 => 
            array (
                'id' => 31,
                'file' => 66,
                'name' => 'CS03S/IT03S',
                'slug' => 'CS03S/IT03S',
                'description' => 'แบบคําร้องขอสอบติดตามความก้าวหน้าโครงงานปริญญานิพนธ์',
            'category' => 'แบบฟอร์มโครงงานปริญญานิพนธ์(2)',
                'status' => 'hide',
                'created_at' => '2017-08-18 22:47:15',
                'updated_at' => '2017-08-19 01:49:26',
            ),
            31 => 
            array (
                'id' => 32,
                'file' => 67,
                'name' => 'CS03D/IT03D Template',
                'slug' => 'CS03D/IT03D-Template',
                'description' => 'ไฟล์ต้นแบบเอกสารประกอบการสอบติดตามความก้าวหน้าโครงงานปริญญานิพนธ์',
            'category' => 'แบบฟอร์มโครงงานปริญญานิพนธ์(2)',
                'status' => 'show',
                'created_at' => '2017-08-19 01:42:27',
                'updated_at' => '2017-08-19 01:49:12',
            ),
            32 => 
            array (
                'id' => 33,
                'file' => 68,
                'name' => 'CS03R/IT03R',
                'slug' => 'CS03R/IT03R',
                'description' => 'แบบประเมินผลการสอบติดตามความก้าวหน้าโครงงานปริญญานิพนธ์',
            'category' => 'แบบฟอร์มโครงงานปริญญานิพนธ์(2)',
                'status' => 'show',
                'created_at' => '2017-08-19 01:44:04',
                'updated_at' => '2017-08-19 01:44:04',
            ),
            33 => 
            array (
                'id' => 34,
                'file' => 69,
                'name' => 'CS04S/IT04S',
                'slug' => 'CS04S/IT04S',
                'description' => 'แบบคำร้องขอสอบนำเสนอโครงงานปริญญานิพนธ์ที่เสร็จสมบูรณ์',
            'category' => 'แบบฟอร์มโครงงานปริญญานิพนธ์(2)',
                'status' => 'show',
                'created_at' => '2017-08-19 01:44:53',
                'updated_at' => '2017-08-19 01:44:53',
            ),
            34 => 
            array (
                'id' => 35,
                'file' => 70,
                'name' => 'CS04D/IT04D Template',
                'slug' => 'CS04D/IT04D-Template',
                'description' => 'ไฟล์ต้นแบบเอกสารประกอบการสอบโครงงานปริญญานิพนธ์ที่เสร็จสมบูรณ์',
            'category' => 'แบบฟอร์มโครงงานปริญญานิพนธ์(2)',
                'status' => 'show',
                'created_at' => '2017-08-19 01:45:40',
                'updated_at' => '2017-08-19 01:48:56',
            ),
            35 => 
            array (
                'id' => 36,
                'file' => 71,
                'name' => 'CS04R/IT04R',
                'slug' => 'CS04R/IT04R',
                'description' => 'แบบประเมินผลการสอบนำเสนอโครงงานปริญญานิพนธ์ที่เสร็จสมบูรณ์',
            'category' => 'แบบฟอร์มโครงงานปริญญานิพนธ์(2)',
                'status' => 'show',
                'created_at' => '2017-08-19 01:46:22',
                'updated_at' => '2017-08-19 01:46:22',
            ),
            36 => 
            array (
                'id' => 37,
                'file' => 72,
                'name' => 'CS05D/IT05D Template',
                'slug' => 'CS05D/IT05D-Template',
                'description' => 'ไฟล์ต้นแบบเอกสารโครงงานปริญญานิพนธ์ที่เสร็จสมบูรณ์',
            'category' => 'แบบฟอร์มโครงงานปริญญานิพนธ์(2)',
                'status' => 'show',
                'created_at' => '2017-08-19 01:46:57',
                'updated_at' => '2017-08-19 01:48:39',
            ),
            37 => 
            array (
                'id' => 38,
                'file' => 73,
                'name' => 'CS05D/IT05D CD Template',
                'slug' => 'CS05D/IT05D-CD-Template',
                'description' => 'ไฟล์ต้นแบบแผ่นหน้าปกซีดีโครงงานปริญญานิพนธ์ที่เสร็จสมบูรณ์',
            'category' => 'แบบฟอร์มโครงงานปริญญานิพนธ์(2)',
                'status' => 'show',
                'created_at' => '2017-08-19 01:47:50',
                'updated_at' => '2017-08-19 01:47:50',
            ),
            38 => 
            array (
                'id' => 39,
                'file' => 74,
                'name' => 'CS05C/IT05C',
                'slug' => 'CS05C/IT05C',
                'description' => 'แบบฟอร์มการส่งตรวจรูปแบบเล่มโครงงานปริญญานิพนธ์',
            'category' => 'แบบฟอร์มโครงงานปริญญานิพนธ์(2)',
                'status' => 'show',
                'created_at' => '2017-08-19 01:48:27',
                'updated_at' => '2017-08-19 01:48:27',
            ),
        ));
        
        
    }
}