<?php
/**
 * Build script for Netlify deployment
 * Generates static HTML files from PHP templates
 */

// Pages to build (source PHP file => output HTML file)
$pages = [
    'index.php' => 'index.html',
    'about.php' => 'about.html',
    'contact.php' => 'contact.html',
    'radiotherapy.php' => 'radiotherapy.html',
    'cancer-types.php' => 'cancer-types.html',
    'blogs.php' => 'blogs.html',
    'terms-of-service.php' => 'terms-of-service.html',
    'privacy-policy.php' => 'privacy-policy.html',
    'thankyou.php' => 'thankyou.html',
];

// Ensure dist folder exists
if (!is_dir('dist')) {
    mkdir('dist', 0755, true);
}

// Build each page
foreach ($pages as $srcFile => $outFile) {
    if (!file_exists($srcFile)) {
        echo "Warning: $srcFile not found, skipping.\n";
        continue;
    }

    $destPath = 'dist/' . $outFile;

    // Clean any previous build
    if (file_exists($destPath)) {
        unlink($destPath);
    }

    // Capture output from PHP file
    ob_start();
    include $srcFile;
    $html = ob_get_clean();

    // Convert PHP links to HTML for static site
    $html = str_replace('.php"', '.html"', $html);
    $html = str_replace(".php'", ".html'", $html);
    $html = str_replace('.php#', '.html#', $html);
    $html = str_replace('.php/', '.html/', $html);

    // Save to dist folder
    file_put_contents($destPath, $html);
    echo "Built: $outFile\n";
}

// Copy assets to dist
function copyDir($src, $dst) {
    if (!is_dir($src)) return;
    if (!is_dir($dst)) mkdir($dst, 0755, true);
    $files = scandir($src);
    foreach ($files as $file) {
        if ($file === '.' || $file === '..') continue;
        $srcPath = "$src/$file";
        $dstPath = "$dst/$file";
        if (is_dir($srcPath)) {
            copyDir($srcPath, $dstPath);
        } else {
            copy($srcPath, $dstPath);
        }
    }
}

// Copy assets to root and dist
copyDir('assets', 'dist/assets');

// Copy specific root files (CSS, JS, etc.) to dist
$rootFiles = ['style.css', 'script.js', 'hero-bg.js', 'hero.html', 'favicon.ico'];
foreach ($rootFiles as $rFile) {
    if (file_exists($rFile)) {
        copy($rFile, 'dist/' . $rFile);
        echo "Copied: $rFile to dist/\n";
    }
}

// Copy SEO files (sitemap.xml, robots.txt) to dist if they exist in root
$seoFiles = ['sitemap.xml', 'robots.txt'];
foreach ($seoFiles as $seoFile) {
    if (file_exists($seoFile)) {
        copy($seoFile, 'dist/' . $seoFile);
        echo "Copied: $seoFile to dist/\n";
    }
}

echo "\nBuild complete: All pages generated successfully!\n";
