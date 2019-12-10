<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>403 Access Denied</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <link href="<?php echo base_url() ?>assets-backend/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="<?php echo base_url() ?>assets-backend/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="<?php echo base_url() ?>assets-backend/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="<?php echo base_url() ?>assets-backend/css/style.css" rel="stylesheet" />
   <link href="<?php echo base_url() ?>assets-backend/css/style-responsive.css" rel="stylesheet" />
   <link href="<?php echo base_url() ?>assets-backend/css/style-default.css" rel="stylesheet" id="style_color" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="error-500">
    <div class="error-wrap">
        <h1>Ouch!</h1>
        <h2>Looks like something went wrong</h2>
        <div class="metro green">
           <span> 4 </span>
        </div>
        <div class="metro yellow">
            <span> 0 </span>
        </div>
        <div class="metro purple">
            <span> 3 </span>
        </div>
        <p>Access Denied. <a href="<?= base_url('backend/user') ?>"> Return Home </a></p>
    </div>
</body>
<!-- END BODY -->
</html>