<?php
// -> mixin fontes_google();
////////////////////////////////
function fontes_google() {
    echo "
/*FONTE_ALFA*/
@import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700');

/*FONTE_BETA*/
@import url('https://fonts.googleapis.com/css?family=Montserrat:200,300,500,700,900');

/*FONTE_DELTA*/
@import url('https://fonts.googleapis.com/css?family=Rancho');

/*FONTE_GAMA*/
@import url('https://fonts.googleapis.com/css?family=Courgette');

/*FONTE_SIGMA*/
@import url('https://fonts.googleapis.com/css?family=Source+Code+Pro');";
}

// -> fontes
///////////////////////
define("FONTE_ALFA", "font-family: 'Source Sans Pro', sans-serif;\n");
define("FONTE_BETA", "font-family: 'Montserrat', sans-serif;\n");
define("FONTE_DELTA", "font-family: 'Rancho', cursive;\n");
define("FONTE_GAMA", "font-family: 'Courgette', cursive;\n");
define("FONTE_SIGMA", "font-family: 'Source Code Pro', monospace;\n");

function fonte_alfa() {
    echo FONTE_ALFA;
}
function fonte_beta() {
    echo FONTE_BETA;
}
function fonte_delta() {
    echo FONTE_DELTA;
}
function fonte_gama() {
    echo FONTE_GAMA;
}
function fonte_sigma() {
    echo FONTE_SIGMA;
}



// -> paleta de cores
///////////////////////
define("COR_ALFA",  "#333;\n");
define("COR_BETA",  "#7FB800;\n");
define("COR_DELTA", "#31A0B7;\n");
define("COR_GAMA",  "#FFB400;\n");
define("COR_SIGMA", "#D61528;\n");

function cor_alfa () {
    echo COR_ALFA;
}
function cor_beta () {
    echo COR_BETA;
}
function cor_delta () {
    echo COR_DELTA;
}
function cor_gama () {
    echo COR_GAMA;
}
function cor_sigma () {
    echo COR_SIGMA;
}


// -> paletas de textos
///////////////////////
define("TXT_ALFA", "color:"  . COR_ALFA);
define("TXT_BETA", "color:"  . COR_BETA);
define("TXT_DELTA", "color:" . COR_DELTA);
define("TXT_GAMA", "color:"  . COR_GAMA);
define("TXT_SIGMA", "color:" . COR_SIGMA);

function txt_alfa () {
    echo TXT_ALFA;
}
function txt_beta () {
    echo TXT_BETA;
}
function txt_delta () {
    echo TXT_DELTA;
}
function txt_gama () {
    echo TXT_GAMA;
}
function txt_sigma () {
    echo TXT_SIGMA;
}


// -> paleta backgrounds
///////////////////////
define("BG_ALFA", "background-color:"  . COR_ALFA);
define("BG_BETA", "background-color:"  . COR_BETA);
define("BG_DELTA", "background-color:" . COR_DELTA);
define("BG_GAMA", "background-color:"  . COR_GAMA);
define("BG_SIGMA", "background-color:" . COR_SIGMA);

function bg_alfa () {
    echo BG_ALFA;
}
function bg_beta () {
    echo BG_BETA;
}
function bg_delta () {
    echo BG_DELTA;
}
function bg_gama () {
    echo BG_GAMA;
}
function bg_sigma () {
    echo BG_SIGMA;
}



// -> mixin echo_flex_col($limite);
///////////////////////
function echo_flex_col($limite){
    
    for($i = 1; $i <= 12; $i++){
        echo '
            .flex-col-'.$limite.''.$i.' {
                width: '. ($i * 100) / 12 .'%
            }';
    }
}



// -> mixin que converte hex em rgba na cor do background ou do texto;
///////////////////////
function hex_to_rgba($tipo, $cor_hex, $opacidade){
    $cor_rgba_inicio = (strlen($cor_hex) > 4) ? hexdec(substr($cor_hex, 1,2)) : hexdec(substr($cor_hex, 1,1).substr($cor_hex, 1,1));
    $cor_rgba_meio   = (strlen($cor_hex) > 4) ? hexdec(substr($cor_hex, 3,2)) : hexdec(substr($cor_hex, 2,1).substr($cor_hex, 2,1));
    $cor_rgba_fim    = (strlen($cor_hex) > 4) ? hexdec(substr($cor_hex, 5,2)) : hexdec(substr($cor_hex, 3,1).substr($cor_hex, 3,1));

    if($tipo == 'bg') {
        echo "background-color:rgba(" . $cor_rgba_inicio . ", " . $cor_rgba_meio . ", " . $cor_rgba_fim . ", " . $opacidade . ");\n";
    }

    else if ($tipo == 'color') {
        echo "color:rgba(" . $cor_rgba_inicio . ", " . $cor_rgba_meio . ", " . $cor_rgba_fim . ", " . $opacidade . ");\n";
    }
}


// -> mixin transition ('on' como parametro define 0.3s) ou define-se o tempo via inteiro por parametro, utilza operador ternario;
///////////////////////
function transition ($tempo) {
    echo ($tempo == 'on') ? 
"transition:0.3s cubic-bezier(0.445, 0.05, 0.55, 0.95);
    -moz-transition:0.3s cubic-bezier(0.445, 0.05, 0.55, 0.95);
    -webkit-transition:0.3s cubic-bezier(0.445, 0.05, 0.55, 0.95);\n" 
                          :// operador ternario ao lado 
"transition:" . $tempo . "s cubic-bezier(0.445, 0.05, 0.55, 0.95);    
    -moz-transition:" . $tempo . "s cubic-bezier(0.445, 0.05, 0.55, 0.95);
    -webkit-transition:" . $tempo . "s cubic-bezier(0.445, 0.05, 0.55, 0.95);\n";
}




// -> mixin padding-gen (gera padding para ser utilizado no projeto);
///////////////////////
function padding_gen () {
    for($i = 0; $i <= 100; $i++){
        echo ".gap-" . 5*$i . " {\n    padding-top:" . 5*$i . "px\n}\n";
    }
}




// -> mixin box_shadow(0, 0, 10, 2, 1);
function box_shadow ($x, $y, $blur, $spread, $rgba) {
    echo "box-shadow:" . $x ."px " . $y ."px " . $blur . "px " . $spread . "px rgba(0,0,0," . $rgba . ");
    -moz-box-shadow:" . $x ."px " . $y ."px " . $blur . "px " . $spread . "px rgba(0,0,0," . $rgba . ");
    -webkit-box-shadow:" . $x ."px " . $y ."px " . $blur . "px " . $spread . "px rgba(0,0,0," . $rgba . ");\n";
}


