<?php

declare(strict_types=1);

/*
 * This file is part of the goldeagle/takoff project.
 *
 * @author  goldeagle <1308362@gmail.com>
 * 
 */

if (file_exists($file = __DIR__ . '/compiled.php')) {
    require_once $file;
} else {
    require_once __DIR__ . '/internal/Traits/CacheDataTrait.php';
    require_once __DIR__ . '/CacheInterface.php';

    foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator(__DIR__, RecursiveDirectoryIterator::SKIP_DOTS)) as $file) {
        require_once $file->getRealPath();
    }
}
