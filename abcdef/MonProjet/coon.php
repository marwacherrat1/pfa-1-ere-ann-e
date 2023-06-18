<?php
$con = mysqli_connect("localhost","root","","pfa");
/*mysqli_select_db($con, "pfa");
$NOM=$_POST['Nom'];
$PRE=$_POST['Prenom'];
$EML=$_POST['mail'];
$PWD=$_POST['MDP'];*/
if ( !isset( $_post["submit"] ) )
{$NOM=$_POST['Nom'];
$PRE=$_POST['Prenom'];
$EML=$_POST['mail'];
$PWD=$_POST['MDP'];
$AGE=$_POST['Age'];
$TEL=$_POST['tel'];
$Genre=$_POST['id_genre'];
$SEX=$_POST['sex'];

$req= "INSERT INTO users(Nom,Prenom,mail,MDP,id_genre,sex,tel)values('$NOM','$PRE','$EML','$PWD','$Genre','$SEX','$TEL')";
$res=mysqli_query($con,$req);
 header("Location: http://localhost/pfa2/abcdef/monProjet/P2.php");
 mysqli_close($ma_connexion);
}   


/*echo $PWD."\n <br/>";
echo $PRE."\n <br/>";
echo $EML."\n <br/>";
ECHO $PWD."\n <br/>";
ECHO $NOM."\n <br/>";
$data=array($NOM,$PRE,$EML,$PWD);
$select_tuple = $db->prepare("INSERT INTO users values(?,?,?,?)");
$req= "INSERT INTO users(Nom,Prenom,mail,MDP) values($NOM,$PRE,$EML,$PWD)";
$select_tuple->execute($data);
exit;}*/
else
{echo erreur;}
?>