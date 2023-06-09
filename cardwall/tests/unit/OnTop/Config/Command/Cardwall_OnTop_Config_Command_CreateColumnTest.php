<?php
/**
 * Copyright (c) Enalean, 2012-Present. All Rights Reserved.
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
final class Cardwall_OnTop_Config_Command_CreateColumnTest extends \Tuleap\Test\PHPUnit\TestCase
{
    use \Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
    use \Tuleap\GlobalResponseMock;
    use \Tuleap\GlobalLanguageMock;

    private int $tracker_id;
    /**
     * @var Cardwall_OnTop_ColumnDao&\Mockery\MockInterface
     */
    private $dao;
    private Cardwall_OnTop_Config_Command_CreateColumn $command;

    protected function setUp(): void
    {
        parent::setUp();

        $this->tracker_id = 666;
        $tracker          = \Mockery::spy(\Tracker::class);
        $tracker->shouldReceive('getId')->andReturns($this->tracker_id);

        $this->dao     = \Mockery::spy(\Cardwall_OnTop_ColumnDao::class);
        $this->command = new Cardwall_OnTop_Config_Command_CreateColumn($tracker, $this->dao);
    }

    public function testItCreatesANewColumn(): void
    {
        $request = new HTTPRequest();
        $request->set('new_column', 'On Going');
        $this->dao->shouldReceive('create')->with($this->tracker_id, 'On Going')->once();
        $this->command->execute($request);
    }
}
