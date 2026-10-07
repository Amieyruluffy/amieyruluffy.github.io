<?php

$baseUrl = 'http://127.0.0.1:8000';
$dist = __DIR__.DIRECTORY_SEPARATOR.'dist';

echo "Starting static export...\n";

// Remove old dist folder
if (is_dir($dist)) {
    deleteDirectory($dist);
}

// Create dist
mkdir($dist, 0777, true);

// Get rendered portfolio HTML from Laravel
echo "Fetching portfolio...\n";

$html = @file_get_contents($baseUrl.'/');

if ($html === false) {
    echo "ERROR: Cannot connect to Laravel at {$baseUrl}\n";
    echo "Make sure 'php artisan serve' is still running.\n";
    exit(1);
}

// Fix absolute Laravel URLs
$html = str_replace(
    [
        'http://127.0.0.1:8000',
        'http://localhost:8000',
        'http://amieyrul.portfolio.test',
    ],
    '',
    $html
);

// Save index.html
file_put_contents($dist.DIRECTORY_SEPARATOR.'index.html', $html);

echo "✓ index.html created\n";

// Copy public assets
copyDirectory(
    __DIR__.DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR.'build',
    $dist.DIRECTORY_SEPARATOR.'build'
);

echo "✓ build copied\n";

copyDirectory(
    __DIR__.DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR.'images',
    $dist.DIRECTORY_SEPARATOR.'images'
);

echo "✓ images copied\n";

// Copy favicon files if they exist
$publicFiles = [
    'favicon.svg',
    'favicon.ico',
    'robots.txt',
];

foreach ($publicFiles as $file) {
    $source = __DIR__.DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR.$file;
    $target = $dist.DIRECTORY_SEPARATOR.$file;

    if (file_exists($source)) {
        copy($source, $target);
        echo "✓ {$file} copied\n";
    }
}

echo "\n====================================\n";
echo "Static export completed successfully!\n";
echo "====================================\n";
echo "Output: {$dist}\n";
echo "\nNext: inspect the 'dist' folder before deploying.\n";

function copyDirectory($source, $destination)
{
    if (! is_dir($source)) {
        echo "WARNING: Source folder not found: {$source}\n";

        return;
    }

    if (! is_dir($destination)) {
        mkdir($destination, 0777, true);
    }

    $items = scandir($source);

    foreach ($items as $item) {
        if ($item === '.' || $item === '..') {
            continue;
        }

        $sourcePath = $source.DIRECTORY_SEPARATOR.$item;
        $destinationPath = $destination.DIRECTORY_SEPARATOR.$item;

        if (is_dir($sourcePath)) {
            copyDirectory($sourcePath, $destinationPath);
        } else {
            copy($sourcePath, $destinationPath);
        }
    }
}

function deleteDirectory($directory)
{
    if (! is_dir($directory)) {
        return;
    }

    $items = scandir($directory);

    foreach ($items as $item) {
        if ($item === '.' || $item === '..') {
            continue;
        }

        $path = $directory.DIRECTORY_SEPARATOR.$item;

        if (is_dir($path)) {
            deleteDirectory($path);
        } else {
            unlink($path);
        }
    }

    rmdir($directory);
}