// -> mixin pseudohead();
function pseudohead() {
    echo "content:'';
    position:absolute;\n";
}


// -> mixin border_solid('top', '2px', COR_ALFA);
function border_solid($posicao, $expessura, $cor) {
    if($posicao == "all") {
        echo "border:" . $expessura . " solid " . $cor;
    }

    else if ($posicao == "top") {
        echo "border-top:" . $expessura . " solid " . $cor;
    }

    else if ($posicao == "right") {
        echo "border-right:" . $expessura . " solid " . $cor;
    }

    else if ($posicao == "left") {
        echo "border-left:" . $expessura . " solid " . $cor;
    }

    else {
        echo "border-bottom:" . $expessura . " solid " . $cor;
    }
}

// -> mixin border_radius(0, 0, 0, 0,)
function border_radius($radius) {
    echo "border-radius:". $radius .";
    -moz-border-radius:". $radius .";
    -webkit-border-radius:". $radius .";\n";
}

// -> mixin justify();
function justify() {
    echo "text-align:justify;\n";
}

// -> mixin capitalize();
function capitalize() {
    echo "text-transform:capitalize;\n";
}

// -> mixin uppercase();
function uppercase() {
    echo "text-transform:uppercase;\n";
}


// -> mixin transform();
function transform($transforms) {
    echo "transform:" . $transforms . ";
    -moz-transform:" . $transforms . ";
    -webkit-transform:" . $transforms . ";\n";
}




// -> mixin flex_box($direction, $justifyContent, $alignItens, $wrap, $alignContent);

// flex-direction -> Especifica a direção dos itens flexíveis dentro do container flex
// row = items will be laid default
// row-reverse = items will be laid out right to left
// column = items will be laid out vertically
// column-reverse = Same as column, but reversed
//------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------
// justify-content -> Alinha horizontalmente itens quando os mesmos não usam todo o espaço disponível
// flex-start = Items are positioned at the beginning of the container
// flex-end = Items are positioned at the end of the container
// center = Items are positioned at the center of the container (horizontalmente)
// space-between = Items are positioned with space between the lines
// space-around = Items are positioned with space before, between, and after the lines
//------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------
// align-items -> Alinha verticalmente os itens quando os mesmos não usam todo o espaço disponível
// stretch = stretched to fit the container
// flex-start = positioned at the top of the container
// flex-end = positioned at the bottom of the container
// center = positioned at the center of the container (verticalmente)
// baseline = positioned at the baseline of the container
//------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------
// flex-wrap -> especifica se os itens devem ser embrulhados em uma linha se não houser espaco sufucuiente
// nowrap = items will not wrap
// wrap = items will wrap if necessary
// wrap-reverse = items will wrap, if necessary, in reverse order
//------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------
// align-content -> alinha linhas flexíveis.
// stretch = Lines stretch to take up the remaining space
// flex-start = Lines are packed toward the start of the flex container
// flex-end = Lines are packed toward the end of the flex container
// center = Lines are packed toward the center of the flex container
// space-between = Lines are evenly distributed in the flex container
// space-around = Lines are evenly distributed in the flex container, with half-size spaces on either end
//------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------
function flex_box($direction, $justifyContent, $alignItens, $wrap, $alignContent) {
    echo 
   "display:-webkit-flex;
    display:flex;
    -webkit-flex-direction:".$direction.";
    flex-direction:".$direction.";
    -webkit-justify-content:".$justifyContent.";
    justify-content:".$justifyContent.";
    -webkit-align-items:".$alignItens.";
    align-items: ".$alignItens.";
    -webkit-flex-wrap:".$wrap.";
    flex-wrap:".$wrap.";
    -webkit-align-content: ".$alignContent.";
    align-content: ".$alignContent.";
";
}




// -> mixin flex_item($flexSize);

// flex -> Especifica o comprimento do item, em relação ao resto dos itens dentro do mesmo recipiente.
//------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------
function flex_item($flexGrow, $flexShrink, $flexBasis) {
    echo 
    "-webkit-flex-grow: ".$flexGrow.";
    flex-grow: ".$flexGrow.";
    -webkit-flex-shrink: ".$flexShrink.";
    flex-shrink: ".$flexShrink.";
    -webkit-flex-basis: ".$flexBasis.";
    flex-basis: ".$flexBasis.";
";
}
?>




<style>
/*=====================================================*/
/*=================== Fontes ==========================*/
/*=====================================================*/
<?php 
    fontes_google(); 
?>



/*=========================================================*/
/*=================== Mixin Padding Gen ===================*/
/*=========================================================*/
<?php 
    padding_gen();
?>


/*=====================================================*/
/*=================== Reset Global ====================*/
/*=====================================================*/
html,
body,
section,
article,
header,
nav,
form,
aside {
    position: relative;
    width: 100%;
}

::-webkit-scrollbar {
    width: 7px;
    height: 8px;
}
::-webkit-scrollbar-track {
    background-color: #eee;
    <?php border_radius('0') ?>
}
::-webkit-scrollbar-track-piece {
    opacity: 1;
}
::-webkit-scrollbar-thumb {
    <?php bg_alfa() ?>
    <?php border_radius('0') ?>
}

::selection {
    <?php bg_alfa(); ?>
    color: #fff;
}

::placeholder {
    <?php fonte_alfa() ?>
}


body {
    background: #fff;
    border: 0;
    margin: 0;
    padding: 0;
}

section {
    padding: 100px 0;
}

h1,
h2,
h3,
h4,
h5,
h6,
p {
    margin: 0;
}

a,
a:hover,
a:focus,
a:link,
a:visited {
    text-decoration: none !important;
}

a,
button {
    <?php transition('on')?>
}








/*=====================================================*/
/*=================== Tipografia ======================*/
/*=====================================================*/
html,
body {
    text-rendering: optimizeLegibility !important;
    -webkit-font-smoothing: antialiased !important;
    <?php fonte_beta() ?>
    font-size: 15px;
}

p,
em,
strong {
    font-weight: 400;
}

p.bold,
em.bold,
strong.bold {
    font-weight: bold;
}

p {
    font-size: 15px;
    color: #444;
    line-height: 1.4;
}

h1,.h1,
h2,.h2,
h3,.h3,
h4,.h4,
h5,.h5,
h6,.h6 {
    <?php fonte_alfa() ?>
    font-weight: 700;
    color: #444;
    <?php uppercase() ?>
    line-height: 1.4;
}

