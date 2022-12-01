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

namespace PrestaShop\Module\PrestashopCheckout\Adapter;

class AddressAdapter
{
    /**
     * @var \Address
     */
    private $address;

    /**
     * @param int|null $id
     */
    public function __construct($id = null)
    {
        $this->address = new \Address($id);
    }

    /**
     * @param array $data
     *
     * @return void
     */
    public function fillWith(array $data)
    {
        foreach ($data as $key => $value) {
            if (property_exists($this->address, $key)) {
                $this->address->$key = $value;
            }
        }
    }

    /**
     * @return bool
     */
    public function save()
    {
        return (bool)$this->address->save();
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return $this->address->validateFields(false);
    }

    public function setField($key, $value)
    {
        $this->address->$key = $value;
    }

    public function getField($key)
    {
        return $this->address->$key;
    }
}
