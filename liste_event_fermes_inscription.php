<title>Liste des événements fermés</title>
<?php
	include("bouton_ferme_ouvert.php");	
	$SQL = "SELECT * FROM evenements WHERE type='ferme' ORDER BY eid";
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
        <legend align="center">Veuillez choisir un événement fermé</legend>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Intitulé</th>
                        <th scope="col">Description</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
					foreach($res as $row)
					{
?>
                    <tr class="active">
                        <td>
                            <?php 
								echo "<a href='liste_a_inscrire.php?eid=".htmlspecialchars($row['eid'])."'>";
								echo htmlspecialchars($row['intitule']);
?>
                            </a>
                        </td>
                        <td><?php echo htmlspecialchars($row['description']);?></td>
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