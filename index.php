<?php 
    $giro = $_GET['giro'];
    echo '<script languaje="JavaScript"> var giro="'.$giro.'";</script>';
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>El Presidente de la República y sus funciones</title>
    <link rel="icon" type="image/png" href="img/themathic.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <link rel="stylesheet" href="jdSlider/public/dist/css/common.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <link id="estilos" rel="stylesheet" href="css/presidente.v2.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="jdSlider/public/dist/js/jquery.jdSlider-latest.min.js"></script>
    <script id="script" src="js/main.v5.js"></script>
</head>

<body>
    <div id="img-funciones" class="img-viewer">
        <i id="close-slider1" class="small material-icons close-icon">highlight_off</i>
        <img id="info1" src="img/infografias/Infografías-Thematic-04-final.png">
    </div>

    <!--<section id="slider-fuerza" class="jd-slider example">
        <i id="close-slider1" class="small material-icons close-icon">highlight_off</i>
        <div class="slide-inner">
            <ul class="slide-area">
                <li>
                    <img id="info1" src="img/infografias/Infografías-Thematic-04-final.png">
                    <br />
                    <br />
                    <br />
                </li>
            </ul>
        </div>
        <a class="prev" href="#">
            <i class="fas fa-angle-left fa-2x"></i>
        </a>
        <a class="next" href="#">
            <i class="fas fa-angle-right fa-2x"></i>
        </a>
        <div class="controller">
            <div class="indicate-area"></div>
        </div>
    </section>-->
    <div id="img-mins1" class="img-viewer">
            <!--<i id="close-slider1" class="small material-icons close-icon">highlight_off</i>-->
            <img id="info3" src="img/infografias/Infografías-Thematic-01A-final.png">
            <i class="fas fa-angle-right fa-2x"></i>
    </div>
    <div id="img-mins2" class="img-viewer">
            <i id="close-slider2" class="small material-icons close-icon">highlight_off</i>
            <i class="fas fa-angle-left fa-2x"></i>
            <img id="info2" src="img/infografias/Infografías-Thematic-01B-final.png">
    </div>
    <!--<section id="slider-mins" class="jd-slider example">
        <i id="close-slider2" class="small material-icons close-icon">highlight_off</i>
        <div class="slide-inner">
            <ul class="slide-area">
                <li>
                    <img id="info3" src="img/infografias/Infografías-Thematic-01A.png">
                </li>
                <li>
                    <img id="info2" src="img/infografias/Infografías-Thematic-01B.png">
                </li>
            </ul>
        </div>
        <a class="prev" href="#">
            <i class="fas fa-angle-left fa-2x"></i>
        </a>
        <a class="next" href="#">
            <i class="fas fa-angle-right fa-2x"></i>
        </a>
        <div class="controller">
            <div class="indicate-area"></div>
        </div>
    </section>-->

    <section id="slider-admin" class="jd-slider example">
        <i id="close-slider4" class="small material-icons close-icon">highlight_off</i>
        <div class="slide-inner">
            <ul class="slide-area">
                <li>
                    <img id="info5" src="img/infografias/Infografías-Thematic-02.png">
                    <br />
                </li>
            </ul>
        </div>
        <a class="prev" href="#">
            <i class="fas fa-angle-left fa-2x"></i>
        </a>
        <a class="next" href="#">
            <i class="fas fa-angle-right fa-2x"></i>
        </a>
        <div class="controller">
            <div class="indicate-area"></div>
        </div>
    </section>
    <div id="img-super" class="img-viewer">
        <i id="close-slider3" class="small material-icons close-icon">highlight_off</i>
        <img id="info6" src="img/infografias/Infografías-Thematic-03-final.png">
    </div>
    <!--<section id="slider-super" class="jd-slider example">
        <i id="close-slider3" class="small material-icons close-icon">highlight_off</i>
        <div class="slide-inner">
            <ul class="slide-area">
                <li>
                    <img id="info6" src="img/infografias/Infografías-Thematic-03.png">
                    <br />
                </li>
            </ul>
        </div>
        <a class="prev" href="#">
            <i class="fas fa-angle-left fa-2x"></i>
        </a>
        <a class="next" href="#">
            <i class="fas fa-angle-right fa-2x"></i>
        </a>
        <div class="controller">
            <div class="indicate-area"></div>
        </div>
    </section>-->

    <div id="buttons">
        <div id="cont-on-logo" class="cont-img-button">
            <img id="onlogo" class="logobutton" src="img/SVG/Botones/40 px on.svg">
        </div>
        <!--<div id="cont-off-logo" class="cont-img-button">
            <img id="offlogo" class="logobutton" src="img/SVG/Botones/40 px off.svg">
        </div>-->
        <div id="cont-cc-logo" class="cont-img-button">
            <img id="cclogoo" class="logobutton" src="img/SVG/Botones/40 px cc.svg">
        </div>
        <div id="cont-thematic-logo" class="cont-img-button">
            <img id="thematic-logo" class="logobutton" src="img/SVG/Botones/40 px logo.svg">
        </div>
    </div>
    <div id="controls">
        <div id="cont-img-refresh" class="cont-img-button">
            <img id="refresh" class="logobutton" src="img/SVG/Botones/40 px home.svg">
        </div>
        <div id="cont-back-logo" class="cont-img-button">
            <img id="backlogoo" class="logobutton" src="img/SVG/Botones/40 px back.svg">
        </div>
        <div id="cont-img-funciones" class="cont-img-button">
            <img id="funciones-button" class="logobutton" src="img/SVG/Botones/40 px next.svg">
        </div>

        <!--<div id='cont-img-refresh' class="cont-img-button">
            <i id="refresh" class="img-button material-icons">refresh</i>
            <img id="cclogoo" src="img/SVG/Botones/40 px on.svg">
        </div>-->
        <!--<div id='cont-img-corneta' class="cont-img-button">
            <img id="corneta" class="img-button" src="img/corneta.png">
        </div>-->
    </div>
    <!--<div id='cont-img-funciones' class="cont-img-button">
        <i id="funciones-button" class="img-button material-icons">arrow_forward</i>
    </div>
    <div id='cont-img-back' class="cont-img-button">
        <i id="back" class="img-button material-icons">arrow_back</i>
    </div>-->
    <div class="row rowprincipal">
        <div class="colprincipal">
            <div class="central" style="display: flex; justify-content: space-between">
                <div id="cont-band-left" class="cont-band-left">
                    <img id="band-left" class="bandera" src="img/bandera_left.png" alt="">
                </div>
                <div class="cont-centro">
                    <div style="text-align: center;">
                        <img class="escudo" src="img/escudo.png" alt="">
                    </div>
                    <div id="text-el" class="frase first" style="text-align: center;">
                        <div class="valign-wrapper separador-left">
                            <hr>
                            <hr>
                        </div>
                        <div id="cont-conector" style="width: 5%;">
                            <img class="conector" src="img/el.png" alt="">
                        </div>
                        <div class="valign-wrapper separador-right">
                            <hr>
                            <hr>
                        </div>
                    </div>
                    <div id="text-pre" class="frase center-align" style="margin-top: 3%;">
                        <img class="presidente" src="img/presidente.png" alt="">
                    </div>
                    <div id="text-dela" class="frase" style="text-align: center; margin-top: 3%;">
                        <div class="separador-left-dl">
                            <hr>
                            <hr>
                        </div>
                        <div id="cont-dela" style="width: 15%">
                            <img class="conector" src="img/dela.png" alt="">
                        </div>
                        <div class="separador-right-dl">
                            <hr>
                            <hr>
                        </div>
                    </div>
                    <div id="text-rep" class="frase" style="margin-top: 3%;">
                        <img class="subtitulo" src="img/republica.png" alt="">
                    </div>
                    <div id="text-ysus" class="frase" style="text-align: center;  margin-top: 7%;">
                        <div class="valign-wrapper separador-left">
                            <hr>
                            <hr>
                        </div>
                        <div id="cont-ysus" class="valign-wrapper" style="width: 15%">
                            <img class="conector" src="img/ysus.png" alt="">
                        </div>
                        <div class="valign-wrapper separador-right">
                            <hr>
                            <hr>
                        </div>
                    </div>
                    <div id="text-fun" class="frase" style="margin-top: 7%;">
                        <img class="subtitulo" src="img/funciones.png" alt="">
                    </div>
                    <div id="cont-inicio" class="cont-inicio-text">
                        <div id="containeril" class="containeri">
                            <div id="chevron11" class="chevroni"></div>
                            <div id="chevron12" class="chevroni"></div>
                            <div id="chevron13" class="chevroni"></div>
                        </div>
                        <div>
                            <p id="inicio-text" class="inicio-text">INICIO</p>
                        </div>
                        <div id="containerir" class="containeri">
                            <div id="chevron11" class="chevroni"></div>
                            <div id="chevron12" class="chevroni"></div>
                            <div id="chevron13" class="chevroni"></div>
                        </div>
                    </div>
                </div>
                <div id="cont-band-right" class="cont-band-right">
                    <img id="band-right" class="bandera" src="img/bandera.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div id="slider-pre" class="funciones">
        <div class="parrafo-func">
            <p>El 17 de junio de 2018 fue elegido como Presidente de la República de Colombia el señor Iván
                Duque Márquez, quien ejerce el cargo desde el 7 de agosto de 2018 hasta el 7 de agosto de 2022.<br><br>
                Las funciones que corresponden al presidente de Colombia se encuentran en el artículo 189 de la
                Constitución Política, este artículo tiene 28 numerales que las establecen.</p>
        </div>
    </div>
    <iframe id='iframe-slider' src="slider2.html" class="iframe-slider">
    </iframe>
    <div id="boton-slider" class="boton-slider">
        <img id="duque" class="img-slider" src="img/boton_slider_clean.png" alt="">
    </div>
    <div id="gif-slider" class="gif">
        <div id="" class='oculto-slider'>
            oculto
        </div>
        <div id="containers" class="containers">
            <div id="chevrons1" class="chevron"></div>
            <div id="chevrons2" class="chevron"></div>
            <div id="chevrons3" class="chevron"></div>
        </div>
        <!--<img id="arrow-gif" class="img-slider" src="img/arrowdown_claro.gif" alt="">-->
    </div>
    <div id="titulo-tipo" class="cont-titulo">
        <p class="titulo">
            Funciones del Presidente de la República agrupadas según su tipo.
        </p>
    </div>
    <div id="funciones-tipo" class="funciones-agrup">
        <div class="cont-parrafo-func">
            <p id="parrafo-quien" class="parrafo-func"><ins id="link-quien" class="tooltip">Quien sea Presidente</ins>
                de la República es
                jefe de estado,
                jefe de gobierno y máxima autoridad administrativa en nuestro país.<br><br>
                Como presidente, representará la unidad de la nación y a todos los colombianos en el exterior. <ins id='link-eleccion'
                    class="tooltip">La
                    elección presidencial</ins> es responsabilidad de todos los ciudadanos.
            </p>
            <div id="tooltip-quien" class="tooltip-f"><i id="close-quien" class="small material-icons close-icon">highlight_off</i>
                <p class="tooltip-parraf">¿Quién puede ser presidente de la República de Colombia?<br><br>Cualquier
                    ciudadano en ejercicio
                    mayor de 30 años que haya nacido en Colombia</p>
            </div>
            <div id="tooltip-eleccion" class="tooltip-f"><i id="close-eleccion" class="small material-icons close-icon">highlight_off</i>
                <p class="tooltip-parraf">¿De qué forma se elige el presidente de la Republica de Colombia?<br><br>Por
                    la mitad más uno de los
                    votos depositados en la elección presidencial, (cada ciudadano puede depositar un voto, que es
                    secreto), esta es la conocida
                    primera vuelta.<br>Si en esta votación ninguno de los candidatos alcanza el número de votos
                    necesario para ser presidente,
                    se realizará una nueva con los dos candidatos que obtuvieron el número más alto de votos, esta es
                    la conocida segunda vuelta.<br>
                    El candidato que aquí obtenga el mayor número de votos será el nuevo Presidente de la República.</p>
            </div>
        </div>
    </div>

    <!--<div class="cont-gen-arrows" style="display: flex">-->
    <div id='flecha1' class="cont-arrow-func">
        <div id="oculto-arrow1" class="oculto-arrow">hola</div>
        <div id="containerf1" class="containerf">
            <div id="chevron11" class="chevron"></div>
            <div id="chevron12" class="chevron"></div>
            <div id="chevron13" class="chevron"></div>
        </div>
        <img id="arrow1" class="arrow-func" src="img/SVG/Menus_titulos_con_flechas/menu-defensa.svg" alt="">
        <img id="numeral1" class="numeral" src="img/SVG/Flechas_Menus_Iconos/menu-defensa-2.svg" alt="">
        <!--<img id="numeral1" class="numeral" src="img/numeral1.png" alt="">-->
        <!--<img id="gif-numeral" class="gif-numeral" data-n="1" src="img/arrowdown_claro.gif" alt="">-->
    </div>
    <div id='flecha2' class="cont-arrow-func">
        <div id="oculto-arrow2" class="oculto-arrow">hola</div>
        <div id="containerf2" class="containerf">
            <div id="chevron21" class="chevron"></div>
            <div id="chevron22" class="chevron"></div>
            <div id="chevron23" class="chevron"></div>
        </div>
        <img id="arrow2" class="arrow-func" src="img/SVG/Menus_titulos_con_flechas/menu-politica.svg" alt="">
        <img id="numeral2" class="numeral" src="img/SVG/Flechas_Menus_Iconos/menu-politica-2.svg" alt="">
        <!--<img id="numeral2" class="numeral" src="img/numeral2.png" alt="">
        <img id="gif-numeral2" class="gif-numeral" data-n="2" src="img/arrowdown_claro.gif" alt="">-->
    </div>
    <div id='flecha3' class="cont-arrow-func">
        <div id="oculto-arrow3" class="oculto-arrow">hola</div>
        <div id="containerf3" class="containerf">
            <div id="chevron31" class="chevron"></div>
            <div id="chevron32" class="chevron"></div>
            <div id="chevron33" class="chevron"></div>
        </div>
        <img id="arrow3" class="arrow-func" src="img/SVG/Menus_titulos_con_flechas/menu-funciones.svg" alt="">
        <img id="numeral3" class="numeral" src="img/SVG/Flechas_Menus_Iconos/menu-funciones-2.svg" alt="">
        <!--<img id="numeral3" class="numeral" src="img/numeral3.png" alt="">
        <img id="gif-numeral3" class="gif-numeral" data-n="3" src="img/arrowdown_claro.gif" alt="">-->
    </div>
    <div id='flecha4' class="cont-arrow-func">
        <div id="oculto-arrow4" class="oculto-arrow">hola</div>
        <div id="containerf4" class="containerf">
            <div id="chevron41" class="chevron"></div>
            <div id="chevron42" class="chevron"></div>
            <div id="chevron43" class="chevron"></div>
        </div>
        <img id="arrow4" class="arrow-func" src="img/SVG/Menus_titulos_con_flechas/menu-inspeccion.svg" alt="">
        <img id="numeral4" class="numeral" src="img/SVG/Flechas_Menus_Iconos/menu-inspeccion-2.svg" alt="">
        <!--<img id="numeral4" class="numeral" src="img/numeral4.png" alt="">
        <img id="gif-numeral4" class="gif-numeral" data-n="4" src="img/arrowdown_claro.gif" alt="">-->
    </div>
    <div id='flecha5' class="cont-arrow-func">
        <div id="oculto-arrow5" class="oculto-arrow">hola</div>
        <div id="containerf5" class="containerf">
            <div id="chevron51" class="chevron"></div>
            <div id="chevron52" class="chevron"></div>
            <div id="chevron53" class="chevron"></div>
        </div>
        <img id="arrow5" class="arrow-func" src="img/SVG/Menus_titulos_con_flechas/menu-gobierno.svg" alt="">
        <img id="numeral5" class="numeral" src="img/SVG/Flechas_Menus_Iconos/menu-gobierno-2.svg" alt="">
        <!--<img id="numeral5" class="numeral" src="img/numeral5.png" alt="">
        <img id="gif-numeral5" class="gif-numeral" data-n="5" src="img/arrowdown_claro.gif" alt="">-->
    </div>
    <!--</div>-->
    <div id="descri-numeral1" class="descri-numeral">
        <div class="numeral-const">
            <p class="parr-const"><b>Texto del artículo 189 de la Constitución Política de Colombia.</b></p>
            <br />
            <p class="parr-const"><b>Numeral 1. </b>Nombrar y separar libremente a los ministros del Despacho y a los
                Directores de Departamentos Administrativos.</p>
        </div>
        <div class="numeral-const-int">
            <p class="parr-const"><b>A tener en cuenta</b></p>
            <p class="parr-const-int">En Colombia hay <ins id="info-mins" class="tooltip">16 ministerios</ins> y <br /><ins
                    id="info-admin" class="tooltip">8
                    departamentos administrativos</ins> .
            </p>
        </div>
    </div>
    <div id="descri-numeral2" class="descri-numeral">
        <div class="numeral-const">
            <p class="parr-const"><b>Texto del artículo 189 de la Constitución Política de Colombia.</b></p>
            <br />
            <p class="parr-const"><b>Numeral 2. </b>Dirigir las relaciones internacionales. Nombrar a los agentes
                diplomáticos y consulares, recibir a los agentes respectivos y celebrar con otros Estados y entidades
                de derecho internacional tratados o convenios que se someterán a la aprobación del Congreso. </p>
        </div>
        <div class="numeral-const-int">
            <p class="parr-const"><b>A tener en cuenta</b></p>
            <p class="parr-const-int">El Presidente nombra a los embajadores y cónsules de Colombia en el exterior,
                también recibe a los embajadores de otros países y puede firmar tratados con otros estados o con
                entidades internacionales.
            </p>
        </div>
    </div>
    <div id="descri-numeral3" class="descri-numeral">
        <div class="numeral-const">
            <p class="parr-const"><b>Texto del artículo 189 de la Constitución Política de Colombia.</b></p>
            <br />
            <p class="parr-const"><b>Numeral 3. </b>Dirigir la fuerza pública y disponer de ella como Comandante
                Supremo de las
                Fuerzas Armadas de la Republica.</p>
        </div>
        <div class="numeral-const-int">
            <p class="parr-const"><b>A tener en cuenta</b></p>
            <p class="parr-const-int"><ins id="info-fuerza" class="tooltip">La fuerza pública</ins> está conformada por
                las Fuerzas
                militares (Ejército, Fuerza
                Aérea, Armada) y la Policía Nacional.
                El Presidente es el comandante supremo, por encima del Ministro de Defensa y los Generales.
            </p>
        </div>
    </div>
    <div id="descri-numeral4" class="descri-numeral">
        <div class="numeral-const">
            <p class="parr-const"><b>Texto del artículo 189 de la Constitución Política de Colombia.</b></p>
            <br />
            <p class="parr-const"><b>Numeral 4. </b>Conservar en todo el territorio el orden público y restablecerlo
                donde fuere turbado.</p>
        </div>
        <div class="numeral-const-int">
            <p class="parr-const"><b>A tener en cuenta</b></p>
            <p class="parr-const-int">Mantener el orden público es una obligación del Presidente, puede hacerse através
                del uso de la Fuerza Pública.
            </p>
        </div>
    </div>
    <div id="descri-numeral5" class="descri-numeral">
        <div class="numeral-const">
            <p class="parr-const"><b>Texto del artículo 189 de la Constitución Política de Colombia.</b></p>
            <br />
            <p class="parr-const"><b>Numeral 5. </b>Dirigir las operaciones de guerra cuando lo estime conveniente. </p>
        </div>
        <div class="numeral-const-int">
            <p class="parr-const"><b>A tener en cuenta</b></p>
            <p class="parr-const-int">En caso de guerra, el Presidente, si lo estima conveniente, puede dirigir las
                operaciones.
            </p>
        </div>
    </div>
    <div id="descri-numeral6" class="descri-numeral">
        <div class="numeral-const">
            <p class="parr-const"><b>Texto del artículo 189 de la Constitución Política de Colombia.</b></p>
            <br />
            <p class="parr-const"><b>Numeral 6. </b>Proveer a la seguridad exterior de la República, defendiendo la
                independencia y la honra de la Nación y la inviolabilidad del territorio; declarar la guerra con
                permiso del Senado, o hacerla sin tal autorización para repeler una agresión extranjera; y convenir y
                ratificar los tratados de paz, de todo lo cual dará cuenta inmediata al Congreso. </p>
        </div>
        <div class="numeral-const-int">
            <p class="parr-const"><b>A tener en cuenta</b></p>
            <p class="parr-const-int">La Fuerza Pública, bajo órdenes del Presidente, defiende la independencia y la
                honra de Colombia, evita invasiones o ataques al país. El Presidente puede declarar la guerra o firmar
                tratados de paz con otros estados.
            </p>
        </div>
    </div>
    <div id="descri-numeral7" class="descri-numeral">
        <div class="numeral-const">
            <p class="parr-const"><b>Texto del artículo 189 de la Constitución Política de Colombia.</b></p>
            <br />
            <p class="parr-const"><b>Numeral 7. </b>Permitir, en receso del Senado, previo dictamen del Consejo de
                Estado, el tránsito de tropas extranjeras por el territorio de la República. </p>
        </div>
        <div class="numeral-const-int">
            <p class="parr-const"><b>A tener en cuenta</b></p>
            <p class="parr-const-int">Si es necesario o conveniente, el Presidente puede permitir el paso de tropas
                extranjeras por nuestro país. Solo si el Senado está en receso y si hay autorización del Consejo de
                Estado
            </p>
        </div>
    </div>
    <div id="descri-numeral8" class="descri-numeral">
        <div class="numeral-const">
            <p class="parr-const"><b>Texto del artículo 189 de la Constitución Política de Colombia.</b></p>
            <br />
            <p class="parr-const"><b>Numeral 8. </b>Instalar y clausurar las sesiones del Congreso en cada legislatura.
            </p>
        </div>
        <div class="numeral-const-int">
            <p class="parr-const"><b>A tener en cuenta</b></p>
            <p class="parr-const-int">El congreso es la suma del Senado y la Cámara de representantes. Cada legislatura
                es un período de tiempo que empieza un 20 de julio, y termina un 20 de junio.
            </p>
        </div>
    </div>
    <div id="descri-numeral9" class="descri-numeral">
        <div class="numeral-const">
            <p class="parr-const"><b>Texto del artículo 189 de la Constitución Política de Colombia.</b></p>
            <br />
            <p class="parr-const"><b>Numeral 9. </b>Sancionar las leyes. </p>
        </div>
        <div class="numeral-const-int">
            <p><b>A tener en cuenta</b></p>
            <p class="parr-const-int">Sancionar es confirmar una ley aprobada por el Congreso. Después de esta
                confirmación se puede hacer la publicación formal de dicha ley.
            </p>
        </div>
    </div>
    <div id="descri-numeral10" class="descri-numeral">
        <div class="numeral-const">
            <p class="parr-const"><b>Texto del artículo 189 de la Constitución Política de Colombia.</b></p>
            <br />
            <p class="parr-const"><b>Numeral 10. </b>Promulgar las leyes, obedecerlas y velar por su estricto
                cumplimiento. </p>
        </div>
        <div class="numeral-const-int">
            <p class="parr-const"><b>A tener en cuenta</b></p>
            <p class="parr-const-int">Promulgar una ley es publicarla formalmente para que sea cumplida y hecha
                cumplir.
            </p>
        </div>
    </div>
    <div id="descri-numeral11" class="descri-numeral">
        <div class="numeral-const">
            <p class="parr-const"><b>Texto del artículo 189 de la Constitución Política de Colombia.</b></p>
            <br />
            <p class="parr-const"><b>Numeral 11. </b>Ejercer la potestad reglamentaria, mediante la expedición de los
                decretos, resoluciones y órdenes necesarios para la cumplida ejecución de las leyes.</p>
        </div>
        <div class="numeral-const-int">
            <p class="parr-const"><b>A tener en cuenta</b></p>
            <p class="parr-const-int">El Presidente debe reglamentar las leyes que aprueba el Congreso para que estas
                sean puestas en marcha correctamente; lo hace a través de decretos, resoluciones u órdenes
            </p>
        </div>
    </div>
    <div id="descri-numeral12" class="descri-numeral">
        <div class="numeral-const">
            <p class="parr-const"><b>Texto del artículo 189 de la Constitución Política de Colombia.</b></p>
            <br />
            <p class="parr-const"><b>Numeral 12. </b>Presentar un informe al Congreso, al iniciarse cada legislatura,
                sobre los actos de la Administración, sobre la ejecución de los planes y programas de desarrollo
                económico y social, y sobre los proyectos que el Gobierno se proponga adelantar durante la vigencia de
                la nueva legislatura.</p>
        </div>
        <div class="numeral-const-int">
            <p class="parr-const"><b>A tener en cuenta</b></p>
            <p class="parr-const-int">Cada 20 de julio el Presidente informa al Congreso sobre cómo ha actuado su
                Administración, sobre cómo van los planes de desarrollo y sobre cuáles van a ser sus proyectos de ley
                para la legislatura.
            </p>
        </div>
    </div>
    <div id="descri-numeral13" class="descri-numeral">
        <div class="numeral-const">
            <p class="parr-const"><b>Texto del artículo 189 de la Constitución Política de Colombia.</b></p>
            <br />
            <p class="parr-const"><b>Numeral 13. </b>Nombrar a los presidentes, directores o gerentes de los
                establecimientos públicos nacionales y a las personas que deban desempeñar empleos nacionales cuya
                provisión no sea por concurso o no corresponda a otros funcionarios o corporaciones, según la
                Constitución o la ley.</p>
        </div>
        <div class="numeral-const-int">
            <p class="parr-const"><b>A tener en cuenta</b></p>
            <p class="parr-const-int">El Presidente no nombra a todos los directores o gerentes de establecimientos
                públicos o empleados nacionales, sólo nombra a los que no son elegidos por concurso, por otro
                funcionario o corporación según la ley.
            </p>
        </div>
    </div>
    <div id="descri-numeral14" class="descri-numeral">
        <div class="numeral-const">
            <p class="parr-const"><b>Texto del artículo 189 de la Constitución Política de Colombia.</b></p>
            <br />
            <p class="parr-const"><b>Numeral 14. </b>Crear, fusionar o suprimir, conforme a la ley, los empleos que
                demande la administración central, señalar sus funciones especiales y fijar sus dotaciones y
                emolumentos. El Gobierno no podrá crear, con cargo al Tesoro, obligaciones que excedan el monto global
                fijado para el respectivo servicio en la ley de apropiaciones iniciales. </p>
        </div>
        <div class="numeral-const-int">
            <p class="parr-const"><b>A tener en cuenta</b></p>
            <p class="parr-const-int">El Presidente, respetando las leyes correspondientes, determina qué empleos
                necesita su administración, sus funciones y salarios. No obstante, no podrá exceder el presupuesto que
                le asigna la ley.
            </p>
        </div>
    </div>
    <div id="descri-numeral15" class="descri-numeral">
        <div class="numeral-const">
            <p class="parr-const"><b>Texto del artículo 189 de la Constitución Política de Colombia.</b></p>
            <br />
            <p class="parr-const"><b>Numeral 15. </b>Suprimir o fusionar entidades u organismos administrativos
                nacionales de conformidad con la ley.</p>
        </div>
        <div class="numeral-const-int">
            <p class="parr-const"><b>A tener en cuenta</b></p>
            <p class="parr-const-int">El Presidente, respetando las leyes correspondientes, puede eliminar o unir
                entidades y organismos de la Administración.
            </p>
        </div>
    </div>
    <div id="descri-numeral16" class="descri-numeral">
        <div class="numeral-const">
            <p class="parr-const"><b>Texto del artículo 189 de la Constitución Política de Colombia.</b></p>
            <br />
            <p class="parr-const"><b>Numeral 16. </b>Modificar la estructura de los Ministerios, Departamentos
                Administrativos y demás entidades u organismos administrativos nacionales, con sujeción a los
                principios y reglas generales que defina la ley. </p>
        </div>
        <div class="numeral-const-int">
            <p class="parr-const"><b>A tener en cuenta</b></p>
            <p class="parr-const-int">El Presidente, respetando las leyes correspondientes, puede modificar la
                estructura de sus ministerios, departamentos administrativos y demás entidades de la Administración
                Nacional.
            </p>
        </div>
    </div>
    <div id="descri-numeral17" class="descri-numeral">
        <div class="numeral-const">
            <p class="parr-const"><b>Texto del artículo 189 de la Constitución Política de Colombia.</b></p>
            <br />
            <p class="parr-const"><b>Numeral 17. </b>Distribuir los negocios según su naturaleza, entre Ministerios,
                Departamentos Administrativos y Establecimientos Públicos. </p>
        </div>
        <div class="numeral-const-int">
            <p class="parr-const"><b>A tener en cuenta</b></p>
            <p class="parr-const-int">El Presidente puede repartir las funciones de sus ministerios, departamentos
                administrativos y demás establecimientos públicos, según la clase de asunto de que se trate.
            </p>
        </div>
    </div>
    <div id="descri-numeral18" class="descri-numeral">
        <div class="numeral-const">
            <p class="parr-const"><b>Texto del artículo 189 de la Constitución Política de Colombia.</b></p>
            <br />
            <p class="parr-const"><b>Numeral 18. </b>Conceder permiso a los empleados públicos nacionales que lo
                soliciten, para aceptar, con carácter temporal, cargos o mercedes de gobiernos extranjeros.</p>
        </div>
        <div class="numeral-const-int">
            <p class="parr-const"><b>A tener en cuenta</b></p>
            <p class="parr-const-int">Si un empleado público colombiano quiere aceptar un cargo temporal, un premio o
                reconocimiento de un gobierno extranjero, debe pedir permiso al Presidente
            </p>
        </div>
    </div>
    <div id="descri-numeral19" class="descri-numeral">
        <div class="numeral-const">
            <p class="parr-const"><b>Texto del artículo 189 de la Constitución Política de Colombia.</b></p>
            <br />
            <p class="parr-const"><b>Numeral 19. </b>Conferir grados a los miembros de la fuerza pública y someter para
                aprobación del Senado los que correspondan de acuerdo con el artículo 173.</p>
        </div>
        <div class="numeral-const-int">
            <p class="parr-const"><b>A tener en cuenta</b></p>
            <p class="parr-const-int">El presidente es quien determina los ascensos de los miembros del Ejército,
                Fuerza Aérea, Armada y Policía Nacional, el Congreso de la República decide si los aprueba o no.
            </p>
        </div>
    </div>
    <div id="descri-numeral20" class="descri-numeral">
        <div class="numeral-const">
            <p class="parr-const"><b>Texto del artículo 189 de la Constitución Política de Colombia.</b></p>
            <br />
            <p class="parr-const"><b>Numeral 20. </b>Velar por la estricta recaudación y administración de las rentas y
                caudales públicos y decretar su inversión de acuerdo con las leyes. </p>
        </div>
        <div class="numeral-const-int">
            <p class="parr-const"><b>A tener en cuenta</b></p>
            <p class="parr-const-int">El Presidente debe velar por el buen uso de los dineros públicos, cómo se
                recaudan, administran e invierten, todo esto de acuerdo con la ley.
            </p>
        </div>
    </div>
    <div id="descri-numeral21" class="descri-numeral">
        <div class="numeral-const">
            <p class="parr-const"><b>Texto del artículo 189 de la Constitución Política de Colombia.</b></p>
            <br />
            <p class="parr-const"><b>Numeral 21. </b>. Ejercer la inspección y vigilancia de la enseñanza conforme a la
                ley.</p>
        </div>
        <div class="numeral-const-int">
            <p class="parr-const"><b>A tener en cuenta</b></p>
            <p class="parr-const-int">Esta inspección y vigilancia se hace a través del Ministerio de Educación.
            </p>
        </div>
    </div>
    <div id="descri-numeral22" class="descri-numeral">
        <div class="numeral-const">
            <p class="parr-const"><b>Texto del artículo 189 de la Constitución Política de Colombia.</b></p>
            <br />
            <p class="parr-const"><b>Numeral 22. </b>Ejercer la inspección y vigilancia de la prestación de los
                servicios públicos.</p>
        </div>
        <div class="numeral-const-int">
            <p class="parr-const"><b>A tener en cuenta</b></p>
            <p class="parr-const-int">Que los servicios públicos sean permanentes, ininterrumpidos, eficientes, de
                calidad y que su cubrimiento sea aún mayor es parte de lo que debe inspeccionar y vigilar el
                Presidente.
            </p>
        </div>
    </div>
    <div id="descri-numeral23" class="descri-numeral">
        <div class="numeral-const">
            <p class="parr-const"><b>Texto del artículo 189 de la Constitución Política de Colombia.</b></p>
            <br />
            <p class="parr-const"><b>Numeral 23. </b>Celebrar los contratos que le correspondan con sujeción a la
                Constitución y la ley.</p>
        </div>
        <div class="numeral-const-int">
            <p class="parr-const"><b>A tener en cuenta</b></p>
            <p class="parr-const-int">El Presidente también puede firmar contratos, los que le correspondan según sus
                funciones, y por supuesto que estén ajustados a la constitución y a las leyes.
            </p>
        </div>
    </div>
    <div id="descri-numeral24" class="descri-numeral">
        <div class="numeral-const">
            <p class="parr-const"><b>Texto del artículo 189 de la Constitución Política de Colombia.</b></p>
            <br />
            <p class="parr-const"><b>Numeral 24. </b>Ejercer, de acuerdo con la ley, la inspección, vigilancia y
                control sobre las personas que realicen actividades financiera, bursátil, aseguradora y cualquier otra
                relacionada con el manejo, aprovechamiento o inversión de recursos captados del público. Así mismo,
                sobre las entidades cooperativas y las sociedades mercantiles.</p>
        </div>
        <div class="numeral-const-int">
            <p class="parr-const"><b>A tener en cuenta</b></p>
            <p class="parr-const-int">Esta inspección y vigilancia se hace a través de la <ins id="info-super" class="tooltip">Superintendencia</ins>
                Financiera,
                la Superintendencia de Economía Solidaria, la Superintendencia de Sociedades y la Superintendencia de
                industria y comercio.
            </p>
        </div>
    </div>
    <div id="descri-numeral25" class="descri-numeral">
        <div class="numeral-const">
            <p class="parr-const"><b>Texto del artículo 189 de la Constitución Política de Colombia.</b></p>
            <br />
            <p class="parr-const"><b>Numeral 25. </b>Organizar el Crédito Público; reconocer la deuda nacional y
                arreglar su servicio; modificar los aranceles, tarifas y demás disposiciones concernientes al régimen
                de aduanas; regular el comercio exterior; y ejercer la intervención en las actividades financiera,
                bursátil, aseguradora y cualquier otra relacionada con el manejo, aprovechamiento e inversión de
                recursos provenientes del ahorro de terceros de acuerdo con la ley. </p>
        </div>
        <div class="numeral-const-int">
            <p class="parr-const"><b>A tener en cuenta</b></p>
            <p class="parr-const-int">El Presidente organiza lo relacionado con la deuda nacional, tanto externa como
                interna; también lo relacionado con comercio exterior y aduanas.
            </p>
        </div>
    </div>
    <div id="descri-numeral26" class="descri-numeral">
        <div class="numeral-const">
            <p class="parr-const"><b>Texto del artículo 189 de la Constitución Política de Colombia.</b></p>
            <br />
            <p class="parr-const"><b>Numeral 26. </b>Ejercer la inspección y vigilancia sobre instituciones de utilidad
                común para que sus rentas se conserven y sean debidamente aplicadas y para que en todo lo esencial se
                cumpla con la voluntad de los fundadores. </p>
        </div>
        <div class="numeral-const-int">
            <p class="parr-const"><b>A tener en cuenta</b></p>
            <p class="parr-const-int">Esta inspección y vigilancia se hace a través de los alcaldes y gobernadores y,
                dependiendo de la entidad que se vigile, del Ministerio de Educación, el Ministerio de Salud, el ICBF,
                u otros.
            </p>
        </div>
    </div>
    <div id="descri-numeral27" class="descri-numeral">
        <div class="numeral-const">
            <p class="parr-const"><b>Texto del artículo 189 de la Constitución Política de Colombia.</b></p>
            <br />
            <p class="parr-const"><b>Numeral 27. </b>Conceder patente de privilegio temporal a los autores de
                invenciones o perfeccionamientos útiles, con arreglo a la ley. </p>
        </div>
        <div class="numeral-const-int">
            <p class="parr-const"><b>A tener en cuenta</b></p>
            <p class="parr-const-int">Generalmente en Colombia la oficina encargada de las patentes es la
                Superintendencia de Industria y Comercio, pero el Presidente puede conceder patentes temporales en
                ciertos casos que la ley indica.
            </p>
        </div>
    </div>
    <div id="descri-numeral28" class="descri-numeral">
        <div class="numeral-const">
            <p class="parr-const"><b>Texto del artículo 189 de la Constitución Política de Colombia.</b></p>
            <br />
            <p class="parr-const"><b>Numeral 28. </b>Expedir cartas de naturalización, conforme a la ley.</p>
        </div>
        <div class="numeral-const-int">
            <p class="parr-const"><b>A tener en cuenta</b></p>
            <p class="parr-const-int">La carta de naturalización es el documento que le permite a alguien que es
                extranjero obtener la nacionalidad colombiana.
            </p>
        </div>
    </div>
    <div id="cont-arrow-des1" class="cont-arrow-des">
        <div id='oculto-arrow-des1' data-numeral='1' class='oculto-arrow-des'>hola</div>
        <div id="numeral-desc1" data-numeral='1' class="containerfd">
            <div class="chevron"></div>
            <div class="chevron"></div>
            <div class="chevron"></div>
        </div>
        <ul id="list-1" class="list-numeral">
            <li id="item-n3" data-item='3'>Numeral 3
                <!--<img class="item-hover" src="img/SVG/Over_menus/over-menu-defensa.svg">-->
                <div id="containerl1" class="containerl">
                    <div id="chevron11" class="chevronl"></div>
                    <div id="chevron12" class="chevronl"></div>
                    <div id="chevron13" class="chevronl"></div>
                </div>
            </li>
            <li id="item-n19" data-item='19'>Numeral 19</li>
            <li id="item-n6" data-item='6'>Numeral 6</li>
            <li id="item-n5" data-item='5'>Numeral 5</li>
            <li id="item-n7" data-item='7'>Numeral 7</li>
            <li id="item-n4" data-item='4'>Numeral 4</li>
        </ul>
        <img class="menu-numeral" src="img/SVG/Barra_menu_numerales_con_flechas/menu-numerales-defensa.svg">
        <!--<img id="numeral-desc1" data-numeral='1' class="numeral-desc" src="img/numeral1.png" alt="">-->

    </div>
    <div id="cont-arrow-des2" class="cont-arrow-des">
        <div id='oculto-arrow-des2' data-numeral='2' class='oculto-arrow-des'>hola</div>
        <div id="numeral-desc2" data-numeral='2' class="containerfd">
            <div class="chevron"></div>
            <div class="chevron"></div>
            <div class="chevron"></div>
        </div>
        <ul id="list-2" class="list-numeral">
            <li id="item-n2" data-item='2'>Numeral 2
                <!--<img class='gif-item' src="img/arrowdownblack.gif">-->
                <div id="containerl2" class="containerl">
                    <div id="chevron11" class="chevronl"></div>
                    <div id="chevron12" class="chevronl"></div>
                    <div id="chevron13" class="chevronl"></div>
                </div>
            </li>
            <li id="item-n18" data-item='18'>Numeral 18</li>
            <li id="item-n28" data-item='28'>Numeral 28</li>
        </ul>
        <img class="menu-numeral" src="img/SVG/Barra_menu_numerales_con_flechas/menu-numerales-politica.svg">
        <!--img id="numeral-desc2" data-numeral='2' class="numeral-desc" src="img/numeral2.png" alt="">-->
    </div>
    <div id="cont-arrow-des3" class="cont-arrow-des">
        <div id='oculto-arrow-des3' data-numeral='3' class='oculto-arrow-des'>hola</div>
        <div id="numeral-desc3" data-numeral='3' class="containerfd">
            <div class="chevron"></div>
            <div class="chevron"></div>
            <div class="chevron"></div>
        </div>
        <ul id="list-3" class="list-numeral">
            <li id="item-n8" data-item='8'>Numeral 8
                <!--<img class='gif-item' src="img/arrowdownblack.gif">-->
                <div id="containerl3" class="containerl">
                    <div id="chevron31" class="chevronl"></div>
                    <div id="chevron32" class="chevronl"></div>
                    <div id="chevron33" class="chevronl"></div>
                </div>
            </li>
            <li id="item-n12" data-item='12'>Numeral 12</li>
            <li id="item-n9" data-item='9'>Numeral 9</li>
            <li id="item-n10" data-item='10'>Numeral 10</li>
            <li id="item-n11" data-item='11'>Numeral 11</li>
        </ul>
        <!--<img id="numeral-desc3" data-numeral='3' class="numeral-desc" src="img/numeral3.png" alt="">-->
        <img class="menu-numeral" src="img/SVG/Barra_menu_numerales_con_flechas/menu-numerales-funciones.svg">
    </div>
    <div id="cont-arrow-des4" class="cont-arrow-des">
        <div id='oculto-arrow-des4' data-numeral='4' class='oculto-arrow-des'>hola</div>
        <div id="numeral-desc4" data-numeral='4' class="containerfd">
            <div class="chevron"></div>
            <div class="chevron"></div>
            <div class="chevron"></div>
        </div>
        <ul id="list-4" class="list-numeral">
            <li id="item-n20" data-item='20'>Numeral 20
                <!--<img class='gif-item' src="img/arrowdownblack.gif">-->
                <div id="containerl4" class="containerl">
                    <div id="chevron41" class="chevronl"></div>
                    <div id="chevron42" class="chevronl"></div>
                    <div id="chevron43" class="chevronl"></div>
                </div>
            </li>
            <li id="item-n21" data-item='21'>Numeral 21</li>
            <li id="item-n22" data-item='22'>Numeral 22</li>
            <li id="item-n24" data-item='24'>Numeral 24</li>
            <li id="item-n26" data-item='26'>Numeral 26</li>
        </ul>
        <img class="menu-numeral" src="img/SVG/Barra_menu_numerales_con_flechas/menu-numerales-inspeccion.svg">
        <!--<img id="numeral-desc4" data-numeral='4' class="numeral-desc" src="img/numeral4.png" alt="">-->
    </div>
    <div id="cont-arrow-des5" class="cont-arrow-des">
        <div id='oculto-arrow-des5' data-numeral='5' class='oculto-arrow-des'>hola</div>
        <div id="numeral-desc5" data-numeral='5' class="containerfd">
            <div class="chevron"></div>
            <div class="chevron"></div>
            <div class="chevron"></div>
        </div>
        <ul id='list-5' class="list-numeral">
            <li id="item-n1" data-item='1'>Numeral 1
                <!--<img class='gif-item' src="img/arrowdownblack.gif">-->
                <div id="containerl5" class="containerl">
                    <div id="chevron51" class="chevronl"></div>
                    <div id="chevron52" class="chevronl"></div>
                    <div id="chevron53" class="chevronl"></div>
                </div>
            </li>
            <li id="item-n13" data-item='13'>Numeral 13</li>
            <li id="item-n14" data-item='14'>Numeral 14</li>
            <li id="item-n15" data-item='15'>Numeral 15</li>
            <li id="item-n16" data-item='16'>Numeral 16</li>
            <li id="item-n17" data-item='17'>Numeral 17</li>
            <li id="item-n23" data-item='23'>Numeral 23</li>
            <li id="item-n25" data-item='25'>Numeral 25</li>
            <li id="item-n27" data-item='27'>Numeral 27</li>
        </ul>
        <img class="menu-numeral" src="img/SVG/Barra_menu_numerales_con_flechas/menu-numerales-gobierno.svg">
        <!--<img id="numeral-desc5" data-numeral='5' class="numeral-desc" src="img/numeral5.png" alt="">-->
    </div>
    <div class="highlight">
        <div id='creditos'>
            <!--<i id="close-creditos" class="small material-icons close-icon">highlight_off</i>-->
            <img id="close-creditos" class="close-icon" src="img/SVG/Botones/40 px cerrar.svg">
            <img id="themathic-logo_l" src="img/thematic_logo_transparente.png">
            <p class="lab" style="-webkit-margin-before: 2em;">Laboratorio de Enseñanza Virtual</p>
            <a href="http://www.thematic.com.co" target="_blank">
                <p class="link-thematic">www.thematic.com.co</p>
            </a>
            <p class="email-thematic" style='margin-top: 1%'>info@thematic.com.co</p>
            <p class="email-thematic" style='margin-bottom: 1%'>2018</p>
            <p class="email-thematic" style="font-size: 1em">EL PRESIDENTE DE LA REPÚBLICA Y SUS FUNCIONES</p>
            <p class="email-thematic" style="font-size: 1em">Fuente: Constitución Política De Colombia</p>
            <img id="cclogo" src="img/creativecomms.png">
        </div>
    </div>

    <div id="portrait">
        <img class="bandera" src="img/bandera_left.png" alt="">
        <p>Este OVA está diseñado para ser visto en pantalla horizontal, por favor gire su dispositivo</p>
        <img class="bandera" src="img/bandera.png" alt="">
    </div>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
</body>

</html>