<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerDemo\Service\Pdf\Generator;

use Mpdf\Mpdf;
use Mpdf\MpdfException;
use Mpdf\Output\Destination;
use SprykerDemo\Service\Pdf\Exception\PdfGeneratorException;

class HtmlPdfGenerator implements PdfGeneratorInterface
{
    /**
     * @var \Mpdf\Mpdf
     */
    protected Mpdf $pdf;

    /**
     * @param \Mpdf\Mpdf $pdf
     */
    public function __construct(Mpdf $pdf)
    {
        $this->pdf = $pdf;
    }

    /**
     * @param string $htmlString
     *
     * @throws \SprykerDemo\Service\Pdf\Exception\PdfGeneratorException
     *
     * @return string
     */
    public function generatePdfContent(string $htmlString): string
    {
        try {
            $this->pdf->WriteHTML($htmlString);

            return $this->pdf->Output(null, Destination::STRING_RETURN);
        } catch (MpdfException $e) {
            throw new PdfGeneratorException($e->getMessage(), $e->getCode(), $e);
        }
    }
}
