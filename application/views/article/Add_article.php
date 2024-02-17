<?php
include("header.php");
?>

<div class="container">
<h1>Add Article</h1>
<?php echo form_open('Admin/addarticle') ?>
<?php echo form_hidden("user_id",$this->session->userdata('id')); ?>
<div class="form-group">
   <div> <?php echo form_error("article_title"); ?></div>
  <label for="exampleFormControlInput1" class="form-label">Article Title</label>
  <!-- <input type="email" class="form-control" id="Email" placeholder="Email"> -->
  <?php echo form_input(["class"=>"form-control","placeholder"=>"Add Article Title","type"=>"text","name"=>"article_title","value"=>set_value('article_title')]); ?>
</div>

<div><?php echo form_error("article_body"); ?></div>
<div class="form-group mb-5">
  <label for="exampleFormControlInput1" class="form-label">Article Body</label>
  <?php echo form_textarea(["class"=>"form-control","placeholder"=>"Article Body","name"=>"article_body","value"=>set_value("article_body")]) ?>
</div>

<?php echo form_submit(["class"=>"btn btn-default bg-primary text-light","value"=>"Submit"])  ?>
<!-- <button type="reset" class="btn btn-default bg-primary text-light">reset</button> -->

<?php echo form_reset(["class"=>"btn btn-default bg-danger text-light","value"=>"Reset","type"=>"reset","name"=>"reset"]) ?>
</div>
<?php include("footer.php"); ?>
