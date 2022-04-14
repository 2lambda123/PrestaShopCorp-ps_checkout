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

namespace PrestaShop\Module\PrestashopCheckout\MarketPlace;

class GetMarketPlaceModuleDataQuery
{
    /**
     * @var int
     */
    private $moduleId;

    /**
     * @var string
     */
    private $psVersion;

    /**
     * @var string
     */
    private $languageCode;

    /**
     * @var string
     */
    private $countryCode;

    /**
     * @param int $moduleId
     * @param string $psVersion
     * @param string $languageCode
     * @param string $countryCode
     */
    public function __construct($moduleId, $psVersion, $languageCode, $countryCode)
    {
        $this->moduleId = $moduleId;
        $this->psVersion = $psVersion;
        $this->languageCode = $languageCode;
        $this->countryCode = $countryCode;
    }

    /**
     * @return int
     */
    public function getModuleId()
    {
        return $this->moduleId;
    }

    /**
     * @return string
     */
    public function getPsVersion()
    {
        return $this->psVersion;
    }

    /**
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }
}