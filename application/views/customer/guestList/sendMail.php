<h3>Send Mail</h3>



<?php extract($guestdetails); ?>



<?php if($error = $this->session->flashdata('msg')){ ?>
     <p style="color: green;"><strong>Success!</strong> <?php echo  $error; ?><p>
<?php } ?>



<form method="POST" action="<?php echo base_url(); ?>index.php/guestController/send/">

 <input type="email" name="from" class="form-control"  value="<?php echo $email; ?>"  ><br>
 <textarea name="message" cols="50" rows="7" class="form-control" placeholder="Enter message here" required></textarea><br>

 <button type="submit" class="btn btn-outline-danger btn-rounded waves-effect">SEND</button>
</form>
