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
            <div class="page-title">
              <div class="title_left">
                <h3>Stock on Store</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Search result</h2>
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
					  	<div class="alert alert-small alert-info">
					  		<p>Solo se muestran los articulos que estan en STOCK, si NO HAY articulos la Sucursal no aparecera.</p>
			  			</div>
			  			<table id="datatable1" class="table table-striped table-bordered">
			  				<thead>
							<tr>
								<th>Codigo</th>
								<th>Descripcion</th>
								<th>Cantidad</th>
								<th>Precio</th>
								<th>Tienda</th>
							</tr>
							</thead>
							<tbody>
							<?php
								foreach ($stock as $row) {
									if (($row->Quantity)>0) { 
							?>
							<tr>
								<td><?php echo $row->ItemLookupCode; ?></td>
								<td><?php echo $row->Description; ?></td>
								<td><?php echo $row->Quantity; ?></td>
								<td><?php echo $row->Price; ?></td>
								<td><?php
									switch ($row->StoreID) {
										case 1:
											echo "Tabco";
											break;
										case 3:
											echo "Industrias Tabony";
											break;
										case 4:
											echo " T & T";
											break;
										case 6:
											echo "Inversiones Tabony";
											break;
										case 9:
											echo "Kook Je";
											break;
										case 10:
											echo "CISMA";
											break;
										case 11:			
											echo "Tabony Guatemala";
											break;
										case 12:
											echo "Kook Je Bodega 2";
											break;									
									}	?>
								</td>
							</tr>
							<?php
									}
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
</html>