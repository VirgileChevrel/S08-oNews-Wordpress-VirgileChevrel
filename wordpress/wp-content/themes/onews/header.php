
<?php 


/*
    On a rajouté un comportement avec une nouvelle qui n'est définie que sur la page contact
    On vérifie donc si cette variable existe
    Et si elle n'existe pas on lui donne une valeur par défaut 
    ce qui va nous permettre de faire des tests sur cette variable
*/
if (! isset($style) )
{
    $style = 'nicole';
}


$menuItemList = [
    'lien_plan' => [
        'url' => 'plan_de_site.php',
        'label' => 'Plan du site',
    ],
    'lien_mention' => [
        'url' => 'mentions_legales.php',
        'label' => 'Mentions légales',
    ],
    'lien_contact' => [
        'url' => 'contact.php',
        'label' => 'Contact',
    ],
];

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>oNews</title>
    <?php wp_head(); ?>
</head>
<body>
    <div class="wrapper">
      <!-- emmet: header>h1+p+nav>ul>li*3>a -->
      <header class="left">
        <h1 class="left__title">O'Clock Students News</h1>
        <div class="left__paragraph">
        <?php if ($style === 'gabriel') : ?>
          <h2 class="left__subtitle"><strong class="left__subtitle-strong">Say a word</strong> Contact Us</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque suscipit nibh quis porttitor. Integer iaculis mi urna, a pulvinar quam adipiscing ut. Vivamus vel vestibulum mauris.
          </p>
        <?php else : ?>
          <h2 class="left__subtitle"><strong class="left__subtitle-strong">Latest news</strong> from our students</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque suscipit nibh quis porttitor. Integer iaculis mi urna, a pulvinar quam adipiscing ut. Vivamus vel vestibulum mauris.
          </p>
        <?php endif; ?>

        </div>
        <?php 
        /* pour afficher un menu (préalablement créé dans le backoffice) on utilise le template tag (la fonction) wp_nav_menu  */
        wp_nav_menu([
          'container' => 'nav', // on précise d'afficher ce menu dans une balise nav
          'menu_class' => 'left__nav', // on précise d'utiliser le style suivant pour les li, pour le reste de la personnalisation direction functions.php
        ]
        ); ?>
      </header>
      <main class="right">