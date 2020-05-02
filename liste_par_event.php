<title>Liste des événements pour les participations</title>
<?php
	include("session.php");	
	$SQL = "SELECT * FROM evenements ORDER BY eid";
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
        <legend align="center">Liste des événements pour les participations</legend>
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
								echo "<a href='liste_par.php?eid=".htmlspecialchars($row['eid'])."& event=".htmlspecialchars($row['intitule'])."'>";
								echo htmlspecialchars($row['intitule']);
?>
                            </a>
                        </td>
                        <td><?php echo htmlspecialchars($row['description']); ?></td>
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