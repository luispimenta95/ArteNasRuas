<!doctype html>
<?php
include 'conecta.php';

  $id = $_GET['id'];


        
        $sql = "SELECT * from noticia n where n.id_noticia=$id";
$result = $conn->query($sql);
$noticia = $result->fetch_assoc();

?>
<html lang="en">
  <head>
    <title>Arte nas Ruas | Notícias</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="icon" href="img/logo.jpeg" />


    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">
     <script src="https://www.google.com/recaptcha/api.js"></script>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

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

      <!-- END header -->

    <section class="site-section py-lg">
      <div class="container">
        
        <div class="row blog-entries element-animate">

          <div class="col-md-12 col-lg-12 main-content">
     <?php

              $sql2 = "SELECT * from imagem_noticia n where n.id_noticia=$id LIMIT 1";
$result2 = $conn->query($sql2);
$imagem = $result2->fetch_assoc();
?>
            <img src="admin/UP/<?php echo $imagem['imagem']; ?>" class= "img-fluid">

            <h1 class="mb-4"><?php echo $noticia["titulo_noticia"] ?></h1>
            <small><i class="fa fa-user" aria-hidden="true"></i>
Arte nas ruas<br>
 <i class="fa fa-clock-o" aria-hidden="true"></i> Postado em : <?php echo date('d/m/Y ' . 'à\s '.  'H:i', strtotime($noticia["data_noticia"])); ?>

          </small>
           
            <div class="post-content-body">
              <!--<p><?php echo substr(strip_tags($noticia["texto_noticia"]), 0, 8); ?></p>
           -->
              <?php 

                $tags = explode(chr(13) , $noticia["texto_noticia"]);


foreach($tags as $i =>$key) {
$i >0;

?>
    <p><?php echo  $key ?> </p>

<?php }




              ?>

              

            <div class="row mb-5">

            	<div class="embed-responsive embed-responsive-16by9 col-md-12 mb-4">
            		<?php 
  $sql = "SELECT * from noticia n where n.id_noticia=$id";
$result = $conn->query($sql);
$noticia = $result->fetch_assoc();           

$fixa = "https://www.youtube.com/embed/";
$video = $noticia["video"];
$link = $fixa .$video;

            		?>
  <iframe class="embed-responsive-item" src="<?php echo $link?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" ></iframe>
</div>
             <?php 
             $sql3 = "SELECT * from imagem_noticia n where n.id_noticia=$id LIMIT 100 offset 1";
             $resultado_logs = mysqli_query($conn, $sql3);
$total_logs = mysqli_num_rows($resultado_logs);

$result3 = $conn->query($sql3);
             for($i=0; $i<$total_logs; $i++){
$imagens_meio = $result3->fetch_assoc();

              ?>
              <div class="col-md-6 mb-4">
                            <img src="admin/UP/<?php echo $imagens_meio['imagem']; ?>" alt="teste" class="img-fluid">

               
              </div>
              <?php } ?>
            </div>
         </div>
          


            <div class="pt-5">

              <?php 
                  $sql3 = "SELECT * FROM comentario_noticia c WHERE c.id_noticia = $id ORDER BY c.id_comentario_noticia DESC";
             $resultado_logs = mysqli_query($conn, $sql3);


$total_logs = mysqli_num_rows($resultado_logs);
   ?>


<?php

if(($total_logs) ==0){
 ?>

                      <h3 class="mb-5">Sem comentários, seja o primeiro a comentar.</h3>

<?php }

else{


  ?>
                               <ul class="comment-list">
     
                      <h3 class="mb-5"><?php echo $total_logs ?> comentários.</h3>
<?php 

for ($i=0; $i <$total_logs ; $i++) {
 $comentario = $resultado_logs->fetch_assoc();   

  ?> 



       <li class="comment">
                 
                  <div class="comment-body">
                    <h3><?php echo $comentario["nome"] ?></h3>
                    <div class="meta"><?php echo date('d/m/Y  H:i', strtotime($comentario["data_comentario"])); ?></div>
                    <p><?php echo $comentario["comentario"] ?></p>
                  </div>
                </li>




<?php }}?>
</ul>
     
                  <!-- END comment-list -->
              
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Faça um comentário</h3>
                <form id="form1" action="admin/comentario.php" class="p-5 bg-light" method="post">
                  <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" id="name" name="nome" required>
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                  </div>
                 
                  <div class="form-group">
                    <label for="message">Mensagem *</label>
                    <textarea id="message" cols="30" rows="10" class="form-control" name="mensagem" required></textarea>
                  </div>
                  <div class="form-group">

                          <div class="g-recaptcha" data-sitekey="6LdwTacZAAAAAEbnQQNyJjUHEOmST50A9mlAxk_d" required></div>
<br><br>

                    <input type="submit" value="Enviar" class="btn btn-primary">

<br><br>
                    <small>Os comentários são de responsabilidade exclusiva de seus autores e não representam a opinião deste site.</small>

                    <input type="hidden" name="id" value="<?php echo $id?>">
                  </div>

      <br/>
                </form>
              </div>
            </div>

          </div>

          <!-- END main-content -->

  
            <!-- END sidebar-box -->

      
          </div>
          <!-- END sidebar -->

        </div>
      </div>
    </section>

      <!-- END section -->
  
  
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