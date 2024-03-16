<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab12 No.2 ✨</title>
</head>
<body>
    <?php
        $url = "http://10.0.15.21/lab/lab12/restapis/products.php";    
        $response = file_get_contents($url);
        $result = json_decode($response);

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            if (!isset($_GET['no']) || $_GET['no'] < 1 || $_GET['no'] > count($result)) {
                header('Refresh: 0; url=./?no=1');
            } else {
                $no = $_GET['no'];
                $product = $result[$no-1];
                echo "<div>";
                echo "<strong>ID: " . $product->ProductID . "</strong><br>";
                echo "Code: " . $product->ProductCode . "<br>";
                echo "Name: " . $product->ProductName . "<br>";
                echo "Description: " . $product->Description . "<br>";
                echo "Price: " . $product->UnitPrice . "<br>";
                echo "</div>";
            }
        }
    ?>
    <div>
        <a href="./?no=<?php echo $no-1 ?>"><button>ก่อนหน้า</button></a>
        <a href="./?no=<?php echo $no+1 ?>"><button>ถัดไป</button></a>
    </div>
</body>
</html>
