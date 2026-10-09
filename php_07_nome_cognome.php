<?php

$password = readline("password: ");

function read_length(string $pwd)
{
    if (strlen($pwd) >= 8) {
        return true;
    } else {
        echo "Try again" . "\n" . "Must have 8 or more characters" . "\n";
        readline("Tray again: ");
        return false;
    }
}

function read_number(string $pwd)
{
    for ($i = 0; $i < strlen($pwd); $i++) {
        if (is_numeric($pwd[$i])) {
            return true;
        }
    }
    echo "Try again" . "\n" . "Must have at least one number" . "\n";
    readline("Tray again: ");
    return false;
}

function read_upper(string $pwd)
{
    for ($i = 0; $i < strlen($pwd); $i++) {
        if (ctype_upper($pwd[$i])) {
            return true;
        }
    }
    echo "Try again" . "\n" . "Must have at least one upper letter" . "\n";
    readline("Tray again: ");
    return false;
}

function read_special(string $pwd)
{
    for ($i = 0; $i < strlen($pwd); $i++) {
        if (ctype_punct($pwd[$i])) {
            return true;
        }
    }
    echo "Try again" . "\n" . "Must have at least one special charactere" . "\n";
    readline("Tray again: ");
    return false;
}

read_length($password);
read_number($password);
read_upper($password);
read_special($password);
