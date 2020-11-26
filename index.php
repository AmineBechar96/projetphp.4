<?php
session_start();
include'connect.php';
if (isset ($_POST['contact'])) {
$name=$_POST['name'];
$mail=$_POST['email'];
$message=$_POST['message'];

$query="insert into service(nom,email,message)values(
  '$name','$mail','$message')";
$rs=mysqli_query($conn,$query);
if($rs==true){
	echo'<div class="alert alert-success alert-dismissible fade show" role="alert" id="success-alert">
  <strong>Bien Envoyé!</strong> on vous repond dans les brefs delais.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<script>
$(\'.main-menu\').preloader(\'remove\')

</script>


';
}
else{
	echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Oups!</strong> Quelque chose est mal passé.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deboub Halim</title>

<!-- Bootstrap css files-->
<link rel="stylesheet" href="./css/bootstrap.min.css">
<!-- Bootstoast css files-->
<link rel="stylesheet" href="./css/toastr.min.css">
 <!-- font awesome files-->
 <link rel="stylesheet" href="./css/all.min.css">
<!-- preloader files-->
<link rel="stylesheet" href="./css/preloader.css">
<!-- magnifique pop up library files-->
<link rel="stylesheet" href="./vendor/Magnific-Popup/dist/magnific-popup.css">
<!-- owl carousel library files-->
<link rel="stylesheet" href="./vendor/owlcarousel/css/owl.carousel.min.css">
<!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"-->
<!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/-->
<link rel="stylesheet" href="./vendor/owlcarousel/css/owl.theme.default.min.css">
<!-- Custom css files-->
<link rel="stylesheet" href="./css/style.css">
 <!-- Responsive css files-->
 <link rel="stylesheet" href="./css/responsive.css">
</head>
<script></script>
<body>
<!-- Start Header Area-->
<header class="header_area">
<div class="main-menu">
        <nav class="navbar navbar-expand-lg navbar-light">
             <a class="navbar-brand" href="#"><img src="./images/innogo.png" alt="logo" style="margin: 0;" height="60"width="131"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <div class="mr-auto"></div>
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="#" id="home">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item" >
                      <a class="nav-link" href="#apropos" id="about">A propos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#servic" >Services</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#projett" id="projects">Projets</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#cont">Contact</a>
                    </li>
                    <li class="nav-item" class="">
                      <img src="./images/eng.svg" id="en" class="img-fluid language" alt="language-img" height="16"width="16">  <img src="./images/fr.svg" class="img-fluid language" alt="language-img" id="fr" height="16"width="16">     
                      </li>
                  </ul>
                </div>
              </nav>
    
</div>

         <div >
          
            

             </div>
</header>
<!-- End Header Area-->  
<!-- =====================Start Main Area=====================-->  
<main class="site-main">

<!-- =====================Start Banner Area=====================--> 
<section class="site-banner">
  <div class="container">

<div class="row">
<div class="col-lg-6 col-md-12 site-title">
  <h3 class="title-text" id="wel">
    Bienvenue
  </h3>
  <h1 class="title-text text-uppercase" id="name">
    C'est Deboub halim
  </h1>
  <h4 class="title-text text-uppercase">
  <span id="prestation">Agence web pour </span> <span class="typing"></span>
    </h4>
  <div class="site-buttons">
    <div class="d-flex flex-row flex-wrap">
      <button type="button" class="btn button primary-button text-uppercase mr-4" onclick="window.location.href='#cont'" id="contacter">Contacter</button>
      <button type="button" class="btn button secondary-button text-uppercase" id="cv">obtenir le cv</button>
    </div>
  </div>
</div>
<div class="col-lg-6 col-md-12 banner-image ">
<img src="./images/bannerImg.svg" class="img-fluid" alt="banner-img" height="400"width="400">
</div>
</div>

  </div>
</section>
<!-- =====================End Banner Area=====================--> 




<!-- =====================about us area=====================-->  

<section class="about-area" id="apropos">
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-12">
      <img src="./images/aboutusimg.svg" alt="About us" class="img-fluid" height="400"width="400">
    </div>
    <div class="col-lg-6 col-md-12 about-title">
<h2 class="text-uppercase pt-5" >
  <span id="abb">A</span>
  <span id="abbb">Propos</span>
  <span id="abbbb">Sur Hdeb</span>
</h2>
<div class="paragraph py-4 w-75">
  <p class="para" id="ab1">
    Chez Hdeb, nous développons des produits et services innovants et créatifs qui fournissent des solutions globales de communication et d'information. Parmi une pléthore de services, conception et développement web, applications sur mesure, ERP, CRM, solutions e-commerce
  </p>
<p class="para" id="ab2">
   
La philosophie d'entreprise de Hdeb est d'assurer le produit de la plus haute qualité, la satisfaction totale du client, la livraison rapide des solutions et le meilleur rapport qualité / prix de l'industrie.
</p>
<button type="button" class="btn button primary-button text-uppercase" onclick="window.location.href='#cont'" id="contacterr">Contacter</button>
</div>
    </div>
  </div>
</div>



</section>
<!-- ===================== End about us area=====================--> 





<!-- ===================== Start technoligie area=====================-->
<section class="brand-area">
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-6 col-lg-12 col-md-12">
<div class="first-row row ">
   <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="single-brand">
          <img src="./images/mern.jpg" alt="Brand-4" width="250" height="150">
        </div>
      </div>

<div class="col-lg-4 col-md-6 col-sm-6">
    <div class="single-brand">
      <img src="./images/django.png" alt="Brand-2" width="250" height="150">
    </div>
  </div>
 
    <div class="col-lg-4 col-md-6 col-sm-6">
  <div class="single-brand">
    <img src="./images/htmll.jpg" alt="Brand-1" width="250" height="150">
  </div>
</div>
   <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="single-brand">
          <img src="./images/data.jpg" alt="Brand-6" width="250" height="150">
        </div>
      </div>
    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="single-brand">
          <img src="./images/mob.png" alt="Brand-5" width="250" height="150">
        </div>
      </div>
     <div class="col-lg-4 col-md-6 col-sm-6">
      <div class="single-brand">
        <img src="./images/laravel.png" alt="Brand-3" width="250" height="150">
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="single-brand">
          <img src="./images/cdc.png" alt="Brand-7" width="250" height="150">
        </div>
      </div>
    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="single-brand">
          <img src="./images/analy.png" alt="Brand-8" width="250" height="150">
        </div>
      </div>
    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="single-brand">
          <img src="./images/adobb.jpg" alt="Brand-9" width="250" height="150">
        </div>
      </div>
</div>
    </div>
    <div class="col-xl-6 col-lg-12 col-md-12">
<div class="degree-area" style="background: #56a8ad0a;">
<div class="d-flex flex-row deplome-area">
  <h4 class="py-3 deplome" id="master" >
    Master Acadimique
   Engenierié
   Des systèmes d'informations et des logiciels
  </h4>
</div>
<div class="d-flex flex-row flex-wrap call-area">
<span><i class="fas fa-phone-alt fa-3x px-3"></i></span>
<div class="call-now">
  <a href="#" class="text-uppercase h4 font-h" id="call">Appeler</a>
  <span class="font-h py-2">(+213) 558 47 25 51</span>
</div>
</div>

</div>
    </div>
  </div>
</div>
</section>
<!-- ===================== End technoligie area=====================-->


<!-- ===================== start services area=====================-->
<section class="services-area" id="servic">
<div class="container">
<div class="row">
  <div class="col-lg-12 text-center services-title">
<h1 class="text-uppercase title-text" id="ours">Nos Services</h1>
<p class="para" id="oursi">
  Vous voulez lancer un projet ? Vous savez pas par où commencer ? Hdeb vous apporte la solution ! Nous vous accompagnons dans toutes les étapes de mise en place de votre projet de A-Z.
</p>

</div>
</div>
<div class="container services-list">
  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-12">
<div class="services">
  <div class="services-img text-center py-4">
    <span><i class="fas fa-hands-helping fa-3x"></i></span>
</div>
<div class="card-body text-center">
  <h5 class="card-title text-uppercase font-h">wp Developper</h5>
  <p class="card-text text-secondary" id="s1">
    si vous n'avez pas une idée claire sur un domaine nous vous aidons à exprimer vos besoins nous vous aidons à etudier la faisubalité de votre projets
</div>
</div>


    </div>
   
    <div class="col-lg-3 col-md-6 col-sm-12">
<div class="services">
  <div class="services-img text-center py-4">
    <span><i class="fas fa-laptop-code fa-3x"></i></span>
</div>
<div class="card-body text-center">
  <h5 class="card-title text-uppercase font-h">wp Developper</h5>
  <p class="card-text text-secondary" id="s2">
    Nous fournissons une implémentation de solution complète en respectant toutes les phases de votre cahier de charge dans les délais prévus
  </p>
</div>
</div>


    </div> <div class="col-lg-3 col-md-6 col-sm-12">
<div class="services">
  <div class="services-img text-center py-4">
    <span><i class="fas fa-ad fa-3x"></i></span>
</div>
<div class="card-body text-center">
  <h5 class="card-title text-uppercase font-h">wp Developper</h5>
  <p class="card-text text-secondary" id="s3">
   Nous pouvons également vous aider à promouvoir votre entreprise en vous suggérant une stratégie de marketing qui vous aide à améliorer votre SEO
  </p>
</div>
</div>


    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
<div class="services">
  <div class="services-img text-center py-4">
    <span><i class="fas fa-tools fa-3x"></i></span>
</div>
<div class="card-body text-center">
  <h5 class="card-title text-uppercase font-h">wp Developper</h5>
  <p class="card-text text-secondary" id="s4">
  Après l'implantation de vos projets Hdeb vous accompagne lors de la formation et le transfert des connaissances, la maintenance et la mise à niveau de vos services
  </p>
</div>
</div>


    </div>
  </div>

</div>

</div>

</section>
<!-- ===================== End  services area=====================-->
<!-- ===================== begin recent projects area=====================-->

<section class="project-area" id="projett">
<div class="container">
<div class="project-title pb-5">
<h1 class="text-uppercase text-h1" id="lp">
Derniers Projets
</h1>

</div>
<div class="button-group">
  <button type="button" class="active" id="btn1">Tous</button>
  <button type="button" id="best">Meuilleurs</button>
  <button type="button" data-filter=".web" id="ws">Site Web</button>
  <button type="button" data-filter=".desktop" id="des">Desktop</button>
  <button type="button" data-filter=".mobile" id="and">Application Mobile</button>
</div>
<div class="row grid">
  <div class="col-lg-4 col-md-6 col-sm-12 element-item desktop">
    <div class="our-project">
      <div class="img">
          <a class="test-popup-link" href="./images/gym.JPG">
        <img src="./images/gym.JPG" alt="projet-1" width="300"height="180">
      </a>
      </div>
      <div class="title py-4">
        <h4 class="text-uppercase">Gestion Salle de sport</h4>
        <span class="text-secondary">Projet terminé </span>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-6 col-sm-12 element-item web">
      <div class="our-project">
        <div class="img">
            <a class="test-popup-link" href="./images/upcoming2.JPG">
          <img src="./images/upcoming2.JPG" alt="projet-2" width="300"height="180">
        </a>
        </div>
        <div class="title py-4">
          <h4 class="text-uppercase">Micro services</h4>
          <span class="text-secondary">Projet A venir</span>
        </div>
      </div>
    </div>
  <div class="col-lg-4 col-md-6 col-sm-12 element-item web">
      <div class="our-project">
        <div class="img">
            <a class="test-popup-link" href="./images/upcoming.JPG">
          <img src="./images/upcoming.JPG" alt="projet-3" width="300"height="180">
        </a>
        </div>
        <div class="title py-4">
          <h4 class="text-uppercase">Marché direct</h4>
          <span class="text-secondary">Projet A venir</span>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 element-item web">
      <div class="our-project">
        <div class="img">
            <a class="test-popup-link" href="./images/sonalg.png">
          <img src="./images/sonalg.png" alt="projet-4" width="300"height="180">
        </a>
        </div>
        <div class="title py-4">
          <h4 class="text-uppercase">Gestion clientele</h4>
          <span class="text-secondary">Projet terminé</span>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 element-item web">
      <div class="our-project">
         
        <div class="img">
           <a class="test-popup-link" href="./images/HreM2.JPG">
          <img src="./images/HreM2.JPG" alt="projet-5" width="300"height="180">
        </a>
        </div>
        <div class="title py-4">
          <h4 class="text-uppercase">Ressources humaines</h4>
          <span class="text-secondary">Projet terminé</span>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 element-item web">
      <div class="our-project">
        <div class="img">
            <a class="test-popup-link" href="./images/hdeb.JPG">
          <img src="./images/hdeb.JPG" alt="projet-6" width="300"height="180">
        </a>
        </div>
        <div class="title py-4">
          <h4 class="text-uppercase">Blog</h4>
          <span class="text-secondary">Projet terminé</span>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 element-item mobile">
      <div class="our-project">
        <div class="img">
            <a class="test-popup-link" href="./images/isaver.JPG">
          <img src="./images/isaver.JPG" alt="projet-7">
        </a>
        </div>
        <div class="title py-4">
          <h4 class="text-uppercase">Isaver</h4>
          <span class="text-secondary">Projet terminé</span>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 element-item mobile">
      <div class="our-project">
        <div class="img">
            <a class="test-popup-link" href="./images/fitness.JPG">
          <img src="./images/fitness.JPG" alt="projet-8">
        </a>
        </div>
        <div class="title py-4">
          <h4 class="text-uppercase">Fitness appication</h4>
          <span class="text-secondary">Projet terminé</span>
        </div>
      </div>
    </div>
</div>
</div>
</section>
<!-- ===================== End recent projects area=====================-->

<!-- ===================== What clients are saying about us area=====================-->
<section class="client-area">
  <div class="container">
    <div class="row text-center">
      <div class="col-12">
        <div class="about-title">
          <h1 class="text-uppercase text-h1" id="cs">     
              clients disent de nous 
          </h1>
          <p class="para" id="cs1">
Voici quelques clients qui nous ont fait confiance, comme vous pouvez le constater les réponses ont été très positives.
Votre satisfaction est notre objectif !
            
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="container carousel py-lg-5">
      <div class="owl-carousel owl-theme">
        <div class="client row">
          <div class="col-lg-4 col-md-12 col-sm-12 client-img">
          <img src="./images/client1.jpg" alt="client-1" class="img-fluid">
          </div>
          <div class="col-lg-8 col-md-12 col-sm-12 about-client">
            <h4 class="text-uppercase">Jhon Do</h4>
            <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, atque? Fuga tempore at quod minima.</p>
          </div>
        </div>
        <div class="client row">
            <div class="col-lg-4 col-md-12 client-img">
            <img src="./images/client2.jpg" alt="client-2" class="img-fluid">
            </div>
            <div class="col-lg-8 col-md-12 about-client">
              <h4 class="text-uppercase">Bechar Amin</h4>
              <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, atque? Fuga tempore at quod minima.</p>
            </div>
          </div>
          <div class="client row">
              <div class="col-lg-4 col-md-12 client-img">
              <img src="./images/client1.jpg" alt="client-1" class="img-fluid">
              </div>
              <div class="col-lg-8 col-md-12 about-client">
                <h4 class="text-uppercase">Jhon Dostov</h4>
                <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, atque? Fuga tempore at quod minima.</p>
              </div>
            </div>
            <div class="client row">
                <div class="col-lg-4 col-md-12 client-img">
                <img src="./images/client2.jpg" alt="client-2" class="img-fluid">
                </div>
                <div class="col-lg-8 col-md-12 about-client">
                  <h4 class="text-uppercase">Bechar Amin</h4>
                  <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, atque? Fuga tempore at quod minima.</p>
                </div>
              </div>
              <div class="client row">
                  <div class="col-lg-4 col-md-12 client-img">
                  <img src="./images/client1.jpg" alt="client-1" class="img-fluid">
                  </div>
                  <div class="col-lg-8 col-md-12 about-client">
                    <h4 class="text-uppercase">Jhon Do</h4>
                    <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, atque? Fuga tempore at quod minima.</p>
                  </div>
                </div>
                <div class="client row">
                    <div class="col-lg-4 col-md-12 client-img">
                    <img src="./images/client2.jpg" alt="client-2" class="img-fluid">
                    </div>
                    <div class="col-lg-8 col-md-12 about-client">
                      <h4 class="text-uppercase">Bechar Amin</h4>
                      <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, atque? Fuga tempore at quod minima.</p>
                    </div>
                  </div>
        </div>
  </div>
</section>

<!-- =====================  End What clients are saying about us area=====================-->
<!-- =====================  Contact us area=====================-->
<!--section class="contact-areajustify-content-center">
  <div class="container contact ">
    <div class="row">
      <div class="col-lg-12 text-center contact-title">
        <h4 class="text-uppercase">Contactez-nous</h4>
        <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, temporibus!</p>
      </div>
    </div>
    <div class="d-sm-flex justify-content-center">
      <form action="" class="w-50">
<div class="row d-flex flex-row flex-wrap">
  <div class="col input-textbox">
    <input type="text" name="email" id="txtemail" class="form-control" placeholder="Email">
  </div>
      <div class="col input-textbox">
        <input type="text" name="email" id="txtemail" class="form-control" placeholder="Email">
      </div><div class="form-group"> 
  <div class="col input-textbox">
              <textarea name="message" id="txtemessage"  rows="3" class="form-control" placeholder="Votre message"></textarea>
  </div></div>
          </div>
  <div class="form-group"> 
  <div class="col btn-submit">
    <button type="submit" class="btn btn-success float-right">Contacter</button>
  </div>   
</div>   
      
    
  </div>
  </form>
    </div>
  </div>
</section-->
<section class="contact" id="cont">
  <div class="content">
    <h2 class="text-uppercase" id="cu">Contacter nous</h2>
    <p class="para" id="cud">Vous êtes intéressé ? remplissez le formulaire, Nous vous répondrons au plus vite !</p>
                    
  </div>
  <div class="containerr">
    <div class="contacterInfo">
      <div class="boxx">
        <div class="iconn">
            <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
        </div>
        <div class="text">
          <h3>Adresse</h3>
          <p>Sour el Ghozlane, <br> Bouira, ALGERIA</p>
        </div>
      </div>
      <div class="boxx">
          <div class="iconn">
              <i class="fas fa-phone-alt"></i>
          </div>
          <div class="text">
            <h3>Téléphone</h3>
            <p>(+213) 558 47 25 51</p>
          </div>
        </div>
        <div class="boxx">
            <div class="iconn">
                <i class="fas fa-envelope"></i>
            </div>
            <div class="text">
              <h3>Email</h3>
              <p>Hdeb19@gmail.com</p>
            </div>
          </div>
    </div>
    <div class="contactform">
      <form action="index.php" method="post">>

      <h2 class="text-uppercase" id="em">Envoyer Votre Message</h2>
<div class="inputBoxx">
  <input type="text" name="name" required="required" placeholder=" Nom et Prénom" class="form-control" id="in1" pattern="[A-Za-z]{4,25}">
</div>
<div class="inputBoxx">
    <input type="email" name="email" required="required" placeholder=" Email"  class="form-control" id="in2">
  </div>
  <div class="inputBoxx">
      <textarea type="text" name="message" required="required" placeholder=" Entrer votre message" class="form-control" rows="3" id="in3"pattern=".{30,}"></textarea>
    </div>
    <div class="inputBoxx">
        <button type="submit"   name="contact" class="btn btn-success" id="contacterrr">Contacter</button>
      </div>
	  
      </form>
    </div>
  </div>



</section>
<!-- =====================  end Contact us area=====================-->
</main>
<!-- =====================End Main Area=====================-->  
<!-- =====================Footer AREA=====================-->  
<footer class="footer-area">
<div class="container">
<div class="justify-content-center">
<div class="site-logo text-center py-4">
<a href=""><img src="./images/innogo.png" alt="logo" class="img-fluid"></a>
</div>
<div class="social text-center">
  <h5 class="text-uppercase" id="fff">
    Suivez nous sur
  </h5>
  <a href=""><i class="fab fa-facebook"></i></a>
  <a href=""><i class="fab fa-instagram"></i></a>
  <a href=""><i class="fab fa-youtube"></i></a>
  <a href=""><i class="fab fa-twitter"></i></a>
</div>
<div class="copyrights text-center">
  <p class="para">Copyrights &copy; 2020 All rights reserved |  This template is made by Hdeb</p>
</div>
</div>



</div>



</footer>



<!-- =====================Footer AREA=====================-->  
    <!-- JQuery files-->
    <script src="./js/jquery.js"></script>
	  <!-- Bootoast js files-->
	  <script src="./js/toastr.min.js"></script>
    <!-- JS files-->
    <script src="./js/typed.min.js"></script>
    <!-- Preloader JS files-->
    <script src="./js/jquery.preloader.min.js"></script>
    <!-- JS files-->
    <script src="./js/bootstrap.min.js"></script>
    <!-- isotope JS library -->
    <script src="./vendor/isotope/isotope.min.js"></script>
    <!-- magnifique popup library JS file -->
    <script src="./vendor/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>

    <!-- owl carousel library JS files -->
    <script src="./vendor/owlcarousel/js/owl.carousel.min.js"></script>
<!--script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script-->
    <!-- custom JS file -->
    <script src="./js/main.js"></script>

</body>
</html>
