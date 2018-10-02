<?php
include 'connect.php';
include 'header.php';
?>
<div class="breadcrumb-holder">
	<div class="container-fluid">
		<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="index.php">Home</a></li>
			<li class="breadcrumb-item active">WELCOME</li>
		</ul>
	</div>
</div>
<section class="forms">
	<div class="container-fluid">
		<br>
		<div class="col-lg-12">
			<div class="card">
				<div class="card-block col-lg-12">
					<center><h1>Silahkan Klik Tombol Berikut Untuk Melihat Tabel Biodata</h1>
					<button class="btn btn-primary" onclick="location.href='tabel.php'" type="button"><i class="fa fa-view"></i> Lihat Data</button></center>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
include 'footer.php';
?>
