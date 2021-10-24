<?php

//Faites include ("banque_fonctions.php3") dans un fichier
//et vous pourrez utiliser toutes les fonctions suivantes :
//
//  $solde = solde ($compte); ==> Retourne dans $solde le credit de $compte
//
//  $texte = transfert ($from,$to,$montant,$commentaire) ==> retourne le resultat du transfer de
//  $montant cyberflooz, du compte $from sur le compte $to. Avec le commentaire $commentaire
//  echo extraits ($uti) ==> Affiche les extraits de banque de $uti
//  interet ()  ==> Met à jour les comptes qui ne le sont pas encore
//  emprunter_voir ($sem,$somme)  ==> Permet d'afficher les infos d'un emprunts sur $sem semaines
//de $somme
//  valider_emprunt ($sem,$somme,$uti) ==> Valider l'emrpunt de $somme et $sem semaines de $uti
//  emprunt_maj() ==> mettre les emprunts à jour.
//  delete_extraits ($uti) ==> supprime les extraits de $uti
//
//Si vous trouvez d'autres fonctions : prevenez moi par le forum

function solde($uti)
{
    include "cfg.php3";
    $connected = mysql_connect($hote, $utilisateur, $password);
    mysql_select_db("$nomdb", $connected);

    $query = "SELECT * FROM bank_comptes WHERE uti_courant = '$uti'";
    $result = mysql_query($query);
    $nb = mysql_numrows($result);

    if ($nb == "0") {
        $textesend = "Erreur : le compte n'existe pas ...";
    } else if ($nb == 1) {
        $textesend = mysql_result($result, "0", "solde");
    } else {
        $textesend = "Erreur, veuillez contacter un administrateur ...";
    }
    return $textesend;
    mysql_close();
}

function transfert($from, $to, $kass, $comment)
{
    include "cfg.php3";
    $connected = mysql_connect($hote, $utilisateur, $password);
    mysql_select_db("$nomdb", $connected);
    $query = "SELECT * FROM bank_comptes WHERE uti_courant = '$to'";
    $result = mysql_query($query);
    $nb = mysql_numrows($result);
    if ($nb == 0) {
        $textesend = "Le compte $to n'existe pas, veuillez verifier l'existance de ce compte ...";
    } else {
        $query = "INSERT INTO bank_mouvements (uti_courant,type,destinataire,valeur,datetime,showed,comment) VALUES ('$from','retrait','$to','$kass',NOW(),'0','$comment')";
        $result = mysql_query($query);
        $query = "UPDATE bank_comptes SET solde = solde - $kass WHERE uti_courant = '$from'";
        $result = mysql_query($query);
        $query = "INSERT INTO bank_mouvements (uti_courant,type,destinataire,valeur,datetime,showed,comment) VALUES ('$to','Depot','$from','$kass',NOW(),'0','$comment')";
        $result = mysql_query($query);
        $query = "UPDATE bank_comptes SET solde = solde + $kass WHERE uti_courant = '$to'";
        $result = mysql_query($query);
        $textesend = "Le transfert de $kass cyberflooz depuis le compte de $from sur le compte de $to s est effectué avec succès";

        $solde_from = solde($from);
        $solde_to = solde($to);

        $query = "UPDATE bank_interet SET total = total + $solde_from WHERE uti_courant = '$from'";
        $result = mysql_query($query);

        $query = "UPDATE bank_interet SET total = total + $solde_to WHERE uti_courant = '$to'";
        $result = mysql_query($query);

        $query = "UPDATE bank_interet SET nombre = nombre + 1 WHERE uti_courant = '$to'";
        $result = mysql_query($query);

        $query = "UPDATE bank_interet SET nombre = nombre + 1 WHERE uti_courant = '$from'";
        $result = mysql_query($query);
    }
    return $textesend;

    mysql_close();
}

