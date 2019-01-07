<? 
require_once "php/connect_db.php";
session_start();
if (!isset($_SESSION['logged'])) header("Location: login.php");
else{
$data = $_GET;
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
          <li><a href="php/logout.php">Выйти</a></li>
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
      <h1>Добро пожаловать в любимый садик</h1>
      <h2>Наши кружки</h2>
      <div class="container-img">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <img src="img/vospitatel4.jpg" style="width: 100%;height: auto;" alt="global-sad">
            </div>
           
          </div>
        </div>
      </div>
      <a href="regtodetsad.php" class="btn-get-started scrollto">Регистрация в детский сад</a>
    </div>
  </section><!-- #hero -->


<div class="container" style="margin-bottom: 15px;">
	<div class="row">
     <div class="col-md-6"><img src="img/risovanie.jpg" style="width: 100%; height: auto;" alt=""></div>
            <span class="col-md-6" style="text-align: center;">
              <h1 style="vertical-align: middle;">Рисование</h1>
              <h4>Рисование - это одно из самых красивых, разнообразных и одновременно доступных видов увлечений, знакомое каждому с самого раннего детства. Но в последнее время всё больше взрослых людей, которые раньше никогда не рисовали, пробуют себя в этом виде творчества, и у многих становится любимым занятием.В настоящее время появилось много возможностей для реализации своих талантов в этой сфере искусства.</h4>
            </span>
            <div class="col-md-6"><img src="img/engdeti.jpg" style="width: 100%; height: auto;" alt=""></div>
            <span class="col-md-6" style="text-align: center;">
              <h1 style="vertical-align: middle;">Английский язык</h1>
              <h4>Мы, взрослые, учим английский язык долго и мучительно. Ищем подходящий способ, пытаемся уложить в голове правила иной лингвистической системы, “перевоспитываем” свой артикуляционный аппарат для других звуков.Ребенку гораздо легче учить английский с нуля: дети буквально впитывают его! Те грамматические конструкции, которые мы старательно заучиваем, они моментально “поглощают”. Без анализа, к которому еще не способны, а просто так.</h4>
            </span>

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



<? }


?>