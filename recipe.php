<?php

if ($argc <= 0) {
    echo "Please set argument.\n\n";
    echo "Usage: \n";
    echo "php recipe.php FILENAME\n";
    exit -1;
}

if (file_exists($argv[1])) {
    echo file_get_contents($argv[1]);
} else {
    echo "file could not be found.\n";
}
