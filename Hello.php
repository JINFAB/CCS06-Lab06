<?php
function greet() {
    $message = "Hello ";
    $message .= "World! ";
    $message .= "The Date is ";
    $message .= date("m j Y");
    return $message;
}

echo greet();
