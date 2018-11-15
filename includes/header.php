<?php


include('metas.php');

?>
<!DOCTYPE html>
<html lang="<?= IDIOMA ?>">
  <head>
    <meta charset="utf-8" />

    <title><?= $metas['titulo']?></title>
    <meta name="description"            content="<?= $metas['descripcion'];?>"/>

    <!-- Twitter Card data -->
    <meta name="twitter:card"           content="summary_large_image"/>
    <meta name="twitter:site"           content="@<?= Empresa::$redes['tw'] ?>"/>
    <meta name="twitter:title"          content="<?= $metas['titulo'] ?>" />
    <meta name="twitter:description"    content="<?= substr($metas['descripcion'], 0, 200);?>" />
    <meta name="twitter:image"          content="<?= $metas['img'] ?>" />

    <!-- Open Graph data -->
    <meta property="og:title"           content="<?= $metas['titulo'] ?>" />
    <meta property="og:description"     content="<?= substr($metas['descripcion'], 0, 200);?>"/>
    <meta property="og:image"           content="<?= $metas['img']; ?>" />
    <meta property="og:site_name"       content="<?= Empresa::$nombre; ?>"/>
    <meta property="og:url"             content="<?= URL_SECCION; ?>"/>

    <meta name="robots"   content="all">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <base href="<?=BASE_URL?>">
    <link rel="canonical" href="<?= URL_SECCION ?>" />
    <?php
    if( count(json_decode(IDIOMA_ENABLED)) > 1 ){
      foreach(json_decode(IDIOMA_ENABLED) AS $lang){
          echo '   <link rel="alternate" hreflang="'.$lang.'" href="'.url(SECCION, $dato_url, $lang).'" />'."\r\n";
      }
    } ?>

    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="images/favicons/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/favicons/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/favicons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/favicons/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="images/favicons/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="images/favicons/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="images/favicons/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="images/favicons/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="images/favicons/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="images/favicons/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="images/favicons/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="images/favicons/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="images/favicons/favicon-128.png" sizes="128x128" />
    <meta name="Hanomag" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />


    <?php
     // Uno y minifico todos los CSS comunes a todas las páginas
    $main_css = $minified->merge( 'css/main.min.css', 'css', array(
            'css/bootstrap.min.css',
            'css/animate.min.css',
            'css/styles-theme.css'
        ));
    echo ' <link rel="stylesheet" href="'.$main_css.'?v='.filemtime(BASE_PATH.$main_css).'" />'."\r\n";
    ?>

    <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

     <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</head>

<body role="document" class="<?='s_'.SECCION?>">
<!-- GOOGLE ANALYTICS -->
<!-- GOOGLE ANALYTICS -->
  <header class="cabecera" id="home">
    <nav class="navbar anim-suave">
          <div class="navbar-header">
            <button class="hamburger hamburger--efecto visible-xs" type="button"
                    aria-label="Menu" aria-controls="cabecera-navbar-collapse" data-toggle="collapse" data-target=".js-navbar-cabecera">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
            <a class="cabecera__logo anim-suave" href="<?=url('home')?>">
              <img class="img-responsive anim-suave" src="images/logo_nav-principal-cabecera.png" alt="<?=Empresa::$nombre?>" itemprop="logo">
            </a>
          </div>
          <div class="col-xs-12">
            <div class="row">
              <div class="navegacion navbar-collapse collapse js-navbar-cabecera animated" id="cabecera-navbar-collapse">
                <nav class="nav-principal nav-left anim-suave">
                  <ul>
                    <li><a href="<?=url('home')?>"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li><a href="<?=url('empresa')?>">Empresa</a></li>
                    <li class="js-desplegable" aria-haspopup="true">>
                      <a href="javascript:;">Productos</a>
                      <div class="js-desplegar nav-principal__desplegable" style="display: none;" >
                         <ul class="dropdown-menu">
                          <li><a href="<?=url('productos')?>">Máquinas Agrícolas</a></li>
                          <li><a href="<?=url('productos')?>">Máquinas Viales</a></li>
                          <li><a href="<?=url('productos')?>">Cargadoras</a></li>
                          <li><a href="<?=url('accesorios')?>">Accesorios</a></li>
                         </ul>
                         <div class="clearfix"></div>
                      </div> 
                        
                    </li>
                    <li><a href="<?=url('usados')?>">Usados</a></li>
                  </ul>

                </nav>
                <nav class="nav-principal nav-right anim-suave">
                  <ul>
                    <li><a href="<?=url('postventa')?>">Postventa</a></li>
                    <li><a href="<?=url('repuestos')?>">Repuestos</a></li>
                    <li><a href="<?=url('novedades')?>">Novedades</a></li>
                    <li><a href="<?=url('contacto')?>">Contacto</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
    </nav>
    <!-- HEADERS -->
    <?php if(SECCION != 'home'){
      switch (SECCION) {
        default:
          $header = SECCION;
          break;
      }
     ?>
      <div id="headerimgs" style="background-image: url(images/cabeceras/<?=$header.'-1920.jpg?v='.time()?>);">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="headerimg__texto">
                <?php echo $metas['slider']?>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
    <!-- HEADERS -->

    </header>

    <!-- Sección principal -->
    <main id="main" role="main">
