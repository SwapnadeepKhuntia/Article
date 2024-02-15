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
            <th>Artical body</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <?php //echo "<br>"; ?>
        <tbody>
        <?php if(count($art)) : ?>
        <?php foreach ($art as $artical) : ?>
            <td><?=  $artical->id; ?></td>
            <td><?=  $artical->article_title; ?></td>
            <td><?=  $artical->article_body; ?></td>
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