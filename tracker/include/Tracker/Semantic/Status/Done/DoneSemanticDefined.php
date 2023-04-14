<?php
/**
 * Copyright (c) Enalean, 2021 - Present. All Rights Reserved.
 *
 * Tuleap is free software; you can redistribute it and/or modify
 * it under the terms of the GNU GeLneral Public License as published by
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

namespace Tuleap\Tracker\Semantic\Status\Done;

use Tracker_FormElement_Field_List;

/**
 * @psalm-immutable
 */
class DoneSemanticDefined
{
    /**
     * @var Tracker_FormElement_Field_List
     */
    private $field;
    /**
     * @var int[]
     */
    private $done_values;

    public function __construct(Tracker_FormElement_Field_List $field, array $done_values)
    {
        $this->field       = $field;
        $this->done_values = $done_values;
    }

    public function getField(): Tracker_FormElement_Field_List
    {
        return $this->field;
    }

    /**
     * @return int[]
     */
    public function getDoneValues(): array
    {
        return $this->done_values;
    }
}
