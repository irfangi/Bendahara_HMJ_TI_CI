<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item ">PH</li>
                <li class="breadcrumb-item active">Laporan Kas PH</li>
            </ol>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-block">
            <table class="table table-hover">
              <tr>
                <th>No</th>
                <th>Pengeluaran</th>
                <th>Keperluan</th>
                <th>Tanggal Kas Digunakan</th>
              </tr>
              <?php
              $no=0;
              foreach ($tampilLapKasPH as $data) {
                $no++;
                ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td>Rp. <?php echo $data['jumPengeluaranKasPh']; ?> ,-</td>
                  <td><?php echo $data['keperluanPengeluaranKasPh']; ?></td>
                  <td><?php echo $data['tglKasDigunakan']; ?></td>
                </tr>
                <?php
              }
              ?>
            </table>
            <div class="">
              <button class="btn btn-success">Cetak</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
