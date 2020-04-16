<?php /* Template Name: Visit */ ?>

<?php get_header(); ?>



<div class="visit-container">
    <div class="about-line"></div>
        <ul class="about-desktop-sub-nav">
                <?php foreach (get_pages(['sort_column' => 'menu_order', 'sort_order' => 'desc', 'parent' => 10]) as $childPage) { ?>
                    <li class="desktop-sub-nav-list">
                        <a class="desktop-sub-nav-a" href="<?php echo get_page_link($childPage->ID); ?>"><?php echo $childPage->post_title; ?></a>
                    </li>
                <?php } ?>
        </ul>
    <div class="page-header-visit"></div>
    <div class="about-text-mobile">
        <div>
            <h3>besök gatenhielmska</h3>
                <p>I april 2020 öppnas Gathenhielmska Huset upp med ett officiellt program från det fria kulturlivet.
                    Huset skall vara en sammanlänkande plats för gränsöverskridande kulturella möten.
                    Ett program med föreställningar, visningar, utställningar och andra evenemang för att tillgängliggöra huset och dess kulturhistoriska värde.</p>
         </div>
        </div>
    </div>
    <div class="visit-tour visit-flex">
        <div class="visit-tour-container">
            <h3>Guidade turer</h3>
            <p>Intresserad av en rundvandring i huset? Boka in dig på en magisk resa genom tid och rum.</p>
            <h4>Nästa tillgängliga tid: <br> 17/5 kl. 14.00</h4>
            <button class="visit-book-btn">BOKA</button>
        </div>
        <div class="visit-tour-wave"></div>
    </div>
    <div class="visit-img-txt-container">
        <div id="visit-img-1"></div>
        <div class="visit-text-img allround-text-container">
            <div>
                <h3>huset</h3>
                <p>I entrén till Gathenhielmska Huset möts man av en väggmålning av fem kvinnor som var och en representerar ett av de fem sinnena. Det är en påminnelse om en tid då sinnlighet och estetik stod högt i kurs. Detta märks i alla husets historiska rum, med tak av skeppsvirke, vackra detaljer, handmålade tapeter - i vissa delar från före husets tillkomst.</p>
            </div>
        </div>
        <div id="visit-img-2"></div>
        <div id="visit-grid-section" class="visit-text-img allround-text-container">
            <div>
                <h3>Trädgården</h3>
                <p>På husets baksida breder Gathenhielmska trädgården ut sig, med gångar, rosenbuskar, lusthus och ekträd. En gång i tiden var även Söderlingska parken en del av husets trädgård, men är i nutid avgränsad med ett trästaket. Trädgården har rustats upp med nya planteringar och växter, och skall inom kort öppnas upp mot parken med en grind.</p>
            </div>
        </div>
        <div id="visit-img-3"></div>
        <div class="visit-text-img allround-text-container">
            <div>
                <h3>Kulturscenen</h3>
                <p>Lukt, hörsel, syn, känsel och smak skall vara representerade, en riktning när vi utformar programmets innehåll över tid. En viktig del är att förvalta det historiska arvet och de unika miljöerna. Genom historiska visningar, gestaltande teater och
tidsenlig musik i autentisk miljö levandegörs händelser och liv från det förflutna.</p>
            </div>
        </div>
    </div>

    <div class="easter-egg-container">
        <p>Måla ägg med oss i trädgården! Öppet hela påsklovet 11-14. Välkommen!</p>
        <div></div>

    </div>



<?php get_footer(); ?>
