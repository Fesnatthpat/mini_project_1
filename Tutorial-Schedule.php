<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลนักเรียน</title>
    <link rel="stylesheet" href="Tutorial-Schedule.css">
</head>
<body>

<div class="container">
    <h1>ข้อมูลตารางสอนของคุณครู</h1>
    
    <div class="search-form">
        <div class="form-group">
            <label for="search-name">ภาคเรียนที่</label>
            <select id="search-level" name="search-level">
                <option value="">เลือกภาคเรียน</option>
                <option value="1">ม.1</option>
                <option value="2">ม.2</option>
                <option value="3">ม.3</option>
            </select>
        </div>
        <div class="form-group">
            <label for="search-level">ปีการศึกษา</label>
            <select id="search-level" name="search-level">
                <option value="">เลือกปีการศึกษา</option>
                <option value="1">ม.1</option>
                <option value="2">ม.2</option>
                <option value="3">ม.3</option>
            </select>
        </div>
        <div class="form-group">
            <button type="button">ค้นหา</button>
        </div>
    </div>
    
    <!-- <button class="add-student-button" onclick="window.location.href='add-student.php'">+ เพิ่มนักเรียน</button> -->
    
    <table>
        <thead>
            <tr>
                <th>รหัสประจำตัว</th>
                <th>ชื่อ-นามสกุล</th>
                <th>รูปถ่าย</th>
                <th>เบอร์โทร</th>
                <th>ระดับชั้น</th>
                <th>การจัดการ</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>S001</td>
                <td>ดช.มานะ เรียนดี</td>
                <td><img src="https://plus.unsplash.com/premium_photo-1675130119373-61ada6685d63?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="รูปถ่าย"></td>
                <td>081 123 4567</td>
                <td>ม.2</td>
                <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
            </tr>
            <tr>
                <td>S002</td>
                <td>ดญ.สวยงาม ศรีสง่า</td>
                <td><img src="https://plus.unsplash.com/premium_photo-1675130119373-61ada6685d63?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="รูปถ่าย"></td>
                <td>081 253 4785</td>
                <td>ม.3</td>
                <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
            </tr>
            <tr>
                <td>S003</td>
                <td>ดช.เลิศศักดิ์ สุขเกิน</td>
                <td><img src="https://plus.unsplash.com/premium_photo-1675130119373-61ada6685d63?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="รูปถ่าย"></td>
                <td>086 425 0054</td>
                <td>ม.1</td>
                <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
            </tr>
            <tr>
                <td>S003</td>
                <td>ดช.เลิศศักดิ์ สุขเกิน</td>
                <td><img src="https://plus.unsplash.com/premium_photo-1675130119373-61ada6685d63?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="รูปถ่าย"></td>
                <td>086 425 0054</td>
                <td>ม.1</td>
                <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
            </tr>
            
        </tbody>
    </table>
</div>

</body>
</html>
