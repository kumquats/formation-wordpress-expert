TP : Création d'un plugin de lecture audio sécurisée
====================================================

## Objectifs

## Préparatifs

- Télécharger [The WordPress Plugin Boilerplate](http://wppb.io/)

## Instructions

- Créer une table en base de données à l'activation
    + Elle devra s'appeller {le_prefixe}secure_audio
    + Elle aura pour champs (id, ip, count, post_id, created_at)
- Supprimer cette table à la désactivation
- En AJAX, informer le serveur qu'un nouveau click a eu lieu sur le lecteur audio.
- Ajouter un filtre qui permet d'afficher le lecteur audio ou un message d'erreur en cas de dépassement de la limite autorisée d'écoute (disons 10). 
- Créer une tâche planifiée qui remet à zéro les compteurs toutes les heures, count sera mis à 0 et created_at à la date courante.