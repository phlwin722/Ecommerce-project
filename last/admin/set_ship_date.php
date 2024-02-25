<?php require_once('header.php'); ?>
<section class="content-header">
    <div class="content-header-left">
        <h1>Schedule Shipping Date</h1>
    </div>
</section>


<section class="content">
    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal" action="save_ship_date.php" method ="post">
                <div class="box box-info">
                    <div class="box-body">
                        <p style="padding-bottom: 20px;">Set the date when Design is done to notif your customer</p>

                        <div class="form-group">
                            <label for="date" class="col-sm-2 control-label"> Estimated Date </label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control" id="date" name="date">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="payment_id" class="col-sm-2 control-label">Payment ID </label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="payment_id" name="payment_id">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label"></label>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success pull-left" name="form1">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>




<?php require_once('footer.php'); ?>

