<?php  global $chefdeco; 

$msg = "";


/****************************************/
$msg = "<style>";
/****************************************/


/*Color Pre Header*/

$msg .= "#pre-header { background-color: ".$chefdeco['selcolor_preheader']['rgba']."; color: ".$chefdeco['selcolor_preheadertexto']['rgba']."; }"; 
$msg .= "#carruSliderTit h4 { color: ".$chefdeco['selcolor_preheaderslidertitulos']['rgba']."; }";


/*Color Header*/

$msg .= "header { background-color: ".$chefdeco['selcolor_header']['rgba']."; color: white; border-bottom: 4px solid ".$chefdeco['selcolor_lineabajaheader']['rgba']."; }";
$msg .= "#info-header { background-image: url('".$chefdeco['img_fondo_header']['url']."'); }";
$msg .= "#info-header .tituloH { color: ".$chefdeco['selcolor_tituloheader']['rgba']."; }";


/*Color Menu*/

$msg .= ".navbar-default { background-color: ".$chefdeco['selcolor_FondoMenu']['rgba']."; }";
$msg .= ".navbar-default .navbar-nav > li > a { color: ".$chefdeco['selcolor_TextoLevel1Menu']['rgba']."; background-color: ".$chefdeco['selcolor_FondoLevel1Menu']['rgba']."; }";
$msg .= ".navbar-nav > li > .dropdown-menu > li > a { color: ".$chefdeco['selcolor_TextoLevel2Menu']['rgba']."; background-color: ".$chefdeco['selcolor_FondoLevel2Menu']['rgba']."; }";

$msg .= ".navbar-default .navbar-nav > li > a:hover { color: ".$chefdeco['selcolor_HoverTextoLevel1Menu']['rgba']."; background-color: ".$chefdeco['selcolor_HoverFondoLevel1Menu']['rgba']."; }";
$msg .= ".navbar-nav > li > .dropdown-menu > li:hover > a { color: ".$chefdeco['selcolor_HoverTextoLevel2Menu']['rgba']."; background-color: ".$chefdeco['selcolor_HoverFondoLevel2Menu']['rgba']."; }";


/*Color Footer*/

$msg .= "#preFooter {
    background-color: ".$chefdeco['selcolor_PreFooter']['rgba'].";
    color: ".$chefdeco['selcolor_TextoPreFooter']['rgba'].";
}";
$msg .= "#preFooter h3 {
    color: ".$chefdeco['selcolor_TitulosPreFooter']['rgba'].";
}";
$msg .= "#preFooter .titulo-seccion:after {
    background-color: ".$chefdeco['selcolor_LineasPreFooter']['rgba'].";
}";


/****************************************/
$msg .= "</style>";
/****************************************/

echo $msg;

?>