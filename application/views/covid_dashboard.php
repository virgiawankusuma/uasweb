		<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash');?>"></div>
		<?php if ($this->session->flashdata('flash')): ?>
		<?php endif ?>

		<div class="gagal" data-gagal="<?= $this->session->flashdata('gagal');?>"></div>
		<?php if ($this->session->flashdata('gagal')): ?>
		<?php endif ?>
		<body>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>

                        <div class="row">
	                        <div class="col-6">
	                        	<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#insert">Tambah data</button>
	                        </div>
	                        <div class="col-6 text-right">	
	                        	<button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#import">Import Excel</button>
	                        	<a class="btn btn-outline-success mb-3" href="<?= base_url('covid/export') ;?>">Export Excel</a>
	                        </div>
                        </div>

                        <!-- <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Primary Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Warning Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Success Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area mr-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div> -->

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Kecamatan</th>
                                                <th>PP</th>
                                                <th>ODP</th>
                                                <th>PDP</th>
                                                <th>OTG</th>
                                                <th>Positif</th>
                                                <th>Tanggal Update</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php foreach ($ikidata as $data => $d) { ?>
                                        	<tr>
                                        		<td><?= $d->kecamatan ;?></td>
                                        		<td><?= $d->pp ;?></td>
                                        		<td><?= $d->odp ;?></td>
                                        		<td><?= $d->pdp ;?></td>
                                        		<td><?= $d->otg ;?></td>
                                        		<td><?= $d->positif ;?></td>
                                        		<td><?= date('d M Y, h:i A', $d->date);?></td>
                                        		<td></td>
                                        	</tr>
                                        	<?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
<!-- insert -->
<div class="modal fade" id="insert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url('covid/add') ;?>">
		  <div class="form-group">
		    <label class="font-weight-bold" for="kecamatan">Kecamatan</label>
		    <select class="form-control form-control-sm" id="kecamatan" name="kecamatan" required>
		    	<option>Pilih kecamatan</option>
		    	<?php foreach ($ikikecamatan as $kec => $k) { ?>
		    	<option name="kecamatan" value="<?= $k->kecamatan ;?>"><?= $k->kecamatan ;?></option>
		    	<?php } ?>
		    </select>
		  </div>
		  <div class="form-group row">
		  	<div class="col">
		    	<label class="font-weight-bold" for="pp">PP</label>
		    	<input type="number" class="form-control form-control-sm" id="pp" name="pp" placeholder="Pelaku Perjalanan" required>
		  	</div>
		  	<div class="col">
			    <label class="font-weight-bold" for="odp">ODP</label>
			    <input type="number" class="form-control form-control-sm" id="odp" name="odp" placeholder="Orang Dalam Pemantauan" required>
		  	</div>
		  </div>
		  <div class="form-group row">
		  	<div class="col">
			    <label class="font-weight-bold" for="pdp">PDP</label>
			    <input type="number" class="form-control form-control-sm" id="pdp" name="pdp" placeholder="Pasien Dalam Pengawasan" required>
		  	</div>
		  	<div class="col">
			    <label class="font-weight-bold" for="otg">OTG</label>
			    <input type="number" class="form-control form-control-sm" id="otg" name="otg" placeholder="Orang Tanpa Gejala" required>
		  	</div>
		  </div>
		  <div class="form-group">
		  	<label class="font-weight-bold" for="positif">Positif</label>
		  	<input type="number" class="form-control form-control-sm" id="positif" name="positif" placeholder="Positif Corona" required>
		  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
		</form>
      </div>
    </div>
  </div>
</div>