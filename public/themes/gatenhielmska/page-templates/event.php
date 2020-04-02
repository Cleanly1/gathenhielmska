<?php

/**
 * Template Name: Events
 */
?>

<?php get_header(); ?>

<?php
$terms = get_terms([
    'taxonomy' => 'event_type',
    'hide_empty' => false,
    'orderby' => 'count',
    'order' => 'DESC'
]);
?>

<div>
    <ul>
        <?php foreach ($terms as $term) : ?>
            <a href="?cat=<?php echo $term->slug ?>"><?php echo $term->name . "($term->count)" ?></a>
        <?php endforeach; ?>
        <a href="?cat="> Remove filter </a>
    </ul>
</div>
<?php
if (isset($_GET['cat'])) {
    $cat = $_GET['cat'];

    $posts = get_posts(array(
        'post_type' => 'event',
        'orderby' => 'post_date',
        'order' => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => 'event_type',
                'field' => 'slug',
                'terms' => $cat
            )
        ),
        'numberposts' => -1
    ));
    foreach ($posts as $post) {
        setup_postdata($post) ?>
        <?php $eventDate = explode(" ", get_field('event_start')); ?>
        <div class="new_event">
            <div class="new_event_header">
                <h1 class="new_event_title"><?php the_title() ?></h1>
                <p class="new_event_date">/ <?php echo "$eventDate[0] $eventDate[1]" ?> / <?php the_field('event_start_time') ?> </p>
            </div>
            <p class="new_event_desc"><?php the_field('event_sum') ?></p>
            <a class="new_event_button" href="<?php the_permalink() ?>">Läs mer</a>
        </div>
    <?php }
} else { ?>
    <?php



    $events = get_posts([
        'post_type' => 'event',
        'orderby' => 'post_date',
        'order' => 'ASC',
    ]); ?>
    <div class="preview_container">
        <?php foreach ($events as $post) : setup_postdata($post) ?>
            <?php $eventDate = explode(" ", get_field('event_start')); ?>
            <div class="new_event">
                <div class="new_event_header">
                    <h1 class="new_event_title"><?php the_title() ?></h1>
                    <p class="new_event_date">/ <?php echo "$eventDate[0] $eventDate[1]" ?> / <?php the_field('event_start_time') ?> </p>
                </div>
                <p class="new_event_desc"><?php the_field('event_sum') ?></p>
                <?php if (get_the_terms($post, 'event_type') != false) : ?>
                    <?php foreach (get_the_terms($post, 'event_type') as $eventType) : ?>
                        <a href="?cat=<?php echo $eventType->slug ?>"><?php echo $eventType->name ?></a>
                    <?php endforeach; ?>
                <?php endif; ?>
                <a class="new_event_button" href="<?php the_permalink() ?>">Läs mer</a>
            </div>

            <?php // if (get_field('event_start') >= date('F j, Y')) :
            ?>
            <!-- <a href="<?php // the_permalink()
                            ?>" class="preview_event">
            <img class="preview_image" src="<?php //the_field('event_image')
                                            ?>" alt="Event image">
            <div class="preview_overlay">
                <p </p>
                <p class="preview_date"><?php //the_field('event_start')
                                        ?> - <?php // the_field('event_end')
                                                ?></p>
            </div>
        </a> -->
            <?php //endif;
            ?>
    <?php endforeach;
    } ?>
    </div>


    <?php get_footer(); ?>
