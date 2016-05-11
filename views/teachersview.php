<?php
include ROOT.'/views/layouts/header.php';
require_once ROOT.'/model/Teachers.php';
?>

<div class="container-fluid">
<div class="container-fluid img-container">
</div>
    <div class="row">
        <div class="col-lg-6">
            <?php
            $teachers=Teachers::getTeachersListFirst();
            foreach ($teachers as $row){
                echo "<div class='row'>";
                echo "<div class='col-lg-3 photo' > <img  class='teacherPhoto' src='/bootstrap/images/teachers/$row->foto'> </div>";
                echo "<div class='col-lg-offset-2 fio'><a href='/prep/$row->number_teacher'> $row->last_name $row->first_name $row->patronymic</a></div>";
                echo "</div>";
            }
            ?>
        </div>
        <div class="col-lg-6">  <?php
            $teachers=Teachers::getTeachersListSecond();
            foreach ($teachers as $row){
                echo "<div class='row'>";
                echo "<div class='col-lg-3 photo' > <img  class='teacherPhoto' src='/bootstrap/images/teachers/$row->foto'> </div>";
                echo "<div class='col-lg-offset-2 fio'><a href='/prep/$row->number_teacher'> $row->last_name $row->first_name $row->patronymic</a></div>";
                echo "</div>";
            }
            ?></div>
        </div>


</div>


</div>
<?php include ROOT.'/views/layouts/footer.php';?>