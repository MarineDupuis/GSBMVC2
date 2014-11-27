    <!-- Division pour le sommaire Comptable -->
<div class="row">
      
    <nav class='col-md-2'>
        
        <h4>
            <?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
        </h4>
           
        <ul class="list-unstyled">
			
           <li>
              <a href="index.php?uc=nouveauVisiteur&action=nouveauVisiteur" title="Créer un nouveau visiteur">Nouveau visiteur</a>
           </li>
 	   <li>
              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
           </li>
         </ul>
        
    </nav>
    <div id="contenu" class="col-md-10">
