<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
              <li> <a class="waves-effect waves-dark <?php if($this->uri->segment('1')=="home") {echo "active";}?>" href="<?php echo base_url()?>" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
              </li>
              <li> <a class="waves-effect waves-dark <?php if($this->uri->segment('1')=="hmj"&&$this->uri->segment('2')=="hmj") {echo "active";}?>" href="<?php echo base_url()?>index.php/hmj" aria-expanded="false"><i class="mdi mdi-coin"></i><span class="hide-menu">KAS HMJ TI</span></a>
              </li>
              <li> <a class="waves-effect waves-dark <?php if($this->uri->segment('1')=="ph"&&($this->uri->segment('2')=="ph"||$this->uri->segment('2')=="editTabPH"||$this->uri->segment('2')=="tambahTabPH"||$this->uri->segment('2')=="laporan")) {echo "active";}?>" href="<?php echo base_url()?>index.php/ph" aria-expanded="false"><i class="mdi mdi-coins"></i><span class="hide-menu">KAS PH</span></a>
              </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <!-- item--><a href="#" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
        <!-- item--><a href="#" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
        <!-- item--><a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a> </div>
    <!-- End Bottom points-->
</aside>
