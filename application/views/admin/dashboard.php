<?php
include("header.php");
?>
<?php //print_r($art); ?>
<div class="container">
    <table class="border border-2">
        <thead>
        <tr>
            <th>Id</th>
            <th>Artical Tital</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>

        <tbody>
        <?php if(count($art)) : ?>
        <?php foreach ($art as $artical) : ?>
            <td>1</td>
            <td><?=  $artical->article_title; ?></td>
            <td><a href="#" class="btn btn-primary">Edit</a></td>
            <td><a href="#" class="btn btn-danger">Delete</a></td>

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