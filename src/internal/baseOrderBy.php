<?php

declare(strict_types=1);

/*
 * This file is part of the goldeagle/takoff project.
 *
 * @author  goldeagle <1308362@gmail.com>
 * @copyright  Copyright (c) 2018
 */

namespace _\internal;

use function _\map;
use function _\sortBy;

function baseOrderBy(iterable $collection, array $iteratees, array $orders): array
{
    $index = -1;
    $iteratees = arrayMap($iteratees, baseUnary('\_\internal\baseIteratee'));

    $result = map($collection, function ($value) use ($iteratees, &$index) {
        $criteria = arrayMap($iteratees, function ($iteratee) use ($value) {
            return $iteratee($value);
        });

        return ['criteria' => $criteria, 'index' => ++$index, 'value' => $value];
    });

    return map(sortBy($result, function ($object, $other) use ($orders) {
        return compareMultiple($object, $other, $orders);
    }), 'value');
}
