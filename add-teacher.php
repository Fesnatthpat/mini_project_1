<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลนักเรียน</title>
    <link rel="stylesheet" href="add-teacher.css">
</head>

<body>

    <div class="form-container">
        <div class="box1">
            <div class="box2">
                <h1 class="text-teacher">ข้อมูลคุณครู</h1>
                <hr>
                <div>
                    <div class="form-group">
                        <label for="student-id">รหัสประจำตัว</label>
                        <input type="text" id="student-id" name="student-id">
                    </div>
                    <div class="form-group">
                        <label for="name">ชื่อ-นามสกุล</label>
                        <input type="text" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="phone">เบอร์โทร</label>
                        <input type="text" id="phone" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="level">กลุ่มวิชาที่สอน</label>
                        <select id="level" name="level">
                            <option value="">เลือกกลุ่มวิชา</option>
                            <option value="คณิตศาสตร์">คณิตศาสตร์</option>
                            <option value="วิทยาศาสตร์">วิทยาศาสตร์</option>
                            <option value="ภาษา">ภาษา</option>
                            <option value="สังคมศาสตร์">สังคมศาสตร์</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="photo">รูปถ่าย</label>
                        <input type="file" id="photo" name="photo">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password">
                    </div>
                    <div class="btn-con">
                        <div class="btn-submit">
                            <button  type="submit">บันทึกข้อมูล</button>
                        </div>
                        <div class="btn-out">
                            <button onclick="window.location.href='teacher.php'">ออก</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>