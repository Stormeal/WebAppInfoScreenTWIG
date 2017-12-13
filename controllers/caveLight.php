<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 13-12-2017
 * Time: 09:45
 */
require '../vendor/autoload.php';
use GuzzleHttp\Client;
$client = new Client();
$response = $client->request(
    'POST',
    'http://localhost:20252/Service1.svc/lys/1',
    [
        'json' => [

        ],
    ]
);
require_once '../vendor/autoload.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('../views/Twig');
$twig = new Twig_Environment($loader, array(
    // 'cache' => '/path/to/compilation_cache',
    'auto_reload' => true
));
$template = $twig->loadTemplate('mancave.html.twig');
$parametersToTwig = array("vegetables" => $response);
echo $template->render($parametersToTwig);
$host = $_SERVER['HTTP_HOST'];
header("Location: http://{$host}/WebAppInfoScreenTwig/controllers/caveLight.php");
return;