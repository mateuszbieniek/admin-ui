<?php

/**
 * @copyright Copyright (C) Ibexa AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace Ibexa\AdminUi\UI\Value\Content;

use eZ\Publish\API\Repository\Values\Content\URLAlias as CoreURLAlias;

class UrlAlias extends CoreURLAlias
{
    /**
     * @param \eZ\Publish\API\Repository\Values\Content\URLAlias $urlAlias
     * @param array $properties
     */
    public function __construct(CoreURLAlias $urlAlias, array $properties = [])
    {
        parent::__construct(get_object_vars($urlAlias) + $properties);
    }
}

class_alias(UrlAlias::class, 'EzSystems\EzPlatformAdminUi\UI\Value\Content\UrlAlias');
