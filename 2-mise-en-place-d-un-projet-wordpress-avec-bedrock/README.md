TP : Mise en place d'un projet WordPress avec Bedrock
=======================================================

## Objectifs
Mettre en place un environnement de développement dédié au dév WordPress avec [Bedrock](https://roots.io/bedrock/)


## Préparatifs

Récupérer les programmes d'installtion de 
- [Cygwin](https://cygwin.com/install.html)
- [XAMP - Linux](https://www.apachefriends.org/fr/index.html), [MAMP - macOS](https://www.mamp.info/en/), ou [WAMP - Windows](http://www.wampserver.com/) avec PHP >= 5.6
- [Git pour Linux](https://git-scm.com/book/fr/v1/D%C3%A9marrage-rapide-Installation-de-Git), [Git pour macOS](https://git-scm.com/download/mac), [Git pour Windows](https://git-scm.com/download/win)
- [Composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)
- [WP-CLI](http://wp-cli.org/#installing)

## Instructions
- Créer une base de données, via phpMyAdmin, nommée `bedrock`
- Ouvrir l'outil "ligne de commande"
- Se placer dans le répertoire web du serveur local
- Initialiser le projet avec composer
```bash
composer create-project roots/bedrock bedrock
cd bedrock
cp .env.example .env
```
- Configurer la connexion à la base de donnée dans le fichier .env
- Configurer l'URL de `WP_HOME`
- Installer [wp-cli-dotenv-command](https://github.com/aaemnnosttv/wp-cli-dotenv-command)
```bash
mkdir ~/.wp-cli && cd ~/.wp-cli
composer require --prefer-dist aaemnnosttv/wp-cli-dotenv-command:"^0.1"
touch config.yml
```
```yaml
# config.yml
require:
  - vendor/autoload.php
```
- Générer les clés dans le fichier .env
```bash
wp dotenv salts regenerate
```
- Lancer l'installation du site WordPress dans le navigateur
- Versionner les fichiers
- Installer le thème [Twenty Sixteen](https://fr.wordpress.org/themes/twentysixteen/)
```bash
wp theme install twentysixteen
```
- Créer le thème enfant
```bash
wp scaffold child-theme twentysixteen-child --parent_theme=twentysixteen
```
- Activer le thème enfant
```bash
wp theme activate twentysixteen-child
```
- Récupérer les templates précédemment créés
- Versionner les fichiers
