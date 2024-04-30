require_once '../vendor/autoload.php';
require_once '../app/Router.php'; 
if (isset($_GET['url'])) {
    
    $router = new Router($_GET['url']);
} else {
    echo "Parameter 'url' tidak ditemukan!";
}
