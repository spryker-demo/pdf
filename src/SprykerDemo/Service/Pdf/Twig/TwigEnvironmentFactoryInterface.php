<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerDemo\Service\Pdf\Twig;

use Twig\Environment;

interface TwigEnvironmentFactoryInterface
{
    /**
     * @param string $templatePath
     *
     * @return \Twig\Environment
     */
    public function createTwigEnvironment(string $templatePath): Environment;
}
