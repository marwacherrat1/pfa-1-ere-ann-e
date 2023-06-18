<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <titre>me</titre>
    <style>
        td{
            border: 1px solid;
        }
    </style>
</head>
<body>
    <h1>amal</h1>
    <?php
    $con = mysqli_connect("localhost","root","","guide");
    $genre="horror";
    $req="select * from serie WHERE genre = '$genre'";
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
            <td> <?php echo $ligne['genre'] ?></td>
            <td> <?php echo $ligne['descrip'] ?></td>
            <td> <?php echo $ligne['date_paru'] ?></td>
            <<td> <?php echo $ligne['episodes'] ?></td>
         </tr>
         <?php } ?>
    </table>
    <?php } ?>