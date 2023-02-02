<?php
session_start();
include("functions.php");
check_session_id();

$pdo = connect_to_db();

$sql = 'SELECT * FROM todo_table LEFT OUTER JOIN (SELECT todo_id, COUNT(id) AS like_count FROM like_table GROUP BY todo_id) AS result_table ON todo_table.id = result_table.todo_id';


$stmt = $pdo->prepare($sql);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<!-- CSS only -->
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark py-1">
     <div class="container">
     <h3 class="text-white pt-1">ようこそ <?= $_SESSION['username']?></h3>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item text-white">
          <a class="nav-link text-white" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="logout.php">ログアウト</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="goal.php">目標ページ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="outline.php">プロフィール</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="form1.php">問い合わせ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="">仲間</a>
        </li>
      </ul>
    </div>
  </div>
  </nav>
  <a href="goal.php" class="button">the goal</a>
<!-- <div class="hero vh-100 d-flex aligh-items-center">
 <div class="container">
  <div class="row">
   <div class="col-lg-10 mx-auto text-center mt-5">   
    </div>
  </div>
 </div>
</div> -->
</body>
</html>