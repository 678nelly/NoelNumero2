<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    entete("(Admin-MAJ) Date de tirage au sort");

    if($_POST)
    {
        $date = $_POST['dateTirage'];

        $mysqli = new mysqli($servername, $username, $password, $database);

        $query  = "UPDATE dateTirage SET dateFin='$date';";
        // print( $query."<br>");
        $res = $mysqli->query( $query );

        if($res)
            print("Mise à jour effectué !");

        else
        print("Erreur !!");

        $mysqli->close();
    }

?>

<form action="#" method="POST">
  <label for="dateTirage">Mise à jour de la date du tirage au sort :</label>
  <input type="datetime-local" id="dateTirage" name="dateTirage">
  <input type="submit">
</form>

</body>
</html>