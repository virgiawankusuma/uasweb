<!DOCTYPE html>
<html lang="id">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- datatables -->
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />

    <!-- fa -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

    <style type="text/css">
      h2{
        font-size: 1.5rem;
      }
      @media (min-width: 992px){
        h2{
          font-size: 2rem;
        }
      }
    </style>
    <title><?= $judul ;?></title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
      <a class="navbar-brand ml-3" href="#">
        <img src="https://corona.jepara.go.id/assets/logo/jepara.png" height="35" class="d-inline-block align-top" loading="lazy"><span class="ml-3 font-weight-bold text-light" style="text-shadow: 0px 0px 4px rgba(0,0,0,0.8);"><?= $judul ;?></span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link ml-3 mr-3 text-uppercase" href="#">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link ml-3 mr-3 text-uppercase" href="#info">Informasi</a>
          <a class="nav-item nav-link ml-3 mr-3 text-uppercase" href="#monioring">Monitoring Data</a>
          <a class="nav-item nav-link ml-3 mr-3 text-uppercase" href="<?= base_url('login') ;?>">Dashboard</a>
        </div>
      </div>
    </nav>

    <div class="jumbotron text-center">
      <div class="row">
        <div class="col">
          <img src="https://corona.jepara.go.id/assets/logo/logo_gugus.png" style="max-width: 500px; width: 100%">
        </div>
      </div>
      <div class="row mt-5 justify-content-center">
        <div class="col-10">
          <div class="row">
            <div class="col-xl m-2">
              <div class="card shadow">
                <div class="card-body">
                  <h6 class="card-title font-weight-bold">HOTLINE JEPARA TANGGAP <span class="text-danger">COVID-19</span></h6>
                  <p class="text-muted small pb-3">Hubungi hotline dibawah ini jika anda membutuhkannya</p>
                  <a href="tel:+6281222616119" class="btn btn-block btn-success">
                    <div class="row">
                      <div class="col text-left">
                        <i class="fas fa-phone" style="transform: scaleX(-1);"></i> Hotline 1
                      </div>
                      <div class="col text-right small">Layanan Gawat Darurat</div>
                    </div>
                  </a>
                  <a href="tel:+6281326183000" class="btn btn-block btn-success">
                    <div class="row">
                      <div class="col text-left">
                        <i class="fas fa-phone" style="transform: scaleX(-1);"></i> Hotline 2
                      </div>
                      <div class="col text-right small">Layanan Informasi COVID-19</div>
                    </div>
                  </a>
                </div>
              </div>
            </div>

            <div class="col-xl m-2">
              <div class="card shadow">
                <div class="card-body">
                  <h6 class="card-title font-weight-bold">CEK KONDISI ANDA : <p>DETEKSI MANDIRI CEPAT COVID-19</p></h6>
                  <p class="text-muted small">
                    Deteksi Mandiri Cepat COVID-19 adalah salah satu cara untuk mengetahi apakah Anda memiliki gejala yang memerlukan pemeriksaan dan pengujian lebih lanjut mengenai COVID-19 atau tidak.
                  </p>
                  <a href="https://corona.jatengprov.go.id/screening" class="btn btn-block btn-danger">Deteksi Sekarang</a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="container justify-content-center col-lg-10">
      <h2 class="justify-content-center text-center text-uppercase mb-5 pt-5" id="info">informasi tentang covid-19</h2>
      <div class="accordion pb-5 mb-5" id="accordionExample">

        <div class="card">
          <div class="card-header" id="headingZero">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseZero" aria-expanded="true" aria-controls="collapseZero">
                Apa itu COVID-19
              </button>
            </h2>
          </div>
          <div id="collapseZero" class="collapse show" aria-labelledby="headingZero" data-parent="#accordionExample">
            <div class="card-body">
              <ol>
                <li>Corona Virus Disease 2019 atau yang biasa disingkat COVID-19 adalah penyakit menular yang disebabkan oleh SARS-CoV-2, salah satu jenis koronavirus. Penderita COVID-19 dapat mengalami demam, batuk kering, dan kesulitan bernafas.</li>
              </ol>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Apa itu PP (Pelaku Perjalanan)?
              </button>
            </h2>
          </div>
          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              <ol>
                <li>Seseorang yang melakukan perjalanan dari Negara/Wilayah TERJANKIT COVID-19. (Melaporkan kasus konfirmasi COVID-19 tetapi bukan Transmisi Lokal).</li>
                <li>Seseorang yang melakukan perjalanan dari Negara/Wilayah DENGAN Transmisi Lokal COVID-19.</li>
              </ol>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Apa itu ODP (Orang Dalam Pemantauan)?
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              <ol>
                <li>
                  Orang dengan gejala demam (>=38°C) ATAU riwayat demam ATAU gejala gangguan sistem pernafasan seperti pilek/sakit tenggorokan/batuk DAN tidak ada penyebab lain berdasarkan gambaran klinis yang menyakinkan DAN pada 14 hari terakhir sebelum timbul gejala memiliki riwayat perjalanan/tinggal di negara/wilayah yang melaporkan transmisi lokal
                </li>
                <li>
                  Orang yang mengalami gejala gangguan sistem pernapasan seperti pilek/sakit tenggorokan/batuk DAN pada 14 hari terakhir sebelum timbul gejala memiliki riwayat kontak dengan kasus konfirmasi COVID-19.
                </li>
              </ol>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Apa itu PDP (Pasien Dalam Pengawasan)?
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              <ol>
                <li>
                  Orang dengan Infeksi Saluran Pernafasan Akut (ISPA) yaitu demam (>=38°C) atau riwayat demam, DISERTAI salah satu gejala/tanda gangguan sistem pernafasan seperti : batuk/sesak nafas/sakit tenggorokan/pilek/pneumonia (radang paru-paru) ringan hingga berat DAN tidak ada penyebab lain berdasarkan gambaran klinis yang menyakinkan DAN pada 14 hari terakhir sebelum timbul gejala memiliki riwayat perjalanan/tinggal di negara/wilayah yang melaporkan transmisi lokal; ATAU
                </li>
                <li>
                  Orang dengan demam (>=38⁰C) atau riwayat demam atau ISPA DAN pada 14 hari terakhir sebeluk timbul gejala memiliki riwayat kontak dengan kasus konfirmasi COVID-19.
                </li>
                <li>
                  Orang dengan ISPA berat/pnemonia berat yang membutuhkan perawatan di rumah sakit DAN tidak ada penyebab lain berdasarkan gambaran klinis yang meyakinkan.
                </li>
              </ol>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingFour">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Apa itu OTG (Orang Tanpa Gejala)?
              </button>
            </h2>
          </div>
          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
            <div class="card-body">
              <ol>
                <li>
                  Seseorang yang tidak bergejala dan memiliki risiko tertular dari orang konfirmasi COVID-19. Orang tanpa gejala (OTG) merupakan KONTAK ERAT dengan kasus konfirmasi COVID-19.
                </li>
              </ol>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingFive">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                Apa itu Positif Covid-19?
              </button>
            </h2>
          </div>
          <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
            <div class="card-body">
              <ol>
                <li>
                  Seseorang yang bergejala dan sudah dinyatakan tertular COVID-19. Orang yang positif sudah dikonfirmasi melalui serangkaian test seperti rapid dan swab.
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="jumbotron mb-0">
      <h2 class="justify-content-center text-center text-uppercase mb-5 pt-5" id="monioring">monitoring data covid-19 kabupaten jepara <p class="text-danger">update terakhir : <?php foreach ($ikijumlah as $jumlah => $j){ echo date('d M Y, h:i A' ,$j->terbaru);} ?></p></h2>
      <div class="row">
        <div class="col-xl-12">

          <ul class="nav nav-tabs" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active border-0 text-uppercase" data-toggle="tab" href="#grafik">
                <i class="fas fa-chart-area mr-1"></i>Grafik COVID19
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link border-0 text-uppercase" data-toggle="tab" href="#tabeldata">
                <i class="fas fa-table mr-1"></i>TabelData COVID19
              </a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="grafik" role="tabpanel" aria-labelledby="home-tab">
              <div class="card mb-4 border-0">
                <div class="card-body">
                  <canvas id="myAreaChart" style="height:400px"></canvas>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tabeldata" role="tabpanel" aria-labelledby="profile-tab">
              <div class="card mb-4 border-0">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Kecamatan</th>
                          <th>PP</th>
                          <th>ODP</th>
                          <th>PDP</th>
                          <th>OTG</th>
                          <th>Positif</th>
                          <th>Tanggal Update</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $id=1;foreach ($ikidata as $data => $d) { ?>
                        <tr>
                          <td><?= $id++ ;?></td>
                          <td class="font-weight-bold text-primary text-uppercase"><?= $d->kecamatan ;?></td>
                          <td><?= $d->pp ;?></td>
                          <td><?= $d->odp ;?></td>
                          <td><?= $d->pdp ;?></td>
                          <td><?= $d->otg ;?></td>
                          <td><?= $d->positif ;?></td>
                          <td><?= date('d M Y, h:i A', $d->date);?></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                      <tfoot>
                        <?php foreach ($ikijumlah as $jumlah => $j){ ?>
                        <tr>
                          <th></th>
                          <th>Jumlah</th>
                          <th><?= $j->totalpp ;?></th>
                          <th><?= $j->totalodp ;?></th>
                          <th><?= $j->totalpdp ;?></th>
                          <th><?= $j->totalotg ;?></th>
                          <th><?= $j->totalpositif ;?></th>
                          <th></th>
                        </tr>
                        <?php } ?>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- <div class="card mb-4">
            <div class="card-header">
              <i class="fas fa-chart-area mr-1"  id="grafik"></i>Grafik COVID-19 Jepara
            </div>
            <div class="card-body">
              <canvas id="myAreaChart" width="100%" height="40"></canvas>
            </div>
          </div> -->

          <!-- <div class="card mb-4">
            <div class="card-header">
              <i class="fas fa-table mr-1"  id="tabel"></i>Tabel Data COVID-19 Jepara
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Kecamatan</th>
                      <th>PP</th>
                      <th>ODP</th>
                      <th>PDP</th>
                      <th>OTG</th>
                      <th>Positif</th>
                      <th>Tanggal Update</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $id=1;foreach ($ikidata as $data => $d) { ?>
                    <tr>
                      <td><?= $id++ ;?></td>
                      <td class="font-weight-bold text-primary text-uppercase"><?= $d->kecamatan ;?></td>
                      <td><?= $d->pp ;?></td>
                      <td><?= $d->odp ;?></td>
                      <td><?= $d->pdp ;?></td>
                      <td><?= $d->otg ;?></td>
                      <td><?= $d->positif ;?></td>
                      <td><?= date('d M Y, h:i A', $d->date);?></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                  <tfoot>
                    <?php foreach ($ikijumlah as $jumlah => $j){ ?>
                    <tr>
                      <th></th>
                      <th>Jumlah</th>
                      <th><?= $j->totalpp ;?></th>
                      <th><?= $j->totalodp ;?></th>
                      <th><?= $j->totalpdp ;?></th>
                      <th><?= $j->totalotg ;?></th>
                      <th><?= $j->totalpositif ;?></th>
                      <th></th>
                    </tr>
                    <?php } ?>
                  </tfoot>
                </table>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
    <footer class="py-4 bg-dark mt-auto">
      <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between small">
          <div class="text-light mx-auto">Copyright &copy; Virgiawan <?php echo date("Y"); ?></div>
        </div>
      </div>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>

    <!-- datatables -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="https://startbootstrap.github.io/startbootstrap-sb-admin/dist/assets/demo/datatables-demo.js"></script>

    <script type="text/javascript">
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
          borderColor: "rgba(255, 159, 64, 1)",
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 159, 64, 1)",
          pointBorderColor: "rgba(255,255,255,0.8)",
          pointHoverRadius: 5,
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
    </script>
  </body>
</html>