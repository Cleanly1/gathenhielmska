<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <div class="row">
            <div class="col">
                <h2><?php the_title(); ?></h2>
                <?php if (get_field('email')) : ?>
                    <div class="m-1">
                        Contact at:
                        <a href="mailto:<?php the_field('email') ?>">
                            <?php the_field('email') ?>
                        </a>
                    </div>
                <?php endif; ?>
                <?php if (get_field('github')) : ?>
                    <div class="m-1">
                        <a href="<?php the_field('github') ?>">Students Github</a>
                    </div>
                <?php endif; ?>
                <p><?php the_content(); ?></p>
                <div class="m-1">
                    <?php previous_post_link() ?>
                    <?php next_post_link() ?>
                </div>
            </div>

        </div>


    <?php endwhile; ?>

<?php endif; ?>


<?php get_footer(); ?>