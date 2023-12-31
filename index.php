 
<?php
ob_start();
session_start();
date_default_timezone_set('UTC');
include "includes/config.php";
if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
    header("location: ./login.php");
    exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AdminLTE 3 | Dashboard</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="https://drklt5.pro/0/https://drklt5.pro/0/js/plugins/https://drklt5.pro/0/js/plugins/plugins/fontawesome-free/https://drklt5.pro/0/css/all.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/https://drklt5.pro/0/css/ionicons.min.css">
        <link rel="stylesheet" href="https://drklt5.pro/0/https://drklt5.pro/0/js/plugins/https://drklt5.pro/0/js/plugins/plugins/tempusdominus-bootstrap-4/https://drklt5.pro/0/css/tempusdominus-bootstrap-4.min.css">
        <link rel="stylesheet" href="https://drklt5.pro/0/https://drklt5.pro/0/js/plugins/https://drklt5.pro/0/js/plugins/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <link rel="stylesheet" href="https://drklt5.pro/0/https://drklt5.pro/0/js/plugins/https://drklt5.pro/0/js/plugins/plugins/jqvmap/jqvmap.min.css">
        <link rel="stylesheet" href="https://drklt5.pro/0/css/adminlte.min.css?v=3.2.0">
        <link rel="stylesheet" href="https://drklt5.pro/0/https://drklt5.pro/0/js/plugins/https://drklt5.pro/0/js/plugins/plugins/overlayScrollbars/https://drklt5.pro/0/css/OverlayScrollbars.min.css">
        <link rel="stylesheet" href="https://drklt5.pro/0/https://drklt5.pro/0/js/plugins/https://drklt5.pro/0/js/plugins/plugins/daterangepicker/daterangepicker.css">
        <link rel="stylesheet" href="https://drklt5.pro/0/https://drklt5.pro/0/js/plugins/https://drklt5.pro/0/js/plugins/plugins/summernote/summernote-bs4.min.css">
    
     </head>
     
        <?php include "header.php"; include "menu2.php"; ?>
          <!-- Main content -->
   
   
      <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3 class="display-4 ">$150</h3>

                <p>Balance</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>%53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>Total Purchase</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>$65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->  
        

  <!-- Main content --> 
      <div class="row">
        <div class="col-12">
          <div class="row">
            <div class="col-12">
              <!-- Default box -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">ATTENTION!</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <p style="text-align: center;">
                    <strong>
                      <span style="font-size:18px;">
                        <span style="color:#fff;">Welcome to Vulnx Store</span>
                      </span>
                    </strong>
                  </p>
                  <p>We are glad that you came to us, and we hope that you will find here what you need! We have
                    been working in the field of bank accounts since 2016. We adhere to the position of "the
                    customer is always right" if the actions or the customer requirements do not contradict the
                    rules of our store.</p>

                  <p>We try to solve any problems our customers have as quickly as possible. Make a quick
                    replacement of the goods, in case of lack of access to the account. If the balance does not
                    match in the lower direction, we recalculate the account value and return the difference to
                    your personal store account. Our store is hosted on secure, crash-resistant servers with DDOS
                    protection. We guarantee the complete security of your purchases and your personal data.

                  </p>
                  <!-- Add more paragraphs and content as needed -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <!-- Add your card footer content here -->
                </div>
                <!-- /.card-footer-->
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
      </div> 
            
<div class="card-footer clearfix">
<a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
<a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
</div>

</div>
            <div class="card">

<div class="card-header border-transparent">
<h3 class="card-title"> OUR LATEST SOLD BANK LOGs</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn btn-tool" data-card-widget="remove">
<i class="fas fa-times"></i>
</button>
</div>
</div>

<div class="card-body p-0">
<div class="table-responsive">
<table class="table m-0">
<thead>
<tr>
<th>Order ID</th>
<th>Item</th>
<th>Status</th>
<th>Popularity</th>
</tr>
</thead>
<tbody>
<tr>
<td><a href="pages/examples/invoice.html">OR9842</a></td>
<td>Call of Duty IV</td>
<td><span class="badge badge-success">Shipped</span></td>
<td>
<div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
</td>
</tr>
<tr>
<td><a href="pages/examples/invoice.html">OR1848</a></td>
<td>Samsung Smart TV</td>
<td><span class="badge badge-warning">Pending</span></td>
<td>
<div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
</td>
</tr>
<tr>
<td><a href="pages/examples/invoice.html">OR7429</a></td>
<td>iPhone 6 Plus</td>
<td><span class="badge badge-danger">Delivered</span></td>
<td>
<div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
</td>
</tr>
<tr>
<td><a href="pages/examples/invoice.html">OR7429</a></td>
<td>Samsung Smart TV</td>
<td><span class="badge badge-info">Processing</span></td>
<td>
<div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
</td>
</tr>
<tr>
<td><a href="pages/examples/invoice.html">OR1848</a></td>
<td>Samsung Smart TV</td>
<td><span class="badge badge-warning">Pending</span></td>
<td>
<div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
</td>
</tr>
<tr>
<td><a href="pages/examples/invoice.html">OR7429</a></td>
<td>iPhone 6 Plus</td>
<td><span class="badge badge-danger">Delivered</span></td>
<td>
<div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
</td>
</tr>
<tr>
<td><a href="pages/examples/invoice.html">OR9842</a></td>
<td>Call of Duty IV</td>
<td><span class="badge badge-success">Shipped</span></td>
<td>
<div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
</td>
</tr>
</tbody>
</table>
</div>



<?php include "menu1.php";>

</div>


</body>
</html>
