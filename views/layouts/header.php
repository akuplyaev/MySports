<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/bootstrap/ico/favicon.ico">

    <title>Sports</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/bootstrap/css/main.css">
    <script src="/bootstrap/js/jquery-1.11.3.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>

</head>

<body>
<div class="container">
    <!-- Static navbar -->
<header>   <div class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <div class="navbar-header">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                          </button>
                  </button>
                  <a class="navbar-brand" href="#">
                      Sport
                  </a>
              </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/main">Главная</a></li>
                    <li><a href="/main/teachers">Преподаватели</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Кафедра <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/main/chair">О кафедре</a></li>
                            <li><a href="?act=baskeetball">Спортивные объекты</a></li>
                            <li><a href="?act=ping_pong">Спортакиада РГУ</a></li>
                            <li><a href="/contacts">Контакты</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Секции <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <?php
                            require ROOT.'/model/Section.php';
                            $categoryList=Section::getSectionList();
                            foreach ($categoryList as $row){
                                echo '<li><a href="#">'.$row['sec_name'].'</a></li>';
                            }
                            ?>
                        </ul>
                    </li>
                </ul>
                <form action class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Login" value="">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Password" value="">
                    </div>
                    <button type="submit" class="btn btn-primary" >
                        <span class="glyphicon glyphicon-log-in"></span>
                        
                        <i>Войти</i>
                    </button>
                </form>

            </div><!--/.nav-collapse -->
       </div><!--/.container-fluid -->
        </div>
</header>




