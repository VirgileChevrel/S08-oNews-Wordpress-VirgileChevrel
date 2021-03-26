<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <title>oNews</title>
    <!-- on veut que wordpress génère le html pour intégrer les feuilles de style -->

    <?php 
    // On demande à wordpress d'afficher les différents header du sit 
    wp_head(); ?>
</head>
<body>
    <div class="wrapper">
      <!-- emmet: header>h1+p+nav>ul>li*3>a -->
      <header class="left">
        <h1 class="left__title"><a href="index.html" class="left__title-link">O'Clock Students News</a></h1>
        <div class="left__paragraph">
          <h2 class="left__subtitle"><strong class="left__subtitle-strong">Latest news</strong> from our students</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque suscipit nibh quis porttitor. Integer iaculis mi urna, a pulvinar quam adipiscing ut. Vivamus vel vestibulum mauris.
          </p>
        </div>

        <?php 
        wp_nav_menu(
          [
            'theme_location' => 'menu-footer',
            'container' => 'nav',
            'menu_class' => 'left__nav',
            'item-spacing' => 'discard',
          ]); 
        ?>
      </header>