 
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.0.0-alpha/Chart.js"></script>d
  <script type="text/javascript">
    // Bar chart
    var ctx = document.getElementById("myChart");
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
  <script type="text/javascript">
    $(document).ready(function() {
      $('#dataTable').DataTable();
    });
  </script>

  <!-- sweetalert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script type="text/javascript" src="<?= base_url('assets') ;?>/script.js"></script>
</body>
</html>