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
                <h3>Sales Charts</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><strong><?php $date = getdate(); echo $month=$date['month']; ?></h2>
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
                    <h1 style="text-align:center;">Last 7 Days Of <?php $date = getdate(); echo $month=$date['month']; ?></h1>
                    <canvas id="mybarChart">                    
                    </canvas>
                    
                  </div>
                </div>
              </div>



            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2></strong>History</strong></h2>
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
                    <h1 style="text-align:center;">Last 6 Month</h1>
                    
                    <canvas id="mybarChart2">
                    </canvas>
                  </div>
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
<script src="<?= base_url() ?>assets/vendors/Chart.js/dist/Chart.min.js"></script>
<script type="text/javascript">
  // Bar chart
      var ctx = document.getElementById("mybarChart");
      var mybarChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: [<?php 
                    foreach ($cust as $row) {
                        if ($row['StoreID']==1) {
                          echo '"'.$row['dia'].'",';
                        }
                      }

                  ?>],
          datasets: [{
            label: 'Tabco $',
            backgroundColor: "#26B99A",
            data: [<?php 
                      foreach ($cust as $row) {
                        if ($row['StoreID']==1) {
                          echo $row['Total'].",";
                        }
                      }
                    ?>]
          }, {
            label: 'Inversiones Tabony $',
            backgroundColor: "#3498db",
            data: [<?php 
                      foreach ($cust as $row) {
                         if ($row['StoreID']==6) {
                          echo $row['Total'].",";
                        }
                      }
                    ?>]
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true,
                callback: function(value, index, values) {
                  if(parseInt(value) > 1000){
                    return '$' + value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                  } else {
                    return '$' + value;
                  }
                }
              }
            }]
          }
        }
      });

      

</script>
<script type="text/javascript">
  // Bar chart
      var ctx = document.getElementById("mybarChart2");
      var mybarChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: [<?php 
                    foreach ($mes as $row) {
                        if ($row['StoreID']==1) {
                          echo '"'.$row['mes'].'",';
                        }
                      }

                  ?>],
          datasets: [{
            label: 'Tabco $',
            backgroundColor: "#26B99A",
            data: [<?php 
                      foreach ($mes as $row) {
                        if ($row['StoreID']==1) {
                          echo $row['Total'].",";
                        }
                      }
                    ?>]
          }, {
            label: 'Inversiones Tabony $',
            backgroundColor: "#3498db",
            data: [<?php 
                      foreach ($mes as $row) {
                         if ($row['StoreID']==6) {
                          echo $row['Total'].",";
                        }
                      }
                    ?>]
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true,
                callback: function(value, index, values) {
                  if(parseInt(value) > 1000){
                    return '$' + value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                  } else {
                    return '$' + value;
                  }
                }
              }
            }]
          }
        }
      });

      

</script>