<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */

namespace PrestaShop\Module\PrestashopCheckout\Context;

use Context;

/**
 * Class PrestaShopContext used to get information from PrestaShop Context
 */
class PrestaShopContext
{
    /**
     * @var Context
     */
    private $context;

    public function __construct(Context $context)
    {
        $this->context = $context;
    }

    /**
     * Get the isoCode from the context language, if null, send 'en' as default value
     *
     * @return string
     */
    public function getLanguageIsoCode()
    {
        return $this->context->language !== null ? $this->context->language->iso_code : 'en';
    }

    public function getLanguage()
    {
        return $this->context->language;
    }

    public function getLink()
    {
        return $this->context->link;
    }

    /**
     * Get the shop ID from the context
     *
     * @return int
     */
    public function getShopId()
    {
        return (int) $this->context->shop->id;
    }

    /**
     * Get the currency ISO code (ISO 4217) from the context
     *
     * @return string
     */
    public function getCurrencyIsoCode()
    {
        return $this->context->currency !== null ? $this->context->currency->iso_code : 'EUR';
    }

    /**
     * Get the current theme name from the context
     *
     * @return string
     */
    public function getCurrentThemeName()
    {
        return $this->context->shop->theme_name;
    }

    /**
     * Get the employee ID from the context
     *
     * @return int
     */
    public function getEmployeeId()
    {
        return (int) $this->context->employee->id;
    }
}
