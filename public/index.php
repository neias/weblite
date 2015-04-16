<?php
// SEPARATOR
define('DS', DIRECTORY_SEPARATOR);

if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) {
    $host = 'https://';
} else {
    $host = 'http://';
}

// HTTP
define('HTTP_SERVER', $host . $_SERVER['SERVER_NAME'] . DS);

// DIR
define('DIR_ROOT', realpath(dirname(dirname(__FILE__))) . DS );
define('DIR_TEMPLATE' , DIR_ROOT . 'template' . DS);
define('DIR_LIBRARY' , DIR_ROOT . 'library' . DS);

require_once(DIR_LIBRARY . 'registry.php');
require_once(DIR_LIBRARY . 'loader.php');
require_once(DIR_LIBRARY . 'front.php');
require_once(DIR_LIBRARY . 'action.php');
require_once(DIR_LIBRARY . 'response.php');
require_once(DIR_LIBRARY . 'request.php');

$registry = new Registry();

$loader = new Loader($registry);
$registry->set('load', $loader);

//$request = new Request();
// $registry->set('request', $request);

$controller = new Front($registry);

$action = new Action('home/index');

echo('<pre>');
print_r($registry);
echo('</pre>');
die;

// $response = new Response();

$pages['index'] = 'Ana Sayfa';
$pages['hakkimizda'] = 'Hakkımızda';
$pages['hizmetlerimiz'] =  'Hizmetlerimiz';
$pages['sirkuler'] = 'Sirküler';
$pages['calisma-prensipleri'] = 'Çalışma Prensipleri';
$pages['linkler'] = 'Linkler';
$pages['iletisim'] = 'İletişim';
$pages['Arşiv'] = array('odul_alanlar' => 'Ödül Alanlar', 'afisler' => 'Afişler', 'arsiv_basin' => 'Basın', 'galeri' => 'Galeri');


if(isset($_GET['page'])){
    $page = 'includes/' . $_GET['page'] . ".php";
    if (is_file($page)){
        $page =  ($page);
    } else {
        $page = ("includes/404.php");
    }
} elseif(isset($_GET['s'])){
    $page = 'includes/static/' . $_GET['s'] . ".php";
    if (is_file($page)){
        $page = $page;
    } else {
        $page = ("includes/404.php");
    }
} elseif(isset($_GET['p'])){
    $page = 'includes/publication/' . $_GET['p'] . ".php";
    if (is_file($page)){
        $page = $page ;
    } else {
        $page = "includes/404.php";
    }
} else {
    $page = DIR_TEMPLATE . "index.php";
}

// template
ob_start();
require( DIR_TEMPLATE . 'header.php');
require( DIR_TEMPLATE . 'menu.php');
require( DIR_TEMPLATE . 'slider.php');
require($page);
require( DIR_TEMPLATE . 'footer.php');
$output = ob_get_contents();
ob_end_clean();

echo $output;