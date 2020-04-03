<?php get_header(); ?>

<div class="front_page_header">
    <h1 class="front_page_motto">
        Gathenhielmska <br> är en kulturell mötesplats för <br> både utövare och besökare.
    </h1>
    <a class="new_event_button front_page_button" href="">Läs mer</a>
    <img class="front_page_image" src="<?php echo get_template_directory_uri() ?>/assets/images/Logo.png" alt="">
</div>

<?php $events = get_posts([
    'post_type' => 'event',
    'orderby' => 'post_date',
    'order' => 'ASC',
    'number' => 3
]); ?>
<?php
foreach ($events as $post) {
    setup_postdata($post) ?>
    <?php if (get_field('event_start') >= date('j F Y')) {
    ?>
        <?php $eventDate = explode(" ", get_field('event_start')); ?>
        <div class="new_event front_page">
            <div class="new_event_header">
                <h1 class="new_event_title"><?php the_title() ?></h1>
                <p class="new_event_date">/ <?php echo "$eventDate[0] $eventDate[1]" ?> / <?php the_field('event_start_time') ?> </p>
            </div>
            <p class="new_event_desc"><?php the_field('event_sum') ?></p>
            <div class="new_event_footer">
                <a class="new_event_button" href="<?php the_permalink() ?>">Läs mer</a>
                <?php if (get_the_terms($post, 'event_type') != false) : ?>
                    <?php foreach (get_the_terms($post, 'event_type') as $eventType) : ?>
                        <p class="new_event_tag" href="?cat=<?php echo $eventType->slug ?>"><?php echo $eventType->name ?></p>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
<?php }
} ?>
<?php get_footer(); ?>
