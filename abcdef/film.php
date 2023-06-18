
<?php
$user='root';
$pass='';
$db='guide';
$db=new mysqli('localhost', $user,$pass,$db)
or die("unable to connect");

$sql="select * from film";
$result=mysqli_query($db,$sql) or die("bad query");

echo"<table border='1>";
echo "<tr><th>idFilm</t><td>nom</td><td>genre</td><td>description</td><td>date de parution</td></tr> \n"; 
while($row=mysqli_fetch_assoc($result)){
    echo"<tr><td>{$row['idFilm']}</td><td>{$row['nom']}</td><td>{$row['genre']}</td><td>{$row['descrip']}</td><td>{$row['date_paru']}</td></tr> \n";
}
echo "</table>";