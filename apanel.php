<?
require_once "php/connect_db.php";
session_start();
if (!isset($_SESSION['logged'] )) header("Location: login.php");
if (($_SESSION['logged']->admin != 1 )) header("Location: login.php");
$data = $_POST;

if (isset($data['create_ed'])) {
  $edu = R::dispense('educators');
  $edu->fname = $data['fname'];
  $edu->sname = $data['sname'];
  $edu->birthdate = $data['bdate'];
  R::store($edu);
  //R::store($edu);
}
if (isset($data['create_gr'])) {
  $group = R::dispense('groups');
  $group->description = $data['gr_description'];
  $group->name = $data['gr_name'];
  R::store($group);

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

          <?php if (isset($_SESSION['logged'])) {
            echo '<li><a href="php/logout.php">Выйти</a></li>';
          }else{
            echo '<li><a href="login.php">Войти</a></li>
          <li><a href="auth.php">Зарегистрироваться</a></li>';
          }
          if ($_SESSION['logged']->admin == 1) {
            echo '<li><a href="apanel.php">Админ-панель</a></li>';
          }
           ?>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->

    <a href="#childs-c" class="form-control"  style="text-align: center; margin-top: 100px;">Одобрить\отклонить детей</a>
<table id="#childs-c">
  <tr>
    <?

      echo '
      <table border="1"><tr>
      <td>Имя</td>
      <td>Фамилия</td>
      <td>Группа нынешняя</td>
      <td>Группа в которую нужно перенести</td>
      <td>Телефон</td>
      <td>Активный(1\0)</td>
      </tr>';
       $childs = R::findAll('childs');
      $all_groups = R::findAll('groups');
      $i=0;
      foreach ($childs as $key => $value) {
        $child_group= R::findOne('groups', 'id = ?', [$value->id_group]);

        echo '<form action="apanel.php" method="POST"><tr>
        <td>' . $value->fname . '</td>
        <td>' . $value->sname . '</td>
        <td>' . $child_group->name . '</td>
        <td><input type="text" name="group_text' . $i . '">
        </td>
        <td>' . $value->phone . '</td>
        <td><input type="text" name="active' . $i . '"></td>
        <td><input type="submit" name="submit' . $i . '"></td>
        </tr>' ;
        echo "</form>";
         if (isset($data["submit".$i])) {
          $select_group = R::findOne('groups','name = ?', [$data['group_text'.$i]]);
          $value->id_group =  $select_group->id;
          $value->active = $data['active'.$i];
          R::store($value);}
      
      $i++;
      }
      echo "</table>";
    
    ?>
  </tr>
</table>

<a href="#childs-educators" class="form-control"  style="text-align: center; margin-top: 15px;">Одобрить\отклонить воспитателей</a>
<table id="#childs-c">
  <tr>
    <?

      echo '
      <table border="1"><tr>
      <td>Имя</td>
      <td>Фамилия</td>
      <td>Группа</td>
      <td>Фото</td>
      <td>День рождения</td>
      <td>Образование</td>
      <td>Краткая информация</td>
      </tr>';
       $childs = R::findAll('educators');
      $all_groups = R::findAll('groups');
      $i=0;
      foreach ($childs as $key => $value) {
        $child_group= R::findOne('groups', 'id = ?', [$value->id_group]);

        echo '<form action="apanel.php" method="POST" enctype="multipart/form-data"><tr>
        <td>' . $value->fname . '</td>
        <td>' . $value->sname . '</td>
        <td><input type="text" name="egroup_text' . $i . '">
        </td>
        <td><input type="file" name="ephoto' . $i . '"></td>
        <td>' . $value->birthdate . '</td>

        <td> <input type="text" placeholder="Образование" name="educations' . $i . '"></td>
        <td> <input type="text" placeholder="Краткая информация" name="eaboutme' . $i . '"></td>
        <td><input type="submit" name="esubmit' . $i . '"></td>
        </tr>' ;
        echo "</form>";
         if (isset($data["esubmit".$i])) {

          print_r($_FILES);

          $upload = 'img/'.$_FILES['ephoto'.$i]['name'];
          move_uploaded_file($_FILES['ephoto'.$i]['tmp_name'], $upload);

          $select_group = R::findOne('groups','name = ?', [$data['egroup_text'.$i]]);
          $value->id_group =  $select_group->id;
          $value->educations = $data['educations'.$i];
          $value->aboutme = $data['eaboutme'.$i];
          $value->active = $data['active'.$i];
          $value->photo = $upload;
          R::store($value);}
      
      $i++;
      }
      echo "</table>";
  
    ?>
  </tr>
</table>
<form class="form-inline" action="apanel.php" method="POST">
  <div class="form-group mb-2">
    <strong>Добавление ещё одного воспитателя</strong>
    <input type="text" class="form-control" name="fname" placeholder="Имя">
  </div>
  <div class="form-group mb-2">
    <input type="text" class="form-control" name="sname" placeholder="Фамилия">
  </div>
  <div class="form-group mb-2">
    <input type="date" class="form-control" name="bdate" placeholder="Дата рождения">
  </div>
  <input type="submit" name="create_ed" class="btn btn-primary mb-2" value="Confirm">
</form>

<a href="#groups-c" class="form-control"  style="text-align: center; margin-top: 15px;">Одобрить\отклонить воспитателей</a>
<table id="#groups-c" border="1">
  <tr>
    <td>Айди</td>
    <td>Название</td>
    <td>Описание</td>
    <td>Удалить</td>
  </tr>
    <?
    $groups = R::findAll('groups');
    $i = 0;
    foreach ($groups as $key => $value) {
      echo '<form action="apanel.php" method="POST"><tr>
            <td>' . $value->id . '</td>
            <td>' . $value->name . '</td>
            <td>' . $value->description . '</td>
            <td> <input type="submit" name="groups' . $i . '" value="Удалить"></td>
            </tr></form>';
      if (isset($data['groups'.$i])) {
        $deletegame = R::exec('DELETE FROM groups WHERE id = ? ',[ $value->id]);
      }
      $i++;
    }
     ?>

</table>
<form class="form-inline" action="apanel.php" method="POST">
  <div class="form-group mb-2">
    <strong>Добавление ещё одной группы</strong>
    <input type="text" class="form-control" name="gr_name" placeholder="Название">
  </div>
  <div class="form-group mb-2">
    <input type="text" class="form-control" name="gr_description" placeholder="Описание">
  </div>
  <input type="submit" name="create_gr" class="btn btn-primary mb-2" value="Confirm">
</form>

  <!--==========================
    Get Started Section
  ============================-->
  

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