function interet()
{
    include "cfg.php3";
    $connected = mysql_connect($hote, $utilisateur, $password);
    mysql_select_db("$nomdb", $connected);
    $mois_courant = date(n);
    $query = "UPDATE bank_interet SET updated = 'no' WHERE mois != '$mois_courant'";
    $result = mysql_query($query);
    $query = "UPDATE bank_interet SET mois = '$mois_courant'";
    $result = mysql_query($query);
    $query = "SELECT * FROM bank_interet WHERE updated = 'no'";
    $result = mysql_query($query);
    $nb = mysql_numrows($result);
    $i = 0;
    if ($nb > 0) {
        while ($i < $nb) {
            $uti_courant = mysql_result($result, $i, "uti_courant");
            $total = mysql_result($result, $i, "total");
            $nombre = mysql_result($result, $i, "nombre");

            $moyenne = $total / $nombre;
            $interet = $moyenne / 50;
            $interet = ceil($interet);

            $from = "cyberialis";
            $comment = "Vos interêts ce mois ci.";
            $trans = transfert($from, $uti_courant, $interet, $comment);

            $i++;
            $total = solde($uti_courant);
            $query = "UPDATE bank_interet SET total = '$total' WHERE uti_courant = '$uti_courant'";
            $result = mysql_query($query);
            $query = "UPDATE bank_interet SET nombre = '1' WHERE uti_courant= '$uti_courant'";
            $result = mysql_query($query);

        }

    }

    $query = "UPDATE bank_interet SET updated = 'yes'";
    $result = mysql_query($query);

    mysql_close();
}

function extraits($uti)
{
    include "cfg.php3";

    $connected = mysql_connect($hote, $utilisateur, $password);
    mysql_select_db("$nomdb", $connected);

    $query = "SELECT * FROM bank_mouvements WHERE uti_courant='$uti' ORDER BY datetime ASC";
    $result2 = mysql_query($query);
    $nb = mysql_numrows($result2);
    if ($nb != 0) {
        $date = mysql_result($result2, "0", "datetime");
        $i = 0;
        $montant = solde($uti);
        if ($nb != 0) {
            while ($i < $nb) {
                $type = mysql_result($result2, $i, "type");
                $kass = mysql_result($result2, $i, "valeur");
                if ($type == "retrait") {
                    $montant = $montant + $kass;
                } else if ($type == "Depot") {
                    $montant = $montant - $kass;
                }
                $i++;
            }
        } else {
            $date = date(d / n / Y);
            $montant = solde($uti);
        }
    } else {
        $montant = solde($uti);
    }
    $textesend = "<font color = '#0000A0'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
<tr>
<td align = 'left'></td>
</tr>
<tr>
<td align = 'left'></td>
</tr>
<tr>
<td align = 'left' width='50%' bgcolor = '#4476A8'><font color = '#ffffff'>Montant au $date</td>
<td align = 'right' width='50%' bgcolor = '#4476A8'><font color = '#ffffff'>$montant cyberflooz</td>
</tr>";

    if ($nb == 0) {
        $textsend .= "<tr>
<td>Pas d'extraits ...</td>
<td></td>
</tr>";
    } else {
        $i = 0;
        while ($i < $nb) {
            $date = mysql_result($result2, $i, "datetime");
            $type = mysql_result($result2, $i, "type");
            $valeur = mysql_result($result2, $i, "valeur");
            $commentaire = mysql_result($result2, $i, "comment");
            $destinataire = mysql_result($result2, $i, "destinataire");
            $commentaire = stripslashes($commentaire);
            $textesend .= "<tr><td colspan='2'>&nbsp;</td></tr>";
            if ($type == "retrait") {
                $textesend .= "<tr>
<td><font color = '#0000A0'>Transfert de $valeur sur le compte $destinataire</td>
<td align = 'right'><font color='#FF0000'>- $valeur</td>
</tr>
<tr>
<td colspan='2'><font color = '#ffffff'>$commentaire</td>
</tr>";
            }
            if ($type == "Depot") {
                $textesend .= "<tr>
<td><font color = '#0000A0'>Transfert de $valeur depuis le compte $destinataire</td>
<td align = 'right'><font color = '#ffffff'>$valeur</td>
</tr>
<tr>
<td colspan='2'><font color = '#ffffff'>$commentaire</td>
</tr>";
            }
            $i++;
        }
    }
    $textesend .= "<tr><td colspan='2'>&nbsp;</td></tr>";
    $montant = solde($uti);
    $textesend .= "<tr>
<td align = 'left' width='50%' bgcolor = '#4476A8'><font color = '#ffffff'>Montant à ce jour</td>
<td align = 'right' width='50%' bgcolor = '#4476A8'><font color = '#ffffff'>$montant cyberflooz</td>
</tr>";
    $textesend .= "<tr><td colspan='2' align='center'><font size='2' color='#0000A0'></td></tr>";
    $textesend .= "</table>";
    return $textesend;
    mysql_close();
}

