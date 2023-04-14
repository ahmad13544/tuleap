<?php
/**
 * Copyright (c) Enalean 2022 -  Present. All Rights Reserved.
 *
 *  This file is a part of Tuleap.
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

namespace Tuleap\Docman\Search;

use Docman_ReportColumnFactory;
use Tuleap\Docman\REST\v1\Search\ColumnCannotBeSortedException;
use Tuleap\Docman\REST\v1\Search\SearchColumnSortChecker;
use Tuleap\Docman\REST\v1\Search\SearchSortRepresentation;

final class ColumnReportAugmenter
{
    public function __construct(private Docman_ReportColumnFactory $column_factory, private SearchSortPropertyMapper $property_mapper)
    {
    }

    public function addColumnsFromRequest(\Codendi_Request $request, array $report_columns, \Docman_Report $report): void
    {
        $keep_ref_on_update_date = null;
        $is_there_a_sort         = false;

        foreach ($report_columns as $column_label) {
            $column = $this->column_factory->getColumnFromLabel($column_label);
            // set sort if provided by request parameters
            $column->initFromRequest($request);

            if ($column_label === 'update_date') {
                $keep_ref_on_update_date = $column;
            }
            if ($column->getSort() !== null) {
                $is_there_a_sort = true;
            }

            $report->addColumn($column);
        }

        $this->setSortOnLastUpdateDateWhenNoSortIsDefined($is_there_a_sort, $keep_ref_on_update_date);
    }

    /**
     * @param string[] $report_columns
     * @throws ColumnCannotBeSortedException
     * @throws InvalidSortTypeException
     */
    public function addColumnsFromArray(array $report_columns, \Docman_Report $report, array $sort_list): void
    {
        $keep_ref_on_update_date = null;
        $is_there_a_sort         = false;

        foreach ($report_columns as $column_label) {
            $column                 = $this->column_factory->getColumnFromLabel($column_label);
            $column_search_property = $this->getSearchSortByColumnLabel($column_label, $sort_list);

            if ($column_search_property !== null) {
                SearchColumnSortChecker::checkColumnCanBeSorted($column_search_property, $column);
                $column->setSort($this->property_mapper->convertToLegacySort($column_search_property->order));
            }

            if ($column_label === 'update_date') {
                $keep_ref_on_update_date = $column;
            }
            if ($column->getSort() !== null) {
                $is_there_a_sort = true;
            }

            $report->addColumn($column);
        }
        $this->setSortOnLastUpdateDateWhenNoSortIsDefined($is_there_a_sort, $keep_ref_on_update_date);
    }

    private function setSortOnLastUpdateDateWhenNoSortIsDefined(
        bool $is_there_a_sort,
        ?\Docman_ReportColumn $keep_ref_on_update_date,
    ): void {
        if (! $is_there_a_sort && $keep_ref_on_update_date !== null) {
            $keep_ref_on_update_date->setSort(PLUGIN_DOCMAN_SORT_DESC);
        }
    }

    /**
     * @param SearchSortRepresentation[] $sort_list
     */
    private function getSearchSortByColumnLabel(string $report_column_name, array $sort_list): ?SearchSortRepresentation
    {
        foreach ($sort_list as $sort) {
            if ($sort->name === $report_column_name) {
                return $sort;
            }
        }
        return null;
    }
}
