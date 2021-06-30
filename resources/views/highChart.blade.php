<!DOCTYPE html>
<html>
<head>
    <title>Grafik User Bro Mobil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />    <title>Bro Mobil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>   
<style>
body{
    background-image: linear-gradient(#ccffff,white);
}
</style>
<body>
    <div class="container">
        <div>
          <a class="btn btn-primary mt-5 mb-5" href="{{ url()->previous() }}"><i class="fas fa-long-arrow-alt-left"></i>  Kembali</a>
        </div>
        {{ Breadcrumbs::render('charts') }}
        <h2 class="text-center"><strong>Grafik User Bro Mobil</strong></h2>
        <div id="hight-chart"></div>
    </div>
</body>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    var users =  <?php echo json_encode($users) ?>;
   
    Highcharts.chart('hight-chart', {
        title: {
            text: 'Tahun 2021'
        },
        subtitle: {
            text: 'Copyright Kelompok 3'
        },
         xAxis: {
            categories: ['Maret', 'Apr','Mei', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Des', 'Jan', 'Feb']
        },
        yAxis: {
            title: {
                text: 'Pertumbuhan Setiap Bulan User'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'User',
            data: users
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
});
</script>
</html>