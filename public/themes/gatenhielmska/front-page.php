<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
        <div class="row">
            <div class="col">
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </div>
        </div>

    <?php endwhile; ?>

<?php endif; ?>
<div class="d-flex flex-row ">
    <?php foreach (get_posts(['sort_order' => 'asc']) as $post) {
        setup_postdata($post);  ?>
        <div class="d-flex flex-column w-50">
            <a href="<?php the_permalink(get_option('page_for_posts')); ?>"><?php the_title() ?></a>
            <?php the_post_thumbnail('thumbnail'); ?>
            <?php the_excerpt(); ?>
        </div>
    <?php } ?>
</div>
<?php get_footer(); ?>