h1,.h1 {font-size: 32px}
h2,.h2 {font-size: 28px}
h3,.h3 {font-size: 24px}
h4,.h4 {font-size: 20px}
h5,.h5 {font-size: 16px}
h6,.h6 {font-size: 13px}


.txt-alfa {
    <?php txt_alfa() ?>
}
.txt-beta {
    <?php txt_beta() ?>
}
.txt-delta {
    <?php txt_delta() ?>
}
.txt-gama {
    <?php txt_gama() ?>
}
.txt-sigma {
    <?php txt_sigma() ?>
}

.bg-alfa {
    <?php bg_alfa() ?>
}
.bg-beta {
    <?php bg_beta() ?>
}
.bg-delta {
    <?php bg_delta() ?>
}
.bg-gama {
    <?php bg_gama() ?>
}
.bg-sigma {
    <?php bg_sigma() ?>
}



/*============== Framework Gray Box ===============*/
.framework.gray-box {
    margin: 15px 0;
    background-color: #fafafa;
    <?php border_solid('all', '1px', '#eee;') ?>
    padding: 15px;
    <?php border_radius('3px') ?>
}







/*============== Framework Text Classes ===============*/
.framework.txt-center {
    text-align: center;
}
.framework.txt-right {
    text-align: right;
}
@media (max-width: 767px){
    .framework.txt-center-mobile {
        text-align: center;
    }
    .framework.txt-right-mobile {
        text-align: right;
    }
}
@media (min-width: 768px) and (max-width: 991px){
    .framework.txt-center-tablet {
        text-align: center;
    }
    .framework.txt-right-tablet {
        text-align: right;
    }
}
@media (min-width: 992px){
    .framework.txt-center-desktop {
        text-align: center;
    }
    .framework.txt-right-desktop {
        text-align: right;
    }
}
/*=============== Framework Blockquote ================*/
blockquote.framework.blockquote {
    margin: 10px 0;
    <?php border_solid('left', '3px', '#ddd;') ?>
    padding-left: 15px;
}

blockquote.framework.blockquote p {
    font-size: 14px;
}

blockquote.framework.blockquote footer {
    margin-top: 3px;
    font-size: 13px;
    color: #aaa;
}
/*================ Framework Code =================*/
code.framework.tag-code {
    color: #c7254e;
    background-color: #f9f2f4;
    <?php border_radius('3px') ?>
    padding: 0 6px 1px 6px;
}
/*================ Framework Pre =================*/
pre.framework.tag-pre {
    display: block;
    margin:10px 0;
    padding: 10px 15px;
    font-size: 13px;
    background-color: #f7f7f7;
    <?php border_solid('all', '1px', '#eee;') ?>
    <?php border_radius('5px') ?>
    white-space: pre-wrap;  
}













/*=========================================================*/
/*=================== Framework Botões ====================*/
/*=========================================================*/
.framework.botao {
    position: relative;
    display: inline-block;
    margin-bottom: 0;
    font-size: 14px;
    text-transform: uppercase;
    font-weight: 600;
    line-height: 1.42857143;
    text-align: center;
    <?php fonte_alfa() ?>
    white-space: nowrap;
    vertical-align: middle;
    touch-action: manipulation;
    cursor: pointer;
    user-select: none;
    outline: none !important;
    box-shadow: none !important;
    padding: 12px 30px;
    <?php border_radius('0') ?>
    overflow: hidden;
}
.framework.botao-rounded {
    <?php border_radius('100px') ?>
}
.framework.botao-wide {
    padding-left: 55px;
    padding-right: 55px;
}
.framework.botao-off {
    cursor: not-allowed;
    opacity: 0.65;
}
.framework.botao-sm {
    font-size: 13px;
    padding: 5px 12px;
}
.framework.botao-block {
    display: block;
    width: 100%;
}
@media (max-width: 767px){
    .framework.botao-block-mobile {
        display: block;
        width: 100%;
    }
}


/*--- css do efeito material design ---*/
.botao-click-pulse {
    display: block;
    position: absolute;
    <?php hex_to_rgba('bg', '#000', 0.1) ?> 
    border-radius: 50%;
    <?php transform('scale(0)') ?>
}
.botao-click-pulse.active {
    animation: botao_click_pulse 0.7s cubic-bezier(0.445, 0.05, 0.55, 0.95);
}
@keyframes botao_click_pulse {
    100% {
        opacity: 0;
        <?php transform('scale(2.5)') ?>
    }
}


/*----- .botao-alfa -----*/
.framework.botao-alfa,
.framework.botao-alfa:focus,
.framework.botao-alfa:hover,
.framework.botao-alfa:active:focus {
    <?php border_solid('all', '2px', COR_ALFA) ?>
    <?php bg_alfa() ?>
    color: #fff;
}
/*----- .botao-beta -----*/
.framework.botao-beta,
.framework.botao-beta:focus,
.framework.botao-beta:hover,
.framework.botao-beta:active:focus {
    <?php border_solid('all', '2px', COR_BETA) ?>
    <?php bg_beta() ?>
    color: #fff;
}
/*----- .botao-delta -----*/
.framework.botao-delta,
.framework.botao-delta:focus,
.framework.botao-delta:hover,
.framework.botao-delta:active:focus {
    <?php border_solid('all', '2px', COR_DELTA) ?>
    <?php bg_delta() ?>
    color: #fff;
}
/*----- .botao-gama -----*/
.framework.botao-gama,
.framework.botao-gama:focus,
.framework.botao-gama:hover,
.framework.botao-gama:active:focus {
    <?php border_solid('all', '2px', COR_GAMA) ?>
    <?php bg_gama() ?>
    color: #fff;
}
/*----- .botao-sigma -----*/
.framework.botao-sigma,
.framework.botao-sigma:focus,
.framework.botao-sigma:hover,
.framework.botao-sigma:active:focus {
    <?php border_solid('all', '2px', COR_SIGMA) ?>
    <?php bg_sigma() ?>
    color: #fff;
}


