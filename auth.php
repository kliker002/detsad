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
        <h1><a href="#body" class="scrollto"><span>e</span>Startup</a></h1>

      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Домой</a></li>
          <li><a href="educators.php">Воспитатели</a></li>
          <li><a href="groups.php">Список Групп</a></li>
          <li><a href="#screenshots">Регистрация в детский сад</a></li>
          <li><a href="#team">Наши Кружки</a></li>
          <li><a href="login.php">Войти</a></li>
          <li><a href="auth.php">Зарегистрироваться</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->


  <!--==========================
    Hero Section
  ============================-->
    <section id="hero" class="wow fadeIn">
    <div class="hero-container">
      <h1>Welcome to eStartups</h1>
      <h2>Elegant Bootstrap Template for Startups, Apps &amp; more...</h2>
      <img src="img/hero-img.png" alt="Hero Imgs">
      <a href="#get-started" class="btn-get-started scrollto">Get Started</a>
      <div class="btns">
        <a href="#"><i class="fa fa-apple fa-3x"></i> App Store</a>
        <a href="#"><i class="fa fa-play fa-3x"></i> Google Play</a>
        <a href="#"><i class="fa fa-windows fa-3x"></i> windows</a>
      </div>
    </div>
  </section><!-- #hero -->

<div class="container" style="margin-top: 15px;">
  <div class="row">
    <div class="col-md-12">
    <h1 style="text-align: center;margin-bottom: 15px;">3арегистрироваться</h1>
  </div>
    <div class="col-md-12">

      <form action="php/check_for_register.php" method="POST">
        <div class="form-group">
          <input type="email" name="email" class="form-control" placeholder="Enter Email">
        </div>
        <div class="form-group">
          <input type="password" name="pass" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-success">
        </div>
      </form>

    </div>
  </div>
</div>

<div class="container" style="margin-bottom: 15px;">
  <div class="row">
    <div class="col-md-6">
      <img src="img/детская площадка.jpg" alt="площадка" style="width: 100%; height: auto;">
    </div>
    <div class="col-md-6">Детская площадка — место, предназначенное для игры детей, преимущественно дошкольного возраста. Находится в населённом пункте и ограждена от дорог. Детская площадка — территория, на которой расположены элементы детского уличного игрового оборудования с целью организации содержательного досуга.</div>
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
