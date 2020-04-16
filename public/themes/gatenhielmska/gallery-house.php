<?php /* Template Name: gallery-house */ ?>
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
        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem eum consequuntur accusantium soluta nihil eligendi minima quos perspiciatis ut neque, ullam, ipsum officia qui cumque, incidunt inventore reprehenderit quasi quisquam? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores ducimus suscipit cum debitis voluptatem laborum, pariatur quod ipsum aliquid perspiciatis hic, deleniti voluptas aut temporibus explicabo eum facilis omnis unde.</h1>
        <h1>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni in voluptates repellendus doloremque dicta odit voluptatibus iusto, eius rerum corrupti accusantium enim impedit, ad, totam itaque saepe minima quod odio.</h1>
        <h1>hej</h1>
        <h1>hej</h1>
        <h1>hej</h1>
        <h1>hej</h1>
        <h1>hej</h1>
        <h1>hej</h1>
    </div>

    <!-- Gallery end -->

</div>

<?php get_footer(); ?>
