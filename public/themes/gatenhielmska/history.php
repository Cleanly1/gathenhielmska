<?php /* Template Name: History */ ?>

<?php get_header(); ?>

<!-- mobile container start -->
<div class="about-line"></div>
        <ul class="about-desktop-sub-nav">
                <?php foreach (get_pages(['sort_column' => 'menu_order', 'sort_order' => 'desc', 'parent' => 10]) as $childPage) { ?>
                    <li class="desktop-sub-nav-list">
                        <a href="<?php echo get_page_link($childPage->ID); ?>"><?php echo $childPage->post_title; ?></a>
                    </li>
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

     <!-- timeline animation -->


     <div class="history-timeline-top">Tidslinje</div>
     <div class="history-animation-container">

    <div class="history-line"></div>
    <div class="history-dot"></div>


    <div class="history-animation-big-g"></div>
    <div class="history-grid-container">
        <div id="history-animation-one" class="history-grid-content">
            <h3>1717</h3>
            <p>Marken skänks till den kungliga kaparen Lars Gathenhielm av Karl XII</p>
        </div>
        <div id="history-animation-two" class="history-grid-content">
            <h3>1737</h3>
            <p>Tomten säljs till Lars syster Anna Thalena Gathe och hennes man Johan Busck</p>
        </div>
        <div id="history-animation-three" class="history-grid-content">
            <h3>1740</h3>
            <p>Huset uppförs och stannar inom släkten Gathenhielm fram till 1800-talet</p>
        </div>
        <div id="history-animation-four" class="history-grid-content">
            <h3>1846</h3>
            <p>Huset säljs till repslagaremästaren Mathias Dahlström</p>
        </div>
        <div id="history-animation-five" class="history-grid-content">
            <h3>1916</h3>
            <p>Mathias Dahlströms dotter Anna Dahlström börjar renovera huset med hjälp av Röhsska konstslöjdsmuseet för att återställa det till sitt tidigare skick</p>
        </div>
        <div id="history-animation-six" class="history-grid-content">
            <h3>1920</h3>
            <p>Konstnären Johan Nilsson fortsätter på beställning av Anna Dahlström renoveringen av huset. Historiska detaljer som tidigare varit dolda bakom tapeter och paneler upptäcks. Anna Dahlström börjar jobba för husets bevarande</p>
        </div>
        <div id="history-animation-seven" class="history-grid-content">
            <h3>1943</h3>
            <p>Lagen om kulturminnesskydd träder i kraft och Gathenhielmska huset blir landets första hus att bli förklarat till byggnadsminne.</p>
        </div>
        <div id="history-animation-eight" class="history-grid-content">
            <h3>1991</h3>
            <p>Ordenssällskapet Wänskapsförbundet tar över hyreskontraktet</p>
        </div>
        <div id="history-animation-nine" class="history-grid-content">
            <h3>2017</h3>
            <p>Projektledaren Isabel Lagos inleder arbetet med att öppna upp huset för konstnärer och besökare</p>
        </div>
        <div id="history-animation-ten" class="history-grid-content">
            <h3>2020</h3>
            <p>Gathenhielmska huset öppnar som kulturmötesplats!</p>
        </div>
    </div>
</div>
<!-- timeline animation -->
<div class="history-last-section">
    <h3>Visste du att?</h3>
    <p>Lars och Ingela hade licens från kungen att plundra fiendeskepp ute till havs, för att ge Sverige fördelar i krigstider. Efter Lars bortgång 1718, skötte Ingela kaparverksamheten och andra affärsverksamheter med stor framgång fram till sin död 1729.</p>
</div>


<?php get_footer(); ?>
