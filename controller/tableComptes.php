<?php
session_start();
include 'dataconn.php';

if (isset($_POST['enregistreClient'])) {
    // if (!empty($_POST['client']) and !empty($_POST['montant']) and !empty($_POST['dateFermerture'])) {

        $dateouverturecpte = date('Y-m-d H:i:s');
        $visaouverturecpte = $_SESSION['signature'];
        $datefermeturecpte = $_POST['dateFermerture'];
        $solde = $_POST['montant'];
        $carteCredit = "" . rand(1000, 9999) . "   " . rand(1000, 9999) . "   " . rand(1000, 9999) . "   " . rand(1000, 9999) . "";
        $client = $_POST['client'];

        $select = mysqli_query($conn, "SELECT * FROM compte WHERE idclient = '" . $_POST['client'] . "'");
        if (mysqli_num_rows($select)) {
            $errorMsg = "Ce compte existe dejà !";
        } else {
                // insertion dans la table client
                $query = "INSERT INTO compte(
                dateouverturecpte,
                visaouverturecpte,
                datefermeturecpte,
                solde,
                carteCredit,
                idclient) VALUES (
                '$dateouverturecpte',
                '$visaouverturecpte',
                '$datefermeturecpte',
                '$solde',
                '$carteCredit',
                '$client')";
            $query_run = mysqli_query($conn, $query);
            if ($query_run) {
                header("Location: ../tables.php");
            } else {
// header("Location: ../tables.php");
                echo 'requette non executer';

            }
        }
        var_dump($query);
        var_dump($dateouverturecpte);
        var_dump($visaouverturecpte);
        var_dump($datefermeturecpte);
        var_dump($solde);
        var_dump($carteCredit);
        var_dump($client);

// } else {
        // // $erreur = "vous n'etre autorisé a ouvrir un compte";
        // // header("Location: ../tables.php");
        // echo "vous n'etre autorisé a ouvrir un compte";

// }

    // }else {
    //     echo "Error : remplisser les champs vide";
    // }
}else {
    echo "Error : la requette ne passe pas";
}
