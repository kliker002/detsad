<?
require_once "php/connect_db.php";

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Информационная система Детсада</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap css -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <header id="header" class="header header-hide">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto"><span>Лю</span>бимый садик</a></h1>

      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.php">Домой</a></li>
          <li><a href="educators.php">Воспитатели</a></li>
          <li><a href="groups.php">Список Групп</a></li>
          <li><a href="regtodetsad.php">Регистрация в детский сад</a></li>
          <li><a href="lessons.php">Наши Кружки</a></li>
          <li><a href="login.php">Войти</a></li>
          <li><a href="auth.php">Зарегистрироваться</a></li>
          <?
           if ($_SESSION['logged']->admin == 1) {
            echo '<li><a href="apanel.php">Админ-панель</a></li>';
          }?>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->


  <!--==========================
    Hero Section
  ============================-->
    <section id="hero" class="wow fadeIn">
    <div class="hero-container">
      <h1>Добро пожаловать!</h1>
      <h2>3арегистрируйтесь или войдите для доступа к информации!</h2>
      <img src="img/hero-img.png" alt="Hero Imgs">
      <span class="btn-get-started scrollto">Ваш ребёнок будет доволен.</span>
    </div>
  </section><!-- #hero -->

<div class="container" style="margin-top: 15px;">
  <div class="row">
    <div class="col-md-12">
    <h1 style="text-align: center;margin-bottom: 15px;">ВОЙТИ</h1>
  </div>
    <div class="col-md-12">

      <form action="php/check_for_login.php" method="POST">
        <div class="form-group">
          <input type="email" name="email" class="form-control" placeholder="Enter Email">
        </div>
        <div class="form-group">
          <input type="password" name="pass" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
          <input type="submit" style="text-align: center;" class="btn btn-success">
        </div>
      </form>

    </div>
  </div>
</div>

<div class="container" style="margin-bottom: 15px;">
  <div class="row">
    <div class="col-md-6">
      <img src="img/Детскийсадлетом.jpg" alt="площадка" style="width: 100%; height: auto;">
    </div>
    <div class="col-md-6"><h4>В Петроградском районе в апреле 2015 года начал свою работу образовательно просветительский проект АКАДЕМИ’КА - частный детский сад, центр дополнительного образования и культурная площадка с разнообразной программой для детей и родителей. В отдельном четырехэтажном особняке на Кронверкской улице создано уникальное творческое пространство и глобальная исследовательская среда для детей от 1 до 11 лет и взрослых – в лучших европейских традициях коммерческих.</h4></div>
  </div>
</div>


  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>

  <script src="lib/superfish/superfish.min.js"></script>

  <script src="lib/wow/wow.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
