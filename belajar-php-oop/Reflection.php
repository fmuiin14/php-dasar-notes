<?php 

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

$request = new LoginRequest();
$request->username = "Kew";
$request->password = "passwd";

// ValidationUtil::validate($request);

ValidationUtil::validateReflection($request);

class RegisterUserRequest {
    public ?string $name;
    public ?string $address;
    public ?string $email;
}

$register = new RegisterUserRequest();
$register->name = "Ihie";
$register->address = "Ad";
$register->email = "mail@gm.com";
ValidationUtil::validateReflection($register);