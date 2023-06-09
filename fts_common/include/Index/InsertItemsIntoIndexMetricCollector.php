<?php
/**
 * Copyright (c) Enalean, 2022-Present. All Rights Reserved.
 *
 * This file is a part of Tuleap.
 *
 * Tuleap is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * Tuleap is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Tuleap. If not, see <http://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace Tuleap\FullTextSearchCommon\Index;

use Tuleap\Instrument\Prometheus\Prometheus;
use Tuleap\Search\ItemToIndex;

final class InsertItemsIntoIndexMetricCollector implements InsertItemsIntoIndex
{
    public function __construct(
        private InsertItemsIntoIndex $index_inserter,
        private Prometheus $prometheus,
    ) {
    }

    public function indexItems(ItemToIndex ...$items): void
    {
        $nb_items = count($items);
        if ($nb_items > 0) {
            $this->prometheus->incrementBy('fts_index_requests_total', 'Total number of full-text index requests', $nb_items);
        }
        $this->index_inserter->indexItems(...$items);
    }
}
