<?php include ROOT.'/views/layouts/header.php'; ?>
<div  id="carousel" class="carousel" data-ride="carousel">
    <ol class="carousel-indicators">
        <li class="active" data-target="#carousel" data-slide-to="0"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel carousel-inner">
        <div class="item active">
            <img src="/bootstrap/images/1.jpg" alt="">
            <div class="carousel-caption">

                <p class="slad">Спартакиада среди общежитий</p>
            </div>
        </div>
        <div class="item">
            <img src="/bootstrap/images/2.jpg" alt="">
            <div class="carousel-caption">

                <p class="slad">Спартакиада среди общежитий</p>
            </div>
        </div>
        <div class="item">
            <img src="/bootstrap/images/3.jpg" alt="">
            <div class="carousel-caption">

                <p class="slad">Спартакиада среди общежитий</p>
            </div>
        </div>
    </div>
<a href="#carousel" class="left carousel-control" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
</a>
<a href="#carousel" class="right carousel-control" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
</a>
</div>
<?php include ROOT.'/views/layouts/footer.php';?>


