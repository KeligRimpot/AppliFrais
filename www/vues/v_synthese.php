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
			    $libelle = $ligne['libelle'];
                $montantValide = $ligne['montantValide'];
                
                $annee = substr($date, 0, 4);
                $mois = substr($date, 4, 2);
                // Séparer l'année et le mois par "/"
                $date_separe = $annee . "/" . $mois;
                // Afficher la date séparée
                $date = $date_separe;
                
			    // $montant = $ligne['montant'];
		?>
             <tr>
                <td><?php echo $date ?></td>
                <td><?php echo $libelle ?></td>
                <td><?php echo $montant ?></td>
             </tr>
        <?php 
          }
		?>
    </table>