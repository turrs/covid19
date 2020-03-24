
<!doctype html>
<html lang="en">
  <head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<?php
    ?>
<body>
<h4>Grafik Perkembangan Jumlah Perda & Pergub Pertahun</h4>
<canvas id="canvas"></canvas>

    <script>
var url ="https://api.kawalcorona.com/indonesia/provinsi"
var dataidprovinsi = $.post('', { url: url }, function(data) {
    document.getElementById('somediv').innerHTML = data;        
});
var idprovinsi = JSON.parse(dataidprovinsi);
var labels = idprovinsi.jsonarray.map(function(e) {
   return e.e.Provinsi;
});
var data = idprovinsi.jsonarray.map(function(e) {
   return e.e.Kasus_Posi;
});;
var ctx = canvas.getContext('2d');
var config = {
   type: 'Bar',
   data: {
      labels: labels,
      datasets: [{
         label: 'Bar',
         data: data,
         backgroundColor: 'rgba(0, 119, 204, 0.3)'
      }]
   }
};
var chart = new Chart(ctx, config);
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
</body>
</html>













