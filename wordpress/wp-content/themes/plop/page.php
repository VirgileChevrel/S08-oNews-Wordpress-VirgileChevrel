<?php get_header(); ?>

<main class="right">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- emmet: h2+article>a+h3+div>(img+strong+time)+p+a -->
    <h2 class="right__title"><?php the_title(); ?></h2>

    <article class="post post--solo">
    <?php if (! is_page()) : ?>
    <div class="post__meta">
        <img class="post__author-icon" src="../images/icon-dar.png" alt="">
        <strong class="post__author"><?php the_author(); ?></strong>
        <time datetime="2018-03-27"><?php the_date(); ?></time>
    </div>
    <?php endif; ?>
    <p><?php the_content(); ?></p>
    <a href="<?= get_option('home'); ?>" class="post__link">Back to home</a>
    </article>

<?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>