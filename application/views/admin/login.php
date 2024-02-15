<?php
include("header.php");
?>
<div class="container">
    <h1>Admin form Login</h1>
<?php echo form_open('Admin/login') ?>
<div class="form-group">
   <div> <?php echo form_error("email"); ?></div>
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <!-- <input type="email" class="form-control" id="Email" placeholder="Email"> -->
  <?php echo form_input(["class"=>"form-control","placeholder"=>"Email","type"=>"email","name"=>"email","value"=>set_value('email')]); ?>
</div>

<div><?php echo form_error("pass"); ?></div>
<div class="form-group mb-5">
  <label for="exampleFormControlInput1" class="form-label">Password</label>
  <?php echo form_password(["class"=>"form-control","placeholder"=>"Password","name"=>"pass","value"=>set_value("pass")]) ?>
</div>

<?php echo form_submit(["class"=>"btn btn-default bg-primary text-light","type"=>"submit","value"=>"submit","name"=>"submit"])  ?>
<!-- <button type="reset" class="btn btn-default bg-primary text-light">reset</button> -->

<?php echo form_reset(["class"=>"btn btn-default bg-danger text-light","value"=>"Reset","type"=>"reset","name"=>"reset"]) ?>
</div>
<?php echo anchor("Admin/registration","sign up?","class='link-class'") ?>
<?php // echo validation_errors(); ?>
<?php include("footer.php"); ?>
