<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Ichigo Daifuku</title>

      <link rel="shortcut icon" href="layouts/assets/img/delitekno.png" type="">
      <link rel="stylesheet" href="layouts/assets/css/style.css">
</head>

<body>

      <aside>

            <header>
                  <img src="layouts/assets/img/delitekno.png" class="brand">
                  <div class="user">Suwinda Aulansari</div>
            </header>

            <nav>
                  <ul>
                        <li>
                              <a href="index.php">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Beranda
                              </a>
                        </li>

                        <li>
                              <a href="index.php?hal=kat_tampil">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Kategori Mochi
                              </a>
                        </li>

                        <li>
                              <a href="index.php?hal=post_tampil">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Post Mochi
                              </a>
                        </li>

                        <li>
                              <a href="index.php?hal=foto_tampil">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Galeri Mochi
                              </a>
                        </li>
                  </ul>
            </nav>

      </aside>

      <main>
            <article>
                  <?php

                  require_once "vendor/autoload.php";
                  require_once "inc/Koneksi.php";

                  if (isset($_GET['hal'])) {
                        require $_GET['hal'] . ".php";
                  } else {
                        require "main.php";
                  }
                  ?>
            </article>

            <footer>
                  Copyright &copy; 2023. Designed by Suwinda Aulansari
            </footer>
      </main>

</body>

</html>