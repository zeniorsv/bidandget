  <?php $this->load->view('layouts/header');?>
  <?php $this->load->view('layouts/css-tables'); ?>  
</head>
<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php $this->load->view('layouts/sidebar'); ?>
        <?php $this->load->view('layouts/top-nav'); ?>

        <!-- page content -->
        <div class="right_col" role="main">

          <div class="">
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    
                    <h2>Inventory of Stores</strong></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="alert alert-info alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>ATTENTION,</strong>  the list of spare parts or machines can be very heavy and do not load, since the inventory is very large.
                  </div>

                    <div class="col-md-4">
                      <div class="wrap-company">
                        <h1>Honduras</h1>
                        <div class="logo-inv">
                          <img src="<?php echo site_url() ?>/images/logo-honduras.png"  width="200">
                        </div>
                        <br>
                        <a class="btn btn-primary" href="<?php echo site_url('inventory/inventory/1/0') ?>"><i class="fa fa-gear"></i> Parts</a>
                        <a class="btn btn-primary" href="<?php echo site_url('inventory/inventory/1/1') ?>"><i class="fa fa-tag"></i> Machines</a>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="wrap-company">
                        <h1>Nicaragua</h1>
                        <div class="logo-inv">
                          <img src="<?php echo site_url() ?>/images/logo-tabony-nicaragua.jpg" width="220">
                        </div>
                        <br>
                        <a class="btn btn-primary" href="<?php echo site_url('inventory/inventory/6/0') ?>"><i class="fa fa-gear"></i> Parts</a>
                        <a class="btn btn-primary" href="<?php echo site_url('inventory/inventory/6/1') ?>"><i class="fa fa-tag"></i> Machines</a>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="wrap-company">
                        <h1>G&T Nicaragua</h1>
                        <div class="logo-inv">
                          <img src="<?php echo site_url() ?>/images/gyt-nica.jpg" height="100">
                        </div>
                        <br>
                        <a class="btn btn-primary" href="<?php echo site_url('inventory/inventory/13/0') ?>"><i class="fa fa-gear"></i> Parts</a>
                        <a class="btn btn-primary" href="<?php echo site_url('inventory/inventory/13/1') ?>"><i class="fa fa-tag"></i> Machines</a>
                      </div>
                    </div>
                    
                    
                  </table>
                  </div>
                  <div class="clear"></div>
                        </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

  <?php $this->load->view('layouts/foot') ?>
  <?php $this->load->view('layouts/footer'); ?>
	<?php $this->load->view('layouts/js-tables'); ?>
  