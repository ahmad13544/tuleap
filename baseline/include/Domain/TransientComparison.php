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

namespace Tuleap\Baseline\Domain;

class TransientComparison
{
    /** @var string|null */
    private $name;

    /** @var string|null */
    private $comment;

    /** @var Baseline */
    private $base_baseline;

    /** @var Baseline */
    private $compared_to_baseline;

    public function __construct(
        ?string $name,
        ?string $comment,
        Baseline $base_baseline,
        Baseline $compared_to_baseline,
    ) {
        $this->name                 = $name;
        $this->comment              = $comment;
        $this->base_baseline        = $base_baseline;
        $this->compared_to_baseline = $compared_to_baseline;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function getBaseBaseline(): Baseline
    {
        return $this->base_baseline;
    }

    public function getComparedToBaseline(): Baseline
    {
        return $this->compared_to_baseline;
    }

    public function getProject(): ProjectIdentifier
    {
        return $this->getBaseBaseline()->getProject();
    }
}
