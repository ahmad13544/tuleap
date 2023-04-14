<?php
/**
 * Copyright (c) Enalean, 2014 - Present. All Rights Reserved.
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

use Tuleap\Tracker\Artifact\Artifact;

class Tracker_Artifact_XMLImport_XMLImportFieldStrategyPermissionsOnArtifact implements Tracker_Artifact_XMLImport_XMLImportFieldStrategy
{
    /**
     * Extract Field data from XML input
     *
     *
     * @return mixed
     */
    public function getFieldData(
        Tracker_FormElement_Field $field,
        SimpleXMLElement $field_change,
        PFUser $submitted_by,
        Artifact $artifact,
    ) {
        $data = [
            'use_artifact_permissions' => (int) $field_change['use_perm'],
            'u_groups' => [],
        ];

        foreach ($field_change->ugroup as $ugroup_xml) {
            if (isset($ugroup_xml['ugroup_id'])) {
                $data['u_groups'][] = (int) $ugroup_xml['ugroup_id'];
            } elseif (isset($ugroup_xml['ugroup_name'])) {
                $ugroup_manager = new UGroupManager();
                $ugroup         = $ugroup_manager->getUGroupByName(
                    $field->getTracker()->getProject(),
                    (string) $ugroup_xml['ugroup_name']
                );
                if ($ugroup) {
                    $data['u_groups'][] = $ugroup->getId();
                }
            }
        }

        return $data;
    }
}