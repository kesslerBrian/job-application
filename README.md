Comparative tax
=================

## Environnement
-	Une VM Vagrant est fournie intégrant Apache, PHP 7 et une BDD MariaDB.
-	Le bundle Symfony par défaut est fourni.
-	Les CDN Jquery et Bootstrap ont été ajoutés dans la vue par défaut.

## Objectifs
-	Créer un formulaire d’ajout d’un article comprenant un montant HT et afficher les valeurs pour le Luxembourg (TVA à 17 %) et la France (TVA à 20 %).
-	Visualiser ces valeurs dans une vue responsive design basée sur Bootstrap et Twig.
-	Constater que les modes de calcul de TVA pour le Luxembourg et la France ont été testés unitairement.
-	Le travail devra être commité dans une branche local

## Données à remplir
Attributs       Type            Constraint
Label           String (100)    Not null
Description     String (255)
AmountHT        Float           Not null, > 0
Date_creation   Datetime        Current datetime

## Formules de calcul
Montant TTC taux 1 = MontantHT * 1,17
Montant TTC taux 2 = MontantHT * 1,20

## Vue à obtenir
Filtre : 
Liste de sélection : 
-	Tout (défault)
-	Montant TTC taux 1 seulement 
-	Montant TTC taux 2 seulement 

- Date_creation – Label
- Si description afficher description
- Montant HT : xxx €
- Montant TTC Lu (Drapeau Lu) :  xxx € 	
- Montant TTC Fr (Drapeau Fr) :  xxx €	

## Informations complémentaires
-	URL local : http://comparatif-taxes.localhost/interact
