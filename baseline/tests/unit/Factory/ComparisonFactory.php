<?php
/**
 * Copyright (c) Enalean, 2019 - Present. All Rights Reserved.
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
 *
 */

declare(strict_types=1);

namespace Tuleap\Baseline\Factory;

use Tuleap\Baseline\Adapter\UserProxy;
use Tuleap\Baseline\Domain\Comparison;
use Tuleap\Baseline\Support\DateTimeFactory;
use Tuleap\Test\Builders\UserTestBuilder;

class ComparisonFactory
{
    public static function one(): Comparison
    {
        return self::withId(1);
    }

    public static function withId(int $id): Comparison
    {
        $base_baseline = BaselineFactory::one()->build();
        return new Comparison(
            $id,
            'Compare two baselines',
            'Created for test purpose',
            $base_baseline,
            BaselineFactory::one()
                ->artifact($base_baseline->getArtifact())
                ->build(),
            UserProxy::fromUser(UserTestBuilder::aUser()->build()),
            DateTimeFactory::one()
        );
    }
}