/*----- .botao-alfa-outline -----*/
.framework.botao-alfa-outline {
    <?php border_solid('all', '2px', COR_ALFA) ?>
    <?php hex_to_rgba('bg', '#000', 0) ?>
    <?php txt_alfa() ?>
}
.framework.botao-alfa-outline:focus,
.framework.botao-alfa-outline:hover,
.framework.botao-alfa-outline:active:focus {
    <?php bg_alfa() ?>
    color: #fff;
}
/*----- .botao-beta-outline -----*/
.framework.botao-beta-outline {
    <?php border_solid('all', '2px', COR_BETA) ?>
    <?php hex_to_rgba('bg', '#000', 0) ?>
    <?php txt_beta() ?>
}
.framework.botao-beta-outline:focus,
.framework.botao-beta-outline:hover,
.framework.botao-beta-outline:active:focus {
    <?php bg_beta() ?>
    color: #fff;
}
/*----- .botao-delta-outline -----*/
.framework.botao-delta-outline {
    <?php border_solid('all', '2px', COR_DELTA) ?>
    <?php hex_to_rgba('bg', '#000', 0) ?>
    <?php txt_delta() ?>
}
.framework.botao-delta-outline:focus,
.framework.botao-delta-outline:hover,
.framework.botao-delta-outline:active:focus {
    <?php bg_delta() ?>
    color: #fff;
}
/*----- .botao-gama-outline -----*/
.framework.botao-gama-outline {
    <?php border_solid('all', '2px', COR_GAMA) ?>
    <?php hex_to_rgba('bg', '#000', 0) ?>
    <?php txt_gama() ?>
}
.framework.botao-gama-outline:focus,
.framework.botao-gama-outline:hover,
.framework.botao-gama-outline:active:focus {
    <?php bg_gama() ?>
    color: #fff;
}
/*----- .botao-sigma-outline -----*/
.framework.botao-sigma-outline {
    <?php border_solid('all', '2px', COR_SIGMA) ?>
    <?php hex_to_rgba('bg', '#000', 0) ?>
    <?php txt_sigma() ?>
}
.framework.botao-sigma-outline:focus,
.framework.botao-sigma-outline:hover,
.framework.botao-sigma-outline:active:focus {
    <?php bg_sigma() ?>
    color: #fff;
}




/*----- .botao-slice-up-pseudo -----*/
.framework.botao-alfa-slice-up::before,
.framework.botao-beta-slice-up::before,
.framework.botao-delta-slice-up::before,
.framework.botao-gama-slice-up::before,
.framework.botao-sigma-slice-up::before {
    <?php pseudohead() ?>
    z-index: -1;
    width: 100%;
    height: 100%;
    bottom: 0;
    left: 0;
    <?php transform('translateY(100%)') ?>
    <?php transition(0.4) ?>
}
.framework.botao-alfa-slice-up:hover::before,
.framework.botao-alfa-slice-up:focus::before,
.framework.botao-alfa-slice-up:active:focus::before,
.framework.botao-beta-slice-up:hover::before,
.framework.botao-beta-slice-up:focus::before,
.framework.botao-beta-slice-up:active:focus::before,
.framework.botao-delta-slice-up:hover::before,
.framework.botao-delta-slice-up:focus::before,
.framework.botao-delta-slice-up:active:focus::before,
.framework.botao-gama-slice-up:hover::before,
.framework.botao-gama-slice-up:focus::before,
.framework.botao-gama-slice-up:active:focus::before,
.framework.botao-sigma-slice-up:hover::before,
.framework.botao-sigma-slice-up:focus::before,
.framework.botao-sigma-slice-up:active:focus::before {
    <?php transform('translateY(0)') ?>
}

/*----- .botao-alfa-slice-up -----*/
.framework.botao-alfa-slice-up {
    <?php border_solid('all', '2px', COR_ALFA) ?>
    <?php hex_to_rgba('bg', '#000', 0) ?>
    <?php txt_alfa() ?>
}
.framework.botao-alfa-slice-up:hover {
    color: #fff;
}
.framework.botao-alfa-slice-up:focus,
.framework.botao-alfa-slice-up:active:focus {
    <?php bg_alfa() ?>
    color: #fff;
}
.framework.botao-alfa-slice-up::before {
    <?php bg_alfa() ?>
}
/*----- .botao-beta-slice-up -----*/
.framework.botao-beta-slice-up {
    <?php border_solid('all', '2px', COR_BETA) ?>
    <?php hex_to_rgba('bg', '#000', 0) ?>
    <?php txt_beta() ?>
}
.framework.botao-beta-slice-up:hover {
    color: #fff;
}
.framework.botao-beta-slice-up:focus,
.framework.botao-beta-slice-up:active:focus {
    <?php bg_beta() ?>
    color: #fff;
}
.framework.botao-beta-slice-up::before {
    <?php bg_beta() ?>
}
/*----- .botao-delta-slice-up -----*/
.framework.botao-delta-slice-up {
    <?php border_solid('all', '2px', COR_DELTA) ?>
    <?php hex_to_rgba('bg', '#000', 0) ?>
    <?php txt_delta() ?>
}
.framework.botao-delta-slice-up:hover {
    color: #fff;
}
.framework.botao-delta-slice-up:focus,
.framework.botao-delta-slice-up:active:focus {
    <?php bg_delta() ?>
    color: #fff;
}
.framework.botao-delta-slice-up::before {
    <?php bg_delta() ?>
}
/*----- .botao-gama-slice-up -----*/
.framework.botao-gama-slice-up {
    <?php border_solid('all', '2px', COR_GAMA) ?>
    <?php hex_to_rgba('bg', '#000', 0) ?>
    <?php txt_gama() ?>
}
.framework.botao-gama-slice-up:hover {
    color: #fff;
}
.framework.botao-gama-slice-up:focus,
.framework.botao-gama-slice-up:active:focus {
    <?php bg_gama() ?>
    color: #fff;
}
.framework.botao-gama-slice-up::before {
    <?php bg_gama() ?>
}
/*----- .botao-sigma-slice-up -----*/
.framework.botao-sigma-slice-up {
    <?php border_solid('all', '2px', COR_SIGMA) ?>
    <?php hex_to_rgba('bg', '#000', 0) ?>
    <?php txt_sigma() ?>
}
.framework.botao-sigma-slice-up:hover {
    color: #fff;
}
.framework.botao-sigma-slice-up:focus,
.framework.botao-sigma-slice-up:active:focus {
    <?php bg_sigma() ?>
    color: #fff;
}
.framework.botao-sigma-slice-up::before {
    <?php bg_sigma() ?>
}


