<?php 
    // récupère le contenu de header.php
    get_header();
?>
      <main class="right">
        <!-- emmet: h2+article*6>a+h3+div>(img+strong+time)+p+a -->
        <h2 class="right__title">Latest News</h2>
        <div class="posts">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <article class="post">
            <a href="" class="post__category post__category--color-team">team</a>
            <h3><?php the_title(); ?></h3>
            <div class="post__meta">
              <strong class="post__author"><?php the_author(); ?></strong>
              <time datetime=""><?php the_date(); ?></time>
            </div>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="post__link">Continue reading</a>
          </article>
          <?php endwhile; endif; ?>
        </div>
      </main>
<?php 
    // récupère le contenu de footer.php
    get_footer();
?>