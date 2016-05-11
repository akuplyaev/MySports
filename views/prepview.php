<?php include ROOT.'/views/layouts/header.php';?>

<div class="container-fluid">

    <?php
    foreach ($teacherInfo as $row){
        echo "<div class='row'>";
        echo "<div class='col-lg-2 photo' > <img  class='teacherPhoto' src='/bootstrap/images/teachers/$row->foto'> </div>";
        echo "<div class='col-lg-offset-2'>$row->description</div>";
        echo "</div>";
    }
    ?>

</div>

<?php include ROOT.'/views/layouts/footer.php';?>
