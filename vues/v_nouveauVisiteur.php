<div class="row">
               
    <div class ="col-md-12 col-md-offset-2" id="contenu">
<?php 
if (isset($_REQUEST['erreurs'])) 
    {    
        foreach($_REQUEST['erreurs'] as $erreur)
            {
             echo '<h3 class="text-danger">'.$erreur.'</h3>';
            }
     }
?>
      <form class="form-vertical" method="POST" action="index.php?uc=nouveauVisiteur&action=nouveauVisiteur">
         <fieldset>
             <legend>Veuillez saisir les informations du nouveau visiteur :</legend>
   	 <div class="form-group"> 	
         <label for="nom">Nom :</label>
         <div class="row">
             <div class="col-xs-12 col-sm-6 col-md-4">
             <input class="form-control"  id="nom" type="text" name="nom"  size="30" maxlength="45" placeholder="nom">
            </div>
         </div>
         </div>
         <div class="form-group"> 
	 <label for="prenom">Prénom :</label>
         <div class="row">
             <div class="col-xs-12 col-sm-6 col-md-4">
             <input class="form-control" id="prenom"  type="text"  name="prenom" size="30" maxlength="45" placeholder="prenom">
            </div>
         </div>
         </div>
         <div class="form-group"> 
	 <label for="adresse">Adresse :</label>
         <div class="row">
             <div class="col-xs-12 col-sm-6 col-md-4">
             <input class="form-control" id="adresse"  type="text"  name="adresse" size="30" maxlength="45" placeholder="adresse">
            </div>
         </div>
         </div>
         <div class="form-group"> 
	 <label for="cp">Code Postal :</label>
         <div class="row">
             <div class="col-xs-12 col-sm-6 col-md-4">
             <input class="form-control" id="cp"  type="text"  name="cp" size="30" maxlength="45" placeholder="cp">
            </div>
         </div>
         </div>
         <div class="form-group"> 
	 <label for="ville">Ville :</label>
         <div class="row">
             <div class="col-xs-12 col-sm-6 col-md-4">
             <input class="form-control" id="ville"  type="text"  name="ville" size="30" maxlength="45" placeholder="ville">
            </div>
         </div>
         </div>
         <div class="form-group"> 
	 <label for="dateEmb">Date d'embauche :</label>
         <div class="row">
             <div class="col-xs-12 col-sm-6 col-md-4">
             <input class="form-control" id="dateEmb"  type="text"  name="dateEmb" size="30" maxlength="45" placeholder="dateEmb">
            </div>
         </div>
         </div>
          <button type="submit" class="btn btn-primary">Valider</button>
          <button type="reset" class="btn btn-primary">annuler</button>
         </fieldset>
      </form>

    </div>
</div>
