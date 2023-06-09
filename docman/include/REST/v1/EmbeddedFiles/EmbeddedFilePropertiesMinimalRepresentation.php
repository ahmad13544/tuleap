<?php
/**
 * Copyright (c) Enalean, 2019-present. All Rights Reserved.
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
 * along with Tuleap. If not, see http://www.gnu.org/licenses/.
 *
 *
 */

namespace Tuleap\Docman\REST\v1\EmbeddedFiles;

/**
 * @psalm-immutable
 */
class EmbeddedFilePropertiesMinimalRepresentation implements IEmbeddedFilePropertiesRepresentation
{
    /**
     * @var string
     */
    public $file_type;
    public int $version_number;

    private function __construct(\Docman_Version $docman_version)
    {
        $this->version_number = (int) $docman_version->getNumber();
        $this->file_type      = $docman_version->getFiletype();
    }

    public static function build(\Docman_Version $docman_version): self
    {
        return new self($docman_version);
    }
}
