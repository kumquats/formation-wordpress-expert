TP : Mettre à jour les données des produits à distance avec l'API Rest
======================================================================

## Objectifs

Créer un client en PHP qui consommera l'API REST de WooCommerce.

## Préparatifs

1. Installation en ligne de commande du plugin [WooCommerce](https://woocommerce.com)
    *  
    ```bash
    composer require wpackagist-plugin/woocommerce
    ```
    * Activer le plugin dans l'admin WordPress
    * Suivre le guide d'installation après l'activation
2. Installation du theme de base
```bash
composer require wpackagist-theme/storefront
wp theme activate storefront
``` 
3. Importer les données de test de WooCommerce, fichier `plugins/woocommerce/dummy-data/dummy-data.xml` avec l'outil d'import WordPress

## Instructions

- Configurer l'API Rest WooCommerce
    1. Activer REST API
    2. Activer les permaliens
    3. Générer les clés d'API
- Création du client qui utilisera l'API Rest WooCommerce
    1. Créer un dossier woorestapi dans le répertoire web du serveur
    2. Ouvrir l'outil "ligne de commande" dans ce dossier
    3. Installer le paquet [automattic/woocommerce](https://github.com/woothemes/wc-api-php)
    ```bash
    composer require automattic/woocommerce
    ```
    4. Créer un fichier index.php utilisant le paquet automattic/woocommerce
    5. Coder la mise à jour de produits à l'aide du client précédemment instancié