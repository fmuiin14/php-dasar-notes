<?php 

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "   s";
$loginRequest->password = "     as";

try {
    validateLoginRequest($loginRequest);
    echo "Valid" . PHP_EOL;
} catch(ValidationException | Exception $exception) {
    echo "Validation Error : {$exception->getMessage()}" . PHP_EOL;
    var_dump($exception->getTrace());
    echo $exception->getTraceAsString() . PHP_EOL;
} finally {
    echo "ERROR ATAU ENGGA TETEP EKSEKUSI" . PHP_EOL;
}

echo "Valid" . PHP_EOL;