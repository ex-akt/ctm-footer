<?php

declare(strict_types=1);

namespace ContaoThemeManager\Footer;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ContaoThemeManagerFooter extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
