<?php

require("auth/EtreAuthentifie.php");

$title = 'Accueil';
include("header.php");
if($idm->getRole()=="admin")
	{
?>
	<div class="wrapper">
	<nav class="navigation">
	  <ul>
	  	<li>
	      <a href="session.php">Accueil</a>
	    </li>
	    <li class="active">
	      <a href="#">Gérer les utilisateurs</a>
	      <ul class="children sub-menu">
	        <li>
	          <a href="liste_uti.php">Afficher la liste des utilisateurs</a>
	        </li>
	        <li>
	          <a href="adduser_form.php">Ajouter un utilisateur</a>
	        </li>
	        <li>
	        	<a href="supp_uti.php">Supprimer un utilisateur</a>
	        </li>
			<li>
				<a href="mod_uti.php">Modifier le mot de passe d'un utilisateur</a>
			</li>
	      </ul>
	    </li>
	    
	    <li>
	      <a href="">Gérer les types d'identification</a>
	      <ul class="children sub-menu">
	        <li>
	        	<a href="liste_id.php">Afficher la liste des types d'identification</a>
	        </li>
			<li>
				<a href="ajout_id.php">Ajouter un moyen d'identification</a>
			</li>
			<li>
				<a href="supp_id.php">Supprimer un moyen d'identification</a>
			</li>
			<li>
				<a href="mod_id.php">Modifier un moyen d'identification</a>
			</li>
	      </ul>
	    </li>
	    <li>
	      <a href="">Gérer les personnes/identifiants</a>
	      <ul class="children sub-menu">
	      	<li><a href="bouton_ferme_ouvert.php">Inscrire des personnes à un événement</a></li>
	        <li><a href="liste_per.php">Afficher la liste des personnes</a></li>
				    <li><a href="ajout_per.php">Ajouter une personne</a></li>
				    <li><a href="supp_per.php">Supprimer une personne</a></li>
				    <li><a href="mod_per.php">Modifier les informations d'une personne</a></li>
				    <li role="separator" class="divider" ></li>
				    <li><a href="liste_id_per.php">Afficher la liste des personnes et leurs identifiants</a></li>
				    <li><a href="ajout_id_per.php">Ajouter des identifiants à une personne</a></li>
				    <li><a href="mod_id_per.php">Modifier les identifiants d'une personne</a></li>
				    <li><a href="supp_id_per.php">Supprimer les identifiants d'une personne</a></li>
	      </ul>
	    </li>
	    <li>
	      <a href="">Tableau de bord</a>
	      <ul class="children sub-menu">
	        <li><a href="liste_boutons_events.php">Affichage des participations aux évènements</a></li>
				  	<li><a href="liste_inscrit.php">Affichage des inscrits qui n'ont pas participé</a></li>
				  	<li><a href="liste_evenements.php">Affichage des événements et des personnes inscrites qui n'y ont pas participé</a></li>
	      </ul>
	    </li>
	    <li class="last">
	      <a href="<?= $pathFor['logout'] ?>"><span class="glyphicon glyphicon-share"></span> Déconnexion</a>
	    </li>
	  </ul>
	</nav>
	</div>


<?php
	}
	else
	{
?>
		<div class="wrapper">
	<nav class="navigation">
	  <ul>
	  	<li>
	      <a href="session.php">Accueil</a>
	    </li>
	    <li>
	      <a href="event_ferme.php">événement fermé</a>
	    </li>
	    <li>
	      <a href="event_ouvert.php">événement ouvert</a>
	    </li>
	    <li>
	      <a href="liste_event.php">Liste des inscrits par événement</a>
	    </li>
	    <li>
	      <a href="liste_par_event.php">Liste des participants par événement</a>
	    </li>
	   <li class="last">
	      <a href="<?= $pathFor['logout'] ?>"><span class="glyphicon glyphicon-share"></span> Déconnexion</a>
	    </li>
	  </ul>
	</nav>
	</div>

<?php
	}
	include("footer.php");
?>
