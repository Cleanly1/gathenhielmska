<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>
<div class="contact-container">

    <div class="page-header-contact"></div>
    <div class="contact-desktop-divider"></div>

    <div class="contact-big-g"></div>

    <div class="contact-grid">
        <div>
            <h3>Adress</h3>
            <p>Stigbergstorget 7, 414 63 Göteborg</p>
        </div>
        <div>
            <h3>E-post</h3>
            <p>Info@Gatenhielmska.se <br> gathenhielmskabokning@gmail.com</p>
        </div>
        <div>
            <h3>Isabel Lagos</h3>
            <p>Projektledare & konstnärlig ledare <br><span>E-post:</span> isabel@historieverket.se <br> <span>Telefon: </span> 0769-211107</p>
        </div>
        <div>
            <h3>David Sperling Bolander</h3>
            <p>Projektledare <br> <span>E-post:</span> sperlingbolander@gmail.com <br> <span>Telefon:</span> 0707-305134</p>
        </div>
        <div>
            <h3>Joel Heirås</h3>
            <p>Samordnare & producent <br> <span>E-post:</span> joe.heirås@gmail.com <br> <span>Telefon:</span> 0760-983832</p>
        </div>
        <div class="contact-bird-img"></div>
    </div>

    <div class="contact-form">
        <div class="contact-form-div"><h2>Intresserad av att boka ett rum?</h2><?php echo do_shortcode('[contact-form-7 id="30" title="Contact"]'); ?></div>
    </div>
</div>


<?php get_footer(); ?>
