<?php
/**
 * Copyright (c) Enalean 2016 - Present. All rights reserved
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

class b201601081758_create_plugin_svn_repositories_table extends \Tuleap\ForgeUpgrade\Bucket
{
    public function description()
    {
        return 'Create table plugin_svn_repositories for SVN plugin';
    }

    public function preUp()
    {
        $this->db = $this->getApi('ForgeUpgrade_Bucket_Db');
    }

    public function up()
    {
        $sql = "CREATE TABLE plugin_svn_repositories (
                    id  int(11) unsigned NOT NULL auto_increment,
                    name  varchar(255) NOT NULL,
                    project_id int(11) NOT NULL,
                    PRIMARY KEY  (`id`),
                    INDEX project_idx (project_id)
            )";

        $res = $this->db->dbh->exec($sql);
        if ($res === false) {
            throw new \Tuleap\ForgeUpgrade\Bucket\BucketUpgradeNotCompleteException('An error occurred while creating the plugin_svn_repositories table for SVN plugin.');
        }
    }
}
