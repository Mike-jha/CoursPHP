<?php
ini_set('display_errors', 1);

define('BASEPATH', "CoursPHP/MVCExemple");

require_once __DIR__ . "/vendor/autoload.php";
spl_autoload_register(function ($className) {
    $className = str_replace('\\', "/", $className);
    //var_dump($className);
    $className = 'src/' . $className . '.php';
    if (file_exists($className)) {
        require_once($className);
    }
});
// Init twig
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/src/View');
$twig = new \Twig\Environment($loader, [
    'cache' => __DIR__ . '/src/cache',
    'debug' => true
]);
$twig->addGlobal('path', BASEPATH);

use Controller\FrontController;

$frontController = new FrontController();
$frontController->setBasePath(BASEPATH);

$templateInfos =  $frontController->run();

$template = $twig->load($templateInfos['template']);
echo $template->render($templateInfos['data']);
