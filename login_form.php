<?php
$page_title="Connexion";
include("header.php");
echo "<p class=\"error\">".($error??"")."</p>";
?>

    <div class="center-block"style="position: relative; margin-left: 40% ; margin-top: 10%">
        <h2>Authentifiez-vous</h2>

        <form method="post" action="login.php">
            <!--legend>Authentifiez-vous</legend-->
            <table class="center">
                <tr><div class="form-group">
                <td><label for="inputNom" class="control-label">Login</label></td>
                <td><input type="text" name="login" size="25" class="form-control" id="inputLogin" required placeholder="login"
                       required value="<?= $data['login']??"" ?>"></td>
                     </div>
                </tr>
                <tr><div class="form-group">
                <td><label for="inputMDP" class="control-label">Mot de passe</label></td>
                <td><input type="password" name="password" size="25" class="form-control" required id="inputMDP"
                       placeholder="Mot de passe"></td>
                     </div>
                </tr>
            </table>
            <div class="checkbox">
            <label>
            <input type="checkbox">Se rappeller</label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-default">Connexion</button>
            </div>
        </form>
    </div>
<?php
include("footer.php");
?>
