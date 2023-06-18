<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="filmbarre.css">
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>vise up</title>
</head>
<body>
<div class="sidebar">
      <h2><span>V</span>ise u<span>P</span></h2>
      <ul class="nav">
        <li>
          <a href="index.html">
            <i class="fa fa-home"></i>
            <span>Accueil</span>
          </a>
        </li>
        <li>
          <a href="index.html#apropos">
            <i class="fa fa-home"></i>
            <span>a propos </span>
          </a>
        </li>
        <li>
          <a href="index.html#menu">
            <i class="fas fa-calendar-alt"></i>
            <span>menu</span>
          </a>
        </li>
        <li>
          <a href="index.html#temoignage">
            <i class="fas fa-cog"></i>
            <span>temoignage</span>
          </a>
        </li>
        <li>
          <a href="index.html#contact">
            <i class="fas fa-address-card"></i>
            <span>Contact</span>
          </a>
        </li>
        <li>
          <a href="onlyme4.html">
            <i class="fas fa-address-card"></i>
            <span>recherche</span>
          </a>
        </li>
      </ul>
    </div>
    <section class="menu" id="menu">
    <div class="titre">
        <h2 class="titre-texte"><span>R</span>omans</h2>
        <p>vous pouvez choisir tous ce que vous voulez.</p>
    </div>
    <div class="contenu">
        <div class="box">
            <a class="imbox" >
                <form action="romanaction.php" class="search-bar">
                    <input type="submit" name="submit" id="" value="Afficher">
                <img src="action2.png">
                </form>

            </a>
        </div>
        <div class="contenu">
        <div class="box">
            <a class="imbox" >
                <form action="romanhorror.php" class="search-bar">
                    <input type="submit" name="submit" id="" value="Afficher">
                <img src="horreur.png">
                </form>
            </a>
        </div>
        <div class="contenu">
        <div class="box">
            <a class="imbox" >
                <form action="romanromance.php" class="search-bar">
                    <input type="submit" name="submit" id="" value="Afficher">
                <img src="romance.png">
                </form>
            </a>
        </div>
    </div>
 </div>
</section>
 <section class="contact" id="contact">
    <div class="box-container">
      <div class="box">
         <h3>contact info</h3>
         <a href="#"><i class="fas fa-phone"></i>+212690095466</a>
         <a href="#"><i class="fas fa-phone"></i>+212634657812</a>
         <a href="#"> <i class="fa fa-map"></i> EL jadida maroc 2024 </a>
     </div>
     <div class="box">
         <h3>follow us</h3>
         <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
         <a href="#"><i class="fab fa-twitter"></i>twitter</a>
         <a href="#"><i class="fab fa-instagram"></i>instagram</a>
         <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
     </div>
    </div>
 </section>
 <script type="text/javascript">
     window.addEventListener('scroll', function(){
         const header =document.querySelector('header');
         header.classList.toggle("sticky", window.scrollY > 0 );
     });

     function desireMenu(){
         const tmenuToggle = document.querySelector('.desireToggle');
         const navbar = document.querySelector('.navbar');
         navbar.classList.toggle('active');
         menuToggle.classList.toggle('active');
     }
 </script>
</body>
</html>