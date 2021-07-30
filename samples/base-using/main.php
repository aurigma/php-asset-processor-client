<?php
require_once __DIR__.'/../../vendor/autoload.php';

use Jumbojett\OpenIDConnectClient;
use GuzzleHttp\ClientInterface;
use Aurigma\AssetProcessor\HeaderSelector;
use Aurigma\AssetProcessor\Configuration;
use Aurigma\AssetProcessor\Api\ImageProcessorApi;
use Aurigma\AssetProcessor\Api\PrivateDesignProcessorApi;
use Aurigma\AssetProcessor\Api\BuildInfoApi;
use Aurigma\AssetProcessor\Model\ImagePreviewFitMode;

$oidc = new OpenIDConnectClient('BACK_OFFICE_URL', 'CLIENT_ID', 'CLIENT_SECRET');
$oidc->providerConfigParam(array('token_endpoint'=> 'BACK_OFFICE_URL'.'/connect/token'));

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
$fitMode = (new ImagePreviewFitMode())::FILL;
$response1 = $imagesApi->imageProcessorPreparePreviewUrl('Image_ID', 'test-request', 'some-name', 600, 600, null, $fitMode, null, null, null, 1);
print_r($response1);

echo "\n".'Done! ';
?>