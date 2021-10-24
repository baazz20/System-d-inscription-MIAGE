<?php
require_once 'database.php';
$numeroClient = (isset($_GET["Client"])) ? $_GET["Client"] : null;
$numeroCommande = (isset($_GET["Commande"])) ? $_GET["Commande"] : null;
if ($numeroClient && $numeroCommande) {
    // on recupere les info du client
    $infoClient = $bdd->prepare('SELECT * FROM client WHERE numcl = ?');
    $infoClient->execute(array($numeroClient));
//    verifie si le client exixte
    if ($infoClient->rowCount() > 0) {
        // verifie si la commande existe
        $verifieCommande = $bdd->prepare('SELECT numCom FROM commande WHERE numCom = ?');
        $verifieCommande->execute(array($numeroCommande));
        if ($verifieCommande->rowCount() > 0) {
            // verifie si commande a ete fait pas le client
            $estCeQueLeClientAEffectuerCommande = $bdd->prepare('SELECT numCl FROM commande WHERE numCl = ? AND numCom = ?');
            $estCeQueLeClientAEffectuerCommande->execute(array($numeroClient, $numeroCommande));
            if ($estCeQueLeClientAEffectuerCommande->rowCount() > 0) {
                $tableClient = $infoClient->fetch(PDO::FETCH_NUM); //On met les donnees du client dans un tableau
                $detailCommande = $bdd->query("SELECT produit.numProd, produit.designation, produit.prixUnit, detailcom.qteCom FROM produit INNER JOIN detailcom ON produit.numProd = detailcom.numProd WHERE detailcom.numCom = $numeroCommande");

                // date de commande
                $dateCommande = $bdd->prepare('SELECT * FROM commande WHERE numCom = ? AND numCl = ?');
                $dateCommande->execute(array($numeroCommande, $numeroClient));
                $tableDC = $dateCommande->fetch(PDO::FETCH_NUM); //On traite le resultat
                // Affichage des details
                echo '<div class="col-15 col-xl-6">
        <div class="card h-100">
            <div class="card-header pb-0 p-3">
                <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                        <h6 class="mb-0">Information client</h6>
                    </div>
                </div>
            </div>';
                echo '<div class="card-body p-3">';
                echo '<hr class="horizontal gray-light my-4">';
                echo '<ul class="list-group">';
                echo '<div class="container">
        <div class="row">
          <div class="col">
          <span>
          <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">
                N° CLIENT:</strong> &nbsp;' . $tableClient[0] . '</li>
          <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">
                NOM CLIENT:</strong> &nbsp;' . $tableClient[1] . '</li>
          <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">TELEPHONE:</strong> &nbsp;
                ' . $tableClient[3] . '</li>
          <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp;
                ' . $tableClient[5] . '</li>
          <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">ADDRESSE:</strong> &nbsp;
                ' . $tableClient[2] . '</li>
          <li class="list-group-item border-0 ps-0 pb-0">
                <strong class="text-dark text-sm">FAX:</strong> &nbsp;' . $tableClient[4] . '
            </li>
          </span>
          </div>
          <div class="col">
          <span>
          <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">
          N° COMMANDE:</strong> &nbsp;' . $tableDC[0] . '</li>
          <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">
          DATE COMMANDE:</strong> &nbsp;' . $tableDC[1] . '</li>
          </span></div>
          <div class="w-100"></div>
        </div>
      </div>';
                echo '</ul>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '<br />';
                echo '<div class="row">
    <div class="card">
            <div class="table-responsive">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                numero produis</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                Désignation</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                quantité commandée</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                prix unitaire</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                montant</th>
                        </tr>
                    </thead>';
                echo '<tbody>';
                $montantTotal = 0;
                while ($commande = $detailCommande->fetch(PDO::FETCH_NUM)) {

                    echo '<tr>';

                    echo '<td>
                              <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">' . $commande[0] . '
                                        </h6>
                                    </div>
                                </div>
                            </td>';

                    echo '<td>
                                <p class="text-xs font-weight-bold mb-0"> ' . $commande[1] . '</p>
                            </td>';
                    echo '<td class="align-middle text-center">
                                <span
                                    class="text-secondary text-xs font-weight-bold">' . $commande[3] . '</span>
                            </td>';
                    echo '<td class="align-middle text-center">
                                <span
                                    class="text-secondary text-xs font-weight-bold">' . $commande[2] . ' FCFA</span>
                            </td>';
                    echo '<td class="align-middle text-center text-sm">
                                <span class="badge badge-sm bg-gradient-success">' . $commande[3] * $commande[2] . ' FCFA</span>
                            </td>';
                    echo '</tr>';
                    $montant = $commande[3] * $commande[2];
                    $montantTotal = $montantTotal + $montant;}
                echo '<tr>
            <th colspan="2"></th>
            <th>TOTAL : ' . $montantTotal . ' FCFA</th>
            <th colspan="2"></th>
          </tr>';
                echo '</tbody>';
                echo '</table>';
            } else {
                echo '<div class="alert alert-warning" role="alert">
                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                <span class="alert-text"><strong>Warning!</strong> Cette commande n\'a pas été fait pas ce client !</span>
            </div>';
            }
        } else {
            echo '<div class="alert alert-warning" role="alert">
            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
            <span class="alert-text"><strong>Warning!</strong> cette commande n\'existe pas !</span>
        </div>';
        }
    } else {
        echo '<div class="alert alert-warning" role="alert">
    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
    <span class="alert-text"><strong>Warning!</strong> ce client n\'existe pas !</span>
</div>';

    }

} else {

    echo '<div class="alert alert-warning" role="alert">
    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
    <span class="alert-text"><strong>Warning!</strong> Veuillez remplir les champs vides !</span>
</div>';

}