function emprunter_voir($sem, $somme)
{
    $return = "not right";
    if ($sem <= 2) {
        $return = "Votre emprunt dois se faire en plus de deux semaines";
    }
    if ($sem >= 20) {
        $return = "Votre emprunt doit se faire en moins de 20 semaines";
    }
    if ($return == "not right") {
        if ($somme <= 10000) {
            $somme_calc = $somme / 100 * 10;
            $somme_calc = ceil($somme_calc);
            $somme_total = $somme + $somme_calc;
            $remboursement = $somme_total / $sem;
            $remboursement = ceil($remboursement);
            $return = "Pour un emprunt de $somme en $sem semaines, vous devrez payez $remboursement cyberflooz pendant $sem semaines, soit un total de $somme_total cyberflooz.<br>";
        }
        if ($somme <= 50000 && $return == "not right") {
            $somme_calc = $somme / 100 * 8;
            $somme_calc = ceil($somme_calc);
            $somme_total = $somme + $somme_calc;
            $remboursement = $somme_total / $sem;
            $remboursement = ceil($remboursement);
            $return = "Pour un emprunt de $somme en $sem semaines, vous devrez payez $remboursement cyberflooz pendant $sem semaines, soit un total de $somme_total cyberflooz.<br>";
        }
        if ($somme <= 100000 && $return == "not right") {
            $somme_calc = $somme / 100 * 6;
            $somme_calc = ceil($somme_calc);
            $somme_total = $somme + $somme_calc;
            $remboursement = $somme_total / $sem;
            $remboursement = ceil($remboursement);
            $return = "Pour un emprunt de $somme en $sem semaines, vous devrez payez $remboursement cyberflooz pendant $sem semaines, soit un total de $somme_total cyberflooz.<br>";
        }

        if ($somme <= 500000 && $return == "not right") {
            $somme_calc = $somme / 100 * 4;
            $somme_calc = ceil($somme_calc);
            $somme_total = $somme + $somme_calc;
            $remboursement = $somme_total / $sem;
            $remboursement = ceil($remboursement);
            $return = "Pour un emprunt de $somme en $sem semaines, vous devrez payez $remboursement cyberflooz pendant $sem semaines, soit un total de $somme_total cyberflooz.<br>";
        }

        if ($somme > 500000 && $return == "not right") {
            $somme_calc = $somme / 100 * 3;
            $somme_calc = ceil($somme_calc);
            $somme_total = $somme + $somme_calc;
            $remboursement = $somme_total / $sem;
            $remboursement = ceil($remboursement);
            $return = "Pour un emprunt de $somme en $sem semaines, vous devrez payez $remboursement cyberflooz pendant $sem semaines, soit un total de $somme_total cyberflooz.<br>";
        }
    }
    return $return;
}

