<?php /* Template Name: History */ ?>

<?php get_header(); ?>

<!-- mobile container start -->
<div class="about-line"></div>
        <ul class="about-desktop-sub-nav">
            <?php foreach (get_pages(['sort_column' => 'menu_order', 'parent' => 0]) as $page) { ?>
                <?php foreach (get_pages(['sort_column' => 'menu_order', 'sort_order' => 'desc', 'parent' => $page->ID]) as $childPage) { ?>
                    <li class="desktop-sub-nav-list">
                        <a href="<?php echo get_page_link($childPage->ID); ?>"><?php echo $childPage->post_title; ?></a>
                    </li>
                <?php } ?>
            <?php } ?>
        </ul>

    <div class="page-title-mobile">
        <h1>historia</h1>
    </div>
    <div class="about-text-mobile">
        <div>
            <h3>historia</h3>
                <p>På Stigbergstorget i Göteborg står Gathenhielmska Huset, ett vackert trähus med anor från 1700- talet. Marken där huset står skänktes 1717 till redarparet Lars och Ingela Gathenhielm av Karl XII för deras framgångar som "konungens kapare.”</p>
        </div>
    </div>




<!-- mobile container end -->

<?php get_footer(); ?>
