<?php

declare(strict_types=1);

/*
 * This file is part of the goldeagle/takoff project.
 *
 * @author  goldeagle <1308362@gmail.com>
 * @copyright  Copyright (c) 2018
 */

namespace _;

interface CacheInterface
{
    public function set($key, $value): CacheInterface;

    public function get($key);

    public function has($key): bool;

    public function clear();

    public function delete($key);

    public function getSize();
}
