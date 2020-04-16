<?php /* Template Name: Activity */ ?>

<?php get_header(); ?>

<!-- mobile container start -->
<div class="activity-mobile-container">
    <!-- desktop sub-nav -->
    <div class="about-line"></div>
        <ul class="about-desktop-sub-nav">
                <?php foreach (get_pages(['sort_column' => 'menu_order', 'sort_order' => 'desc', 'parent' => 10]) as $childPage) { ?>
                    <li class="desktop-sub-nav-list">
                        <a href="<?php echo get_page_link($childPage->ID); ?>"><?php echo $childPage->post_title; ?></a>
                    </li>
                <?php } ?>
        </ul>
        <!-- desktop sub-nav -->
    <div class="page-header-activity"></div>
    <div class="about-text-mobile">
        <div>
            <h3>Verksamheten</h3>
                <p>2017 inleder projektledaren Isabel Lagos arbetet med att öppna upp huset och dess vackra trädgård för artister, det fria kulturlivetoch besökare. En ledningsgrupp är i full gång med att planera husets verksamhet och i april 2020 sätter det officiella programmet igång.</p>
        </div>
    </div>
    <!-- Information btn -->

    <div class="about-information-container">

        <div>
            <div class="about-information-btn activity-btn ">
                <p>Kultur</p>
                <div class="btn-arrow"></div>
            </div>
            <p class="about-information-txt activity-txt">
            Genom att att arrangera föreställningar, visningar och andra evenemang skapar vi inte bara ett program för att tillgängliggöra huset och dess kulturhistoriska värde men också ett sammanhang för nutidens kulturaktörer. Vi sätter platsen, artister och besökarna i centrum för Stigbergstorgets framtida utveckling. Dessa möten på en sådan unik plats inspirerar till att hitta och tro på nya former och möjligheter för olika typer av samarbeten, vilket gynnar samhället. Därför tror vi att Gathenhielmska Huset kommer att vara ett viktigt kulturellt nav i Göteborg, en plattform som kommer att belysa processer som bidrar till samhällsutveckling
och lokal tillväxt. En grundtanke med verksamheten i Gathenhielmska Huset är att skapa processer som uppmuntrar till innovativa möten och samverkan mellan konstnärer, kulturutövare, lokalt näringsliv och besökare. Gathenhielmska Huset skall vara en sammanlänkande plats i området och en arbetsplats och scen för design, dans, opera, musik, teater, konst och litteratur.
            </p>
        </div>
            <div>
                <div class="about-information-btn activity-btn">
                    <p>Företag i huset</p>
                    <div class="btn-arrow"></div>
                </div>
                <div class="information-txt-container">
                <p class="about-information-txt activity-txt">
                I dagsläget är det runt tio aktörer som hyr arbetsplats. En mångfald av verksamheter gynnar både de som har huset som arbetsplats och verksamheten i sin helhet. Olikheterna stärker ett ekosystem där alla deltar utifrån sina förutsättningar och villkor. Varje aktör är en tillgång och en viktig del för helheten.
                <br>
                <br>
                <span id="activity-bold-txt">Aktörer:</span>
                <br>
                <br>
                    Castingverket<br>
                    Reostat Media<br>
                    Folkstaden<br>
                    Teater Tofta<br>
                    Emma Ekdala/Emma Vendelek (terapi)<br>
                    Mattias Gunnarsson (Design/Arkitekt)<br>
                    Doma, Doma, Doma (Design)<br>
                    John Dohlsten (Musik)<br>
                    Hanna Norrna (Vävstol)<br>
                </p>
            </div>
        </div>
    </div>
    <div class="activity-sponsor-container">
        <div class="activity-sponsor-first">
            <div class="activity-sponsor-flex">
                <h3>Våra samarbetspartners</h3>
            </div>
            <div class="activity-sponsor-flex">

                <p>Klicka på loggorna för att läsa mer om verksamheten på deras hemsida</p>
            </div>
        </div>
        <div id="gbg-sponsor" class="activity-sponsor-flex"></div>
        <div id="higab-sponsor" class="activity-sponsor-flex"></div>
        <div id="studie-sponsor" class="activity-sponsor-flex"></div>

    </div>

    <!-- Information btn -->
</div>


<!-- mobile container end -->

<?php get_footer(); ?>
