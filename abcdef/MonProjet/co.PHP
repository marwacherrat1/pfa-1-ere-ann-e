<?PHP
    session_start();
/*    $co= new PDO("mysql:host=localhost;dbname=pfa;port=8111;charset=utf8","user","azerty");

$conn=$co-> prepare("SELECT* FROM users WHERE Nom=? and Prenom=? and MDP=?");// pointe sur la 1ERE LIGNE
$conn->execute(array($_SESSION["nom"],$_SESSION["pre"],$_SESSION["password"]));
echo '<table>';
while($lin=$conn->fetch()){
    echo '<tr>';
    echo'<td>';
      echo "l'ID :\n".$lin['ID'];
    echo'</td>';
    echo '</tr>';
    echo '<tr>';
    echo'<td>';
      echo "le nom : \n".$lin['Nom'];
    echo'</td>';
    echo '</tr>';
    echo '<tr>';
    echo'<td>';
      echo "le prenom :\n ".$lin['Prenom'];
    echo'</td>';
    echo '</tr>';
    echo '<tr>';
    echo'<td>';
      echo "le mail : \n".$lin['mail'];
    echo'</td>';
    echo '</tr>';
    echo '<tr>';
    echo'<td>';
      echo "mot de passe :\n".$lin['MDP'];
    echo'</td>';
    echo '</tr>';
    echo '<tr>';
    echo'<td>';
       echo "genre :\n".$lin['id_genre'];
       $_SESSION["genre"]=$lin['id_genre'];
    echo'</td>';
    echo '</tr>';
    echo '<tr>';
    echo'<td>';
       echo "sexe :\n".$lin['SEX'];
    echo'</td>';
    echo '</tr>';
    echo '<tr>';
    echo'<td>';
       echo "tel : \n".$lin['TEL'];
    echo'</td>';
    echo '</tr>';
}
echo '</table>';
echo"</br>";
$g=$co-> prepare("SELECT* FROM film WHERE  id_genre=?");// pointe sur la 1ERE LIGNE
$g->execute(array($_SESSION["genre"]));
echo '<table>';
while($l2=$g->fetch()){
   echo '<tr>';
   echo'<td>';
     echo "l IDF :\n".$l2['idFilm'];
   echo'</td>';
   echo '</tr>';
   echo '<tr>';
   echo'<td>';
     echo "le nom : \n".$l2['nom'];
   echo'</td>';
   echo '</tr>';
   echo '<tr>';
   echo'<td>';
     echo "DESCRIPTION :\n ".$l2['descrip'];
   echo'</td>';
   echo '</tr>';
   echo '<tr>';
   echo'<td>';
     switch($l2['id_genre'])
       {case 1:echo"le genre du film est romance";
         break;
         case 2:echo"le genre du film est horreur";
         break;
         case 3:echo"le genre du film est action"; 
         break;     
      }
     
   echo'</td>';
   echo '</tr>';
}
echo '</table>';
echo"</br>";
*/
?>