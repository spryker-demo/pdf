<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerDemo\Service\Pdf\Twig;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Twig\Loader\LoaderInterface;

class TwigEnvironmentFactory implements TwigEnvironmentFactoryInterface
{
    /**
     * @param string $templatePath
     *
     * @return \Twig\Environment
     */
    public function createTwigEnvironment(string $templatePath): Environment
    {
        return new Environment($this->createTwigLoader($templatePath));
    }

    /**
     * @param string $templatePath
     *
     * @return \Twig\Loader\LoaderInterface
     */
    protected function createTwigLoader(string $templatePath): LoaderInterface
    {
        return new FilesystemLoader($templatePath);
    }
}
