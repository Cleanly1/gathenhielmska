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

    <div class="page-header-history"></div>
    <div class="about-text-mobile">
        <div>
            <h3>historia</h3>
                <p>På Stigbergstorget i Göteborg står Gathenhielmska Huset, ett vackert trähus med anor från 1700- talet. Marken där huset står skänktes 1717 till redarparet Lars och Ingela Gathenhielm av Karl XII för deras framgångar som "konungens kapare.”</p>
        </div>
    </div>
    <div class="about-information-container">

<div>
    <div class="about-information-btn history-btn ">
        <p>Vem var Gatenhielm?</p>
        <div class="btn-arrow"></div>
    </div>
    <p class="about-information-txt history-txt">
    Lars Gathenhielms uppdrag, vilket han utförde i samarbete med sin fru Ingela Gathenhielm, var att kapa fiendeskepp ute på havet, för att ge Sverige fördelar i krigstider. Det handlade om en slags piratverksamhet, sanktionerad av statsmakten. Efter Lars tidiga bortgång den 25 april 1718, endast 29 år gammal fortsatte Ingela med kaparverksamheten och andra affärsverksamheter med stor framgång fram till sin död 1729. Ingela omnämns i ett flertal texter som Sveriges första betydelsefulla entreprenörskvinna.
    </p>
</div>
    <div>
        <div class="about-information-btn history-btn">
            <p>Huset</p>
            <div class="btn-arrow"></div>
        </div>
        <div class="information-txt-container">
      <p class="about-information-txt history-txt">Gathenhielmska huset uppfördes sannolikt av makarna Johan Busck och Anna Thalena Gathe (syster till Lars) på 1740-talet. Det är en av Göteborgs fem äldsta profana byggnader, byggt i karolinsk- eller senbarockstil med valmat tak och i timmer med gråfärgad träbeklädnad som gör att det liknar ett stenhus. Huset är dessutom Göteborgs enda bevarade storborgarhus i trä från mitten av 1700-talet, och ingår i Kulturreservatet Gathenhielm.

På 1940-talet utsågs huset och dess trädgård till kulturminne, och 1967 blev det Sveriges första kulturminnesmärkta bostad. Huset var bostad från det att det byggdes fram till 1987 då Göteborgs stad övertog ägandeskapet (en liten del av huset förblev bostad fram till ca 10 år sedan). Sedan 1991 har större delen av huset hyrts av ordenssällskapet Wänskapsförbundet, som har arrangerat interna sammankomster, ceremonier och öppnat för guidade visningar och middagar.</p>
    </div>
    <div>
        <div class="about-information-btn history-btn">
            <p>Kulturarvet</p>
            <div class="btn-arrow"></div>
        </div>
        <div class="information-txt-container">
      <p class="about-information-txt history-txt">I entrén till Gathenhielmska Huset möts man av en väggmålning av fem kvinnor som var och en representerar ett av de fem sinnena. Det är en påminnelse om en tid då sinnlighet och estetik stod högt i kurs. Detta märks i alla husets historiska rum, med tak av skeppsvirke, vackra detaljer, handmålade tapeter - i vissa delar från före husets tillkomst. Varje rum har sina berättelser, från olika tider - människoöden, liv, kärlek och sorg. Huset har stått kvar genom tidens gång och stadens förändring.

En viktig del av Gathenhielmska Huset är att förvalta det historiska arvet. Genom historiska visningar, gestaltande teater och tidsenlig musik i autentisk miljö levandegörs händelser och liv från det förflutna. Det handlar om att uppmärksamma och levandegöra vår historia och de människor som varit med och skapat den före oss.</p>
    </div>
</div>
</div>




<!-- mobile container end -->

<?php get_footer(); ?>
