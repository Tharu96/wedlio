<?php include_once("header.php")?>
<?php include_once("leftpanel.php")?>
<?php include_once("navbar.php")?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Basic User Details <a  href="<?php echo base_url();?>index.php"></a></h4>
                  <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                </div>
                <div class="card-body">
                  <div class="table-responsive">
									<?php echo anchor('User_c/viewBasicUserDetails','Add Customer', ['class'=>'btn btn-primary']); ?>
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          User Id
                        </th>
                        <th>
                          First Name
                        </th>
                        <th>
                          Last Name
                        </th>
                        <th>
                          Contact No
                        </th>
                        <th>
                          NIC
                        </th>
												<th>
                          Address
                        </th>
                      </thead>
                      <tbody><?php if(count($posts)):?>
	  		<?php foreach($posts as $post):?>
		    <tr >
		      <th scope="row"><?php echo $post->userId;?></th>
			  <td><?php echo $post->firstName;?></td>
		      <td><?php echo $post->lastName;?></td>
		      <td><?php echo $post->contactNo;?></td>
		      <td><?php echo $post->NIC;?></td>
					<td><?php echo $post->address;?></td>
		    </tr>  
		<?php endforeach;?>
		    <?php else: ?>
		    	<tr>
		    		<td>No Records found</td>
		    	</tr>
		    <?php endif;?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> User Details- Other  </h4>
                  <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <th>
                          User ID
                        </th>
                        <th>
                          Userame
                        </th>
                        <th>
                          Status
                        </th>
                        <th>
                          User Role
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            Dakota Rice
                          </td>
                          <td>
                            Niger
                          </td>
                          <td>
                            Oud-Turnhout
                          </td>
                          <td>
                            $36,738
                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            Minerva Hooper
                          </td>
                          <td>
                            Curaçao
                          </td>
                          <td>
                            Sinaai-Waas
                          </td>
                          <td>
                            $23,789
                          </td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                            Sage Rodriguez
                          </td>
                          <td>
                            Netherlands
                          </td>
                          <td>
                            Baileux
                          </td>
                          <td>
                            $56,142
                          </td>
                        </tr>
                        <tr>
                          <td>
                            4
                          </td>
                          <td>
                            Philip Chaney
                          </td>
                          <td>
                            Korea, South
                          </td>
                          <td>
                            Overland Park
                          </td>
                          <td>
                            $38,735
                          </td>
                        </tr>
                        <tr>
                          <td>
                            5
                          </td>
                          <td>
                            Doris Greene
                          </td>
                          <td>
                            Malawi
                          </td>
                          <td>
                            Feldkirchen in Kärnten
                          </td>
                          <td>
                            $63,542
                          </td>
                        </tr>
                        <tr>
                          <td>
                            6
                          </td>
                          <td>
                            Mason Porter
                          </td>
                          <td>
                            Chile
                          </td>
                          <td>
                            Gloucester
                          </td>
                          <td>
                            $78,615
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

	<?php include_once("footer.php")?>
