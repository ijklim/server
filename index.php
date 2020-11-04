<?php
$siteName = 'Apache HTTP Web Server';
$siteVersion = '1.0.0';

// HTTP response codes: https://developer.mozilla.org/en-US/docs/Web/HTTP/Status
http_response_code(200);

// header('Content-Type: application/json');
header('Content-Type: text/html;');

// What domain can access this server, must exactly match Origin sent by browser
// header('Access-Control-Allow-Origin: http://ivan-lim.com');
header('Access-Control-Allow-Origin: *');

// What headers are allowed to be appended to the request
// header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Headers: authorization, version, api-key');

// What headers are accessible by response.headers
// header('Access-Control-Expose-Headers: *');
header('Access-Control-Expose-Headers: host, x-powered-by, version');

// What HTTP-methods are allowed, e.g. GET, POST, OPTIONS, DELETE, PUT, PATCH
// Note: GET and POST seem to be supported regardless
header('Access-Control-Allow-Methods: OPTIONS, PUT');

// Specify how many seconds the preflight approval will last
// Note: 60 = 1 minute, 3600 = 1 hour, 86400 = 1 day
header('Access-Control-Max-Age: 86400');

// Whether to allow cookies or HTTP Authentication
// Note: Cannot be used in conjunction with 'Access-Control-Allow-Origin: *'
header('Access-Control-Allow-Credentials: true');

// Additional response headers
header("Version: $siteVersion");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "$siteName v.$siteVersion" ?></title>
</head>
<body>
    <h1><?= "$siteName v.$siteVersion" ?></h1>

    <h3><?= (new DateTime())->format("M j, Y"); ?></h3>
</body>
</html>
