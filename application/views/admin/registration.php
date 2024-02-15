<?php include("header.php"); ?>
<div class="container">
    <h1>Registration</h1>
<?php echo form_open('Admin/registration') ?>
<div class="form-group">

<div> <?php echo form_error("fname"); ?></div>
  <label for="exampleFormControlInput1" class="form-label">First Name</label>
  <!-- <input type="email" class="form-control" id="Email" placeholder="Email"> -->
  <?php echo form_input(["class"=>"form-control","placeholder"=>"first Name","type"=>"text","name"=>"fname","value"=>set_value('fname')]); ?>
 </div>

 <div> <?php echo form_error("lname"); ?></div>
  <label for="exampleFormControlInput1" class="form-label">Last Name</label>
  <!-- <input type="email" class="form-control" id="Email" placeholder="Email"> -->
  <?php echo form_input(["class"=>"form-control","placeholder"=>"Last Name","type"=>"text","name"=>"lname","value"=>set_value('lname')]); ?>
 </div>

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

<?php echo anchor("Admin/login","Login?","class='link-class'") ?>
<?php include("footer.php"); ?>