<title>Liste des types d'identification</title>
<?php
	include("session.php");
	$SQL = "SELECT * FROM itypes ORDER BY tid";
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
        <legend align="center">Liste des types d'identification</legend>
        <div class="table-reponsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Tid</th>
                        <th scope="col">Nom</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
							foreach($res as $row)
							{
?>
                    <tr class="active">
                        <td><?php echo htmlspecialchars($row['tid']); ?></td>
                        <td><?php echo htmlspecialchars($row['nom']); ?></td>
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