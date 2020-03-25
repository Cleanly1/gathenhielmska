<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <div class="event">
            <?php if (get_field('event_name')) : ?>
                <h2 class="event_title"><?php the_field('event_name') ?></h2>
            <?php endif; ?>
            <?php if (get_field('event_image')) : ?>
                <img class="event_image" src="<?php the_field('event_image') ?>" />
            <?php endif; ?>
            <?php if (get_field('event_desc')) : ?>
                <p class="event_desc"><?php the_field('event_desc') ?></p>
            <?php endif; ?>
        </div>



    <?php endwhile; ?>

<?php endif; ?>


<?php get_footer(); ?>
