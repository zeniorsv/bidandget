<?php $this->load->view('layouts/header');?>
</head>
<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php $this->load->view('layouts/sidebar'); ?>
        <?php $this->load->view('layouts/top-nav'); ?>


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Last Info</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <h2><span class="fa fa-file-text-o" aria-hidden="true"></span> Last 10 Invoice</h2>
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


                    <table class="table table-hover table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>RMS ID</th>
                          <th>Store</th>
                          <th>Total</th>
                        </tr>  
                      </thead>
                      <tbody>
                        <?php foreach ($last_invoice as $row) { ?>
                        <tr>
                          <td><?php echo $row->ID; ?></td>
                          <td><?php echo $row->Name;?></td>
                          <td> $ <?php echo number_format($row->Total, 2);; ?></td>
                        </tr>
                        <?php } ?>
                      </tbody>                      
                    </table>
                  </div>
                  <div class="clear"></div>
                 </div>
                </div>
              

              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Fast Access </h2>
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
                  <div class="x_content"><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px none; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
                    <div class="fastaccess">
                      <div class="col-md-4">
                        <a class="access" href=""><i class="fa fa-book"></i><br>Inventory</a>
                      </div>
                      <div class="col-md-4">
                        <a class="access" href="<?php echo site_url('Welcome/consulta') ?>"><i class="fa fa-cubes"></i><br>Stock</a>
                      </div>                      
                      <div class="col-md-4">
                        <a class="access" href="<?php echo site_url('history') ?>"><i class="fa fa-calendar"></i><br> History </a>
                      </div>
                      <div class="col-md-4">
                        <a class="access" href="<?php echo site_url('charts') ?>"><i class="fa fa-bar-chart"></i> <br> Charts </a>
                      </div>
                      <div class="clearfix"></div>
                      <hr>
                      <div class="col-md-4">
                        <a class="access" href="<?php echo site_url('sales/honduras') ?>"><i class="fa fa-area-chart"></i> <br> Honduras </a>
                      </div>
                      <div class="col-md-4">
                        <a class="access" href="<?php echo site_url('sales/elsalvador') ?>"><i class="fa fa-line-chart"></i> <br> El Salvador </a>
                      </div>
                      <div class="col-md-4">
                        <a class="access" href="<?php echo site_url('sales/nicaragua') ?>"><i class="fa fa-pie-chart"></i> <br> Nicaragua </a>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

  <?php $this->load->view('layouts/foot') ?>
	<?php $this->load->view('layouts/footer'); ?>
  