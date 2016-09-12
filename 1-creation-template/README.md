# TP Création de templates de page respectant les bonnes pratiques

## Objectifs
L'objectif de ce TP est de créer des templates en respectant les bonnes pratiques de Wordpress. Le premier template permettra de créer une page de mentions légales et le deuxième permettra de modifier le contenu d'un article. 

## Préparatifs
- Installer Wordpress
- Activer le thème enfant "twentysixteen-child"
- Installer PHPCS en local
```sh
composer global require "squizlabs/php_codesniffer=*"
```
- Vérifier que l'installation a réussi
```sh
phpcs -h
```
Si cela ne fonctionne pas, recharger le terminal.
Si cela ne fonctionne toujours pas, utilisez plutôt cette ligne:
```sh
~/.composer/vendor/bin/phpcs -h
```
- Installer WordPress Coding Standard
```sh
cd && git clone -b master https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards.git wpcs
```
- Ajouter WordPress Coding Standard à PHPCS
```sh
phpcs --config-set installed_paths ~/wpcs
```
- Tester la ligne de commande sur un fichier php de WordPress
```sh
phpcs --standard=WordPress wp-load.php
```

## Instructions
1. Modifier le fichier `template-mention-legales.php` afin de pouvoir sélectionner un modèle de page dans l'administration.
2. Modifier le fichier `template-parts/content-single.php` afin d'afficher le détail d'un article.
 afin d'afficher un lecteur audio. (Indice: Regarder le fichier template-parts/content-single.php contenu dans le thème twentysixteen)
3. Le fichier audio devra être uploadé dans l'administration.
4. Penser à passer régulièrement phpcs afin d'avoir du code conventionnel.