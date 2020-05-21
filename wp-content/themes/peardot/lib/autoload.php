<?php

include_once 'functions.php';

function include_php_files($folder)
{
    $folder = __DIR__ . DIRECTORY_SEPARATOR . $folder;

    foreach (glob("{$folder}/*.php") as $filename) {
        include_once $filename;
    }
}


include_php_files('custom-post-types');
include_php_files('custom-taxomonies');
include_php_files('functions');
include_php_files('classes');

