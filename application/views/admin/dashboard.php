<?php
include("header.php");
?>
<?php if($this->session->flashdata("message")) : 
    $masclass = $this->session->flashdata("message_class");
    ?>
    <div class="alert <?= $masclass ?>">
   <h5 class="text-<?= $masclass ?> fw-bold"> <?php echo $this->session->flashdata("message"); ?> </h5>
   </div>
   <?php endif; ?>
<div>
   <a href="<?= base_url("Admin/addarticle")?>" class="btn btn-info mt-5">Add Article</a>
</div>
<?php //print_r($art); ?>
<div class="container">
    <table class="border border-2">
        <thead>
        <tr>
            <th>Artical Tital</th>
            <th>Artical body</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <?php //echo "<br>"; ?>
        <tbody>
        
        <?php if(count($art)) : ?>
        <?php foreach ($art as $artical) : ?>
            <tr>

            <td><?=  $artical->article_title; ?></td>
            <td><?=  $artical->article_body; ?></td>
            <td><a href="#" class="btn btn-primary">Edit</a></td>
            <td>
                 <?= 
                    form_open("admin/deletearticle"),
                    form_hidden("id",$artical->id),
                    form_submit(["name"=>"submit","value"=>"Delete","class"=>"btn btn-danger"]),
                    form_close();
                 ?>


            </td>
            </tr>
         <?php endforeach; ?>
         <?php else: ?>
            <tr>
                <td colspan="3">nodata</td>
            </tr>
         <?php endif; ?>
        </tbody>
    </table>
</div>
<?php include("footer.php"); ?>