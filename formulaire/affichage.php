<!DOCTYPE html>
<html>
<head>
    <title>Liste des elements de la base de donnée</title>
    <META charset="utf-8"/>
</head>
<body>
<?php
try{
    require('connection.php');
    $requete = $con->query("SELECT * from personne");
    ?>
    <table>
        <tr>
            <td colspan="6" id="entete"> <h1>  Liste  </h1> </td>
        </tr>
        <p><tr>
                <th>ID</th>
                <th>NOM</th>
                <th>PRENOM</th>
                <th>ADRESSE</th>
               
            </tr>
        </p>


        <?php
        while($resultat = $requete->fetch()){
            ?>
            <tr>
                <p> <td><?php echo $resultat['ID']; ?></td>
                <td><?php echo $resultat['NOM']; ?></td>
                <td><?php echo $resultat['PRENOM'];  ?></td>
                <td><?php echo $resultat['ADRESSE'];  ?></td>
                
                    </p>
            </tr>

            <?php
        }
        ?>

    </table>
    <?php
}catch(PDOException $e){
    die('Erreur!!!'.$e->getMessage());
}
?>

</body>
</html>