<!doctype html>
<html lang="en">
<head>
   <link href="search.css" rel="stylesheet">
   <title>Funda Of Web IT</title>
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
          <a href="onlyme.html">
            <i class="fas fa-address-card"></i>
            <span>recherche</span>
          </a>
        </li>
      </ul>
</div>
<div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                                <tr>
                                    <th>nom</th>
                                    <th>genre</th>
                                    <th>description</th>
                  
                                </tr>
<?php 
$con = mysqli_connect("localhost","root","","pfa");

if(isset($_GET['search']))
{
   $filtervalues = $_GET['search'];
   $query = "SELECT film.nom, genre.GENRE, film.descrip FROM film INNER JOIN genre ON film.id_genre=genre.IDGENRE WHERE nom LIKE '%$filtervalues%' ";
   $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) > 0)
    {
    foreach($query_run as $items)
    {
?>
    <tr>
    <td><?= $items['nom']; ?></td>
    <td><?= $items['GENRE']; ?></td>
    <td><?= $items['descrip']; ?></td>
    </tr>
<?php
}
}
else
{
?>
     <tr>
     <td colspan="4">No Record Found</td>
     </tr>
<?php
  }
  }
?>
</table>