function valider_emprunt($sem, $somme, $uti_courant)
{
    $return = "not right";
    if ($sem <= 2) {
        $return = "Votre emprunt dois se faire en plus de deux semaines";
    }
    if ($sem >= 20) {
        $return = "Votre emprunt doit se faire en moins de 20 semaines";
    }
    if ($return == "not right") {
        if ($somme <= 10000) {
            $somme_calc = $somme / 100 * 10;
            $somme_calc = ceil($somme_calc);
            $somme_total = $somme + $somme_calc;
            $remboursement = $somme_total / $sem;
            $remboursement = ceil($remboursement);
        }
        if ($somme <= 50000 && $return == "not right") {
            $somme_calc = $somme / 100 * 8;
            $somme_calc = ceil($somme_calc);
            $somme_total = $somme + $somme_calc;
            $remboursement = $somme_total / $sem;
            $remboursement = ceil($remboursement);
        }
        if ($somme <= 100000 && $return == "not right") {
            $somme_calc = $somme / 100 * 6;
            $somme_calc = ceil($somme_calc);
            $somme_total = $somme + $somme_calc;
            $remboursement = $somme_total / $sem;
            $remboursement = ceil($remboursement);
        }

        if ($somme <= 500000 && $return == "not right") {
            $somme_calc = $somme / 100 * 4;
            $somme_calc = ceil($somme_calc);
            $somme_total = $somme + $somme_calc;
            $remboursement = $somme_total / $sem;
            $remboursement = ceil($remboursement);
        }

        if ($somme > 500000 && $return == "not right") {
            $somme_calc = $somme / 100 * 3;
            $somme_calc = ceil($somme_calc);
            $somme_total = $somme + $somme_calc;
            $remboursement = $somme_total / $sem;
            $remboursement = ceil($remboursement);
        }

        include "cfg.php3";

        $connected = mysql_connect($hote, $utilisateur, $password);
        mysql_select_db("$nomdb", $connected);

        $jour = date(z);

        $query = "INSERT INTO bank_emprunts (uti_courant,somme,semaine,reste_semaines,updated,sem) VALUES ('$uti_courant','$somme_total','$remboursement','$sem','1','$jour')";
        $result = mysql_query($query);

        $query = transfert("cyberialis", $uti_courant, $somme, "Votre emprunt de $somme cyberflooz");
        return "La transaction s'est effectuée avec succès";
        mysql_close();
    }
}

function emprunt_maj()
{
    include "cfg.php3";

    $connected = mysql_connect($hote, $utilisateur, $password);
    mysql_select_db("$nomdb", $connected);

    $verif = date(z);
    $veriff = $verif - 7;

    $query = "DELETE FROM bank_emprunts WHERE reste_semaines = '0'";
    $result = mysql_query($query);

    $query = "UPDATE bank_emprunts SET updated = 0 WHERE sem < $veriff";
    $result = mysql_query($query);

    $query = "SELECT * FROM bank_emprunts WHERE updated = 0";
    $result = mysql_query($query);
    $nb = mysql_numrows($result);
    if ($nb != 0) {
        $i = 0;
        while ($i < $nb) {
            $uti = mysql_result($result, $i, "uti_courant");
            $kass = mysql_result($result, $i, "semaine");
            $reste = mysql_result($result, $i, "reste_semaines");
            $reste = $reste - 1;
            transfert($uti, "Cyberialis", $kass, "Remboursement hebdomadaire de votre emprunt ( il reste $reste semaine(s) )");
            $query2 = "UPDATE bank_emprunts SET sem = $verif WHERE uti_courant='$uti'";
            $result2 = mysql_query($query2);
            $query2 = "UPDATE bank_emprunts SET updated = '1' WHERE uti_courant='$uti'";
            $result2 = mysql_query($query2);
            $query2 = "UPDATE bank_emprunts SET reste_semaines=reste_semaines-1 WHERE uti_courant='$uti'";
            $result2 = mysql_query($query2);
            $i++;
        }
    }

    mysql_close();
}

function delete_extraits($uti)
{
    include "cfg.php3";

    $connected = mysql_connect($hote, $utilisateur, $password);
    mysql_select_db("$nomdb", $connected);

    $query = "DELETE FROM bank_mouvements WHERE uti_courant = '$uti'";
    $result = mysql_query($query);

    mysql_close();
}