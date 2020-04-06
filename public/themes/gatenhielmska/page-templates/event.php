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
    'orderby' => 'name',
    'order' => 'ASC'
]);
$arrayOfSlugs = [];
foreach ($terms as $term) {
    $arrayOfSlugs[] = $term->slug;
};
$totalEvents = 0;
$category = '';
?>


<?php
if (isset($_GET['cat'])) {
    $category = trim(filter_var($_GET['cat'], FILTER_SANITIZE_STRING));

    if (!in_array($category, $arrayOfSlugs)) { ?>
        <h1>No events for the search: <?php echo $category ?> </h1>
<?php
    };

    $events = get_posts(array(
        'post_type' => 'event',
        'orderby' => 'post_date',
        'order' => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => 'event_type',
                'field' => 'slug',
                'terms' => $category
            )
        ),
        'numberposts' => -1
    ));
} else {
    $events = get_posts([
        'post_type' => 'event',
        'orderby' => 'post_date',
        'order' => 'ASC',
    ]);
}
?>
<div class="filters_container">
    Filters:
    <ul class="filters">
        <?php foreach ($terms as $term) : ?>
            <a class="filters_items <?php echo $category == $term->slug ? "active" : "" ?>" href="?cat=<?php echo $term->slug ?>"><?php echo $term->name ?> </a>
        <?php
            $totalEvents += $term->count;
        endforeach;
        ?>
        <a class="filters_items <?php echo $category == "" ? "active" : "" ?>" href="?cat="> All </a>
    </ul>
</div>
<div class="preview_container">
    <?php
    foreach ($events as $post) {
        setup_postdata($post) ?>
        <?php if (get_field('event_start') >= date('j F Y')) {
        ?>
            <?php $eventDate = explode(" ", get_field('event_start')); ?>
            <div class="new_event">
                <div class="new_event_header">
                    <h1 class="new_event_title"><?php the_title() ?></h1>
                    <p class="new_event_date">/ <?php echo "$eventDate[0] $eventDate[1]" ?> / <?php the_field('event_start_time') ?> </p>
                </div>
                <p class="new_event_desc"><?php the_field('event_sum') ?></p>
                <div class="new_event_footer">
                    <a class="new_event_button" href="<?php the_permalink() ?>">Läs mer</a>
                    <?php if (get_the_terms($post, 'event_type') != false) : ?>
                        <?php foreach (get_the_terms($post, 'event_type') as $eventType) : ?>
                            <a class="new_event_tag" href="?cat=<?php echo $eventType->slug ?>"><?php echo $eventType->name ?></a>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
    <?php }
    } ?>
</div>


<?php get_footer(); ?>
