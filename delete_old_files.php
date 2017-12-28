<?php

// DELETE ALL FILES FROM CFG DIRECTORY

$files = glob('./cfg/*');

foreach ($files as $file) {
    if (file_exists($file)) {
        unlink($file);
    } else {
        // File not found.
    }
}

$files_up = glob('./uploads/*');

foreach ($files_up as $file_up) {
    if (file_exists($file_up)) {
        unlink($file_up);
    } else {
        // File not found.
    }
}


?>