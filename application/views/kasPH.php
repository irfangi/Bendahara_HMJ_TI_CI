<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">PH</li>
                </ol>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- Row -->
        <div class="row">
            <!-- column -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-block">
                      <a href="<? echo base_url();?>index.php/ph/tambahPh" class="btn btn-small btn-success">
                        <span class="mdi mdi-account-plus"></span>
                      </a>
                    </div>
                    <div class="card-block">
                      <?php if ($this->session->flashdata('pesan')) {?>
                           <script>
                            alert("<?php echo $this->session->flashdata('pesan');?>");
                           </script>
                      <?php } ?>
                        <div class="table-responsive">
                            <table class="table" id="tampilTabPH">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NPK</th>
                                        <th>Nama PH</th>
                                        <th>Tabungan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="card">
              <div class="card-block">
                <center class="m-t-30">
                  <h4 class="card-title m-t-10">PH HMJ TI AKAKOM</h4>
                  <h6 class="card-subtitle">Total Kas PH dapat Dipakai</h6>
                  <font class="font-medium">Rp. <?php echo $tampilKasPH->totalKasPH; ?>,-</font></a>
                </center>
              </div>
              <div class="card-block">
                <center class="m-t-30">
                  <form class="form-horizontal form-material" action="<?php echo base_url();?>index.php/ph/kurangKasPh" method="post">
                    <div class="form-group">
                      <label class="col-sm-12">Tambahkan Kas PH</label>
                      <div class="col-sm-12">
                        <select class="form-control form-control-line" name="kurang" required>
                          <option value="">Pilih Pengurangan Per-PH </option>
                          <option value="1000">1000</option>
                          <option value="2000">2000</option>
                          <option value="5000">5000</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-12">
                        <button class="btn btn-success">Ambil Kas PH</button>
                      </div>
                    </div>
                  </form>
                </center>
              </div>
            </div>
          </div>
          <!-- Column -->
          <!-- Column -->
          <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
              <div class="card-block">
                <center class="m-t-1">
                  <a href="<?php echo base_url();?>index.php/ph/laporan">
                    <button class="btn btn-success btn-xs">Lihat Laporan</button>
                  </a>
                </center>
                <form class="form-horizontal form-material" action="<?php echo base_url();?>index.php/ph/gunakanKasPh" method="post">
                  <div class="form-group">
                    <label class="col-md-12">Pengeluaran Kas PH</label>
                    <div class="col-md-12">
                      <input placeholder="Total Pengeluaran" class="form-control form-control-line" type="text" name="totKeluar">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <input placeholder="Keperluan" class="form-control form-control-line" type="text" name="guna">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <button class="btn btn-success">Simpan Pengeluaran PH</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer"> © 2017 Material Pro Admin by wrappixel.com </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/jquery/jquery-2.2.3.min.js')?>"></script>
<script type="text/javascript">

var table;

$(document).ready(function() {

    //datatables
    table = $('#tampilTabPH').DataTable({

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('Ph/ajax_list')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        {
            "targets": [ 0,4 ], //first column / numbering column
            "orderable": false, //set not orderable
        },
        ],

    });

});

</script>
