<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Visin Google Charts</title>
<link rel="stylesheet" href="<?php echo base_url('vendor/css/'); ?>uikit.css">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>    
<script type="text/javascript">
  // Mengambil API visualisasi.
  google.charts.load('current', {'packages':['corechart']});
  // Memanggil fungsi drawChart()
  google.charts.setOnLoadCallback(drawChart);
  // Menentukan data yang akan ditampilkan
  function drawChart() {
    // Membuat data tabel
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Topping');
    data.addColumn('number', 'Slices');
    data.addRows([
      ['Mushrooms', 3],
      ['Onions', 1],
      ['Olives', 1],
      ['Zucchini', 1],
      ['Pepperoni', 2]
    ]);
    // Tentukan pengaturan chart
    var options = {'title':'How Much Pizza I Ate Last Night',
                   'width':400,
                   'height':300};
    // Gambar chart kedalam elemen dengan id 'diagram-pie' yang ada dalam body
    var chart = new google.visualization.PieChart(document.getElementById('diagram-pie'));
    chart.draw(data, options);
  }
</script>   
</head>
<body>
<div class="uk-flex uk-flex-column uk-flex-middle uk-flex-center uk-height-viewport" style="background-color:#ccc; height:300px;">
<div id="diagram-pie"></div>
</div>
<script src="<?php echo base_url('vendor/js/'); ?>uikit.js"></script>
</body>
</html>