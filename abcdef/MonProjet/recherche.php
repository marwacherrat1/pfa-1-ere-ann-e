<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recherche.css">
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>vise up</title>
<body>
<header>
    <a href="#" class="logo"><span>V</span>ise u<span>P</span></a>
    
    <div class="menudesire" onclick="desireMenu();"></div>
    <ul class="navbar">
        <li><a href="#banniere" onclick="desireMenu();">Accueil</a></li>
        <li><a href="#apropos" onclick="desireMenu();">A propos</a></li>
        <li><a href="#menu" onclick="desireMenu();">Menu</a></li>
        <li><a href="#temoignage" onclick="desireMenu();">Temoignage</a></li>
        <li><a href="#contact" onclick="desireMenu();">Contact</a></li>
        <li><a href="ACC1.php" onclick="desireMenu();">Déconnexion</a></li></br></br></br>
        <h3 CLASS="n"><?PHP
         session_start();
         echo "</br></br>Bonjour, </br>".$_SESSION['nom']."\n\n\n".$_SESSION['pre'];?>
         </h3>
    </ul>
</header>
<section class="banniere" id="banniere">
    <div class="contenu">
    <form method="POST" >
                
                <div class="data">films,series ,romans ou webtoon?
                <div class="g">
                        <input type="radio" id="film" name="film" >
                        <label for="film">film</label>
                    </div>

                    <div class="g">
                        <input type="radio" id="serie" name="serie" >
                        <label for="serie">serie</label>
                    </div>
                    <div class="g">
                        <input type="radio" id="romans" name="romans" >
                        <label for="romans">romans</label>
                    </div>
                    <div class="g">
                        <input type="radio" id="webtoon" name="webtoon" >
                        <label for="webtoon">webtoon</label>
                    </div>
                </div>

                <div class="data">
                    <label>Nom d'ouvrage choisi :</br> </label>

                    <input type="text" name="nomo"required>
                </div>
</div>
            </form>
    </div>
</section>
<section class="apropos" id="apropos">
    <div class="row">
        <div class="col50">
            <h2 class="titre-texte"><span>A</span> Propos <SPAN>D</SPAN>e <span>N</span>ous</h2>
            <p>On est un site de recommandation qui permet à vous de trouver votre monde en se basant sur vos centre d'intéret mais cela n'implique pas que vous n'avez pas le droit d'avoir plus, avec nous tous est possible, vous povez aussi trouver d'autre choses meme s'il ne fait pas partie de vos centres d'intéret, donc soyez prêt, et allons-y.
            </p>
        </div>
        <div class="col50">
            <div class="img">
                <img src="RECOMMANDATION.jfif" alt="recommandation">
            </div>
        </div>
    </div>
</section>
<section class="menu" id="menu">
    <div class="titre">
        <h2 class="titre-texte"><span>M</span>enu</h2>
        <p>vous pouvez choisir tous ce que vous voulez.</p>
    </div>
    <div class="contenu">
        <div class="box">
            <div class="imbox">
                <img src="A.jfif" alt="A">
            </div>
            <div class="text">
                <h3>films</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="AA.jfif" alt="AA">
            </div>
            <div class="text">
                <h3>series</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="AAA.jfif" alt="AAA">
            </div>
            <div class="text">
                <h3>weebtoon</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="AAAA.jfif" alt="AAAA">
            </div>
            <div class="text">
                <h3>romans</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="AAAAA.jfif" alt="AAAAA">
            </div>
            <div class="text">
                <h3>animes</h3>
            </div>
        </div>

    </div>
 </div>
 <div class="titre">
    <a href="#" class="btn1">Voir Plus</a>
 </div>
</section>

 <section class="temoignage" id="temoignage">
    <div class="titre blanc">
        <h2 class="titre-texte"><span>Q</span>e <span>D</span>isent <span>N</span>os <span>C</span>lients</h2>
        <p>c'est bon </p>
    </div>
    <div class="contenu">
        <div class="box">
            <div class="imbox">
                <img src="H.png" alt="H">
            </div>
            <div class="text">
                <p>le temoignage 1</p>
                <h3>nom 1</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="H.png" alt="H">
            </div>
            <div class="text">
                <p>temoignage 2</p>
                <h3>nom 2</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="H.png" alt="H">
            </div>
            <div class="text">
                <p>temoignage 3</p>
                <h3>nom 3</h3>
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
</body>
</html>