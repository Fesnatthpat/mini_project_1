<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลกลุ่มวิชา</title>
    <link rel="stylesheet" href="data-subject.css">
</head>
<body>

<div class="container">
    <h1>ข้อมูลกลุ่มวิชา</h1>
    
    <div class="form-group">
        <label for="subject-group">กลุ่มวิชา</label>
        <input type="text" id="subject-group" name="subject-group">
        <button type="button">บันทึกข้อมูล</button>
    </div>
    
    <table>
        <thead>
            <tr>
                <th>กลุ่มวิชา</th>
                <th>การจัดการ</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>คณิตศาสตร์</td>
                <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
            </tr>
            <tr>
                <td>วิทยาศาสตร์</td>
                <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
            </tr>
            <tr>
                <td>ภาษา</td>
                <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
            </tr>
            <tr>
                <td>สังคม</td>
                <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>
