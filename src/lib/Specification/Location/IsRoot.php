<?php

/**
 * @copyright Copyright (C) Ibexa AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace Ibexa\AdminUi\Specification\Location;

use Ibexa\AdminUi\Specification\AbstractSpecification;

class IsRoot extends AbstractSpecification
{
    /**
     * @param \eZ\Publish\API\Repository\Values\Content\Location $item
     *
     * @return bool
     */
    public function isSatisfiedBy($item): bool
    {
        return 1 === $item->depth;
    }
}

class_alias(IsRoot::class, 'EzSystems\EzPlatformAdminUi\Specification\Location\IsRoot');
