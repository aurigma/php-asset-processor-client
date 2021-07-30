<?php
require __DIR__ . '/vendor/autoload.php';
require_once __DIR__.'/../../vendor/autoload.php';

use Jumbojett\OpenIDConnectClient;
use GuzzleHttp\ClientInterface;
use Aurigma\AssetProcessor\HeaderSelector;
use Aurigma\AssetProcessor\Configuration;
use Aurigma\AssetProcessor\Api\ImageProcessorApi;

$oidc = new OpenIDConnectClient('BACK_OFFICE_HOST',
                                'CLIENT_ID',
                                'SECRET_ID');
$oidc->providerConfigParam(array('token_endpoint'=>'BACK_OFFICE_HOST_TOKEN_ENDPOINT')); // http://example.com/connect/token

// this assumes success (to validate check if the access_token property is there and a valid JWT) :
$accessToken = $oidc->requestClientCredentialsToken()->access_token;

$client = new GuzzleHttp\Client([
    // Base URI is used with relative requests
    'base_uri' => 'API_URL',
    // You can set any number of default request options.
    'timeout'  => 30.0,
]);

$selector = new HeaderSelector();
$config = new Configuration();
$config->setAccessToken($accessToken);
$config->setHost('API_URL');

$imagesApi = new ImageProcessorApi($client, $config, $selector);
$customFields = (object) [
    'Key1' => true,
    'Key2' => "Value_55",
    'Key3' => "true",
    'Key4' => 128,
];
$response5 = $imagesApi->imageProcessorUpdate('Image_ID', 1, 'Somest-name', null, $customFields, new SplFileObject(__DIR__.'/apples.jpg', 'r'));
print_r($response5);

echo "\n".'Done! ';

?>