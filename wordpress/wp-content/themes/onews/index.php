<?php
    get_header();

    // en incluant liste_articles, on a accès à notre variable $articles
    $articles = []; 

    $post1 = [];
    $post1['title'] = 'Lorem ipsum dolor article 1';
    $post1['category'] = 'team';
    $post1['userIcon'] = 'icon-dar.png';
    $post1['userName'] = 'Darren Collison';
    $post1['publicationDate'] = '2020-10-01';
    // pour afficher la date au format demandé
    // nous avons fait une recherche et trouvé ceci : 
    // https://www.php.net/manual/fr/datetime.format.php
    // date_create permet de créer un une variable de type (= un objet) datetime
    // cet objet de type datetime peut être utilisé pour afficher la date dans des formats différents
    // en utilisant la fonction date_format
    $post1['publicationDateTime'] = date_create($post1['publicationDate']);
    $post1['content'] = '
    <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, non earum veritatis blanditiis facere voluptas necessitatibus. Id alias deserunt non numquam consectetur soluta, ratione, repudiandae, a amet libero nemo eius.
    Ipsa, tenetur necessitatibus voluptas libero dicta numquam harum, cum, aut alias totam aperiam inventore pariatur soluta molestiae. In provident fuga iure id ipsum expedita molestiae. Perspiciatis incidunt porro soluta iure.
    Commodi nam sunt corrupti ab neque totam delectus. Quisquam tempora voluptatum modi voluptas adipisci, dicta unde quasi nemo reiciendis eos expedita exercitationem nesciunt magnam deleniti beatae quibusdam? Iste, soluta ut!
    Asperiores saepe nostrum debitis illum doloremque odio aliquid tempora nobis eius hic a impedit dicta vitae error, tenetur expedita omnis illo dolore doloribus quibusdam sapiente neque voluptates! Facilis, voluptas amet.
    Perspiciatis quas doloremque iure excepturi! Labore ducimus magni consectetur aperiam, excepturi porro tempora sequi qui reprehenderit adipisci repudiandae suscipit numquam ratione, eum pariatur vitae odit culpa quod quos. Sapiente, quas.
    </p>
    <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, non earum veritatis blanditiis facere voluptas necessitatibus. Id alias deserunt non numquam consectetur soluta, ratione, repudiandae, a amet libero nemo eius.
    Ipsa, tenetur necessitatibus voluptas libero dicta numquam harum, cum, aut alias totam aperiam inventore pariatur soluta molestiae. In provident fuga iure id ipsum expedita molestiae. Perspiciatis incidunt porro soluta iure.
    Commodi nam sunt corrupti ab neque totam delectus. Quisquam tempora voluptatum modi voluptas adipisci, dicta unde quasi nemo reiciendis eos expedita exercitationem nesciunt magnam deleniti beatae quibusdam? Iste, soluta ut!
    Asperiores saepe nostrum debitis illum doloremque odio aliquid tempora nobis eius hic a impedit dicta vitae error, tenetur expedita omnis illo dolore doloribus quibusdam sapiente neque voluptates! Facilis, voluptas amet.
    Perspiciatis quas doloremque iure excepturi! Labore ducimus magni consectetur aperiam, excepturi porro tempora sequi qui reprehenderit adipisci repudiandae suscipit numquam ratione, eum pariatur vitae odit culpa quod quos. Sapiente, quas.
    </p>'; 

    $articles[] = $post1;
?>


<!-- emmet: h2+article*6>a+h3+div(img+strong+time)+p+a -->
<h2 class="right__title">Latest News</h2>
<div class="posts">

<?php 
    if ( have_posts() ) :  // s'il y a des choses à afficher dans ce template
        while ( have_posts() ) : // tant qu'il y a des choses à afficher
            the_post(); // charge l'élément suivant
?>
    <article class="post">
        <a href="" class="post__category post__category--color-"></a>
        <h3><?php get_the_title(); ?></h3>
        <div class="post__meta">
            <strong class="post__author"><?php the_author(); ?></strong>
            <time datetime=""><?php the_time(); ?></time>
        </div>
        <p><?php the_excerpt()  ?></p>
        <a href="<?php the_permalink(); ?>" class="post__link">Continue reading</a>
    </article>
<?php 
        endwhile;
    endif; 
?>
</div>

<?php get_footer(); ?>