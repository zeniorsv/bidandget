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
                <h3>History of month</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Consult Month</h2>
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

                  	<br>
                    <?php echo form_open('history/month_custom'); ?>
                    <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" data-validate-words="1" data-validate-length-range="4">Store</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select name="store" class="form-control">
                            <option>Choose option</option>
                          	<option value="0">All</option>
                  					<option value="1">Tabco Honduras </option>
                  					<option value="6">Inversiones Tabony Nicaragua </option>
          				          <option value="13">G & T Nicaragua </option>
                          </select>
                        </div>
                      </div>
                      <br>
                      <br>
                      <br>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" data-validate-words="1" data-validate-length-range="4">Year</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select name="year" class="form-control">
                            <option>Choose option</option>
                          	<option value="2013">Year 2013</option>
                  					<option value="2014">Year 2014 </option>
                  					<option value="2015">Year 2015 </option>
  				                  <option value="2016">Year 2016 </option>				            
                          </select>
                        </div>
                      </div>
                      <br>
                      <br>
                      <br>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" data-validate-words="1" data-validate-length-range="4">Month</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select name="month" class="form-control">
                            <option>Choose option</option>
                        	  <option value="1">January</option>
                					  <option value="2">February </option>
                					  <option value="3">March </option>
        				            <option value="4">April </option>
        				            <option value="5">May </option>
        				            <option value="6">June </option>
        				            <option value="7">July </option>
        				            <option value="8">August </option>
        				            <option value="9">September </option>
        				            <option value="10">October </option>
        				            <option value="11">November</option>
        				            <option value="12">December</option>
                          </select>
                        </div>
                      </div>
                      <br>
                      <br>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                      </div>

                    </form>
                    
                  </div>
                  <!-- /end page  X content -->
                  <div class="clear"></div>
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Result of Month</h2>
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
                  	<?php 
                  		if (!isset($consult)) { ?>
                  	<div class="alert alert-success alert-dismissible fade in" role="alert">
	                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
	                    </button>
	                    Choose year and month to see the sale of the month
	                  </div>	
                    <?php }elseif (isset($consult)>0){
                  	        for ($i=0; $i < count($consult)  ; $i++) { 
        						        $object=$consult[$i];
        						        $Total=$object->Total;
        						      }  ?>
 					          <div class="bs-example" data-example-id="simple-jumbotron">
 	                    <div class="jumbotron">
                        <p>Total Sales of 
                          <?php if ($_POST['store']==1) {
                            echo "<strong>Tabco Honduras</strong>";
                          }elseif ($_POST['store']==6) {
                            echo "<strong>Inversiones Tabony Nicaragua</strong>";
                          }elseif ($_POST['store']==13) {
                            echo "<strong>G & T Nicaragua</strong>";
                          }elseif ($_POST['store']==0) {
                            echo "<strong>All Stores</strong>";
                          }
                          echo " in ";
                          $mes = $_POST['month'];
                          $meses = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
                          echo $meses[$mes-1];
                          echo " of ". $_POST['year'];
                          ?>
                        </p>
                        <br>
 	                      <h1>$ <?php echo number_format($Total, 2); ?></h1>
 	                    </div>
  	                </div>
        					 <?php } ?>
                  </div>
                  <!-- /end page  X content -->
                  <div class="clear"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
      </div>
    </div>
        

<?php $this->load->view('layouts/foot') ?>
<?php $this->load->view('layouts/footer'); ?>
  