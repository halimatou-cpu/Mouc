<title>Liste des utilisateurs</title>
<?php
	include("session.php");	
	$SQL = "SELECT * FROM users ORDER BY uid";
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
        <legend align="center">Liste des utilisateurs</legend>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Login</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
						foreach($res as $row)
						{
?>
                    <tr class="active">
                        <td><?php echo htmlspecialchars($row['login']); ?></td>
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