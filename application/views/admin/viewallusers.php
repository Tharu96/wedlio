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
                        <h4 class="card-title ">User details</h4>
                        <p class="card-category">Registered Customers and Vendor details</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        User ID
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Password
                                    </th>
                                    <th>
                                        User Role
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Level
                                    </th>
                                    <th>
                                        Created At
                                    </th>

                                </thead>
                                <tbody>
                                    <tr class="tr-shadow">
                                        <?php foreach ($h->result() as $row) { ?>

                                        <td><?php echo $row->userId; ?></td>
                                        <td><?php echo $row->email; ?></td>
                                        <td><?php echo $row->password; ?></td>
                                        <td><?php echo $row->userRole; ?></td>
                                        <td><?php echo $row->status; ?></td>
                                        <td><?php echo $row->level; ?></td>
                                        <td><?php echo $row->createdAt; ?></td>
                                    </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php include_once("footer.php") ?>

</script>
