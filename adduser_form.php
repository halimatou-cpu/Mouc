<?php
$title="Ajout d'un utilisateur"; 
include("home.php");
?>
<p class="error"><?= $error??""?></p>
<div class="center">
    <h1>Inscription</h1>
    <form method="post">
        <!--legend>Inscription</legend-->
        <table>
            <tr>
                <td><label for="inputNom" class="control-label">Nom</label></td>
                <td><input type="text" name="nom" class="form-control" id="inputNom" placeholder="Nom" required
                        value="<?= $data['nom']??""?>">
                </td>
            </tr>
            <tr>
                <td> <label for="inputPrenom" class="control-label">Prénom</label></td>
                <td> <input type="text" name="prenom" class="form-control" id="inputPrenom" placeholder="Prénom"
                        required aria-required="true" value="<?= $data['prenom']??""?>"></td>
            </tr>
            <tr>
                <td><label for="inputLogin" class="control-label">Login</label></td>
                <td><input type="text" name="login" class="form-control" id="inputLogin" placeholder="login" required
                        value="<?= $data['login']??""?>"></td>
            </tr>
            <tr>
                <td><label for="inputMDP" class="control-label">MDP</label></td>
                <td><input type="password" name="mdp" class="form-control" id="inputMDP" placeholder="Mot de passe"
                        required value=""></td>
            </tr>
            <tr>
                <td><label for="inputMDP2" class="control-label">Répéter MDP</label></td>
                <td><input type="password" name="mdp2" class="form-control" id="inputMDP"
                        placeholder="Répéter le mot de passe" required value=""></td>
            </tr>
        </table>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
    </form>
</div>
<?php

<form action="action.php" method="post">
Nom:
<input type="text" name="nom">
Prénom:
<input type="text" name="prenom">
<input type="submit" value="Envoyer">
</form>

include("footer.php");
 



<title>Ajouter un utilisateur </title>
<?php
    include("home.php"); //connexion
    //requete
    $SQL = "SELECT * FROM users ORDER BY uid";
    $res = $db->query($SQL);

    //verif s'il ya des resultats,use un fetch
    $row = $res->fetch();
    if (!$row)
    {
    echo "<P>La liste d'utilisateur est vide";
    }
    else
    {   
?>

<div class="horizontalement">
    <fieldset>
        <legend align="center">Ajouter un utilisateur</legend>
        <div>
            <table>
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
                    <tr>
                        <td><?php echo htmlspecialchars($row['login']);?></td>
                    </tr>
                    <?php
                        }
?>
                    <tr>
                        <td><a href="#" data-toggle="modal" data-target="#AjoutUser" class="btn btn-success"><span
                                    class="glyphicon glyphicon-plus"></span> Ajouter</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </fieldset>
</div>

<div class="modal fade" id="AjoutUser" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" align="center">
                Ajoutez un utilisateur
            </div>
            <div class="modal-footer" align="center">
                <form method="post" action="adduser.php">
                    <table>
                        <tr>
                            <td><label for="inputLogin" class="control-label">Login</label></td>
                            <td><input type="text" name="login" class="form-control" id="inputLogin" placeholder="login"
                                    required value="<?= $data['login']??""?>" maxlength="30"></td>
                        </tr>
                        <tr>
                            <td><label for="inputMDP" class="control-label">Mot de passe</label></td>
                            <td><input type="password" name="mdp" class="form-control" id="inputMDP"
                                    placeholder="Mot de passe" required value="" maxlength="255"></td>
                        </tr>
                        <tr>
                            <td><label for="inputMDP2" class="control-label">Répéter Mot de passe</label></td>
                            <td><input type="password" name="mdp2" class="form-control" id="inputMDP"
                                    placeholder="Répéter le mot de passe" required value="" maxlength="255"></td>
                        </tr>
                    </table>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    }
    
?>