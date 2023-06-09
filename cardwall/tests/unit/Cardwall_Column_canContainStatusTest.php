<?php
/**
 * Copyright (c) Enalean, 2012 - Present. All Rights Reserved.
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

// phpcs:ignore PSR1.Classes.ClassDeclaration.MissingNamespace,Squiz.Classes.ValidClassName.NotCamelCaps
class Cardwall_Column_canContainStatusTest extends \Tuleap\Test\PHPUnit\TestCase
{
    use \Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;

    private $column;

    protected function setUp(): void
    {
        parent::setUp();

        $id           = 100;
        $label        = $header_color = 'whatever';
        $this->column = new Cardwall_Column($id, $label, $header_color);
    }

    public function testItReturnsTrueOnNoneColumnIfStatusIsNone(): void
    {
        $this->assertTrue($this->column->canContainStatus('None'));
    }

    public function testItReturnsTrueOnNoneColumnIfStatusIsNull(): void
    {
        $this->assertTrue($this->column->canContainStatus(null));
    }
}
