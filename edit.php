<?php
include 'connect.php';
if (isset($_GET['id'])) {
    $query = $dbh->query("SELECT * FROM tabel_biodata WHERE id = '$_GET[id]'");
    $data  = $query->fetch(PDO::FETCH_ASSOC);
} else {
    echo "ID tidak tersedia!<br /><a href='index.php'>Kembali</a>";
    exit();
}

if ($data === false) {
    echo "Data tidak ditemukan!<br /><a href='index.php'>Kembali</a>";
    exit();
}
include 'header.php';
?>
<div class="breadcrumb-holder">
  <div class="container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active">Edit Biodata</li>
  </ul>
</div>
</div>
<section class="forms">
    <div class="container-fluid">
        <br>
        <div class="col-lg-12">
            <div class="card"> 
                <div class="card-header d-flex align-items-center">
                    <h2 class="h5 display display"><i class="fa fa-pencil"></i> Edit Biodata</h2>
                </div>
                <div class="card-block">
                    <form action="update.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
                        <div class="form-group row">
                            <label for="nama" class="col-md-2 form-control-label">Nama</label>
                            <div class="row col-sm-4">
                                <input name="nama" type="text" class="form-control col-sm-12" required value="<?php echo $data['nama']; ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jenis_kelamin" class="col-md-2 form-control-label">Jenis Kelamin</label>
                            <?php if ($data['jenis_kelamin'] === "Laki-Laki") : ?>
                                <input type="radio" name="jenis_kelamin" value="Laki-Laki" id="laki-laki" class="form-control-custom radio-custom" checked /><label for="laki-laki">Laki-Laki</label>&nbsp; &nbsp;
                                <input type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan" class="form-control-custom radio-custom" /><label for="perempuan">Perempuan</label>
                                <?php else : ?>
                                    <input type="radio" name="jenis_kelamin" value="Laki-Laki" id="laki-laki" class="form-control-custom radio-custom"/><label for="laki-laki">Laki-Laki</label>&nbsp; &nbsp;
                                    <input type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan" class="form-control-custom radio-custom"checked /><label for="perempuan">Perempuan</label>
                                <?php endif; ?>
                            </div>

                            <div class="form-group row">
                                <label for="alamat" class="col-md-2 form-control-label">Alamat</label>
                                <div class="row col-sm-4">
                                    <textarea name="alamat" class="form-control col-lg-12" required><?php echo $data['alamat']; ?></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="no_hp" class="col-md-2 form-control-label">Nomor Handphone</label>
                                <div class="row col-sm-4">
                                    <input name="no_hp" type="text" class="form-control col-sm-12" value="<?php echo $data['no_hp']; ?>" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nama" class="col-md-2 form-control-label">Tanggal Lahir</label>
                                <div class="row col-sm-4">
                                    <input name="tgl_lahir" type="date" class="form-control col-sm-12" value="<?php echo $data['tgl_lahir']; ?>" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="hobi" class="col-md-2 form-control-label">Hobi</label>
                                <div class="row col-sm-4 select">
                                    <select name="hobi" class="form-control col-sm-12" required>
                                        <option value="Olahraga" <?php if($data["hobi"]=='Olahraga'){echo "selected";}?>>Olahraga</option>
                                        <option value="Membaca" <?php if($data["hobi"]=='Membaca'){echo "selected";}?>>Membaca</option>
                                        <option value="Main Game" <?php if($data["hobi"]=='Main Game'){echo "selected";}?>>Main Game</option>
                                        <option value="Musik" <?php if($data["hobi"]=='Musik'){echo "selected";}?>>Musik</option>
                                    </select>
                                </div>
                            </div>
                            <center class="col-sm-6">
                                <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Simpan</button>&nbsp;
                                <button type="reset" class="btn btn-danger" onclick="return confirm('Hapus data yang telah diinput?')"><i class="fa fa-times"></i> Reset</button>&nbsp;
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
