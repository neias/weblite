<?php
echo('<pre>');
print_r($_GET);
echo('</pre>');
die;
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
define('DIR_CONTROLLER' , DIR_ROOT . 'controller' . DS);

require_once(DIR_LIBRARY . 'registry.php');
require_once(DIR_LIBRARY . 'loader.php');
require_once(DIR_LIBRARY . 'front.php');
require_once(DIR_LIBRARY . 'controller.php');
require_once(DIR_LIBRARY . 'action.php');
require_once(DIR_LIBRARY . 'response.php');
require_once(DIR_LIBRARY . 'request.php');
require_once(DIR_LIBRARY . 'document.php');

$registry = new Registry();

$loader = new Loader($registry);
$registry->set('load', $loader);

// Request
$request = new Request();
$registry->set('request', $request);

// Response
$response = new Response();
$response->addHeader('Content-Type: text/html; charset=utf-8');
$response->setCompression(0);
$registry->set('response', $response);

// Document
$registry->set('document', new Document());

$controller = new Front($registry);

if (isset($request->get['route']) && $request->get['route'] != "")
    $action = new Action($request->get['route']);
else
    $action = new Action('home/index');

// Dispatch
$controller->dispatch($action, new Action('error/not_found'));

// Output
$response->output();

die();

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