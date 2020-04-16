<?php /* Template Name: gallery-performance */ ?>
<?php get_header(); ?>
<div>

    <div class="page-header-gallery">
        <div></div>
        <h2>Galleri</h2>
        <div></div>
    </div>


    <ul class="gallery-desktop-sub-nav">
                <?php foreach (get_pages(['sort_column' => 'menu_order', 'sort_order' => 'desc', 'parent' => 14]) as $childPage) { ?>
                    <li class="gallery-sub-nav-list">
                        <a href="<?php echo get_page_link($childPage->ID); ?>"><?php echo $childPage->post_title; ?></a>
                    </li>
                <?php } ?>
        </ul>

        <div class="gallery-separator">
            <p>Bilder från Gathenhielmska Huset</p>
    </div>
     <!-- Gallery start -->

     <div class="gallery-container">
      <?php echo do_shortcode('[ngg src="galleries" ids="3" display="basic_thumbnail" thumbnail_crop="0"]'); ?>
    </div>

<!-- Gallery end -->

</div>

<?php get_footer(); ?>
