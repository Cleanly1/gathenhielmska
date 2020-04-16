<?php get_header(); ?>

<div class="front_page_header">
    <div class="front_page_image_container">
        <img class="front_page_image hideOnDesktop" src="<?php echo get_template_directory_uri() ?>/assets/images/images/mobile/headers_mobile/header_mobile_1.jpg" alt="">
        <img class="front_page_image showOnDesktop" src="<?php echo get_template_directory_uri() ?>/assets/images/images/desktop/headers_desktop/header_desktop_1.jpg" alt="">
    </div>
    <div class="front_page_image_container front_page_motto_container">
        <h1 class="front_page_motto">
            Gathenhielmska är en kulturell mötesplats för både utövare och besökare.
        </h1>
        <a class="event_button front_page_button" href="">Läs mer</a>
    </div>
</div>

<div class="front_page_infobar">
    <p class="front_page_infobar_text">Måla ägg med oss i trädgården! Öppet hela påsklovet 11-14. Välkommen!</p>
    <img class="front_page_infobar_image" src="<?php echo get_template_directory_uri() ?>/assets/images/egg.svg" alt="">
</div>
<div class="front_page_event_upper_header hideOnDesktop">
    <h1 class="front_page_event_header_title">Aktuellt</h1>
    <p class="front_page_event_header_text">Ett urval av aktuella evenemang och aktiviteter. Ta gärna en titt på vad som händer längre fram!</p>
    <a class="event_button" href="/events">Till programmet</a>
</div>
<?php $posts = new WP_Query([
    'post_type' => 'event',
    'meta_key' => 'event_start',
    'orderby' => 'meta_value_num',
    'order' => 'ASC',
    'posts_per_page' => 3,
    'meta_query' => [
        [
            'key'     => 'event_start',
            'value'   => current_time('Ymd'),
            'compare' => '>=',
        ]
    ],

]); ?>
<div class="front_page_event_container">
    <h1 class="front_page_event_container_title showOnDesktop">Aktuellt</h1>
    <div class="front_page_event_inner">
        <?php
        if ($posts->have_posts()) {
            while ($posts->have_posts()) {
                $posts->the_post();
                $eventDate = explode(" ", date('F j Y', strtotime(get_field('event_start'))));
                $terms = get_the_terms($post, 'event_type');
        ?>
                <div class="front_page_event">
                    <div class="front_page_event_image_container">
                        <img class="front_page_event_image" src="<?php the_field('event_image') ?>" alt="">
                    </div>
                    <div class="front_page_event_content">
                        <div class="front_page_event_header">
                            <h1 class="front_page_event_title"><?php the_title() ?></h1>
                        </div>
                        <div class="front_page_event_footer showOnDesktop">
                            <p class="front_page_event_desc"><?php the_field('event_sum') ?></p>
                            <a class="front_page_event_button" href="<?php the_permalink() ?>">Läs mer</a>
                        </div>
                        <p class="front_page_event_desc hideOnDesktop"><?php the_field('event_sum') ?></p>
                        <a class="front_page_event_button hideOnDesktop" href="<?php the_permalink() ?>">Läs mer</a>
                    </div>
                </div>
        <?php
            }
        } ?>
    </div>
    <a class="event_button showOnDesktop" href="/events">Se alla evenemang</a>
</div>

<div class="front_page_walls">
    <div class="front_page_walls_image_container">

        <img class="front_page_walls_image hideOnDesktop" src="<?php echo get_template_directory_uri() ?>/assets/images/images/mobile/gathenhielmska_collage_mobile.jpg" alt="">
        <img class="front_page_walls_image showOnDesktop" src="<?php echo get_template_directory_uri() ?>/assets/images/images/desktop/gathenhielmska_collage_desktop.jpg" alt="">
    </div>

    <div class="front_page_walls_info">
        <h1 class="front_page_walls_info_title">Väggarna talar</h1>
        <p class="front_page_walls_info_text">I entrén till Gathenhielmska Huset möts man av en väggmålning av fem kvinnor som var och en representerar ett av de fem sinnena. Det är en påminnelse om en tid då sinnlighet och estetik stod högt i kurs. Detta märks i alla husets historiska rum, med tak av skeppsvirke, vackra detaljer, handmålade tapeter – i vissa delar från före husets tillkomst. Varje rum har sina berättelser, från olika tider – människoöden, liv, kärlek och sorg.</p>
        <a class="front_page_walls_button event_button" href="/history">läs mer</a>
    </div>
</div>

<div class="front_page_trivia">
    <h1 class="front_page_trivia_title">Visste du att?</h1>
    <p class="front_page_trivia_text">Gathenhielmska Huset är äldre än USA. <br> Huset stod klart 1747 och USA blev självständigt 1776.</p>
</div>

<?php get_footer(); ?>
