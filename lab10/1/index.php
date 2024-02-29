<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Lab10 No.1 ✨</title>
</head>

<body>
    <?php 
    include 'db.php';
    $res = $db->query("SELECT * FROM `customers`;"); 
    ?>
    <p class="text-center mt-lg-3 fw-bold" style="color: red;">***สำหรับเพื่อนๆ ที่เข้ามาลองเล่น เหลือข้อมูลไว้ให้อาจารย์กดลบด้วยครับ***</p>
    <table class="table w-75 mx-auto mb-5 ">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($row = $res->fetchArray(SQLITE3_ASSOC) ) {
                    echo "<tr>";
                    echo "<td>" . $row['CustomerId'] . "</td>";
                    echo "<td>" . $row['FirstName'] . " " . $row['LastName'] . "</td>";
                    echo "<td>" . $row['Address'] . "</td>";
                    echo "<td>" . $row['Phone'] . "</td>";
                    echo "<td>" . $row['Email'] . "</td>";
                    echo "</tr>";
                 }
            ?>
        </tbody>
    </table>
    <a href="./delete.php" style="position: fixed; bottom: 20px; right: 20px;"><button class="btn btn-danger">Delete</button></a>
</body>

</html>
