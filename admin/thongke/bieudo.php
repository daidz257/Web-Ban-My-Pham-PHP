<div class="row">
<script src="https://www.gstatic.com/charts/loader.js"></script>

<body>
<div
id="myChart" style="width:100%; max-width:600px; height:500px;">
</div>

<?php
$tongdm=count($listthongke);
$dataArray = [];
foreach ($listthongke as $thongke) {
    extract($thongke);
    $dataArray[] = [$thongke['tenloai'], $thongke['soluong']];
}
?>
<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

// Set Data
const data = google.visualization.arrayToDataTable([
  ['Contry', 'Mhl'],
  <?php
    foreach ($dataArray as $row) {
        echo "['" . $row[0] . "', " . $row[1] . "],";
    }
  ?>
]);

// Set Options
const options = {
  title: 'Biểu đồ thống kê',
  is3D: true
};

// Draw
const chart = new google.visualization.PieChart(document.getElementById('myChart'));
chart.draw(data, options);

}
</script>

</body>
