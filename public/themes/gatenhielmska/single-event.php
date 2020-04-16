<?php get_header(); ?>
<div class="page_header_program">
    <div></div>
    <h2>Program</h2>
    <div></div>
</div>
<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post();
        $eventDate = explode(" ", date('F j Y', strtotime(get_field('event_start')))); ?>

        <div class="single_event">
            <img class="background_logo" src="<?php echo get_template_directory_uri() ?>/assets/images/event-background.svg" alt="">

            <div class="single_event_back">
                <a class="single_event_back_link" href="/events">
                    <img class="single_event_back_link_image" src="<?php echo get_template_directory_uri() ?>/assets/images/arrow.svg" alt="arrow">
                    Tillbaka till program
                </a>
            </div>
            <div class="single_event_image_container">
                <img class="single_event_image" src="<?php the_field('event_image') ?>" />
            </div>
            <div class="single_event_header">
                <h2 class="single_event_title"><?php the_title() ?></h2>
            </div>

            <?php if (get_field('event_desc')) : ?>
                <p class="single_event_desc"><?php the_field('event_desc') ?></p>
            <?php endif; ?>
            <div class="single_event_footer">
                <p class="single_event_footer_item">Datum <span>/ <?php echo $eventDate[1] . ' ' . $eventDate[0] ?></span></p>
                <p class="single_event_footer_item">Tid <span>/ <?php the_field('event_start_time') ?></span></p>
                <p class="single_event_footer_item">Plats <span>/ <?php the_field('location') ?></span></p>
                <?php if (get_field('ticket_url')) : ?>
                    <a class="event_button" href="<?php the_field('ticket_url') ?>">Köp biljett</a>

                <?php else : ?>
                    <p class="single_event_footer_item">Fri entré</p>
                <?php endif; ?>
            </div>
        </div>



    <?php endwhile; ?>

<?php endif; ?>


<?php get_footer(); ?>
