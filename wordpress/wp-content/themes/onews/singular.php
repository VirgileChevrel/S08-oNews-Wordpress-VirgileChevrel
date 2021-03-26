
<?php 
    get_header();
    if ( have_posts() ) :  // s'il y a des choses à afficher dans ce template
        while ( have_posts() ) : // tant qu'il y a des choses à afficher
            the_post(); // charge l'élément suivant
?>
<!-- emmet: h2+article*6>a+h3+div(img+strong+time)+p+a -->
<h2 class="right__title"><?php the_title() ?></h2>
<article class="post post--solo">
    <a href="" class="post__category post__category--color-"></a>
    <div class="post__meta">
        <strong class="post__author"><?php the_author(); ?></strong>
        <time datetime=""><?php the_date(); ?></time>
    </div>
    <?php the_content(); ?>
    <a href="<?= home_url(); ?>" class="post__link">Back to home</a>

</article>
<?php 
        endwhile;
    endif; 
?>
<?php get_footer(); ?>