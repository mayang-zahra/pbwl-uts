<?php
session_start();

if (!isset($_SESSION['login'])) {
      header('Location: signin.php');
      exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>EHNYPEN ALBUM</title>
      <link rel="stylesheet" href="layouts/style.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>

<body style="background-color: #F08080;">

      <div class="container">
            <header>
                  <img src="layouts/assets/img/enhypen.jpg" alt="">
            </header>

            <nav>
                  <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php?hal=kat_tampil">Kategori</a></li>
                        <li><a href="index.php?hal=post_tampil">Post</a></li>
                        <li><a href="index.php?hal=photo_tampil">Photos</a></li>
                        <li><a href="index.php?hal=album_tampil">Album</a></li>
                        <li><a class="logout" href="logout.php">Logout</a></li>
                  </ul>
            </nav>

            <main>
                  <section>
                        <?php
                        if (isset($_GET['hal'])) {
                              require $_GET['hal'] . ".php";
                        } else {
                              require "main.php";
                        }
                        ?>
                  </section>
            </main>
      </div>

      <footer>
            <div class=" container">
                  <p>&copy; 2023 My Website. All Rights Reserved by Zahra Zoelkifli</p>
            </div>
      </footer>

</body>

</html>