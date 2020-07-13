<?php include_once("header.php") ?>
<?php include_once("leftpanel.php") ?>
<?php include_once("navbar.php") ?>
  
     
      <div class="content">
        <div class="container-fluid">
          <div class="row">
                <div class="col-md-6">
                        <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Send Mail</h4>
                            <p class="card-category"></p>
                        </div>

                        <div class="card-body">
                        
                        
                        <form method="POST" action="<?php echo base_url(); ?>index.php/Vendor/send_email_to_customer">
                        <fieldset> 

                        
                            <div class="row">
                                <div class="col-md-8">
                                <div class="form-group">
                                    <label class="bmd-label-floating">To: </label>
                                    <div class="col-md-9">
                                    <input type="text" class="form-control" value="<?php echo $email;?>" name="custEmail">
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Enter Message here</label>
                                    <div class="col-md-9">
                                    <input type="text" class="form-control" name="message" required>
                                    </div>
                                </div>
                                </div>
                            </div>

                           

                            <button type="submit" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-check"></span>Send Mail</button>
                            </fieldset>
                            </form>
                                <?php echo form_close(''); ?>
                            <div class="clearfix"></div>
                        
                        </div>
                        </div>
                        </div>
        </div>
      </div>

      <?php include_once("footer.php") ?>