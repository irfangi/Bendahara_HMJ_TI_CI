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
                    <li class="breadcrumb-item"><a href="">Home</a></li>
                    <li class="breadcrumb-item ">PH</li>
                    <li class="breadcrumb-item active">Edit Tabungan PH</li>
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
                      <form class="form-horizontal form-material" action="<?php echo base_url()."index.php/ph/doEditTabPH/";?>" method="post">
                          <div class="form-group">
                              <label class="col-md-12">NPK</label>
                              <div class="col-md-12">
                                  <input class="form-control form-control-line" value="<?php echo $tampil->npk;?>" type="text" disabled name="npk">
                              </div>
                          </div>
                          <div class="form-group">
                            <label for="example-email" class="col-md-12">Nama Pengurus Harian</label>
                            <div class="col-md-12">
                                  <input class="form-control form-control-line" value="<?php echo $tampil->namaPH;?>" type="text" disabled name="namaPH">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-md-12">Tabungan</label>
                              <div class="col-md-12">
                                  <input type="hidden" name="id_TabPH" value="<?php echo $tampil->idTabPH;?>">
                                  <input class="form-control form-control-line" value="<?php echo $tampil->tabungan;?>" type="text" name="tabungan">
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="col-sm-12">
                                  <button class="btn btn-success" name="buttonUpdatePH">Update Tabungan</button>
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
