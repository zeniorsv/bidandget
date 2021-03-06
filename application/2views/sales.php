  <?php $this->load->view('layouts/header');?>
  <?php $this->load->view('layouts/css-tables'); ?>  
  <?php 
    for ($i=0; $i < count($daysales) ; $i++) { 
      $object=$daysales[$i];
      $d_sales=$object->Total;
    }
    for ($i=0; $i < count($monthsales) ; $i++) { 
      $object=$monthsales[$i];
      $m_sales=$object->Total;
    }
  ?>
</head>
<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php $this->load->view('layouts/sidebar'); ?>
        <?php $this->load->view('layouts/top-nav'); ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="row tile_count">
            
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Actual Date:</span>
              <div class="count"><?php getdate(); echo date('d-m-Y'); ?></div>
              
            </div>
            
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats">
                
                <div class="count blue">$ <?php echo number_format($d_sales, 2); ?></td></div>
                <h3>Sales of Day</h3>
                
              </div>
            </div>

            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats">
                
                <div class="count green">$ <?php echo number_format($m_sales, 2); ?></td></div>
                <h3>Sales of Month</h3>
              </div>
            </div>
            
          </div>
          <div class="">
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    
                    <h2>Sales Of <strong><?php $date = getdate(); echo $month=$date['month']; ?></strong></h2>
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
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Date</th>
                          <th>Order ID</th>
                          <th>Store</th>
                          <th>Customer</th>
                          <th>Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                          foreach ($month_sales as $row) {
                        ?>
                        <tr>
                          <td  style="width:120px;"><strong><?php echo $date = date('d-m-Y H:i', strtotime(str_replace('-', '/', $row->LastUpdated))); ?></strong></td>
                          <td style="width: 75px;"><a title="View Invioce"  href="sales/view_invoice/<?php echo $row->ID; ?>"><?php echo $row->ID; ?> &nbsp;&nbsp;<span class="fa fa-eye" aria-hidden="true"></span></a></td>
                          <td><?php echo $row->Name; ?></td>
                          <td><?php echo $row->Company; ?></td>
                          
                          <td> $ <?php echo number_format($row->Total, 2); ?></td>
                        </tr>
                        <?php
                          }
                        ?>
                    </tbody>
                    
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
  