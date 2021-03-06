<?php

declare(strict_types=1);

/*
 * This file is part of the goldeagle/takoff project.
 *
 * @author  goldeagle <1308362@gmail.com>
 * @copyright  Copyright (c) 2018
 */

namespace _\internal\Traits;

trait CacheDataTrait
{
    private $__data__ = [];

    private $size;

    public function getSize(): int
    {
        return $this->size;
    }
}
