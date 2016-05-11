<?php
include ROOT.'/views/layouts/header.php';?>

<div class="container-fluid">
<div class="container-fluid img-container">
</div>
<?php
require_once ROOT.'/model/Teachers.php';
$teachers=Teachers::getTeachersList();
foreach ($teachers as $row){
    echo "<div class='row'>";
    echo "<div class='col-lg-2 photo' > <img  class='teacherPhoto' src='/bootstrap/images/teachers/$row->foto'> </div>";
    echo "<div class='col-lg-offset-2'><a href='/prep/$row->number_teacher'> $row->last_name $row->first_name $row->patronymic</a></div>";
    echo "</div>";
}
?>

</div>


</div>
<?php include ROOT.'/views/layouts/footer.php';?>