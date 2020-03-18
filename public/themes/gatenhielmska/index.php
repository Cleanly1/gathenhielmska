<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <div class="d-flex flex-column align-items-start">
        <?php while (have_posts()) : the_post(); ?>
            <div class="d-flex flex-row">
                <div class="d-flex flex-column">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                </div>
            </div>


        <?php endwhile; ?>
    </div>
<?php endif; ?>

<?php get_footer(); ?>