
<html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CONNEXION</title>
    <link rel="stylesheet" href="P2.css">
    
</head>

<body>

    <div class="center" align="center">
        <div class="container" align="center">
            <div class="text">
                Connectez vous.
            </div>
            <?php 
            session_start();
            $ma_connexion=mysqli_connect("localhost","root","","pfa");
            $connect_db=mysqli_select_db($ma_connexion,"pfa");
        if( isset($_POST['submit']) ){
            $pre=$_POST["pre"];
            $nom=$_POST["nom"];
            $pwd=$_POST["pwd"];
            $_SESSION['pre']=$pre;
            $_SESSION['nom']=$nom;
            $_SESSION['password']=$pwd;
            $requete="select * from users where Nom='$nom'and Prenom='$pre' and MDP='$pwd' ";
            $result = mysqli_query($ma_connexion ,$requete);
            
            if($result->num_rows >0){
                $row = mysqli_fetch_assoc($result);
              
                header("Location: http://localhost/pfa2/abcdef/monProjet/index.php");
                mysqli_close($ma_connexion);
            }   
        
        else
        {
            echo "<p style='color:red'>Email or Password is wrong</><br>";
        }
        }
        ?>
            <form method="POST" >
                <div class="data">
                    <label>Nom :</br> </label>

                    <input type="text" name="nom"required>
                </div>
                <div class="data">
                    <label>Prenom :</br> </label>

                    <input type="text" name="pre"required>
                </div>
                <div class="data">
                    <label>mot de passe :</br></label>
                    <input type="password" name="pwd" required>
                </div>
                <div class="btn">
                    <button class="con" type="submit" name="submit" >se connecter </button>
                </div>
                <div class="sign">
                    n'est pas un membre ? <a href="http://localhost/MonProjet/pageinscription.php">Créer un compte .</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>