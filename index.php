<!doctype html>
<?php include 'conecta.php'; ?>
<html lang="en">
  <head>
    <title>Arte nas ruas | Início</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="icon" href="img/logo.jpeg" />


    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-172818631-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-172818631-1');
    </script>
  </head>
  <body>
    

    <div class="wrap">

 
       <div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h4 class="text-white">Collapsed content</h4>
      <span class="text-muted">Toggleable via the navbar brand.</span>
    </div>
  </div>
  
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php">Arte na rua</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
                   <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="category.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Notícias</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown04">
        <?php 
        
        $sql2 = "SELECT * from noticia n order by n.titulo_noticia ";
$result2 = $conn->query($sql2);

while($noticias = $result2->fetch_assoc()) { 

        ?>
                            <a class="dropdown-item" href="noticia.php?id=<?php echo $noticias["id_noticia"] ?>"><?php echo $noticias["titulo_noticia"] ?></a>

    
                            <?php
                        }
                    ?>

                    
                  </div>

                </li>
                

      <li class="nav-item">
        <a class="nav-link" href="about.php">Sobre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Entre em contato</a>
      </li>
    </ul>
  </div>
</nav>
</div>
      <section class="site-section pt-5 pb-5">
        <div class="container">
          <br><br><br>
          <h1 class="text-center">Arte nas ruas</h1>
          <br><br><br>
            <div class="row">
              <div class="col-md-12">
<img src="img/logo.jpeg" class="img-fluid">
              </div> 
              <br><br><br>
  <div class="col-md-12">        
  <br><br><br>  
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <?php
                   $sql_carousel = "SELECT * from imagem_noticia";
$resultado_carousels = $conn->query($sql_carousel);
                  $qnt_slide = mysqli_num_rows($resultado_carousels);
                  $cont_marc = 0;
                  while($cont_marc < $qnt_slide){
                    echo "<li id='valor-car' data-target='#myCarousel' data-slide-to='$cont_marc'></li>";
                    $cont_marc++;
                  }
                  ?>
                </ol>
                <div class="carousel-inner">

                  <?php
                  $cont_slide = 0;
                  while( $row_slide = mysqli_fetch_assoc($resultado_carousels)){
                    $active = "";
                    if($cont_slide == 0){
                      $active = "active";
                    }
                    echo "<div class='carousel-item $active'>";
                    echo "<img class='d-block w-100' src='admin/UP/".$row_slide['imagem']."'>";
                    echo "</div>";
                    $cont_slide++;
                  }
                  ?>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
              
              
            


          
        </div>
      </div>
    </div>


      </section>
      <!-- END section -->

      <section class="site-section py-sm">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h2 class="mb-4">Ultimas notícias</h2>
            </div>
          </div>
          <div class="row blog-entries">
            <div class="col-md-12 col-lg-12 main-content">
              <div class="row">
                
<?php 

 $busca_noticias = "SELECT * from noticia n order by n.id_noticia desc ";
$result3 = $conn->query($busca_noticias);
while($noticias2 = $result3->fetch_assoc()) { 

        ?>
           


                <div class="col-md-4">
                  <a href="noticia.php?id=<?php echo $noticias2["id_noticia"] ?>" class="blog-entry element-animate" data-animate-effect="fadeIn">
                    <?php 
     $sql_capa = "SELECT * from imagem_noticia n where n.id_noticia=". $noticias2["id_noticia"]." LIMIT 1";
$result_capa = $conn->query($sql_capa);
$imagem = $result_capa->fetch_assoc();
// Noticias no index


                    ?>

                    <img src="admin/UP/<?php echo $imagem['imagem']; ?>" alt="Image placeholder">
                    <div class="blog-content-body">
                      <div class="post-meta">
                        <span class="author mr-2">Arte nas ruas</span>&bullet;
                        <span class="mr-2"> <?php echo date('d/m/Y  H:i', strtotime($noticias2["data_noticia"])); ?> </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> <?php

$sql_comentarios = "SELECT * FROM comentario_noticia c WHERE c.id_noticia =". $noticias2["id_noticia"]."";
    $resultado_comentarios = mysqli_query($conn, $sql_comentarios);


$total_comentarios = mysqli_num_rows($resultado_comentarios);

echo $total_comentarios;
?>


                      </span>
                      </div>
                      <h2><?php echo $noticias2["titulo_noticia"] ?></h2>
                    </div>
                  </a>
                </div>
       
<?php } ?>
       
              </div>

    

              

              

            </div>

            <!-- END main-content -->

          

              
            <!-- END sidebar -->

          </div>
        </div>
      </section>
    
<footer class="page-footer font-small blue pt-4 site-footer">

  <div class="row">
    <div class="col">
     <img src = "img/esquerda.png">
    </div>
    <div class="col">
     <img src = "img/direita.png">
    </div>
  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Desenvolvido por:
    Luis Felipe A. Pimenta
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
      <!-- END footer -->

    </div>
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>

    
    <script src="js/main.js"></script>
  </body>
</html>