/*------ .framework.paginacao ------*/
.framework.paginacao {
    padding-left: 0;
    list-style: none;
}
.framework.paginacao li {
    display: inline-block;
    margin: 0 -0.5px;
}
.framework.paginacao li a {
    display: inline-block;
    padding: 10px 18px 9px 18px;
    <?php border_solid('all', '1px', '#eee;') ?>
    font-size: 16px;
    <?php txt_alfa() ?>
    font-weight: 600;
    <?php border_radius('4px') ?>
}
.framework.paginacao li:first-child a,
.framework.paginacao li:last-child a {
    padding-left: 15px;
    padding-right: 15px;
    background-color: #f1f1f1;
}
.framework.paginacao li a:hover,
.framework.paginacao li a:focus {
    background-color: #f1f1f1;
}
.framework.paginacao li a.active {
    <?php bg_alfa() ?>
    color: #fff;
}






/*=====================================================*/
/*=============== Framework Flex Grid =================*/
/*=====================================================*/
.flex-container,
.flex-container-fluid {
    margin:0 auto;
}
.flex-container-fluid {
    width: 100%;
}
@media (min-width: 768px) {
  .flex-container {
    width: 738px;
  }
}
@media (min-width: 992px) {
  .flex-container {
    width: 962px;
  }
}
@media (min-width: 1200px) {
  .flex-container {
    width: 1170px;
  }
}
@media (min-width: 1600px) {
  .flex-container {
    width: 1570px;
  }
}


/*-- row padrão --*/
.flex-row {
  <?php flex_box('row', 'flex-start', 'flex-start', 'wrap', 'flex-start') ?>
}

/*====== Flex Direction ======*/
/*-- row padrão + inverte a ordem das colunas de forma horizontal --*/
.flex-row.reverse {
    -webkit-flex-direction: row-reverse;
    flex-direction: row-reverse;
}
/*-- row padrão + faz com que as colunas sejam exibidas empilhadas --*/
.flex-row.column {
    -webkit-flex-direction: column;
    flex-direction: column;
}
/*-- row padrão + faz com que as colunas empilhadas sejam exibidas na ordem inversa --*/
.flex-row.column-reverse {
    -webkit-flex-direction: column-reverse;
    flex-direction: column-reverse;
}


/*====== Justify Content ======*/
/*-- row padrão + alinha as colunas de forma horizontal na posição central --*/
.flex-row.justify-center {
    -webkit-justify-content: center;
    justify-content: center;
}
/*-- row padrão + alinha as colunas de forma horizontal no final da linha --*/
.flex-row.justify-end {
    -webkit-justify-content: flex-end;
    justify-content: flex-end;
}
/*-- row padrão + alinha as colunas de maneira proporcional ao espaço (inicio - fim) --*/
.flex-row.justify-between {
    -webkit-justify-content: space-between;
    justify-content: space-between;
}
/*-- row padrão + alinha as colunas de maneira proporcional ao espaço (intermediário) --*/
.flex-row.justify-around {
    -webkit-justify-content: space-around;
    justify-content: space-around;
}


[class^='flex-col'] {
    position: relative;
    padding: 0 15px;
    <?php transition('on') ?>
}

[class^='flex-col'].padding-off {
    padding: 0;
}

@media (min-width: 768px) {
    [class^='flex-col'].padding-off-sm {
        padding: 0;
    }
}


@media (min-width: 992px) {
    [class^='flex-col'].padding-off-md {
        padding: 0;
    }
}


@media (min-width: 1200px) {
    [class^='flex-col'].padding-off-lg {
        padding: 0;
    }
}



<?php
    // Mobile 
    echo_flex_col('');
?>

@media (min-width: 768px) {
    <?php
        // Tablet 
        echo_flex_col('sm-');
    ?>
}


@media (min-width: 992px) {
    <?php
        // Desktop 
        echo_flex_col('md-');
    ?>
}


@media (min-width: 1200px) {
    <?php
        // Large Desktop 
        echo_flex_col('lg-');
    ?>
}







/*=========================================================*/
/*================== Framework Flexbox ====================*/
/*=========================================================*/
.framework.flexbox {
    <?php flex_box('row', 'flex-start', 'flex-start', 'nowrap', 'flex-start') ?>
}

.framework.flexbox.row {
    -webkit-flex-direction: row;
    flex-direction: row;
}
.framework.flexbox.row-reverse {
    -webkit-flex-direction: row-reverse;
    flex-direction: row-reverse;
}
.framework.flexbox.column {
    -webkit-flex-direction: column;
    flex-direction: column;
}
.framework.flexbox.column-reverse {
    -webkit-flex-direction: column-reverse;
    flex-direction: column-reverse;
}



.framework.flexbox.justify-start {
    -webkit-justify-content: flex-start;
    justify-content: flex-start;
}
.framework.flexbox.justify-center {
    -webkit-justify-content: center;
    justify-content: center;
}
.framework.flexbox.justify-end {
    -webkit-justify-content: flex-end;
    justify-content: flex-end;
}
.framework.flexbox.justify-around {
    -webkit-justify-content: space-around;
    justify-content: space-around;
}
.framework.flexbox.justify-between {
    -webkit-justify-content: space-between;
    justify-content: space-between;
}




.framework.flexbox.align-start {
    -webkit-align-items: flex-start;
    align-items: flex-start;
}
.framework.flexbox.align-center {
    -webkit-align-items: center;
    align-items: center;
}
.framework.flexbox.align-bottom {
    -webkit-align-items: flex-end;
    align-items: flex-end;
}
.framework.flexbox.align-stretch {
    -webkit-align-items: stretch;
    align-items: stretch;
}
.framework.flexbox.align-baseline {
    -webkit-align-items: baseline;
    align-items: baseline;
}



@media (min-width: 768px) {
    .framework.flexbox.row-sm {
        -webkit-flex-direction: row;
        flex-direction: row;
    }
    .framework.flexbox.row-reverse-sm {
        -webkit-flex-direction: row-reverse;
        flex-direction: row-reverse;
    }


    .framework.flexbox.column-sm {
        -webkit-flex-direction: column;
        flex-direction: column;
    }
    .framework.flexbox.column-reverse-sm {
        -webkit-flex-direction: column-reverse;
        flex-direction: column-reverse;
    }

    
    .framework.flexbox.justify-start-sm {
        -webkit-justify-content: flex-start;
        justify-content: flex-start;
    }
    .framework.flexbox.justify-center-sm {
        -webkit-justify-content: center;
        justify-content: center;
    }
    .framework.flexbox.justify-end-sm {
        -webkit-justify-content: flex-end;
        justify-content: flex-end;
    }
    .framework.flexbox.justify-around-sm {
        -webkit-justify-content: space-around;
        justify-content: space-around;
    }
    .framework.flexbox.justify-between-sm {
        -webkit-justify-content: space-between;
        justify-content: space-between;
    }


    .framework.flexbox.align-start-sm {
    -webkit-align-items: flex-start;
        align-items: flex-start;
    }
    .framework.flexbox.align-center-sm {
        -webkit-align-items: center;
        align-items: center;
    }
    .framework.flexbox.align-bottom-sm {
        -webkit-align-items: flex-end;
        align-items: flex-end;
    }
    .framework.flexbox.align-stretch-sm {
        -webkit-align-items: stretch;
        align-items: stretch;
    }
    .framework.flexbox.align-baseline-sm {
        -webkit-align-items: baseline;
        align-items: baseline;
    }
}


