<?php include_once("header.php") ?>
<?php include_once("leftpanel.php") ?>
<?php include_once("navbar.php") ?>
  
     
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-8 col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Customer Requests</h4>
                  <p class="card-category">New customers on 20th February, 2020</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>Customer Name</th>
                      <th>Email</th>
                      <th>Wedding Date</th>
                      <th>Wedding Location</th>
                    </thead>
                    <tbody>
                                    <!-- closinh tr tag missing -->
                                    <tr class="tr-shadow">

                                        <?php if(!empty($customerRequests)){ foreach ($customerRequests as $row) { ?>

                                        <td><?php echo $row->firstName; ?><?php echo " " ?><?php echo $row->lastName;  ?></td>
                                        <td><?php echo $row->email; ?></td>
                                        <td><?php echo $row->weddingDate; ?></td>
                                        <td><?php echo $row->weddingLocation; ?></td>                                       

                                        <td>
                                            <p style="margin:0;">
                                                <a
                                                    href="<?php echo base_url(); ?>index.php/welcome/send_mails_to_customers/<?php echo $row->customerId ?>">
                                                    <button type="button" class="btn btn-outline-secondary btn-sm"
                                                        id="delete" style="border:0;">
                                                        <i class="material-icons">mail</i>
                                                    </button>
                                                </a>


                                                <a
                                                    href="<?php echo base_url(); ?>/index.php/peopledetails/people_delete?>">
                                                    <button type="button" class="btn btn-outline-danger btn-sm"
                                                        id="delete" style="border:0;"
                                                        onclick="return confirm('Are you sure you want to delete?')">
                                                        <i class="material-icons">delete_forever</i>
                                                    </button>
                                                </a>
                                            </p>

                                        </td>
                                    </tr>
                                    <?php }
                                    } ?>
                                </tbody>
                  </table>
                </div>
              </div>
            </div>

            
           
          </div>
        </div>
      </div>

      <?php include_once("footer.php") ?>
      
