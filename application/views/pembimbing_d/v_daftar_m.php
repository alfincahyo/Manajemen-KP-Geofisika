<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<div class="col-md-9">


<div class="box box-success">
    <div class="box-header">
        <i class="fa fa-info-circle" aria-hidden="true"></i>
        <h1 class="box-title text-center">Daftar Mahasiswa</h1>
        <div class="row">
        	<div class="col-md-6" >
			</div>

    	</div>
      <h4><p align="center">Daftar Mahasiswa</p></h4>
    <table class="table table-bordered" style="text-align: center">
    <thead>
      <tr>
        <th style="text-align: center">No</th>
        <th style="text-align: center">NIM</th>
        <th style="text-align: center">Nama</th>
        <th style="text-align: center">Angkatan</th>
        <th style="text-align: center">Aksi</th>

      </tr >
    </thead>
    <tbody>
      <?php 
    $no = 1;
    foreach($user as $u){ 
    ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $u->nim ?></td>
        <td style="text-align: left"><?php echo $u->nama ?></td>
        <td><?php echo $u->Angkatan ?></td>
        <td>
          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal" >Detail</button></td>
      </tr>
       <?php 
     } 
     ?>
      
    </tbody>
  </table>
</div>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Detail Mahasiswa</h4>
      </div>
      <div class="modal-body">
        <p><h5><b>Nama Mahasiswa</b></h5></p>
        <font color="grey"><p><h5><?php echo $u->nama ?></h5></p></font><br>
        <p><h5><b>NIM</b></h5></p>
        <font color="grey"><p><h5><?php echo $u->nim ?></h5></p></font><br>
        <p><h5><b>Angkatan</b></h5></p>
        <font color="grey"><p><h5><?php echo $u->Angkatan ?></h5></p></font><br>
        <p><h5><b>Judul Proposal</b></h5></p>
        <font color="grey"><p><h5><?php echo $u->JudulProposal ?></h5></p></font><br>
        <p><h5><b>Tempat KP</b></h5></p>
         <?php 
        foreach($magang as $e){ 
        ?>
        <font color="grey"><p><h5><?php echo $e->NamaPerusahaan ?></h5></p></font><br>
       <?php 
     } 
     ?>
        <p><h5><b>Tanggal Mulai Praktik</b></h5></p>
         <?php 
        foreach($magang as $e){ 
        ?>
        <font color="grey"><p><h5><?php echo $e->MulaiMagang ?></h5></p></font><br>
        <?php 
     } 
     ?>
        <p><h5><b>Tanggal Terakhir Praktik</b></h5></p>
         <?php 
        foreach($magang as $e){ 
        ?>
        <font color="grey"><p><h5><?php echo $e->SelesaiMagang ?></h5></p></font><br>
        <?php 
     } 
     ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

