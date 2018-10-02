<?php
include 'connect.php';
include 'header.php';
?>
<div class="breadcrumb-holder">
  <div class="container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active">Tambah Biodata</li>
  </ul>
</div>
</div>
<section class="forms">
    <div class="container-fluid">
      <br>
      <div class="col-lg-12">
        <div class="card"> 
            <div class="card-header d-flex align-items-center">
                <h2 class="h5 display display"><i class="fa fa-plus"></i> Tambah Biodata</h2>
            </div>
            <div class="card-block">
                <form action="simpan.php" method="post">
                    <div class="form-group row">
                        <label for="nama" class="col-md-2 form-control-label">Nama</label>
                        <div class="row col-sm-4">
                            <input name="nama" type="text" class="form-control col-sm-12" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="jenis_kelamin" class="col-md-2 form-control-label">Jenis Kelamin</label>
                        <div class="row col-sm-10">
                            <input type="radio" name="jenis_kelamin" value="Laki-Laki" id="laki-laki" class="form-control-custom radio-custom"/><label for="laki-laki"> Laki-Laki</label>&nbsp; &nbsp;
                            <input type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan" class="form-control-custom radio-custom"/><label for="perempuan"> Perempuan</label>                  
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="alamat" class="col-md-2 form-control-label">Alamat</label>
                        <div class="row col-sm-4">
                            <textarea name="alamat" class="form-control col-lg-12" required></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="no_hp" class="col-md-2 form-control-label">Nomor Handphone</label>
                        <div class="row col-sm-4">
                            <input name="no_hp" type="text" class="form-control col-sm-12" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nama" class="col-md-2 form-control-label">Tanggal Lahir</label>
                        <div class="row col-sm-4">
                            <input name="tgl_lahir" type="date" class="form-control col-sm-12" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="hobi" class="col-md-2 form-control-label">Hobi</label>
                        <div class="row col-sm-4 select">
                          <select name="hobi" class="form-control col-sm-12" required>
                            <option value="Olahraga">Olahraga</option>
                            <option value="Membaca">Membaca</option>
                            <option value="Main Game">Main Game</option>
                            <option value="Musik">Musik</option>
                        </select>
                    </div>
                </div>
                <br>
                <center class="col-sm-6">
                    <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Simpan</button>
                    <button type="reset" class="btn btn-danger" onclick="return confirm('Hapus data yang telah diinput?')"><i class="fa fa-times"></i> Reset</button>
                    <button class="btn btn-warning" onclick="location.href='tabel.php'" type="button"><i class="fa fa-undo"></i> Kembali</button>
                </center>
            </form>
        </div>
    </div>
</div>
</div>
</section>
<?php
include 'footer.php';
?>