<title>Listes des personnes et de leurs identifiants</title>
<?php
	include("session.php");
	$SQL = "SELECT P.pid, P.nom, P.prenom, ID.valeur, ID.tid, IT.nom AS itnom FROM personnes P, identifications ID, itypes IT WHERE P.pid = ID.pid AND ID.tid = IT.tid ORDER BY P.pid";
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
        <legend align="center">Listes des personnes et de leurs identifiants</legend>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Valeur</th>
                        <th scope="col">Types</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
				foreach($res as $row)
				{
?>
                    <tr class="active">
                        <td><?php echo htmlspecialchars($row['nom']); ?></td>
                        <td><?php echo htmlspecialchars ($row['prenom']); ?></td>
                        <td><?php echo htmlspecialchars ($row['valeur']); ?></td>
                        <td><?php echo htmlspecialchars ($row['itnom']); ?></td>
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