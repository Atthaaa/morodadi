<div class="container">
  <h5>Selamat datang admin Radiator Morodadi</h5>
  <p class="lead">
    Melalui panel ini anda dapat mengelola service dan penjualan produk yang terjadi
  </p>

  <div id="grafik-member-distrik"></div>
</div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script>
Highcharts.chart('grafik-member-distrik', {
  chart: {
    type: 'pie'
  },
  title: {
    text: 'Jumlah Member Berdasarkan Distrik'
  },
  tooltip: {
    valueSuffix: ' orang'
  },
  plotOptions: {
    series: {
      allowPointSelect: true,
      cursor: 'pointer',
      dataLabels: [{
        enabled: true,
        distance: 20
      }, {
        enabled: true,
        distance: -40,
        format: '{point.percentage:.1f}%',
        style: {
          fontSize: '1.2em',
          textOutline: 'none',
          opacity: 0.7
        },
        filter: {
          operator: '>',
          property: 'percentage',
          value: 10
        }
      }]
    }
  },
  series: [{
    name: 'Jumlah',
    colorByPoint: true,
    data: [
      <?php foreach ($jumlah_member_distrik as $key => $value) : ?> {
        name: '<?php echo $value["nama_distrik_member"] ?>',
        y: <?php echo $value["jumlah"] ?>
      },
      <?php endforeach; ?>

    ]
  }]
});
</script>