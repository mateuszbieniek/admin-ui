<?php

/**
 * @copyright Copyright (C) Ibexa AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace Ibexa\Bundle\AdminUi\View;

use Ibexa\Bundle\AdminUi\View\Template\EzPagerfantaTemplate;
use Pagerfanta\View\DefaultView;

/**
 * View to render Pagerfanta pagination.
 */
class EzPagerfantaView extends DefaultView
{
    /** @var \Symfony\Contracts\Translation\TranslatorInterface */
    private $translator;

    protected function createDefaultTemplate()
    {
        return new EzPagerfantaTemplate($this->translator);
    }

    protected function getDefaultProximity()
    {
        return 3;
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'ez';
    }
}

class_alias(EzPagerfantaView::class, 'EzSystems\EzPlatformAdminUiBundle\View\EzPagerfantaView');
