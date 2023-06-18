
<html>

<head>
    <meta charset="UTF-8">
    <title>Page d'inscription</title>
    <link rel="stylesheet" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap');
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
        body {
            
            margin-right: 35%;
            margin-left: 35%;
            margin-top: 10%;
            padding-top: 5px;
            
            background: linear-gradient(115deg, #f9fbfb 10%, #6a4949 90%);
            font-family: 'Pacifico', sans-serif;
            text-transform: capitalize;
            
        }
        
        .form{
            background-color:rgb(134, 112, 112);
            border: 5px solid rgb(60, 59, 59);
            box-shadow: 0 16px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            margin: 2%;
            margin-top:20%;
        }
        input {
        width: 98%;
        padding: 12px 20px;
        margin: 8px ;
        box-sizing: border-box;
        border: 2px solid black;
        font-family:'Indie Flower', sans-serif;
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
       label {
           padding: 0 0 0 2rem;
           position: relative;
        }

input[type=radio] {
  position: absolute;
  opacity: 0;
}

input[type=radio] + label::before,
input[type=radio] + label::after {
  content: '';
  position: absolute;
  border-radius: 50%;
}

input[type=radio] + label::before {
  left: 0.5rem;
  top: 0.2rem;
  display: inline-block;
  width: 0.8rem;
  height: 0.8rem;
  border: 0.05rem solid black;
  background: white;
}

input[type=radio]:checked + label::after {
  left: 0.7rem;
  top: 0.4rem;
  border: 0.25rem solid black;
}

input[type=radio]:focus + label::before {
  outline: 0.05rem dotted;
}
.g{
    box-sizing: border-box;
    border: 2px solid black;
    margin-left:5%;
    width:98%;
    background-color: white;
    font-family:'Indie Flower', sans-serif;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.s{
    box-sizing: border-box;
    width:98%;
    border: 2px solid black;
    background-color: white;
    font-family:'Indie Flower', sans-serif;
    margin-left:5%;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.ti{
    font-size: 35px;
    font-weight:300;
    text-align: center;
    font-family: 'Pacifico', sans-serif;
    color:black; font
    background-color: green;
    margin-top: -60px;
    opacity: 0.8;   
}
.tit{
    opacity: 0.8;
    color:black; font
    font-family: 'Pacifico', sans-serif;}

.btn{
    height: 35px;
    width: 50%;
    background-color: #df4b4b;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    margin: 5%;
    margin-left:50%;
    font-family: 'Pacifico', sans-serif;
}

    </style>
</head>

<body>
    <div class="ti"> Inscription</div>
    <form method="POST" action="coon.php" class="form">
        
        <table align="center" class="t1">
            <tr>
                <td align="left" class="tit">Nom</td>
                <td><input type="text" name="Nom" placeholder="votre nom..."></td>
            </tr>
            <tr>
                <td align="left" class="tit">Prenom</td>
                <td><input type="text" name="Prenom" placeholder="votre prenom..."></td>
            </tr>
            <tr>
                <td align="left" class="tit">Mot de passe</td>
                <td><input type="password" name="MDP" placeholder="votre mot de passe..."></td>
            </tr>
            <tr>
                <td align="left" class="tit">Email</td>
                <td><input type="email" name="mail" placeholder="votre e-mail..."></td>
            </tr>
            
            <tr>
                <td align="left" class="tit">Age</td>
                <td><input type="NUMBER" name="Age" placeholder="Votre age..."></td>
            </tr>
            <tr>
                <td align="left" class="tit">Numéro téléphone</td>
                <td><input type="text" name="tel" placeholder="votre numéro téléphone..."></td>
            </tr>

            <tr>
                <td align="left" class="tit">Centre d'intérêts</td>
                <td align="left">
                    <div class="g">
                    <div >
                        <input type="radio" id="romance" name="id_genre" value="1">
                        <label for="romance">romance</label>
                    </div>

                    <div>
                        <input type="radio" id="horreur" name="id_genre" value="2">
                        <label for="horreur">horreur</label>
                    </div>
                    <div>
                        <input type="radio" id="action" name="id_genre" value="3">
                        <label for="action">action</label>
                    </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td align="left" class="tit">Sexe</td>
                <td align="left">
                   <div class="s"> 
                    <div>
                        <input type="radio" id="F" name="sex" value="F">
                        <label for="F">F</label>
                    </div>
                    <div>
                        <input type="radio" id="H" name="sex" value="H">
                        <label for="H">H</label>
                    </div>
                   </div>
                </td>
           </tr>
             <tr>
                 <td></td>
                 <td> <button class="btn" type="submit" name="submit" >enregistrer </button></td>
                     
            </tr>
    


        </table>
    </form>
</body>

</html>