<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 col-12 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">PH</li>
                    <li class="breadcrumb-item active">Tambah PH</li>
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
                      <form class="form-horizontal form-material" method="post" action="<?php echo base_url();?>index.php/ph/doTambahPh">
                          <div class="form-group">
                              <label class="col-md-12">NPK</label>
                              <div class="col-md-12">
                                  <input class="form-control form-control-line" type="text" name="npk">
                              </div>
                          </div>
                          <div class="form-group">
                            <label for="example-email" class="col-md-12">Nama Pengurus Harian</label>
                            <div class="col-md-12">
                                  <input class="form-control form-control-line" type="text" name="namaPH">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-md-12">Saldo Tabungan Awal</label>
                              <div class="col-md-12">
                                  <input class="form-control form-control-line" type="text" name="tabungan">
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="col-sm-12">
                                  <button class="btn btn-success" name="btnTambahPh">Tambah PH</button>
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
