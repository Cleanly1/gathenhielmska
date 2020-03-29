<?php

/**
 * Template Name: Events
 */
?>

<?php get_header(); ?>

<?php $events = get_posts(['post_type' => 'event']); ?>
<div class="preview_container">
    <?php foreach ($events as $post) : setup_postdata($post) ?>
        <?php if (get_field('event_start') >= date('F j, Y')) : ?>
            <a href="<?php the_permalink() ?>" class="preview_event">
                <img class="preview_image" src="<?php the_field('event_image') ?>" alt="Event image">
                <div class="preview_overlay">
                    <p class="preview_title"><?php the_field('event_name') ?></p>
                    <p class="preview_date"><?php the_field('event_start') ?> - <?php the_field('event_end') ?></p>
                </div>
            </a>
        <?php endif; ?>
    <?php endforeach; ?>
</div>


<?php get_footer(); ?>
