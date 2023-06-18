<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mama.css">
    <style>
        td{
            border: 1px solid;
        }
    </style>
</head>
<body>
    <?php
    $con = mysqli_connect("localhost","root","","pfa");
    $genre="horror";
    $req="SELECT film.nom, genre.GENRE, film.descrip FROM film INNER JOIN genre ON film.id_genre=genre.IDGENRE where id_genre=2";
    $result= mysqli_query($con,$req);
    if (!$result) {
        echo 'Erreur lors de lexecution';
    }else{
    ?>
    <table>
        <tr>
            <td>nom</td>
            <td>genre</td>
            <td>dscription</td>
        </tr>
        <?php while($ligne= mysqli_fetch_array($result)){
            ?>
         <tr>
            <td> <?php echo $ligne['nom'] ?></td>
            <td> <?php echo $ligne['GENRE'] ?></td>
            <td> <?php echo $ligne['descrip'] ?></td>
         </tr>
         <?php } ?>
    </table>
    <?php } ?>