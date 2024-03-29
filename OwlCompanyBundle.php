<?php

declare(strict_types=1);

namespace Owl\Bundle\CompanyBundle;

use Sylius\Bundle\ResourceBundle\AbstractResourceBundle;
use Sylius\Bundle\ResourceBundle\SyliusResourceBundle;

final class OwlCompanyBundle extends AbstractResourceBundle
{
    /**
     * @return string[]
     *
     * @psalm-return list{'doctrine/orm'}
     */
    public function getSupportedDrivers(): array
    {
        return [
            SyliusResourceBundle::DRIVER_DOCTRINE_ORM,
        ];
    }

    /**
     * @psalm-return 'Owl\Component\Company\Model'
     */
    protected function getModelNamespace(): string
    {
        return 'Owl\Component\Company\Model';
    }
}
