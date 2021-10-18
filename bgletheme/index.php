
<?php get_header(); ?>

<h1><?php bloginfo('name'); ?></h1>
<main id="acceuil">
     <?php while(have_posts()) : the_post(); ?>
<article>
    <a href="<?php the_permalink(); ?>">
    <h2><?php the_title(); ?></h2>
    <?php the_post_thumbnail('medium'); ?>
    </a>
    <?php the_excerpt(); ?>
    <a href="<?php the_permalink(); ?>">
    Lire la suite
    </a>
</article>
    <?php endwhile; ?>
    </main>

<?php get_footer(); ?>