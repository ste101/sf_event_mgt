<?php

declare(strict_types=1);

/*
 * This file is part of the Extension "sf_event_mgt" for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace DERHANSEN\SfEventMgt\Event;

use DERHANSEN\SfEventMgt\Controller\AdministrationController;

/**
 * This event is triggered before the administration list view is rendered
 */
final class ModifyAdministrationListViewVariablesEvent
{
    public function __construct(private array $variables, private readonly AdministrationController $administrationController)
    {
    }

    public function getVariables(): array
    {
        return $this->variables;
    }

    public function setVariables(array $variables): void
    {
        $this->variables = $variables;
    }

    public function getAdministrationController(): AdministrationController
    {
        return $this->administrationController;
    }
}
