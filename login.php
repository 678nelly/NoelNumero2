<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    entete("(Admin) login");

    if ( $_POST )
    {
        $pseudo = $_POST[ "pseudo" ];
        $mail  = $_POST[ "mail" ];
        
        $mysqli = new mysqli($servername, $username, $password, $database);

        $query  = "select * from inscriptions where pseudo='$pseudo' and email='$mail';";

        $res = $mysqli->query( $query );
        //print_r( $res );
        $ligne = $res->fetch_assoc();

        if ( $res->num_rows <= 0 || $ligne['pseudo'] != 'test' && $ligne['email'] != 'test')
            print( "login invalide");

        else
            header("location: AdminChangeDateTirage.php");

        $mysqli->close();
    }
?>

<form action="#" method="POST">
    <input type="text" placeholder="pseudo" name="pseudo" required>
    <br>
    <input type="text" placeholder="mail" name="mail" required>
    <br>
    <button type="submit">Ok</button>
</form>

</body>
</html>