<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - <?php echo $judul;;?></title>

  <!-- css yang digunakan theme -->
  <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css"> 
  <link href="<?php echo base_url('assets/css/sb-admin-2.min.css');?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <!-- container -->
  <div class="container">

    <!-- outer row -->
    <div class="row justify-content-center">

      <!-- outer col-->
      <div class="col-xl-10 col-lg-12 col-md-9">

        <!-- card -->
        <div class="card o-hidden border-0 shadow-lg my-5">

          <!-- card body -->
          <div class="card-body p-0">

            <!-- inner row -->
            <div class="row">

              <!--inner col -->
              <div class="col-lg-12">

                <!-- form -->
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-primary font-weight-bold mb-4">LOGIN</h1>
                  </div>
                    
                  <?php echo validation_errors('<div class="alert alert-danger text-center">', '</div>'); ?>

        				  <form method="post" action="<?php echo site_url('user/login/');?>">
        						<div class="form-group">
        							<input type="text" name="username" class="form-control form-control-user" placeholder="Username" value="" required="">
        						</div>
        						<div class="form-group">
        							<input type="password" name="password" class="form-control form-control-user" placeholder="Password" value="" required="">
        						</div>
        						
        						<input type="submit" name="submit" value="Login" class="btn btn-primary btn-user btn-block">
                    
        				  </form>

                </div>
                <!-- form -->

              </div>
              <!--inner col-->

            </div>
            <!-- inner row -->

          </div>
          <!-- card body -->
          
        </div>
        <!-- card -->

      </div>
      <!-- outer col-->

    </div>
    <!-- outer row -->

  </div>
  <!-- container -->

</body>

</html>
