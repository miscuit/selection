<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" href="" />
    <title>Inscription master</title>
</head>

<body>
    <div id="formulaire">
        <center>
            <h1>Inscription Master</h1>
        </center>
        <aside>
            <form action="insert_inscri.php" method="post">
                <label for="type_master">Type de master:</label>
                <select name="type_master" id="master">
                    <option value="0">Master Analyse Appliquée</option>
                    <option value="1">Master Analyse Fonctionnelle</option>
                    <option value="2">Master Analyse Numérique et Optimisation</option>
                    <option value="3">Master Chimie Appliquée</option>
                    <option value="4">Master de Théorie des nombres</option>
                    <option value="5">Master Environnement et Développement Durable</option>
                    <option value="6">Master Management Ressources Hydriques, Minières et Energ.</option>
                    <option value="7">Master Mécanique et Energétique</option>
                    <option value="8">Master Optique et Matériaux</option>
                    <option value="9">Master Physiologie et Santé</option>
                    <option value="10">Master Physique de la Matière et de Rayonnement</option>
                    <option value="11">Master Statistique Probabilités et leurs Applications</option>
                </select><br><br>
                <label for="CIN">CIN:</label>
                <input type="text" name="CIN" /><br /><br />
                <label>Nom:</label>
                <input type="text" name="nom" /><br /> <br />

                <label>Pr&eacutenom:</label>
                <input type="text" name="prénom" /><br /><br />
                <label>Email:</label>
                <input type="email" /><br /><br />
                <label>Tel:</label>
                <input type="tel" />
                <br />
                <br />
                <label>Date de Naissance:</label>
                <input type="date" />
                <br />
                <br />
                <label>Num Appoge:</label>
                <input type="number" />
                <br />
                <br />
                <label>Genre:</label>
                <br />
                <label>Femme</label>
                <input type="radio" value="Femme" />
                <label>Homme</label>
                <input type="radio" value="Homme">
                <br />
                <br />
                <label>nationalit&eacute:</label>
                <input type="text" />
                <br />
                <br />
                <label>Universit&eacute:</label>
                <input type="text" />
                <br />
                <br />
                <label>Date D'inscription:</label>
                <input type="number">
                <br />
                <br />
                <label>Date de Dipl&ocircme:</label>
                <input type="number" />
                <br />
                <br />
                <button type="submit" value="1" class="ui positive button">Valider</button>
            </form>
        </aside>


        <?php
      require_once 'connect.php';
      $sql = "SELECT * FROM Excel";
      $result = mysqli_query($link, $sql) or die(mysqli_error($link));
      

      //Saisie incomplet
     ?>
    </div>
</body>

</html>