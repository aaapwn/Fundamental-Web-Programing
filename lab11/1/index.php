<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <style>
        body {
            font-family: "Kanit", sans-serif !important;
        }
    </style>
    <title>Lab11 No.1 ✨</title>
</head>
<body>
    <?php include 'db.php'; ?>
    <?php
        $id = '';
        $fname = '';
        $lname = '';
        $address = '';
        $email = '';
        $phone = '';
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $sql = "SELECT * FROM customers LIMIT 1";
            $res = $db->query($sql);
            $row = $res->fetchArray(SQLITE3_ASSOC);
            $id = $row['CustomerId'];
            $fname = $row['FirstName'];
            $lname = $row['LastName'];
            $address = $row['Address'];
            $email = $row['Email'];
            $phone = $row['Phone'];
        } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['save-data'])) {
                $id = '';
                $fname = '';
                $lname = '';
                $address = '';
                $email = '';
                $phone = '';
                $_SESSION['id'] = $_POST['id'];
                $_SESSION['fname'] = $_POST['fname'];
                $_SESSION['lname'] = $_POST['lname'];
                $_SESSION['address'] = $_POST['address'];
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['phone'] = $_POST['phone'];
            } else if (isset($_POST['load-data'])) {
                if (!isset($_SESSION['id'])) {
                    $sql = "SELECT * FROM customers LIMIT 1";
                    $res = $db->query($sql);
                    $row = $res->fetchArray(SQLITE3_ASSOC);
                    $id = $row['CustomerId'];
                    $fname = $row['FirstName'];
                    $lname = $row['LastName'];
                    $address = $row['Address'];
                    $email = $row['Email'];
                    $phone = $row['Phone'];
                    echo "<script>alert('No data saved in SESSION')</script>";
                } else {
                    $id = $_SESSION['id'];
                    $fname = $_SESSION['fname'];
                    $lname = $_SESSION['lname'];
                    $address = $_SESSION['address'];
                    $email = $_SESSION['email'];
                    $phone = $_SESSION['phone'];
                }
            } else if (isset($_POST['clear'])) {
                $id = '';
                $fname = '';
                $lname = '';
                $address = '';
                $email = '';
                $phone = '';
                session_unset();
            }
        }
    ?>
    <form action="index.php" method="post" class="w-50 mx-auto my-3">
        <div>
            <label for="name" class="form-label">ID</label>
            <input type="text" name="id" id="id" class="form-control" value="<?php echo $id ?>">
        </div>
        <div>
            <label for="fname" class="form-label">First Name</label>
            <input type="text" name="fname" id="fname" class="form-control" value="<?php echo $fname ?>">
        </div>
        <div>
            <label for="lname" class="form-label">Last Name</label>
            <input type="text" name="lname" id="lname" class="form-control" value="<?php echo $lname ?>">
        </div>
        <div>
            <label for="address" class="form-label">Address</label>
            <input type="text" name="address" id="address" class="form-control" value="<?php echo $address ?>">
        </div>
        <div>
            <label for="email" class="form-label">Email</label>
            <input type="text" name="email" id="email" class="form-control" value="<?php echo $email ?>">
        </div>
        <div>
            <label for="phone" class="form-label">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" value="<?php echo $phone ?>">
        </div>
        <div class="my-3">
            <button type="submit" class="btn btn-success" name="save-data">Save Data</button>
            <button type="submit" class="btn btn-primary" name="load-data">Load Data</button>
            <button type="submit" class="btn btn-danger" name="clear">Clear</button>
        </div>
    </form>
</body>
</html>