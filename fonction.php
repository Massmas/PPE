<?php
    function connexion()
    {
    $con = mysqli_connect("localhost","root","","association");
    return $con;
    }

    function deconnexion ($con)
    {
        mysqli_close($con);
    }

   function selectAll ()
    {
        //on se connecte sur la base de données 
        $con = connexion();
        $requete ="select * from membre;";
        $resultats = mysqli_query($con,$requete);
        $chaine ="<table border =1>
                     <tr> <td> Id Membre </td> <td> Nom </td>
                    <td> Prenom </td> <td> Adresse </td>
                    <td> Email </td> <td> Telephone </td> 
                    <td> cotisation </td> <td> reglement </td> 
                     </tr>";

        while ($ligne = mysqli_fetch_assoc($resultats))
        {
            $chaine .= "<tr><td>" .$ligne['idMembre']. "</td>
            <td>" .$ligne['Nom']. "</td>
            <td>" .$ligne['Prenom']. "</td>
            <td>" .$ligne['Adresse']. "</td>
            <td>" .$ligne['Email']. "</td>
            <td>" .$ligne['Telephone']. "</td>
            <td>" .$ligne['cotisation']. "</td>
            <td>" .$ligne['reglement']. "</td>
            </tr>";
        }
        $chaine .= "</table>";
        deconnexion($con);
        return $chaine;
    
    }
    function insert ($tab)
    {
        $con=connexion();
        $requete="insert into membre (nom, prenom, adresse, email, telephone, cotisation, reglement) values ('".$tab['nom']."','".$tab['prenom']."','".$tab['adresse']."','".$tab['email']."','".$tab['telephone']."','".$tab['cotisation']."','".$tab['reglement']."');";

        $resultats = mysqli_query($con, $requete);

        deconnexion($con);
    }
    function rechercher($mot)
    {
            $con = connexion();
        $requete ="select * from membre where nom like '%".$mot."%' or Prenom like '%".$mot."%' or Email like '%".$mot."%' or Adresse like '%".$mot."%' ;";
        $resultat = mysqli_query($con,$requete);
        $chaine ="<table border =1>
                    <tr> <td> idMembre </td> <td> Nom </td>
                    <td>Prenom </td> <td> Adresse </td>
                    <td> Email </td> <td> Telephone </td>
                    </tr> ";

        while ($ligne = mysqli_fetch_assoc($resultat))
        {
            $chaine .= "<tr><td>" .$ligne['idMembre']. "</td>
            <td>" .$ligne['Nom']. "</td>
            <td>" .$ligne['Prenom']. "</td>
            <td>" .$ligne['Adresse']. "</td>
            <td>" .$ligne['Email']. "</td>
            <td>" .$ligne['Telephone']. "</td>
            </tr>";
        }
        $chaine .= "</tables";
        deconnexion($con);
        return $chaine;

    }
    function supprimer($id)
    {
        $con=connexion();
        $requete="delete from membre where idMembre= ".$id.";";
        $resultat = mysqli_query($con,$requete);

        deconnexion($con);
    }
    function selectwhere($id)
    {
        $con=connexion();
        $requete="select * from membre where idMembre=".$id.";";
        $resultat = mysqli_query($con,$requete);
        $ligne = mysqli_fetch_assoc($resultat);
        deconnexion($con);
        return $ligne;

    }
    function update($tab)
    {
        $con=connexion();
        $requete="update membre set Nom='".$tab['Nom']."', Prenom='".$tab['Prenom']."', Adresse='".$tab['Adresse']."', Email='".$tab['Email']."',Telephone='".$tab['Telephone'].",cotisation='".$tab['cotisation']."',reglement='".$tab['reglement'].", where idMembre=".$tab['idMembre']."';";
        $resultat=mysqli_query($con,$requete);
        deconnexion($con);
    }
?>