<?php include_once("header.php") ?>
<?php include_once("leftpanel.php") ?>
<?php include_once("navbar.php") ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<div class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title mt-0"> Vendors</h4>
                        <p class="card-category"> Succeccfully Registered Vendors </p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        UserId
                                    </th>
                                    <th>
                                        Business Name
                                    </th>
                                    <th>
                                        Business Description
                                    </th>
                                    <th>
                                        Company Website
                                    </th>
                                    <th>
                                        Company Address
                                    </th>
                                    <th>
                                        District
                                    </th>
                                    <th>
                                        Business Contact No
                                    </th>
                                    <th>
                                        Company Description
                                    </th>
                                    <th>
                                        Contact Person Name
                                    </th>
                                    <th>
                                        Contact Person Email
                                    </th>
                                    <th>
                                        Contact Person NIC
                                    </th>
                                    <th>
                                        Contact Person Phone
                                    </th>
                                    <th>Category</th>



                                </thead>
                                <tbody>
                                    <tr class="tr-shadow">
                                        <?php foreach ($k->result() as $row) { ?>

                                        <td><?php echo $row->userId; ?></td>
                                        <td><?php echo $row->businessName; ?></td>
                                        <td><?php echo $row->businessDescription; ?></td>
                                        <td><?php echo $row->companyWebsite; ?></td>
                                        <td><?php echo $row->companyAddress; ?></td>
                                        <td><?php echo $row->district; ?></td>
                                        <td><?php echo $row->businessContactNo; ?></td>
                                        <td><?php echo $row->companydescription; ?></td>
                                        <td><?php echo $row->firstName; ?><?php echo " " ?><?php echo $row->lastName; ?>
                                        </td>
                                        <td><?php echo $row->contactEmail; ?></td>
                                    
                                        <td><?php echo $row->contactNo; ?></td>
                                        <td><?php echo $row->categoryId; ?></td>
                                        <td><?php echo $row->image; ?></td>
                                        <td><?php echo $row->createdAt; ?></td>


                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Pending Requests</h4>
                        <p class="card-category"> Pending Vendor Registration Requests</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        Temporary ID
                                    </th>
                                    <th>
                                        Business Email
                                    </th>
                                    <th>
                                        Business Name
                                    </th>
                                    <th>
                                        Business Description
                                    </th>
                                    <th>
                                        Company Description
                                    </th>
                                    <th>Contact Person Name
                                    </th>
                                    <th>
                                        Contact Person Email
                                    </th>
                                    <th>
                                        Contact Person Phonr
                                    </th>
                                    <th>
                                        Contact Person NIC
                                    </th>

                                </thead>
                                <tbody>
                                    <!-- closinh tr tag missing -->
                                    <tr class="tr-shadow">

                                        <?php foreach ($h->result() as $row) { ?>

                                        <td><?php echo $row->tempId; ?></td>
                                        <td><?php echo $row->businessEmail; ?></td>
                                        <td><?php echo $row->businessName; ?></td>
                                        <td><?php echo $row->businessDescription; ?></td>
                                        <td><?php echo $row->companyDescription; ?></td>
                                        <td><?php echo $row->firstName; ?><?php echo " " ?><?php echo $row->lastName; ?>
                                        </td>
                                        <td><?php echo $row->contactEmail; ?></td>
                                        <td><?php echo $row->contactNo; ?></td>
                                        <td><?php echo $row->nic; ?></td>

                                        <td>
                                            <p style="margin:0;">
                                                <a
                                                    href="<?php echo base_url(); ?>/index.php/vendor/add_vendor/<?php echo $row->tempId ?>">
                                                    <button type="button" class="btn btn-outline-secondary btn-sm"
                                                        id="delete" style="border:0;">
                                                        <i class="material-icons">done</i>
                                                    </button>
                                                </a>


                                                <a
                                                    href="<?php echo base_url(); ?>/index.php/peopledetails/people_delete/<?php echo $row->nic ?>">
                                                    <button type="button" class="btn btn-outline-danger btn-sm"
                                                        id="delete" style="border:0;"
                                                        onclick="return confirm('Are you sure you want to delete?')">
                                                        <i class="material-icons">delete_forever</i>
                                                    </button>
                                                </a>
                                            </p>

                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>











            < /div> </div> </div> <?php include_once("footer.php") ?> </script>