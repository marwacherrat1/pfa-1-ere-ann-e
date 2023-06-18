<?php
require_once 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu film</title>
</head>
<body>
            <?php
            if(isset($_POST['selectMenu']))
            {
                $selectMenu = $_POST['selectMenu'];
                switch($selectMenu){
                    case '1':
                        $stmt = $pdo->query('SELECT * from film ');
                        break;
                    case '2':
                        $stmt = $pdo->query('SELECT * from serie ');
                        break;
                    case '3':
                        $stmt = $pdo->query('SELECT * from webtoon');
                        break;
                    default:
                        
                        break;

                }
            }
            ?>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <form action="" methos="POST">
                    <select name="selectMenu" id="">
                        <option value="">------choisir------</option>
                        <option value="1">film</option>
                        <option value="2">serie</option>
                        <option value="3">webtoon</option>
                    </select>
                    <input type="submit" name="submit" id="" value="Afficher">
                </form>
            </div>
            <div class="col-8">
                <table>
                <thead>
                        <th>nom</th>
                        <th>genre</th>
                        <th>description</th>
                </thead>
                <tbody>
                <?php
                while($row = $stmt->fetch())
                {
                    ?>
                    <tr>
                        <td><?php echo $row->nom;?></td>
                        <td><?php echo $row->genre;?></td>
                        <td><?php echo $row->descrip;?></td>
                        <td><?php echo $row->date_paru;?></td>
                    </tr>
                <?php } ?>
                </tbody>
                </table>
            </div>
        </div>    
    </div>
</body>
</html>