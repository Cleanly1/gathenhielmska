<?php /* Template Name: Activity */ ?>

<?php get_header(); ?>

<!-- mobile container start -->
<div class="activity-mobile-container">
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
        <h1>verksamheten</h1>
    </div>
    <div class="about-text-mobile">
        <div>
            <h3>Verksamheten</h3>
                <p>2017 inleder projektledaren Isabel Lagos arbetet med att öppna upp huset och dess vackra trädgård för artister, det fria kulturlivetoch besökare. En ledningsgrupp är i full gång med att planera husets verksamhet och i april 2020 sätter det officiella programmet igång.</p>
        </div>
    </div>
</div>


<!-- mobile container end -->

<?php get_footer(); ?>