@media (min-width: 992px) {
    .framework.flexbox.row-md {
        -webkit-flex-direction: row;
        flex-direction: row;
    }
    .framework.flexbox.row-reverse-md {
        -webkit-flex-direction: row-reverse;
        flex-direction: row-reverse;
    }


    .framework.flexbox.column-md {
        -webkit-flex-direction: column;
        flex-direction: column;
    }
    .framework.flexbox.column-reverse-md {
        -webkit-flex-direction: column-reverse;
        flex-direction: column-reverse;
    }

    
    .framework.flexbox.justify-start-md {
        -webkit-justify-content: flex-start;
        justify-content: flex-start;
    }
    .framework.flexbox.justify-center-md {
        -webkit-justify-content: center;
        justify-content: center;
    }
    .framework.flexbox.justify-end-md {
        -webkit-justify-content: flex-end;
        justify-content: flex-end;
    }
    .framework.flexbox.justify-around-md {
        -webkit-justify-content: space-around;
        justify-content: space-around;
    }
    .framework.flexbox.justify-between-md {
        -webkit-justify-content: space-between;
        justify-content: space-between;
    }


    .framework.flexbox.align-start-md {
    -webkit-align-items: flex-start;
        align-items: flex-start;
    }
    .framework.flexbox.align-center-md {
        -webkit-align-items: center;
        align-items: center;
    }
    .framework.flexbox.align-bottom-md {
        -webkit-align-items: flex-end;
        align-items: flex-end;
    }
    .framework.flexbox.align-stretch-md {
        -webkit-align-items: stretch;
        align-items: stretch;
    }
    .framework.flexbox.align-baseline-md {
        -webkit-align-items: baseline;
        align-items: baseline;
    }
}


@media (min-width: 1200px) {
    .framework.flexbox.row-lg {
        -webkit-flex-direction: row;
        flex-direction: row;
    }
    .framework.flexbox.row-reverse-lg {
        -webkit-flex-direction: row-reverse;
        flex-direction: row-reverse;
    }


    .framework.flexbox.column-lg {
        -webkit-flex-direction: column;
        flex-direction: column;
    }
    .framework.flexbox.column-reverse-lg {
        -webkit-flex-direction: column-reverse;
        flex-direction: column-reverse;
    }

    
    .framework.flexbox.justify-start-lg {
        -webkit-justify-content: flex-start;
        justify-content: flex-start;
    }
    .framework.flexbox.justify-center-lg {
        -webkit-justify-content: center;
        justify-content: center;
    }
    .framework.flexbox.justify-end-lg {
        -webkit-justify-content: flex-end;
        justify-content: flex-end;
    }
    .framework.flexbox.justify-around-lg {
        -webkit-justify-content: space-around;
        justify-content: space-around;
    }
    .framework.flexbox.justify-between-lg {
        -webkit-justify-content: space-between;
        justify-content: space-between;
    }


    .framework.flexbox.align-start-lg {
    -webkit-align-items: flex-start;
        align-items: flex-start;
    }
    .framework.flexbox.align-center-lg {
        -webkit-align-items: center;
        align-items: center;
    }
    .framework.flexbox.align-bottom-lg {
        -webkit-align-items: flex-end;
        align-items: flex-end;
    }
    .framework.flexbox.align-stretch-lg {
        -webkit-align-items: stretch;
        align-items: stretch;
    }
    .framework.flexbox.align-baseline-lg {
        -webkit-align-items: baseline;
        align-items: baseline;
    }
}











/*=========================================================*/
/*================ Framework Tag Destaque =================*/
/*=========================================================*/
span.framework.destaque {
    color: #fff;
    padding: 3px 7px 4px 7px;
    <?php border_radius('5px') ?>
    line-height: 2;
    font-size: 90%;
}
span.framework.destaque.destaque-alfa {
    <?php bg_alfa() ?>
}
span.framework.destaque.destaque-beta {
    <?php bg_beta() ?>
}
span.framework.destaque.destaque-delta {
    <?php bg_delta() ?>
}
span.framework.destaque.destaque-gama {
    <?php bg_gama() ?>
}
span.framework.destaque.destaque-sigma {
    <?php bg_sigma() ?>
}





/*=====================================================*/
/*================= Framework Tabela ==================*/
/*=====================================================*/

/*--- box tabela ---*/
.framework.tabela {
    width: 100%;
    overflow-x: auto;
}

/*--- barra rolagem tabela ---*/
.framework.tabela::-webkit-scrollbar {
    width: 4px;
    height: 7px;
}
.framework.tabela::-webkit-scrollbar-track {
    background-color: #eee;
    <?php border_radius('0') ?>
}
.framework.tabela::-webkit-scrollbar-track-piece {
    opacity: 1;
}
.framework.tabela::-webkit-scrollbar-thumb {
    background-color: #ccc;
    <?php border_radius('0') ?>
}


/*--- tabela ---*/
.framework.tabela table {
    width: 100%;
}


/*--- thead ---*/
.framework.tabela table thead  {
    background-color: #f5f5f5;
}
.framework.tabela.listrada table thead  {
    background-color: #fff;
    <?php border_solid('top', '1px', '#eee;') ?>
}
.framework.tabela.hover table thead  {
    background-color: #fff;
    <?php border_solid('top', '1px', '#eee;') ?>
    <?php border_solid('bottom', '1px', '#eee;') ?>
}
.framework.tabela.bordada table thead  {
    background-color: #fff;
}


/*--- thead tr ---*/
.framework.tabela table thead tr  {
    
}


/*--- thead tr td ---*/
.framework.tabela table thead tr td  {
    padding: 12px;
    font-weight: bold;
    font-size: 18px;
    color: #000;
}
.framework.tabela.bordada table thead tr td  {
    <?php border_solid('all', '1px', '#ddd;') ?>
    background-color: #f5f5f5;
}


/*--- tbody ---*/
.framework.tabela table tbody  {
    
}


