<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerDemo\Service\Pdf\Generator;

interface PdfGeneratorInterface
{
    /**
     * @param string $htmlString
     *
     * @return string
     */
    public function generatePdfContent(string $htmlString): string;
}
