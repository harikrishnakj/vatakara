<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.currency_exchange_rate' shared service.

return $this->services['form.type.currency_exchange_rate'] = new \PrestaShopBundle\Form\Admin\Improve\International\Currencies\CurrencyExchangeRateType(${($_ = isset($this->services['prestashop.adapter.data_provider.module']) ? $this->services['prestashop.adapter.data_provider.module'] : $this->getPrestashop_Adapter_DataProvider_ModuleService()) && false ?: '_'}->isInstalled("cronjobs"));
