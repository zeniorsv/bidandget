        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo site_url() ?>" class="site_title"><img src="<?php echo site_url() ?>/images/logo-tabony.png"></a>
            </div>
            <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="<?php echo site_url() ?>/images/profile.png" alt="Tabony" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo "usuario"; ?></h2>
              </div>
            </div>
            <div class="clearfix"></div>
            <!-- /menu profile quick info -->
            <hr>
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                
                <h3>Main Menu</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo site_url() ?>"><i class="fa fa-home"></i> Home </a></li>
                  <li><a href="<?php echo site_url('Welcome/inventory') ?>"><i class="fa fa-book"></i> Inventory </a></li>
                  <li><a href="<?php echo site_url('Welcome/consulta') ?>"><i class="fa fa-gears"></i> Stock </a></li>
                  <li><a><i class="fa fa-users"></i> Sales<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo site_url('sales/') ?>"></i> Global Sales </a></li>
                      <li><a href="<?php echo site_url('sales/honduras') ?>"> Sales Honduras </a></li>
                      <li><a href="<?php echo site_url('sales/nicaragua') ?>"> Sales Nicaragua</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-building"></i> El Salvador<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo site_url('elsalvador') ?>"> Industrias Tabony </a></li>
                      <li><a href="<?php echo site_url('elsalvador') ?>"> Cisma </a></li>
                      <li><a href="<?php echo site_url('elsalvador') ?>"> Repuestos T & T</a></li>
                      
                    </ul>
                  </li>
                  <li><a href="<?php echo site_url('history') ?>"><i class="fa fa-calendar"></i> History </a></li>
                  <li><a href="<?php echo site_url('charts/index/1/6') ?>"><i class="fa fa-bar-chart"></i> Charts </a></li>
                  <li><a href="<?php echo site_url('cams') ?>"><i class="fa fa-video-camera"></i> Cams </a></li>
                  
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->
          </div>
        </div>
            