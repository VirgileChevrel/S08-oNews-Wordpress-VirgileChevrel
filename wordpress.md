# Wordpress

## Installation de Wordpress

- Tout se passe sur wordpress.org
    > https://fr.wordpress.org/txt-install/

Il est conseillé d'avoir un utilisateur par application

## Connexion

Pour se connecter la page est wp-login.php

## Articles et pages

La principale différence entre les articles et les pages est que l'on peut catégoriser et étiquetter les articles.

### Articles

1. Créer deux articles, un dans la catégorie news, un dans la catégorie potins
2. Ajouter une vidéo sur l'un des articles

### Pages

1. Créer 3 pages contact, mentions légales et plan du site

## Thèmes

1. Installez un nouveau thème de votre choix
   1. Pensez à ajouter l'option `define('FS_METHOD', 'direct');` dans le fichier wp-config.php
   2. Pensez à donner les droits (cf [fiche récap](https://kourou.oclock.io/ressources/fiche-recap/wordpress-installation-classique/) )

### Structure d'un thème

Deux fichiers sont obligatoires :

- index.php
- style.css

D'autres fichiers sont recommandés :

- screenshot.jpg (qui sera la miniature utilisée par wordpress dans l'écran d'administration)
- d'autres fichiers de templates (attention les noms doivent  respecter certaines contraintes)

## Création de thème

Pour créer un thème il suffit de créer un dossier (dans wp-content/themes) contenant un fichier index.php et un fichier `style.css`

### Ajouter des informations sur son thème

1. Ajouter un fichier screenshot.jpg
2. Créer les templates secondaires (cf wphierarchy.com)

## Modifier les templates

1. récupérer le HTML du oNews de la saison 2 et le coller dans home.php
2. récupérer les dossiers `css` et `images` de la saison et les coller dans un nouveau dossier `assets`
3. dans les templates, on a découper le html pour créer les fichiers header.php et footer.php
4. Pour utiliser header et footer dans notre template, on utilise les templates tags (fonctions fournies par wordpress) get_header et get_footer
5. Pour gérer les feuilles de style (et les fichiers js), on utilise le système de hook dans le header.

### Le système de hook

Des "moments" sont définis dans la vie de l'application.
On peut demander à wordpress d'exécuter du code à ces moments clefs.

Pour cela on utilise une fonction qui s'appelle `add_action` pour lui demander d'exécuter du code spécifique.

On ajoute ce code dans functions.php

## LA boucle de wordpress

Wordpress met à disposition un ensemble de fonctions qui permettent de récupérer les informations de la BDD.
C'est LA BOUCLE

```php
<?php 
    if ( have_posts() ) : // s'il y a des éléments à afficher sur cette page
        while ( have_posts() ) : // tant qu'il en reste
            the_post(); // charge l'élément suivant en mémoire
    ?>
<?php 
// ici j'ai accès à des fonctions spécifiques pour accéder aux informations de l'élément en cours 
?>
<?php endwhile; endif; ?>
```

Dans les templates tags qui sont mis à disposition il y a des version the_* et get_the_*

- get_the_title() fait un return du titre
- the_title() fait un echo du titre

1. Utilisez la boucle pour n'afficher que le bon nombre d'éléments
2. Utilisez les templates tags pour dynamiser l'affichage du contenu
3. Créez le template d'article (dans single.php) et le dynamiser
    - Utiliser `la boucle`
    - Dynamiser le contenu affiché
    - Ajouter le header et le footer

## Les menus

On va procéder en 4 étapes

1. Prévenir wordpress qu'il y a un emplacement de menu dans notre template
    - en utilisant le système de hook sur l'événement `after_setup_theme` puis la fonction `register_nav_menus`
2. Dans le html du template définir où est affiché l'emplacement
    - en utilisant la fonction`wp_nav_menu`
3. Dans wordpress créer un menu
4. Affecter le menu à l'emplacement définit dans le template

