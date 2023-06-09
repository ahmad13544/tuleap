<?php
/**
 * Copyright (c) Enalean, 2018 - Present. All Rights Reserved.
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
 * along with Tuleap; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 */

namespace Tuleap\Git\REST\v1;

use GitRepository;

/**
 * @psalm-immutable
 */
class GitBranchRepresentation
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var GitCommitRepresentation
     */
    public $commit;
    /**
     * @var string
     */
    public $html_url;

    private function __construct(string $name, string $html_url, GitCommitRepresentation $commit)
    {
        $this->name     = $name;
        $this->html_url = $html_url;
        $this->commit   = $commit;
    }

    public static function build(string $name, GitRepository $repository, GitCommitRepresentation $commit): self
    {
        return new self(
            $name,
            $repository->getRelativeHTTPUrl() . '?' . http_build_query(
                [
                    'a' => 'tree',
                    'hb' => $name,
                ]
            ),
            $commit,
        );
    }
}
