<?php
/**
 * Copyright (c) Enalean, 2020 - Present. All Rights Reserved.
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

namespace Tuleap\ProgramManagement\Adapter\Program\Plan;

use Project_AccessException;
use Tuleap\ProgramManagement\Adapter\Program\ProgramDaoProject;
use Tuleap\ProgramManagement\Adapter\Workspace\ProjectManagerAdapter;
use Tuleap\ProgramManagement\Adapter\Workspace\RetrieveFullProject;
use Tuleap\ProgramManagement\Adapter\Workspace\RetrieveUser;
use Tuleap\ProgramManagement\Adapter\Workspace\UserManagerAdapter;
use Tuleap\ProgramManagement\Adapter\Workspace\UserProxy;
use Tuleap\ProgramManagement\Domain\Permissions\PermissionBypass;
use Tuleap\ProgramManagement\Domain\Program\Plan\BuildProgram;
use Tuleap\ProgramManagement\Domain\Program\Plan\ProjectIsAProgramOrUsedInPlanChecker;
use Tuleap\ProgramManagement\Domain\Program\Plan\ProgramAccessException;
use Tuleap\ProgramManagement\Domain\Program\Plan\ProjectIsNotAProgramException;
use Tuleap\ProgramManagement\Domain\Program\VerifyIsProjectAProgramOrUsedInPlan;
use Tuleap\ProgramManagement\Domain\Program\VerifyIsProgram;
use Tuleap\ProgramManagement\Domain\Workspace\UserIdentifier;
use Tuleap\Project\ProjectAccessChecker;
use Tuleap\Project\RestrictedUserCanAccessProjectVerifier;

final class ProgramAdapter implements BuildProgram, ProjectIsAProgramOrUsedInPlanChecker
{
    private static ?self $instance;

    /**
     * @var array<int, bool>
     */
    private array $permission_cache = [];

    public static function instance(): self
    {
        if (! isset(self::$instance)) {
            $user_manager_adapter = new UserManagerAdapter(\UserManager::instance());
            $program_dao          = new ProgramDaoProject();
            self::$instance       = new self(
                new ProjectManagerAdapter(\ProjectManager::instance(), $user_manager_adapter),
                new ProjectAccessChecker(
                    new RestrictedUserCanAccessProjectVerifier(),
                    \EventManager::instance()
                ),
                $program_dao,
                $user_manager_adapter,
                $program_dao
            );
        }

        return self::$instance;
    }

    /**
     * @psalm-internal Tuleap\ProgramManagement\Adapter\Program\Plan
     */
    public function __construct(
        private RetrieveFullProject $retrieve_full_project,
        private ProjectAccessChecker $project_access_checker,
        private VerifyIsProgram $program_verifier,
        private RetrieveUser $user_manager_adapter,
        private VerifyIsProjectAProgramOrUsedInPlan $verify_is_program_in_administration,
    ) {
    }

    public function ensureProgramIsAProject(int $project_id, UserIdentifier $user, ?PermissionBypass $bypass): void
    {
        if (isset($this->permission_cache[$project_id])) {
            return;
        }

        $this->ensureUserCanAccessToProject($project_id, $user, $bypass);
        if (! $this->program_verifier->isAProgram($project_id)) {
            throw new ProjectIsNotAProgramException($project_id);
        }

        $this->permission_cache[$project_id] = true;
    }

    public function ensureProjectIsAProgramOrIsPartOfPlan(int $project_id, UserIdentifier $user, ?PermissionBypass $bypass): void
    {
        if (isset($this->permission_cache[$project_id])) {
            return;
        }

        $this->ensureUserCanAccessToProject($project_id, $user, $bypass);
        if (! $this->verify_is_program_in_administration->isProjectAProgramOrIsPartOfPlan($project_id)) {
            throw new ProjectIsNotAProgramException($project_id);
        }

        $this->permission_cache[$project_id] = true;
    }

    /**
     * @throws ProgramAccessException
     */
    private function ensureUserCanAccessToProject(int $id, UserIdentifier $user, ?PermissionBypass $bypass): void
    {
        if ($bypass) {
            return;
        }

        $project = $this->retrieve_full_project->getProject($id);
        $pfuser  = $this->user_manager_adapter->getUserWithId($user);
        try {
            $this->project_access_checker->checkUserCanAccessProject($pfuser, $project);
        } catch (Project_AccessException $exception) {
            throw new ProgramAccessException($id, UserProxy::buildFromPFUser($pfuser));
        }
    }
}
