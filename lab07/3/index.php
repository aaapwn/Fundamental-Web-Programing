<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab7 No.3 ✨</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <style>
        body {
            font-family: "Kanit", sans-serif !important;
        }
    </style>
</head>

<body>
    <div class="w-100 min-vh-100 d-flex align-items-center  flex-column ">
        <h1>Member Registration</h1>
        <div class="w-50 ">
            <form method="post" class="row g-3">
                <div class="col-md-12">
                    <label for="name" class="form-label ">Name:</label>
                    <input type="text" id="name" name="name" required class="form-control">
                </div>
                <div class="col-md-12 ">
                    <label for="address" class="form-label ">Address:</label>
                    <textarea type="text" id="address" name="address" required class="form-control"></textarea>
                </div>
                <div class="col-md-4">
                    <label for="age" class="form-label ">Age:</label>
                    <input type="number" id="age" name="age" required class="form-control ">
                </div>
                <div class="col-md-4">
                    <label for="profession" class="form-label ">Profession:</label>
                    <input type="text" id="profession" name="profession" required class="form-control ">
                </div>
                <div class="col-md-4">
                    <label for="status" class="form-label  ">Resident status:</label>
                    <select id="status" name="status" required class="form-select ">
                        <option value="">-- เลือก --</option>
                        <option value="resident">Resident</option>
                        <option value="non-resident">Non-Resident</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
            </form>
        </div>

        <?php

        // ตรวจสอบข้อมูล
        $errors = [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (empty($_POST['name'])) {
                $errors['name'] = 'กรุณาป้อนชื่อของคุณ';
            } else if (strlen($_POST['name']) < 5) {
                $errors['name'] = 'ชื่อของคุณต้องยาวอย่างน้อย 5 ตัวอักษร';
            }

            if (empty($_POST['address'])) {
                $errors['address'] = 'กรุณาป้อนที่อยู่ของคุณ';
            } else if (strlen($_POST['address']) < 5) {
                $errors['address'] = 'ที่อยู่ของคุณต้องยาวอย่างน้อย 5 ตัวอักษร';
            }

            if (empty($_POST['age'])) {
                $errors['age'] = 'กรุณาป้อนอายุของคุณ';
            }

            if (empty($_POST['profession'])) {
                $errors['profession'] = 'กรุณาป้อนอาชีพของคุณ';
            } else if (strlen($_POST['profession']) < 5) {
                $errors['profession'] = 'อาชีพของคุณต้องยาวอย่างน้อย 5 ตัวอักษร';
            }

            if (empty($_POST['status'])) {
                $errors['status'] = 'กรุณาเลือกสถานะการอยู่อาศัยของคุณ';
            }

            // แสดงข้อผิดพลาด
            if ($errors) {
                echo '<ul>';
                foreach ($errors as $error) {
                    echo '<li style="color: red;">' . $error . '</li>';
                }
                echo '</ul>';
                echo '<br>';
            } else {
                // แสดงข้อมูล
                echo '<h1>ข้อมูลของคุณ</h1>';
                echo '<ul>';
                foreach ($_POST as $key => $value) {
                    echo '<li>' . $key . ': ' . $value . '</li>';
                }
                echo '</ul>';
            }
        }

        ?>
    </div>

</body>

</html>
