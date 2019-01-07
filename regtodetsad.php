<? 
require_once "php/connect_db.php";
session_start();
if (!isset($_SESSION['logged'])) header("Location: login.php");
else{
$data = $_POST;

if (isset($data['submit'])) {
  $child_add = R::dispense('childs');
  $child_add->fname = $data['fname'];
  $child_add->sname = $data['sname'];
  $child_add->birthdate = $data['birthdate'];
  $child_add->phone = $data['phone'];
  R::store($child_add);
}

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

<section id="hero" class="wow fadeIn">
    <h1 style="text-align: center;">Заявка в детский сад</h1>
    <div class="container">
      <div class="row">
        <form style="position: relative; top: 50%; left: 25%;" method="POST" action="regtodetsad.php">
  <div class="form-row">
    <div class="form-group col-md-6">
      <input type="text" class="form-control" name="fname" placeholder="Имя ребёнка">
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" name="sname" placeholder="Фамилия ребёнка">
    </div>
  </div>
  <div class="form-group">
    <strong>Дата рождения: </strong>
    <input type="date" id="start" name="birthdate"
       value="2018-07-22" 
       min="2012-01-01" max="2018-12-02">
  </div>
  <div class="form-group">
    <strong>Контактный телефон:</strong><input type="phone" name="phone" class="form-control">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
    </div>
  </section><!-- #hero -->




 
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