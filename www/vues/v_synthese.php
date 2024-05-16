<h2>Synthèse des frais</h2>
<table class="listeLegere">
  	   <caption></caption>
             <tr>
                <th class="date">Date</th>
                <th class="etat">Etat</th>
                <th class='montantEngage'>Montant engagé</th>
                <th class='montantValide'>Montant validé</th>
                
                
                           
             </tr>
        <?php
          foreach ( $dataSynthese as $ligne ) {
      		    $date = $ligne['mois'];
                // Séparer l'année et le mois par "/"
                $annee = substr($date, 0, 4);
                $mois = substr($date, 4, 2);
                $date = $annee . "/" . $mois;

                // On récupère les autres variables
			       $etat = $ligne['libelle'];
                $montantValide = $ligne['montantValideTotal'];
                $montant = $ligne['montantEngageTotal'];
		?>
             <tr>
                <td><?= $date ?></td>
                <td><?= $etat ?></td>
                <td><?= $montant ?></td>
                <td><?= $montantValide ?></td>
             </tr>
        <?php 
          }
		?>
    </table>