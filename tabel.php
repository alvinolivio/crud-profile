<?php
include 'connect.php';
include 'header.php';
?>
<div class="breadcrumb-holder">
  <div class="container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active">Tabel Biodata</li>
    </ul>
  </div>
</div>
<section class="forms">
  <div class="container-fluid">
    <br>
    <!-- <header> 
      <h1 class="h3 display"></h1>
    </header> -->
    <div class="col-lg-12">
      <div class="card"> 
        <div class="card-header d-flex align-items-center">
          <h2 class="h5 display display"><i class="fa fa-list"></i> Tabel Biodata</h2>
        </div>
        <div class="card-block">
          <form class="form-horizontal">
            <div class="col-sm-5">
              <button class="btn btn-success" onclick="location.href='input.php'" type="button"><i class="fa fa-plus"></i> Tambah Biodata</button>
            </div>
            <table id="tabel_biodata" class="table table-striped table-hover" style="width: 100%;">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Tanggal Lahir</th>
                  <th>Alamat</th>
                  <th>No. Hp</th>
                  <th>Hobi</th>
                  <th style="text-align: center; width: 20%">Aksi</th>
                </tr>
              </thead>

              <tbody>
                <?php
                $sql = "SELECT * FROM tabel_biodata ORDER BY id";
                $no  = 1;
                foreach ($dbh->query($sql) as $data) :
                  ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['nama'] ?></td>
                    <td><?php echo $data['jenis_kelamin'] ?></td>
                    <td><?php echo $data['tgl_lahir'] ?></td>
                    <td><?php echo $data['alamat'] ?></td>
                    <td><?php echo $data['no_hp'] ?></td>
                    <td><?php echo $data['hobi'] ?></td>
                    <td align="center">
                      <a href="edit.php?id=<?php echo $data['id'] ?>" class="btn btn-warning btn-sm" role="button"><i class="fa fa-pencil" aria-hidden="true"> Edit</i></a>
                      &nbsp;
                      <a href="hapus.php?id=<?php echo $data['id'] ?>" onclick="return confirm('Anda yakin akan menghapus data?')" class="btn btn-danger btn-sm" role="button"><i class="fa fa-trash" aria-hidden="true"> Hapus</i></a>
                    </td>
                  </tr>
                  <?php
                endforeach;
                ?>
              </tbody>
            </table>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
include 'footer.php';
?>