Comparative taxes
=================

## Environnement
-	Une VM Vagrant est fournie intégrant Apache, PHP 7 et une BDD MariaDB.
-	Le bundle Symfony par défaut est fourni.
-	Les CDN Jquery et Bootstrap ont été ajoutés dans la vue par défaut.

## Objectifs
-	Créer un formulaire d’ajout d’un article comprenant un montant HT et afficher les valeurs pour le taux 1 TVA à 17 % et le taux 2 TVA à 3 %.
-	Visualiser ces valeurs dans une vue responsive design basée sur Bootstrap et Twig.
-	Constater que les modes de calcul de TVA pour le taux 1 et le taux 2 ont été testés unitairement.
-	Le travail devra être commité dans une branche local

## Données à remplir
<table class="table table-hover">
    <thead>
        <tr>
            <th>Attributs</th>
            <th>Type</th>
            <th>Contrainte</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Label</td>
            <td>String (100)</td>
            <td>Not null</td>
        </tr>
        <tr>
            <td>Description</td>
            <td>String (255)</td>
            <td></td>
        </tr>
        <tr>
            <td>AmountHT</td>
            <td>Float</td>
            <td>Not null and > 0</td>
        </tr>
        <tr>
            <td>Creation</td>
            <td>Datetime</td>
            <td>Current datetime</td>
        </tr>
    </tbody>
</table>

## Formules de calcul
Montant TTC taux 1 = MontantHT * 1,17<br />
Montant TTC taux 2 = MontantHT * 1,20

## Vue à obtenir
Filtre : <br />
Liste de sélection : <br /> 
-	Tout (défault)
-	Montant TTC taux 1 seulement 
-	Montant TTC taux 2 seulement 

Date_creation – Label<br />
Si description afficher description<br />
- Montant HT : xxx €
- Montant TTC taux 1 :  xxx € 	
- Montant TTC taux 2 :  xxx €	

## Informations complémentaires
- URL local : http://comparatif-taxes.localhost/interact
- Se positionner à la racine du projet alias unix via la commande <strong>goto-project</strong> 
- Se connecter à la machine Vagrant en SSH via la commande <strong>vagrant ssh</strong></li>
- Exemple de test unitaire : <strong>phpunit --bootstrap src/AppBundle/DemoTest/Email.php src/AppBundle/Tests/EmailTest.php<strong>
