<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Teacher</title>
    <link rel="stylesheet" href="teacher.css">
</head>
<body>
    <!--  nav(Navigation)คำสั่งนี้เป็นบ่งชี้ของส่วนเมนู  -->
    <nav>
        <div class="logo"> <!--ใช้สำหรับการแสดงโลโก้มุมซ้ายบนของเว็บไซต์-->
            <a href="#">Datateacher</a>
        </div>
        <!-- ul class เป็นตัวกำหนดคลาสเฉพาะใส่ที่อยู่ใน ulที่มีหลายรายการจะครอบคลุมไปจนถึงบรรทัดที่24-->
        <ul class="menu"> 
            <li><a href="#">ข้อมูลคุณครู</a></li>
            <li><a href="#">ข้อมูลนักเรียน</a></li>
            <li><a href="#">ข้อมูลรายวิชา</a></li>
            <li><a href="#">ข้อมูลห้องเรียน</a></li>
            <li><a href="#">ข้อมูลตาราสอง</a></li>
            <li><a href="#">ข้อมูลกลุ่มวิชา</a></li>
            <li><a href="#">ข้อมูลอาคารเรียน</a></li>
        </ul>
    </nav>
    
    <!--div class="container"> ใช้สำหรับจัดกลุ่มเนื้อหาทั้งหมดให้อยู่ภายใน container นี้ ซึ่งจะมีการจัดรูปแบบโดยใช้ CSS เป็นการจัดรูปแบบ-->
    <div class="container">   
        <form action="#" method="post"> <!-- ใช้สำหรับรับข้อมูลจากผู้ใช้ โดยมีการกำหนดค่า action กับ methodเพื่อส่งข้อมูลไปยังเชิฟเวอร์-->
            <h1>ข้อมูลคุณครู</h1><br>
            <fieldset> <!--ใช้สำหรับจัดกลุ่มข้อมูลในฟอร์ม-->
                <legend>เพิ่ม/แก้ไขข้อมูลคุณครู</legend>
                <table>
                    <tr>
                        <td align="right">
                            <label for="id_teacher">รหัสประจำตัว</label>
                        </td>
                        <td>
                            <input type="text" name="id_teacher" id="id_teacher" size="15">
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <label for="fullname">ชื่อ-นามสกุล</label>
                        </td>
                        <td>
                            <input type="text" name="fullname" id="fullname" size="15">
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <label for="phone">เบอร์โทรศัพท์</label>
                        </td>
                        <td>
                            <input type="text" name="phone" id="phone" size="15">
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <label for="subject_group">กลุ่มวิชาที่สอน</label>
                        </td>
                        <td>
                            <input list="mylist" id="subject_group" name="subject_group">
                            <datalist id="mylist">
                                <option value="คณิตศาสตร์">
                                <option value="วิทยาศาสตร์">
                                <option value="ภาษา">
                                <option value="สังคมศาสตร์">
                            </datalist>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <label for="photo">รูปถ่าย</label>
                        </td>
                        <td>
                            <input type="file" name="photo" id="photo">
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <label for="username">Username</label>
                        </td>
                        <td>
                            <input type="text" name="username" id="username" size="15">
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <label for="password">Password</label>
                        </td>
                        <td>
                            <input type="password" name="password" id="password" size="15">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <button type="submit">บันทึกข้อมูล</button>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
</body>
</html>
