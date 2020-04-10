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

    echo "hej";
    if (!in_array($category, $arrayOfSlugs)) { ?>
        <h1>No events for the search: <?php echo $category ?> </h1>
<?php
    };
    $events = new WP_Query([
        'post_type' => 'event',
        'meta_query' => [
            'key'     => 'field_5e7a05e24567b',
            'value'   => date('Ymd'),
            'compare' => '>'
        ],
        'tax_query' => [
            [
                'taxonomy' => 'event_type',
                'field' => 'slug',
                'terms' => $category
            ]
        ]

    ]);
    print_r($events->meta_query);
} else {
    echo "hejsan";
    $events = new WP_Query([
        'post_type' => 'event',
        'meta_query' => [
            'key'     => 'field_5e7a05e24567b',
            'value'   => date('Ymd'),
            'compare' => '>'
        ],

    ]);
    print_r($events->meta_query);
}

?>
<div class="filters_container">
    Filter /
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

    if ($events->have_posts()) {
        while ($events->have_posts()) {
            $events->the_post();
            print_r($events->request);
            $eventDate = explode(" ", date('F j Y', strtotime(get_field('event_start')))); ?>
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
    <?php
        }
    } else {
        print_r("hello");
    }
    wp_reset_postdata();
    ?>
</div>


<?php get_footer(); ?>
