<?php include_once("header.php") ?>
<?php include_once("leftpanel.php") ?>
<?php include_once("navbar.php") ?>

<div class="container"> <br>
    <h3>Add New Category</h3> <hr>
    <?php echo form_open_multipart('admin/category_save'); ?> 
    <fieldset>

    
        <div class="form-group">
        <label for="categoryName">Category Name</label>
        <div class="col-md-9">
            <?php echo form_input(['name'=>'categoryName', 'placeholder'=>'Enter Category Name', 'class'=>'form-control']) ?>
        </div>

        <div class="col-md-5">
            <?php echo form_error('categoryName', '<div class="text-danger">', '</div>'); ?>
        </div>
        </div>


        <div class="form-group">
        <label for="description">Description</label>
        <div class="col-md-9">
            <?php echo form_input(['name'=>'description', 'placeholder'=>'Description', 'class'=>'form-control']) ?>
        </div>

        <div class="col-md-5">
            <?php echo form_error('description', '<div class="text-danger">', '</div>'); ?>
        </div>
        </div>

        
        
        <?php echo form_upload(['name'=>'userfile','value'=>'Save']); ?>
        <?php echo form_error('userfile','<div class="text-danger">', '</div>' ); ?>
        <br><hr>
        

        
        
       
        <?php echo form_submit(['name' => 'submit', 'value' => 'Add Category', 'class'=>'btn btn-primary']); ?>
    </fieldset>
    <?php echo form_close(''); ?>

</div>

<br><hr>
<?php include_once("footer.php") ?>
