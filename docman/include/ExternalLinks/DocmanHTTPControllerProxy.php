<?php
/**
 * Copyright (c) Enalean, 2019-Present. All Rights Reserved.
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

namespace Tuleap\Docman\ExternalLinks;

use Docman_ItemDao;
use Tuleap\Request\NotFoundException;

class DocmanHTTPControllerProxy
{
    /**
     * @var ExternalLinkParametersExtractor
     */
    private $parameters_extractor;
    /**
     * @var \Docman_HTTPController
     */
    private $docman_HTTP_controller;
    /**
     * @var Docman_ItemDao
     */
    private $docman_item_dao;

    public function __construct(
        ExternalLinkParametersExtractor $parameters_extractor,
        \Docman_HTTPController $docman_HTTP_controller,
        Docman_ItemDao $docman_item_dao,
    ) {
        $this->parameters_extractor   = $parameters_extractor;
        $this->docman_HTTP_controller = $docman_HTTP_controller;
        $this->docman_item_dao        = $docman_item_dao;
    }

    public function process(\HTTPRequest $request, \PFUser $user): void
    {
        $project_id = $request->getProject()->getID();
        if ($project_id === null) {
            throw new NotFoundException(dgettext('tuleap-docman', 'Impossible to identify the requested project'));
        }

        $folder_id = $this->parameters_extractor->extractFolderIdFromParams($request);

        $root_folder = $this->docman_item_dao->searchRootItemForGroupId($project_id);
        if (! $root_folder) {
            throw new \RuntimeException('Project has no document root folder');
        }

        $redirector = new ExternalLinkRedirector(
            $user,
            $request,
            $folder_id,
            (int) $root_folder['item_id']
        );

        if ($this->parameters_extractor->extractRequestIsForOldUIParams($request)) {
            $redirector->checkAndStoreIfUserHasToBeenRedirected();
        }

        if ($redirector->shouldRedirectUserOnNewUI()) {
            $GLOBALS['HTML']->redirect($redirector->getUrlRedirection());
        } else {
            $this->docman_HTTP_controller->process();
        }
    }
}
