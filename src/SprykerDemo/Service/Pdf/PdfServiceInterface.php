<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerDemo\Service\Pdf;

/**
 * @api
 *
 * @method \SprykerDemo\Service\Pdf\PdfServiceFactory getFactory()
 */
interface PdfServiceInterface
{
    /**
     * Specification:
     *  -Generate pdf content from html.
     *
     * @api
     *  Specificaton:
     *
     * @param string $htmlString
     *
     * @return string
     */
    public function generatePdfContentFromHTML(string $htmlString): string;
}
