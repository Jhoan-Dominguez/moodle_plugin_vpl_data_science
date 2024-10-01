<?php

function read_json_file($path, $filename) {
    global $CFG;

    $filepath = $CFG->dirroot . $path . $filename;
    $file_content = file_get_contents($filepath);
    $products = json_decode($file_content, true);

    echo var_dump($products);
}

