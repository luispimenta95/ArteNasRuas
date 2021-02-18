<?php include 'conecta.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Arte nas ruas | Contato</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">
     <script src="https://www.google.com/recaptcha/api.js"></script>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

        <link rel="icon" href="img/logo.jpeg" />

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
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

    <section class="site-section">
      <div class="container">
        <div class="row mb-4">
          <div class="col-md-6">
            <h1>Envie uma mensagem</h1>
          </div>
        </div>
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-12 main-content">
            
            <form id="form1" action="contato.php" method="post">
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Nome</label>
                      <input type="text" id="name" name='nome' class="form-control "required>
                    </div>
                    <div class="col-md-12 form-group">
                      <label for="phone">Telefone</label>
                      <input type="text" id="phone" name="telefone" class="form-control " required>
                    </div>
                    <div class="col-md-12 form-group">
                      <label for="email">Email</label>
                      <input type="email" id="email" name="email" class="form-control " required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="message">Escreva sua mensagem</label>
                     <textarea id="message" cols="30" rows="10" class="form-control" name="mensagem" required></textarea>
                     <!-- <input type="text" id="mensagem" name="mensagem" class="form-control " required> -->
                    </div>
                  </div>
                  <div class="row">
                    
                                            
                  </div>
                  <div class="g-recaptcha" data-sitekey="6LdwTacZAAAAAEbnQQNyJjUHEOmST50A9mlAxk_d" required></div>
                    <br>
                    <div class="col-md-6 form-group">
                      <input type="submit" value="Enviar mensagem" class="btn btn-primary">
                    </div>

                </form>
            

          </div>

          <!-- END main-content -->

         
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
<script>
    window.onload = function() {
    var recaptcha = document.forms["form1"]["g-recaptcha-response"];
    recaptcha.required = true;
    recaptcha.oninvalid = function(e) {
    // fazer algo, no caso to dando um alert
    alert("Por favor complete o captcha");
      }
   }
 </script>
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