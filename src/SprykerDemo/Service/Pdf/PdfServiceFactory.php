<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerDemo\Service\Pdf;

use Mpdf\Mpdf;
use Spryker\Service\Kernel\AbstractServiceFactory;
use SprykerDemo\Service\Pdf\Generator\HtmlPdfGenerator;

class PdfServiceFactory extends AbstractServiceFactory
{
    /**
     * @return \SprykerDemo\Service\Pdf\Generator\HtmlPdfGenerator
     */
    public function createPdfGenerator(): HtmlPdfGenerator
    {
        return new HtmlPdfGenerator(
            $this->createPdf(),
        );
    }

    /**
     * @return \Mpdf\Mpdf
     */
    public function createPdf(): Mpdf
    {
        return new Mpdf();
    }
}
