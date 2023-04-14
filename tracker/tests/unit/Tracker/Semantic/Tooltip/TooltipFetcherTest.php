<?php
/**
 * Copyright (c) Enalean, 2023 - Present. All Rights Reserved.
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

namespace Tuleap\Tracker\Semantic\Tooltip;

use Tuleap\Test\Builders\UserTestBuilder;
use Tuleap\Test\PHPUnit\TestCase;
use Tuleap\Tracker\Artifact\Artifact;
use Tuleap\Tracker\Test\Builders\TrackerTestBuilder;
use Tuleap\Tracker\Test\Stub\Semantic\Tooltip\TooltipFieldsStub;
use Tuleap\Tracker\TrackerColor;

final class TooltipFetcherTest extends TestCase
{
    public function testNothingWhenArtifactIsNotReadable(): void
    {
        $artifact = $this->createMock(Artifact::class);
        $artifact->method('userCanView')->willReturn(false);

        $tooltip = TooltipFieldsStub::withFields(
            $this->createStub(\Tracker_FormElement_Field::class),
        );

        $user = UserTestBuilder::buildWithDefaults();

        self::assertTrue(
            (new TooltipFetcher())
                ->fetchArtifactTooltip($artifact, $tooltip, $user)
                ->isNothing()
        );
    }

    public function testNothingWhenThereIsNoFields(): void
    {
        $artifact = $this->createMock(Artifact::class);
        $artifact->method('userCanView')->willReturn(true);

        $tooltip = TooltipFieldsStub::withoutFields();

        $user = UserTestBuilder::buildWithDefaults();

        self::assertTrue(
            (new TooltipFetcher())
                ->fetchArtifactTooltip($artifact, $tooltip, $user)
                ->isNothing()
        );
    }

    public function testReturnTheTooltipValueOfEachFields(): void
    {
        $artifact = $this->createMock(Artifact::class);
        $artifact->method('userCanView')->willReturn(true);
        $artifact->method('getTitle')->willReturn('The title');
        $artifact->method('getTracker')->willReturn(
            TrackerTestBuilder::aTracker()
                ->withColor(TrackerColor::fromName('fiesta-red'))
                ->build()
        );

        $field_1 = $this->createMock(\Tracker_FormElement_Field::class);
        $field_1->method('userCanRead')->willReturn(true);
        $field_1->method('fetchTooltip')->willReturn('avada');

        $field_2 = $this->createMock(\Tracker_FormElement_Field::class);
        $field_2->method('userCanRead')->willReturn(true);
        $field_2->method('fetchTooltip')->willReturn('kedavra');

        $tooltip = TooltipFieldsStub::withFields(
            $field_1,
            $field_2,
        );

        $user = UserTestBuilder::buildWithDefaults();

        $tooltip = (new TooltipFetcher())->fetchArtifactTooltip($artifact, $tooltip, $user);
        self::assertEquals('The title', $tooltip->unwrapOr('')->title_as_html);
        self::assertStringContainsString('avada', $tooltip->unwrapOr('')->body_as_html);
        self::assertStringContainsString('kedavra', $tooltip->unwrapOr('')->body_as_html);
        self::assertEquals('fiesta-red', $tooltip->unwrapOr('')->accent_color);
    }

    public function testExcludeUnreadableFields(): void
    {
        $artifact = $this->createMock(Artifact::class);
        $artifact->method('userCanView')->willReturn(true);
        $artifact->method('getTitle')->willReturn(null);
        $artifact->method('getTracker')->willReturn(TrackerTestBuilder::aTracker()->build());

        $field_1 = $this->createMock(\Tracker_FormElement_Field::class);
        $field_1->method('userCanRead')->willReturn(true);
        $field_1->method('fetchTooltip')->willReturn('avada');

        $field_2 = $this->createMock(\Tracker_FormElement_Field::class);
        $field_2->method('userCanRead')->willReturn(false);
        $field_2->method('fetchTooltip')->willReturn('kedavra');

        $tooltip = TooltipFieldsStub::withFields(
            $field_1,
            $field_2,
        );

        $user = UserTestBuilder::buildWithDefaults();

        $tooltip = (new TooltipFetcher())->fetchArtifactTooltip($artifact, $tooltip, $user);
        self::assertEquals('', $tooltip->unwrapOr('')->title_as_html);
        self::assertStringContainsString('avada', $tooltip->unwrapOr('')->body_as_html);
        self::assertStringNotContainsString('kedavra', $tooltip->unwrapOr('')->body_as_html);
    }
}
