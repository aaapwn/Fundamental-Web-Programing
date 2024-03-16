<!DOCTYPE html>
<html lang="en">
<?php
// web service URL 
$url = "http://10.0.15.21/lab/lab12/restapis/products.php?list=10";  
// get data from web service
$response = json_decode(file_get_contents($url));
// convert to JSON
$dataPoints = array_map(function($element) {
    return array("label" => $element->ProductCode, "y" => $element->UnitPrice);
}, $response);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        window.onload = function () {
            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                title: {
                    text: "Price of Products"
                },
                axisY: {
                    title: "Unit Price (in THB)",
                    includeZero: true,
                    prefix: "",
                    suffix: ""
                },
                data: [{
                    type: "column",
                    yValueFormatString: "#,##0",
                    indexLabel: "{y}",
                    indexLabelPlacement: "inside",
                    indexLabelFontWeight: "bolder",
                    indexLabelFontColor: "white",
                    dataPoints: <?php echo json_encode($dataPoints); ?>
                }]
            });
            chart.render();
        }
    </script>
    <title>Lab12 No.3 ✨</title>
</head>

<body>
    <div id="chartContainer" style="height: 450px; width: 80%;"></div>
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>

</html>
