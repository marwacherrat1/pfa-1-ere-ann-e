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
    $req="SELECT webtoon.nom, genre.GENRE, webtoon.descrip, webtoon.date_paru, webtoon.episodes FROM webtoon INNER JOIN genre ON webtoon.id_genre=genre.IDGENRE where id_genre=1";    
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
            <td>date de parution</td>
            <td>episodes</td>
        </tr>
        <?php while($ligne= mysqli_fetch_array($result)){
            ?>
         <tr>
            <td> <?php echo $ligne['nom'] ?></td>
            <td> <?php echo $ligne['GENRE'] ?></td>
            <td> <?php echo $ligne['descrip'] ?></td>
            <td> <?php echo $ligne['date_paru'] ?></td>
            <td> <?php echo $ligne['episodes'] ?></td>

         </tr>
         <?php } ?>
    </table>
    <?php } ?>