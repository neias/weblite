<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/simpletextrotator.css">

    <link rel="stylesheet" type="text/css" href="/css/custom.css" />
    <link rel="stylesheet" type="text/css" href="/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="/css/style.css" />

    <link rel="stylesheet" href="/css/styles.css">

    <script src="/js/jquery-2.1.3.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.simple-text-rotator.min.js"></script>

    <script type="text/javascript" src="/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="/js/jquery.slitslider.js"></script>

    <noscript>
      <link rel="stylesheet" type="text/css" href="css/styleNoJS.css" />
    </noscript>
    <title>Özmer Metal</title>
  </head>
  <body>

    <div class="container">
      <?php include('_menu.php'); ?>
    </div><!-- end .container -->

    <div class="demo-2">
      <div id="slider" class="sl-slider-wrapper">
        <div class="sl-slider">
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-1"></div>
              <h2>1990 yılından bu güne güvenle.</h2>
              <blockquote>Bronz döküm ve bronz savurma döküm teknikleri</blockquote>
            </div>
          </div>

          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-2"></div>
              <h2>Türbin ön ve arka bronz aşınma çemberi</h2>
            </div>
          </div>

        </div><!-- /sl-slider -->

        <nav id="nav-dots" class="nav-dots">
          <span class="nav-dot-current"></span>
          <span></span>
        </nav>

      </div><!-- /slider-wrapper -->

      <div class="content-wrapper">
        <div class="content-header"></div><!-- end .content-header -->

        <div class="content-body">
          <div class="row">
            <div class="col-lg-8">
              <h2>Hakkımızda</h2>
              <p>1990 Yılında faaliyete geçen ÖZMER METAL Sanayi ve Ticaret Limited Şirketi, bronz döküm ve bronz savurma döküm teknikleri ile kalay bronzu, kızıl bronzu, fosfor bronzu, yüksek kurşunlu kalay bronzu, alüminyum bronzu ve özel alaşımlı (DIN-UNS ASTM-JIS-TSE)  bronzların üretimini gerçekleştirmekte olup ayrıca mamul olarak bakır, pirinç, alüminyum ve plastik ( Delrin, Polyamid, kestamid, teflon, fiber..vb. ) gibi ürünlerin de satışını gerçekleştirmektedir.</p>
            </div><!-- end .col-lg-6 -->
            <div class="col-lg-4">
              <img src="/images/hakkimizda.jpg" class="pull-right">
            </div><!-- end .col-lg-6 -->
          </div><!-- end .row -->
        </div><!-- end .content-body -->
        <div class="content-footer"></div><!-- end .content-footer -->
      </div>
    </div><!-- end .demo-2 -->

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-6">Copyright 2015 Özmer Metal</div><!-- end .col-lg-6 -->
          <div class="col-lg-6 text-right">
            <a href="http://www.koloni.com.tr" target="_blank">Design By Koloni Stüdyo</a>
          </div><!-- end .col-lg-6 -->
        </div><!-- end .row -->
      </div><!-- end .container -->
    </footer>

  </body>
  <script src="js/init.js"></script>
  <script type="text/javascript">
    $(function() {

    var Page = (function() {

    var $nav = $( '#nav-dots > span' ),
    slitslider = $( '#slider' ).slitslider( {
    onBeforeChange : function( slide, pos ) {

    $nav.removeClass( 'nav-dot-current' );
    $nav.eq( pos ).addClass( 'nav-dot-current' );

    }
    } ),

    init = function() {

    initEvents();

    },
    initEvents = function() {

    $nav.each( function( i ) {

    $( this ).on( 'click', function( event ) {

    var $dot = $( this );

    if( !slitslider.isActive() ) {

    $nav.removeClass( 'nav-dot-current' );
    $dot.addClass( 'nav-dot-current' );

    }

    slitslider.jump( i + 1 );
    return false;

    } );

    } );

    };

    return { init : init };

    })();

    Page.init();

    /**
    * Notes:
    *
    * example how to add items:
    */

    /*

    var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');

    // call the plugin's add method
    ss.add($items);

    */

    });
  </script>
</html>
