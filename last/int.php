<?php require_once('header.php'); ?>
<head>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="assets/css/jquery.bxslider.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/rating.css">
	<link rel="stylesheet" href="assets/css/spacing.css">
	<link rel="stylesheet" href="assets/css/bootstrap-touch-slider.css">
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<link rel="stylesheet" href="assets/css/tree-menu.css">
	<link rel="stylesheet" href="assets/css/select2.min.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<div class="page">
    <div class="container">
        <div class="row">            
            <div class="col-md-12"> 
            <?php require_once('customer-sidebar.php'); ?>
            </div>
            <div class="col-md-12">
                <div class="user-content">
                    <h3 class="text-center">
                    </h3>
                    <form action="savedata.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <p style="color:Red; text-align:center; font-size:3.5rem;">NOTE</p>
                                    <p>Plss double check you Payment id to avoid mistake</p>
                                    <label for="">Payment ID</label>
                                    <input type="text" class="form-control" name="payment_id" placeholder="Input your Payment ID">
                                </div>
                                <div class="form-group">
                                    <label for="">Note</label>
                                    <input type="text" class="form-control" name="mess" placeholder="Input your Reminder">
                                </div>
                                <div class="form-group">
                                    <label for="">Choose design you want</label>
                                    <input type="file" name="image">
                                </div>
                                <input type="submit" class="btn btn-primary" value="Submit"name="form1">
                            </div>
                        </div>
                        
                    </form>
                </div>                
            </div>
        </div>
    </div>
</div>
<?php require_once('footer.php'); ?>