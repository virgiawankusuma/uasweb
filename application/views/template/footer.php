 
    <footer class="py-4 bg-transparent mt-auto">
      <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between small">
          <div class="text-muted ml-auto">Copyright &copy; Virgiawan <?php echo date("Y"); ?></div>
        </div>
      </div>
    </footer>

    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="https://startbootstrap.github.io/startbootstrap-sb-admin/dist/js/scripts.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <!-- <script type="text/javascript">
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#292b2c';

    // Area Chart Example
    var ctx = document.getElementById("myAreaChart");
    var myLineChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: [
        <?php foreach ($ikidata as $data => $d) {
          echo '"'.strtoupper($d->kecamatan).'", ';
        } ?>
        ],

        datasets: [{
        // label: "Pelaku Perjalanan",
        label: "PP",
        lineTension: 0.3,
        backgroundColor: "rgba(54, 162, 235, 0.2)",
        borderColor: "rgba(54, 162, 235, 1)",
        pointRadius: 5,
        pointBackgroundColor: "rgba(54, 162, 235, 1)",
        pointBorderColor: "rgba(255,255,255,0.8)",
        pointHoverRadius: 5,
        pointHitRadius: 50,
        pointBorderWidth: 2,
        data: [ 
        <?php foreach ($ikidata as $data => $d) {
          echo $d->pp.', ';
        } ?>
        ]}, 
        
        {
        // label: "Orang Dalam Pemantauan",
        label: "ODP",
        lineTension: 0.3,
        backgroundColor: "rgba(255, 236, 86, 0.2)",
        borderColor: "rgba(255, 236, 86, 1)",
        pointRadius: 5,
        pointBackgroundColor: "rgba(255, 236, 86, 1)",
        pointBorderColor: "rgba(255,255,255,0.8)",
        pointHoverRadius: 5,
        pointHitRadius: 50,
        pointBorderWidth: 2,
        data: [ 
        <?php foreach ($ikidata as $data => $d) {
          echo $d->odp.', ';
        } ?>
        ]}, 

        {
        // label: "Pasien Dalam Pengawasan",
        label: "PDP",
        lineTension: 0.3,
        backgroundColor: "rgba(255, 159, 64, 0.2)",
        borderColor: "rgba(255, 159, 64, 1",
        pointRadius: 5,
        pointBackgroundColor: "rgba(255, 159, 64, 1",
        pointBorderColor: "rgba(255,255,255,0.8)",
        pointHoverRadius: 5,
        pointHoverBackgroundColor: "rgba(255, 159, 64, 1",
        pointHitRadius: 50,
        pointBorderWidth: 2,
        data: [ 
        <?php foreach ($ikidata as $data => $d) {
          echo $d->pdp.', ';
        } ?>
        ]}, 

        {
        // label: "Orang Tanpa Gejala",
        label: "OTG",
        lineTension: 0.3,
        backgroundColor: "rgb(56, 51, 255, 0.2)",
        borderColor: "rgb(56, 51, 255, 1)",
        pointRadius: 5,
        pointBackgroundColor: "rgb(56, 51, 255, 1)",
        pointBorderColor: "rgba(255,255,255,0.8)",
        pointHoverRadius: 5,
        pointHitRadius: 50,
        pointBorderWidth: 2,
        data: [ 
        <?php foreach ($ikidata as $data => $d) {
          echo $d->otg.', ';
        } ?>
        ]},  

        {
        label: "Positif",
        lineTension: 0.3,
        backgroundColor: "rgba(255, 99, 132, 0.2)",
        borderColor: "rgba(255, 99, 132, 1)",
        pointRadius: 5,
        pointBackgroundColor: "rgba(255, 99, 132, 1)",
        pointBorderColor: "rgba(255,255,255,0.8)",
        pointHoverRadius: 5,
        pointHitRadius: 50,
        pointBorderWidth: 2,
        data: [ 
        <?php foreach ($ikidata as $data => $d) {
          echo $d->positif.', ';
        } ?>
        ]}, 

        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          xAxes: [{
            time: {
              unit: 'date'
            },
            gridLines: {
              display: false
            },
            ticks: {
            }
          }],

          yAxes: [{
            ticks: {
              min: 0,
            },
            gridLines: {
              color: "rgba(0, 0, 0, .125)",
            }
          }],
        },

        legend: {
          display: true
        }
      }
    });
  </script> -->
  <script type="text/javascript">
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#292b2c';

    // Bar chart
    var ctx = document.getElementById("myAreaChart");
    var myLineChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [
        <?php foreach ($ikidata as $data => $d) {
          echo '"'.strtoupper($d->kecamatan).'", ';
        } ?>
        ],

        datasets: [{
        // label: "Pelaku Perjalanan",
        label: "PP",
        backgroundColor: "rgba(54, 162, 235, 0.2)",
        borderColor: "rgba(54, 162, 235, 1)",
        borderWidth: 1,
        data: [ 
        <?php foreach ($ikidata as $data => $d) {
          echo $d->pp.', ';
        } ?>
        ]}, 
        
        {
        // label: "Orang Dalam Pemantauan",
        label: "ODP",
        backgroundColor: "rgba(255, 236, 86, 0.2)",
        borderColor: "rgba(255, 236, 86, 1)",
        borderWidth: 1,
        data: [ 
        <?php foreach ($ikidata as $data => $d) {
          echo $d->odp.', ';
        } ?>
        ]}, 

        {
        // label: "Pasien Dalam Pengawasan",
        label: "PDP",
        backgroundColor: "rgba(255, 159, 64, 0.2)",
        borderColor: "rgba(255, 159, 64, 1)",
        borderWidth: 1,
        data: [ 
        <?php foreach ($ikidata as $data => $d) {
          echo $d->pdp.', ';
        } ?>
        ]}, 

        {
        // label: "Orang Tanpa Gejala",
        label: "OTG",
        backgroundColor: "rgb(56, 51, 255, 0.2)",
        borderColor: "rgb(56, 51, 255, 1)",
        borderWidth: 1,
        data: [ 
        <?php foreach ($ikidata as $data => $d) {
          echo $d->otg.', ';
        } ?>
        ]},  

        {
        label: "Positif",
        backgroundColor: "rgba(255, 99, 132, 0.2)",
        borderColor: "rgba(255, 99, 132, 1)",
        borderWidth: 1,
        data: [ 
        <?php foreach ($ikidata as $data => $d) {
          echo $d->positif.', ';
        } ?>
        ]}, 

        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          xAxes: [{
            time: {
              unit: 'date'
            },
            gridLines: {
              display: true
            },
            ticks: {
            }
          }],

          yAxes: [{
            ticks: {
              min: 0,
            },
            gridLines: {
              color: "rgba(0, 0, 0, .125)",
            }
          }],
        },

        legend: {
          display: true
        }
      }
    });
  </script>

  <!-- datatables -->
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
  <script src="https://startbootstrap.github.io/startbootstrap-sb-admin/dist/assets/demo/datatables-demo.js"></script>

  <!-- sweetalert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
  <script type="text/javascript" src="<?= base_url('assets') ;?>/script.js"></script>
</body>
</html>