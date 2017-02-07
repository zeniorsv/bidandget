<?php $this->load->view('layouts/header');?>
<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">

            <?php $this->load->view('layouts/profile'); ?>
            <?php $this->load->view('layouts/sidebar'); ?>
            
          </div>
        </div>

        <?php $this->load->view('layouts/top-nav'); ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Stock of Product</h3>
              </div>
              
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Search Product</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    <?php echo form_open('Welcome/find_stock'); ?>
                    <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="code">Type Product Code </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="stock" id="code" required="required" class="form-control col-md-5 col-xs-12" type="text"  placeholder="Code RMS">
                        </div>
                      </div>
                      <br>
                      <br>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Search</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

	<?php $this->load->view('layouts/foot') ?>
	<?php $this->load->view('layouts/footer'); ?>