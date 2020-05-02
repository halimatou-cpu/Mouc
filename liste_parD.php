<title>Liste des participants par date</title>
<?php
	include("liste_boutons_events.php");
	$SQL = "SELECT e.eid, e.intitule, pa.date, pe.nom, pe.prenom FROM personnes pe, participations pa, evenements e WHERE e.eid = pa.eid AND pa.pid = pe.pid ORDER BY pa.date DESC, e.intitule, pe.nom";
	$res = $db->query($SQL);
	if ($res->rowCount()==0)
	{
	echo "<P>La liste est vide";
	}
	else
	{	
?>
<div class="verticalement">
    <fieldset>
        <legend align="center">Liste des participants par date</legend>
        <div class="table-reponsible">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Intitulé</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
					foreach($res as $row)
					{
?>
                    <tr class="active">
                        <td><?php echo htmlspecialchars($row['date']); ?></td>
                        <td><?php echo htmlspecialchars($row['intitule']); ?></td>
                        <td><?php echo htmlspecialchars($row['nom']); ?></td>
                        <td><?php echo htmlspecialchars($row['prenom']); ?></td>
                    </tr>
                    <?php
					}
?>
                </tbody>
            </table>
        </div>
    </fieldset>
</div>
<?php
	}
?>