/*--- tbody tr ---*/
.framework.tabela table tbody tr  {
    <?php border_solid('bottom', '1px', '#eee;') ?>
    <?php transition('on') ?>
}
.framework.tabela table tbody tr:last-child  {
    <?php border_solid('bottom', '0px', '#eee;') ?>
}

.framework.tabela.listrada table tbody tr  {
    <?php border_solid('bottom', '0px', '#eee;') ?>
}
.framework.tabela.listrada table tbody tr:nth-child(odd)  {
    background-color: #f5f5f5;
}
.framework.tabela.hover table tbody tr:hover  {
    background-color: #f5f5f5;
}


/*--- tbody tr td ---*/
.framework.tabela table tbody tr td  {
    padding: 12px;
    font-size: 16px;
}
.framework.tabela.bordada table tbody tr td  {
    <?php border_solid('all', '1px', '#ddd;') ?>
}













/*=====================================================*/
/*================= Framework Alertas =================*/
/*=====================================================*/
.framework.alerta {
    position: relative;
    display: block;
    width: 100%;
    margin-bottom: 10px;
    padding: 13px 20px 10px 11px;
    font-size: 14px;
    color: #fff;
    <?php border_radius('4px') ?>
    visibility: visible;
    opacity: 1;
    <?php transition('on') ?>
}
.framework.alerta.invisible {
    visibility: hidden;
    opacity: 0;
}
.framework.alerta.alerta-erro {
    background-color: #D61528;
}
.framework.alerta.alerta-sucesso {
    background-color: #63C132;
}
.framework.alerta.alerta-info {
    background-color: #1788C9;
}
.framework.alerta.alerta-aviso {
    background-color: #F79D00;
}
.framework.alerta i.ikon:first-child {
    position: relative;
    top: -2px;
    padding-right: 5px;
}
.framework.alerta i.ikon[data-close-alerta] {
    position: absolute;
    top: 15px;
    right: 12px;
    cursor: pointer;
}
.framework.alerta.alerta-sm {
    display: inline-block;
    width: auto;
    padding: 8px 12px 6px 9px;
    font-size: 12px;
}
.framework.alerta.alerta-sm i.ikon:first-child {
    position: relative;
    top: -2px;
}
.framework.alerta.alerta-sm i.ikon[data-close-alerta] {
    position: relative;
    top: -1px;
    right: 2px;
    cursor: pointer;
    margin-left: 12px;
    margin-right: -5px;
}













/*=====================================================*/
/*=================== Framework Lista =================*/
/*=====================================================*/
ul,
ol {
    margin-top: 0;
    margin-bottom: 0;
}
ul ul,
ol ul,
ul ol,
ol ol {
    margin-bottom: 0;
}
.framework.lista {
    padding-left: 0;
    list-style: none;
}
.framework.lista-inline {
    padding-left: 0;
    margin-left: -5px;
    list-style: none;
}
.framework.lista-inline > li {
    display: inline-block;
    padding-right: 5px;
    padding-left: 5px;
}















/*=====================================================*/
/*================== Framework Input ==================*/
/*=====================================================*/
.framework.box-input {
    <?php flex_box('row', 'space-between', 'flex-start', 'nowrap', 'center') ?>
}

/*--- inputs em pilha ---*/
.framework.box-input.column {
    -webkit-flex-direction: column;
    flex-direction: column;
}

.framework.box-input label.label-input {
    position: relative;
    width: 100%;
    margin:8px 0;
}

.framework.box-input.column label.label-input:last-child {
    margin-bottom: 0;
}

/*--- margin lateral para inputs em linha ---*/
.framework.box-input:not(.column) label.label-input:not(:last-child) {
    margin-right: 16px;
}

/*-- empilhamento de inputs até o tablet --*/
@media (max-width: 991px) {
    .framework.box-input {
        -webkit-flex-direction: column;
        flex-direction: column;
    }
    .framework.box-input label.label-input:not(:last-child) {
        margin-right: 0;
    }
}

.framework.box-input label.label-input .input {
    width: 100%;
    margin-top: 2px;
    padding: 8px;
    font-size: 13px;
    <?php fonte_alfa() ?>
    <?php border_solid('all', '1px', '#ccc;') ?>
    box-shadow: none;
    background-color: #fff;
    <?php transition('on') ?>
    resize: none;
}

.framework.box-input label.label-input .input:hover,
.framework.box-input label.label-input .input:focus {
    outline: none;
    <?php border_solid('all', '1px', '#777;') ?>
}
.framework.box-input label.label-input .input::placeholder {
    <?php fonte_alfa() ?>
}
.framework.box-input label.label-input .input[disabled] {
    cursor: not-allowed;
    opacity: 0.65;
    <?php border_solid('all', '1px', '#ccc;') ?>
}



/*--- inputs checkbox e radio ---*/
.framework.box-input label.label-checkbox,
.framework.box-input label.label-radio {
    position: relative;
    margin:8px 0;
}

.framework.box-input label.label-checkbox .input-checkbox,
.framework.box-input label.label-radio .input-radio {
    position: relative;
    top: 5px;
    width: 20px;
    height: 20px;
    margin-right: 3px;
    cursor: pointer;
}
.framework.box-input label.label-checkbox .input-checkbox[disabled],
.framework.box-input label.label-radio .input-radio[disabled] {
    cursor: not-allowed;
    opacity: 0.65;
}











/*=====================================================*/
/*================== Framework Formok =================*/
/*=====================================================*/
.framework.formok {

}

/*-- css da borda vermelha do input com erro --*/
.framework.formok .box-input .input.erro {
    border-color: #D61528 !important;
    color: #D61528;
}

/*-- mensagem de sucesso --*/
.framework.formok p.mensagem-formok {
    color: #333;
    text-align: center;
}
.framework.formok p.mensagem-formok i.ikon {
    font-size: 24px;
    padding-right: 5px;
}








/*=====================================================*/
/*================= Framework Modalx ==================*/
/*=====================================================*/
.framework.modalx {
    position: fixed;
    <?php flex_box('column', 'center', 'center', 'nowrap', 'center') ?>
    width: 100%;
    /*height: 101% E top: -0.5% para evitar que o overlay se desloque na tela*/
    height: 101%;
    top: -0.5%;
    right: 0;
    z-index: 10000;
    /*overlay*/
    background-color: rgba(0,0,0,0.5);
    visibility: hidden;
    opacity: 0;
    <?php transition(0.5) ?>
}
.framework.modalx.top {
    -webkit-justify-content: flex-start;
    justify-content: flex-start;
}
.framework.modalx.bottom {
    -webkit-justify-content: flex-end;
    justify-content: flex-end;
}
.framework.modalx.mostrar-modalx {
    visibility: visible;
    opacity: 1;
}
.framework.modalx.esconder-modalx {
    visibility: hidden;
    opacity: 0;
}


