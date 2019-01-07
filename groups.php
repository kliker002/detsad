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
      <h2>Приведите детей утром, получите гениев вечером</h2>
      <img src="img/sadik-global.jpg" style="width: 100%;height: auto;" alt="global-sad">
      <a href="educators.php" class="btn-get-started scrollto">Воспитатели</a>
    </div>
  </section><!-- #hero -->


<div class="container">
	<div class="row">
		<div class="col-md-10">
			<div class="groups">
	<form action="groups.php" class="groups" method="GET">
		<select name="groups_id" class="form-control">
			<?php
			 $groups = R::findAll('groups');
			foreach ($groups as $key => $value) {
				if ($data['groups_id'] == $value->id) {
					echo '<option value="' . $value->id . '" selected>' . $value->name . '</option>';
				}else{
					echo '<option value="' . $value->id . '">' . $value->name . '</option>';
				}
			}?>
		</select>
		
</div>

		</div>
		<div class="col-md-2">
			<input type="submit" name="submit" class="btn btn-success">
		</div>
	</form>
	</div>
</div>
<div class="container">
	<div class="row">
		<table border="1" class="table">
	<tr>
		<td>Имя</td>
		<td>Фамилия</td>
		<td>День рождения</td>
		<td>Группа</td>
	</tr>
		<?php 

		if (isset($data['groups_id'])) {
			$childs = R::findAll('childs', 'id_group = ? and active = ?', array($data['groups_id'], 1));
			foreach ($childs as $key => $value) {
				$group_id = R::findOne('groups', 'id = ?', array($value->id_group));
				echo "<tr>
					 <td>" . $value->fname . "</td>" .
					 "<td>" . $value->sname . "</td>" .
					 "<td>" . $value->birthdate . "</td>" .
					 "<td>" . $group_id->name . "</td>
					 </tr>";
			}
			# code...
		}else{
			$childs = R::findAll('childs', 'active = ?', [1]);
			foreach ($childs as $key => $value) {
				$group_id = R::findOne('groups', 'id = ?', array($value->id_group));
				echo "<tr>
					 <td>" . $value->fname . "</td>" .
					 "<td>" . $value->sname . "</td>" .
					 "<td>" . $value->birthdate . "</td>" .
					 "<td>" . $group_id->name . "</td>
					 </tr>";
			}
		}
		?>
		
</table>
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