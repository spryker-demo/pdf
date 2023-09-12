<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerDemo\Service\Pdf;

use Spryker\Service\Kernel\AbstractService;

/**
 * {@inheritDoc}
 *
 * @api
 *
 * @method \SprykerDemo\Service\Pdf\PdfServiceFactory getFactory()
 */
class PdfService extends AbstractService implements PdfServiceInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param string $htmlString
     *
     * @return string
     */
    public function generatePdfContentFromHTML(string $htmlString): string
    {
        return $this->getFactory()
            ->createPdfGenerator()
            ->generatePdfContent($htmlString);
    }
}
