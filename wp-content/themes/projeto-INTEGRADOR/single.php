<?php // CÓDIGO LATERAL ?>

<?php get_header(); ?>
<div class="container">

<h1>SINGLE</h1>
 <?php // IMPRIMIR POSTS  ?>
   
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1>
            <a href="<?php echo get_attachment_link(); ?>">
                <?php the_title(); ?>
            </a>
        </h1>
        <p>
            <?php the_content(); ?>

            <?php comments_template(); ?>
        </p>
        <?php endwhile; else : ?>
        <p><?php _e( 'Nenhum post encontrado!' ); ?></p>
        <?php endif; ?>


</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>