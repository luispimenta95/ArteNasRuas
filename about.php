<!doctype html>
<?php include 'conecta.php';?>
<html lang="en">
  <head>
    <title>Arte na rua | Sobre</title>
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

<br><br><br>
    <section class="site-section pt-5">
      <div class="container">
        
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-12 main-content">
            
            <div class="row">
              <div class="col-md-12">
                <h2 class="mb-4">Projeto Arte na Rua</h2>
                <p class="mb-5"><img src="img/logo.jpeg" alt="Image placeholder" class="img-fluid"></p>

             <h3>  A INSTITUIÇÃO : </h3>

<p>O Fundo de Envolvimento da Indústria, Comércio e Turismo é uma Organização da Sociedade Civil sem fins lucrativos, de direito privado, sem vinculação e qualquer atividade de cunho político-partidário ou religioso, autônoma e independente, que incentiva, apoia e promove a indústria, comércio turismo e cultura, é uma organização que abrange diferentes manifestações e tendências culturais, promovendo movimentos sociais, culturais, educativos, elaborando, coordenando e executando projetos para as áreas de assistência social, trabalho, educação, cultura, saúde, meio ambiente, promovendo também seminários, cursos, congressos etc. A Organização recebeu seu registro oficial em 24 de outubro de 2002 e, desde então, vêm desenvolvendo diversos trabalhos que muito engrandece a cidade de Sobradinho e entorno.
</p>

<h3>O PROJETO :</h3>


<p>

O projeto Arte na Rua tem como principal objetivo levar à comunidade o entretenimento através da plataforma digital com apresentações de contação de histórias, mágicos, palhaços e ministração de palestras educativas, informativas, motivacionais, inclusivas, sustentáveis e de grande valia ao ser em formação, no qual isso venha atingir diretamente o pensar, elevando a autoestima e a vontade de vitória. 
</p>
  <p>O projeto cumpre o papel no processo de produzir uma série de vídeos marcante e proporcionar experiências culturais nova para Sobradinho e entorno produzindo um evento digital organizado e estruturado e contribuído, assim, para a disseminação da cultura e aprendizagem. Diante disso, o projeto entregará a sociedade um espaço de conexões culturais, inovação, aprendizagem e novas experiências com o mundo digital. A esse conjunto, agrega-se a visão sustentável que aborda as seguintes visões socioeconômicas:

    <ul>
      <li>Valorização e fortalecimento da identidade da cultura e economia local;</li>
<li> Ser uma base de educação sustentável;</li>
<li>Indução de práticas de economia baixo carbono no mercado de eventos;</li>
<li>Ser um vetor para fortalecimento econômico e cultural da cidade;</li>
<li>Redução de impactos ambientais.</li>

    </ul>

</p>
              </div>
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