<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post();
        $eventDate = explode(" ", date('F j Y', strtotime(get_field('event_start')))); ?>

        <div class="single_event">
            <div class="single_event_back">
                <a class="single_event_back_link" href="/events">
                    <- Tillbaka till program </a> </div> <img class="single_event_image" src="<?php the_field('event_image') ?>" />
                    <div class="single_event_header">
                        <h2 class="single_event_title"><?php the_title() ?></h2>
                    </div>

                    <?php if (get_field('event_desc')) : ?>
                        <p class="single_event_desc"><?php the_field('event_desc') ?></p>
                    <?php endif; ?>
                    <div class="single_event_footer">
                        <p class="single_event_footer_item">Datum / <?php echo $eventDate[1] . ' ' . $eventDate[0] ?></p>
                        <p class="single_event_footer_item">Tid / <?php the_field('event_start_time') ?></p>
                        <p class="single_event_footer_item">Plats / <?php the_field('location') ?></p>
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
