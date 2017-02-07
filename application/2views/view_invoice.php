<?php $this->load->view('layouts/header');?>
<?php 

for ($i=0; $i < count($details)  ; $i++) { 
      $object=$details[$i];
      $OrderId=$object->ID;
      $Store=$object->StoreID;
      $LastUpdated=$object->LastUpdated;
      $Customer=$object->Company;
      $Address=$object->Address;
      $Phone=$object->PhoneNumber;
      $Email=$object->EmailAddress;
      $City=$object->City;
      $State=$object->State;
      $Total=$object->Total;
      $Tax=$object->Tax;
      $Name=$object->Name;
      $Address1=$object->Address1;
      $Address2=$object->Address2;
      $Country=$object->Country;

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
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>View Invoice</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <h2><span class="fa fa-file-text-o" aria-hidden="true"></span> Invoice</h2>
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
                    
                    <section class="content invoice">
                      <!-- title row -->
                      <div class="row">
                        <div class="col-md-12 invoice-header">
                          <h1>
                            </i> <img src="<?php echo site_url() ?>/images/logo-tabony.png">
                          </h1>
                        </div>
                        <div class="">
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- info row -->
                      <div class="row invoice-info">
                        <div class="col-md-6 invoice-col">
                          <div class="date">
                            <strong><p>Date: <?php echo $date = date('d-m-Y', strtotime(str_replace('-', '/', $LastUpdated))); ?><p></strong>
                          </div>
                          From
                          <address>
                            <strong><?= $Name ?></strong>
                            <br><?= $Address1 ?>
                            <br><?= $Address2 ?>, <?= $Country ?>
                            
                          </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6 invoice-col">
                          <div>
                            <strong><p>Order ID: <?= $OrderId ?></p></strong>
                          </div>
                          To
                          <address>
                            <strong><?= $Customer ?></strong>
                            <br><?= $Address ?>
                            <br><?= $City ?>.<?= $State; ?>
                            <br>Phone: <?= $Phone?>
                            <br>Email: <?= $Email?>
                          </address>
                        </div>
                        <!-- /.col -->
                        
                      </div>
                      <!-- /.row -->
                      <br>
                      <hr>
                      <!-- Table row -->
                      <div class="row">
                        <div class="col-xs-12 table bodyinvoice ">
                          <table class="table table-striped table-hover">
                            <thead>
                              <tr>
                                <th>Item ID</th>
                                <th style="width: 59%">Description</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>Subtotal</th>
                              </tr>
                            </thead>
                            <tbody>

                              <?php foreach ($invoice as $row){ ?>
                              <tr>
                                <td><?php echo $row->ItemID; ?></td>
                                <td><?php echo $row->Description; ?></td>
                                <td>$ <?php echo number_format($row->Price, 2); ?></td>
                                <td><?php echo $row->QuantityOnOrder; ?></td>
                                <td>$ <?php echo $Subtotal=number_format(($row->Price)*($row->QuantityOnOrder), 2); ?></td>
                              </tr>
                              
                              <?php } ?>
                            </tbody>
                          </table>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-xs-6">
                          <p class="lead">Payment Methods:</p>
                          
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-6">
                          
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <th style="width:50%"><strong>Subtotal:</strong></th>
                                  <td><strong>$ <?php echo number_format($Total-$Tax, 2); ?></strong></td>
                                </tr>
                                <tr>
                                  <th>Tax </th>
                                  <td>$ <?php echo number_format($Tax, 2);?>
                                  </td>
                                </tr>
                                <tr>
                                  <th>Shipping:</th>
                                  <td>$ 0.00</td>
                                </tr>
                                <tr>
                                  <th style="font-size:22px; color:#18316b;">Total:</th>
                                  <td style="font-size:22px; color:#18316b;"><strong>$ <?php echo number_format($Total, 2); ?></strong></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- this row will not appear when printing -->
                      <div class="row no-print">
                        <div class="col-xs-12">
                          <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                          <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
                        </div>
                      </div>
                    </section>



                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

  <?php $this->load->view('layouts/foot') ?>
	<?php $this->load->view('layouts/footer'); ?>
  