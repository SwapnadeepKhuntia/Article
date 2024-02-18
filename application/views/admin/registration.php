<?php include("header.php"); ?>
<div class="container">
    <h1>Registration</h1>
   <?php if($this->session->flashdata("reg_message")) : 
    $resclass = $this->session->flashdata("res_class");
    ?>
    <div class="alert <?= $resclass ?>">
   <h5 class="text-<?= $resclass ?> fw-bold"> <?php echo $this->session->flashdata("reg_message"); ?> </h5>
   </div>
   <?php endif; ?>
<?php echo form_open('Admin/registration') ?>
<div class="form-group">

<div> <?php echo form_error("firstname"); ?></div>
  <label for="exampleFormControlInput1" class="form-label">First Name</label>
  <!-- <input type="email" class="form-control" id="Email" placeholder="Email"> -->
  <?php echo form_input(["class"=>"form-control","placeholder"=>"first Name","type"=>"text","name"=>"firstname","value"=>set_value('firstname')]); ?>
 </div>

 <div> <?php echo form_error("lastname"); ?></div>
  <label for="exampleFormControlInput1" class="form-label">Last Name</label>
  <!-- <input type="email" class="form-control" id="Email" placeholder="Email"> -->
  <?php echo form_input(["class"=>"form-control","placeholder"=>"Last Name","type"=>"text","name"=>"lastname","value"=>set_value('lastname')]); ?>
 </div>

  <div> <?php echo form_error("email"); ?></div>
    <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <!-- <input type="email" class="form-control" id="Email" placeholder="Email"> -->
        <?php echo form_input(["class"=>"form-control","placeholder"=>"Email","type"=>"email","name"=>"email","value"=>set_value('email')]); ?>
    </div>

<div><?php echo form_error("password"); ?></div>
<div class="form-group mb-5">
  <label for="exampleFormControlInput1" class="form-label">Password</label>
  <?php echo form_password(["class"=>"form-control","placeholder"=>"Password","name"=>"password","value"=>set_value("password")]) ?>
</div>

<?php echo form_submit(["class"=>"btn btn-default bg-primary text-light","type"=>"submit","value"=>"submit"])  ?>
<!-- <button type="reset" class="btn btn-default bg-primary text-light">reset</button> -->

<?php echo form_reset(["class"=>"btn btn-default bg-danger text-light","value"=>"Reset","type"=>"reset","name"=>"reset"]) ?>
</div>

<?php echo anchor("Admin/login","Login?","class='link-class'") ?>
<?php include("footer.php"); ?>