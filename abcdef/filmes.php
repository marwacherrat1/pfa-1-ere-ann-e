<!DOCTYPE html>
<html lang="fr">
<head>
<title>liste des films</title>

</head>
<body>

<h1>liste des films<h1>

<table>
<tr>
<th>idFilm</th>
<th>nom</th>
<th>genre</th>
<th>description</th>
<th>date_parution</th>
</tr>
<?php
include "cnx.php";
$req= mysqli_query($link,"slect * from film");
while($res=mysqli_fetch_array($req))
{

?>
<tr>
    <td><?php echo $res["idFilm"] ;?></td>
    <td><?php echo $res["nom"] ;?></td>
    <td><?php echo $res["descrip"] ;?></td>
    <td><?php echo $res["date_paru"] ;?></td>
</tr>
<?php
}
?>


</table>