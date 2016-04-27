<?php
include ROOT.'/views/layouts/header.php';
$teacher=Teachers::getTeachersList(); ?>
<div class="container">

    <?php foreach($teacher as $row)
    {
        ?>
            <div class="row" style="border: 2px double #FFB7B7;">
        <div class="col-lg-4 tt">
        <p><?php echo $row['last_name']." ".$row['first_name']." ".$row['patronymic'];?></p>
        </div>
        <div class="col-lg-6">
            <p><?php echo $row['description'];?></p>
        </div>
    </div>
  <?php
    }
    ?>

</div>
<?php include ROOT.'/views/layouts/footer.php';?>