.framework.modalx.mostrar-modalx .box-modalx {
    <?php transform('scale(1)') ?>
}
.framework.modalx.esconder-modalx .box-modalx {
    <?php transform('scale(0.9)') ?>
}

.framework.modalx .box-modalx {
    position: relative;
    display: inline-block;
    width: 50%;
    max-height: 85%;
    top: 0;
    left: 0;
    background-color: #fff;
    overflow: auto;
    <?php transform('scale(0.9)') ?>
    <?php box_shadow(0,0,10,2,0.2) ?>
    <?php transition(0.5) ?>
}

.framework.modalx .box-modalx::-webkit-scrollbar {
    width: 7px;
    height: 8px;
}
.framework.modalx .box-modalx::-webkit-scrollbar-track {
    background-color: #eee;
    <?php border_radius('0') ?>
}
.framework.modalx .box-modalx::-webkit-scrollbar-track-piece {
    opacity: 1;
}
.framework.modalx .box-modalx::-webkit-scrollbar-thumb {
    background-color: #bbb;
    <?php border_radius('0') ?>
}


/*aqui são as opções de tamanho do modalx, note que acima o padrão é 50%*/
.framework.modalx.sm-modalx .box-modalx {
    width: 35%;
}
.framework.modalx.md-modalx .box-modalx {
    width: 50%;
}
.framework.modalx.lg-modalx .box-modalx {
    width: 65%;
}
.framework.modalx.all-screen-modalx .box-modalx {
    width: 100%;
    min-height: 100%;
}

@media (max-width: 962px) {
    .framework.modalx.sm-modalx .box-modalx,
    .framework.modalx.md-modalx .box-modalx,
    .framework.modalx.lg-modalx .box-modalx {
        width: 95%;
    }
}


.framework.modalx .box-modalx .header-modalx {
    position: relative;
    width: 100%;
    top: 0;
    left: 0;
    <?php border_solid('bottom', '1px', '#ddd;') ?>
    padding: 20px 25px;
    background-color: #fbfbfb;
}


.framework.modalx .box-modalx .header-modalx button.fechar-modalx {
    position: absolute;
    top: 10px;
    right: 10px;
    <?php hex_to_rgba('bg', '#000', 0) ?>
    border:none;
    font-size: 25px;
    outline: none;
    line-height: 1;
    color: #777;
    cursor: pointer;
}

.framework.modalx .box-modalx .header-modalx button.fechar-modalx:hover {
    color: #111;
}

.framework.modalx .box-modalx .body-modalx {
    position: relative;
    width: 100%;
    <?php border_solid('bottom', '1px', '#ddd;') ?>
    padding: 20px 25px;
}
.framework.modalx .box-modalx .body-modalx.padding-off {
    padding: 0;
}

.framework.modalx .box-modalx .footer-modalx {
    position: relative;
    width: 100%;
    padding: 15px 25px;
    background-color: #fbfbfb;

}
.framework.modalx .box-modalx .footer-modalx.padding-off {
    padding:0;
}





/*=====================================================*/
/*================== Framework Tabx ===================*/
/*=====================================================*/
.framework.tabx {
    width: 100%;
    <?php border_solid('all', '1px', '#eee;') ?>
    background-color: #fafafa;
    padding: 10px 15px;
}
.framework.tabx:not(.active) {
    display: none;
}










/*=====================================================*/
/*================ Framework Expansivel ===============*/
/*=====================================================*/
.framework.expansivel {
    width: 100%;
    <?php border_solid('all', '1px', '#eee;') ?>
    padding: 10px 15px;
    background-color: #fafafa;
}



/*=====================================================*/
/*============ Framework Expansivel Pilha =============*/
/*=====================================================*/
.framework.expansivel-pilha {
    /*min-height: 300px FIX FLICKER slideUp()*/
    min-height: 300px;
}

.framework.expansivel-pilha .__ativar-expansivel-pilha {
    cursor: pointer;
    background-color: #fafafa;
    <?php border_solid('all', '1px', '#f0f0f0;') ?>
    padding: 10px 20px;
}

.framework.expansivel-pilha .box-expansivel-pilha {
    <?php border_solid('all', '1px', '#f0f0f0;') ?>
    <?php border_solid('top', '1px', 'transparent;') ?>
    padding: 10px 15px;
}











/*=====================================================*/
/*=================== mapa google =====================*/
/*=====================================================*/
.framework.mapa-google a[href^="http://maps.google.com/maps"],
.framework.mapa-google a[href^="https://maps.google.com/maps"],
.gmnoprint a,
.gmnoprint span,
.gm-style-cc {
    display: none !important;
}
.framework.mapa-google {
    display: block;
    width: 100%;
    height: 412px;
}



















/*=====================================================*/
/*============== Framework Parallax Zen ===============*/
/*=====================================================*/
.framework.parallax {
    position: relative;
    width: 100%;
    display: flex;
    display: -webkit-flex;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    overflow: hidden;
}
@media (max-width: 1199px) {
   .framework.parallax {
        background-attachment: scroll !important;
    } 
}
.framework.parallax-overlay::before {
    <?php pseudohead() ?>
    z-index: 0;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    <?php hex_to_rgba('bg', '#000', 0.45) ?>
}


/*=====================================================*/
/*=========== Framework Esconder Elemento =============*/
/*=====================================================*/
.framework.esconder {
    display: none !important;
}

@media (min-width: 1px) and (max-width: 576px) {
    .framework.esconder-mobile {
        display: none !important;
    }
    .framework.esconder-mobile-tablet {
        display: none !important;
    }
}
/* TABLET */
@media (min-width: 577px) and (max-width: 991px) {
    .framework.esconder-tablet {
        display: none !important;
    }
    .framework.esconder-mobile-tablet {
        display: none !important;
    }
}
/* DESKTOP */
@media (min-width: 992px) {
    .framework.esconder-desktop {
        display: none !important;
    }
}

















































/*=====================================================*/
/*=================== Fix Float =======================*/
/*=====================================================*/
.fix-float::before,
.fix-float::after {
    display: block;
    content: '';
}
.fix-float::after {
    clear: both;
}



</style>