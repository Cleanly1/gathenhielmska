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

if (isset($_GET['cat'])) {
    $category = trim(filter_var($_GET['cat'], FILTER_SANITIZE_STRING));
    if (!in_array($category, $arrayOfSlugs)) { ?>
        <h1>No events for the search: <?php echo $category ?> </h1>
<?php
    };
    $posts = new WP_Query([
        'post_type' => 'event',
        'meta_key' => 'event_start',
        'orderby' => 'meta_value_num',
        'order' => 'ASC',
        'meta_query' => [
            [
                'key'     => 'event_start',
                'value'   => current_time('Ymd'),
                'compare' => '>=',
                'type' => 'DATE'
            ]
        ],
        'tax_query' => [
            [
                'taxonomy' => 'event_type',
                'field' => 'slug',
                'terms' => $category
            ]
        ]

    ]);
} else {
    $posts = new WP_Query([
        'post_type' => 'event',
        'meta_key' => 'event_start',
        'orderby' => 'meta_value_num',
        'order' => 'ASC',
        'meta_query' => [
            [
                'key'     => 'event_start',
                'value'   => current_time('Ymd'),
                'compare' => '>=',
            ]
        ],

    ]);
}

?>
<div class="filters_container">
    Filter /
    <ul class="filters">
        <a class="filters_items <?php echo $category == "" ? "active" : "" ?>" href="?cat="> Alla </a>
        <?php foreach ($terms as $term) : ?>
            <a class="filters_items <?php echo $category == $term->slug ? "active" : "" ?>" href="?cat=<?php echo $term->slug ?>"><span class="hideOnDesktop">/</span> <?php echo $term->name ?> </a>
        <?php
            $totalEvents += $term->count;
        endforeach;
        ?>
    </ul>
</div>
<div class="preview_container">
    <img class="background_logo" src="<?php echo get_template_directory_uri() ?>/assets/images/event-background.svg" alt="">
    <?php
    if ($posts->have_posts()) {
        while ($posts->have_posts()) {
            $posts->the_post();
            $eventDate = explode(" ", date('F j Y', strtotime(get_field('event_start'))));
            $terms = get_the_terms($post, 'event_type');
    ?>
            <div class="event">
                <div class="event_image_container">
                    <img class="event_image" src="<?php the_field('event_image') ?>" alt="">
                </div>
                <div class="event_content">
                    <div class="event_header">
                        <h1 class="event_title"><?php the_title() ?></h1>
                        <div class="event_info">
                            <p class="event_date">/ <?php echo "$eventDate[0] $eventDate[1]" ?> / <?php the_field('event_start_time') ?></p>
                            <?php if (get_the_terms($post, 'event_type') != false) : ?>
                                <?php foreach (get_the_terms($post, 'event_type') as $eventType) : ?>
                                    <a class="event_tag showOnDesktop" href="?cat=<?php echo $eventType->slug ?>"> <?php echo $eventType->name ?></a>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            <p class="event_location showOnDesktop">/ <?php the_field('location') ?></p>
                        </div>
                    </div>
                    <div class="event_footer showOnDesktop">
                        <p class="event_desc"><?php the_field('event_sum') ?></p>
                        <a class="event_button" href="<?php the_permalink() ?>">Läs mer</a>
                    </div>
                    <p class="event_desc hideOnDesktop"><?php the_field('event_sum') ?></p>
                    <a class="event_button hideOnDesktop" href="<?php the_permalink() ?>">Läs mer</a>
                </div>
            </div>
        <?php
        }
    } else {
        if (get_the_terms($post, 'event_type') != false) : ?>
            <?php foreach (get_the_terms($post, 'event_type') as $eventType) : ?>
                <a class="event_tag" href="?cat=<?php echo $eventType->slug ?>"> <?php echo $eventType->name ?></a>
            <?php endforeach; ?>
        <?php endif; ?>
    <?php
    }
    wp_reset_postdata();
    ?>
</div>


<?php get_footer(); ?>
