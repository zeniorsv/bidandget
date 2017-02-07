<?php $this->load->view('layouts/header');?>
<?php $this->load->view('layouts/css-tables'); ?>  

<div class="wrap-list">
<div class="container">
	<div class="row">
		<div class="col-md-8 mine">
			<br>
			<a href="<?php echo site_url('inventory') ?>" class="btn btn-primary pull-right"><i class="fa fa-chevron-circle-left"></i> Back</a>
			<h1>Inventory List</h1>
			<hr>
			<table id="datatable" class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th>Item</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Cost</th>
              </tr>
            </thead>
            <tbody><?php
            foreach ($inv as $row) {
				echo "<tr>";
				echo "<td>".$row->ItemLookupCode."</td>";
				echo "<td>".$row->Description."</td>";
				echo "<td>".$row->Quantity."</td>";
				echo "<td> $ ". number_format($row->Price, 2)."</td>";
				echo "<td> $ ". number_format($row->Cost, 2)."</td>";
				echo "</tr>";
			}
            ?>
            </tbody>
    		</table>
    	</div>

   </div>

</div>


</div>
<div class="clearfix"></div>
<?php $this->load->view('layouts/foot') ?>
  <?php $this->load->view('layouts/footer'); ?>
<?php $this->load->view('layouts/js-tables'); ?>
