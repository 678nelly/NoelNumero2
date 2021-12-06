<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    entete( "Inscription" );

    if ($_POST)
    {
        $pseudo            = $_POST[ 'pseudo' ];
        $mail             = $_POST[ 'mail' ];

        $mysqli = new mysqli($servername, $username, $password, $database);

        $query  = "insert into inscriptions ( pseudo, email ) values ( '$pseudo', '$mail' );";
        //print( $query );
        if ( $mysqli->query( $query ) )
            print( "<h3>$pseudo enregistré</h3>");
        else
            print( "<h3>erreur d'enregistrement</h3>");
        $mysqli->close();
    }
?>

<form action="#" method="POST">
    <input type="text" name='pseudo' placeholder="Entrez votre pseudo">
    <br>
    <input type="text" name='mail' placeholder="Entrez votre mail">
    <br>
    <button type="submit">Valider</button>
</form>

</body>
</html>