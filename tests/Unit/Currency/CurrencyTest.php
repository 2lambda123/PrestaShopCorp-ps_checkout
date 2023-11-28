<?php

namespace Tests\Unit\Currency;

use PHPUnit\Framework\TestCase;
use PrestaShop\Module\PrestashopCheckout\Currency\Currency;
use PrestaShop\Module\PrestashopCheckout\Currency\Exception\CurrencyException;

class CurrencyTest extends TestCase
{
    /**
     * @dataProvider invalidCurrencyProvider
     *
     * @throws CurrencyException
     */
    public function testConstructInvalid($name, $code, $exception)
    {
        $this->expectException($exception['class']);
        $this->expectExceptionCode($exception['code']);
        $this->expectExceptionMessage($exception['message']);
        new Currency($name, $code);
    }

    public function invalidCurrencyProvider()
    {
        return [
            [
                'Euro',
                'EU',
                [
                    'class' => CurrencyException::class,
                    'code' => CurrencyException::INVALID_CODE,
                    'message' => 'Invalid code',
                ],
            ],
            [
                'Dollars',
                12,
                [
                    'class' => CurrencyException::class,
                    'code' => CurrencyException::WRONG_TYPE_CODE,
                    'message' => 'CODE is not a string (integer)',
                ],
            ],
            [
                'Dollars',
                '12',
                [
                    'class' => CurrencyException::class,
                    'code' => CurrencyException::INVALID_CODE,
                    'message' => 'Invalid code',
                ],
            ],
            [
                3,
                'EUR',
                [
                    'class' => CurrencyException::class,
                    'code' => CurrencyException::WRONG_TYPE_NAME,
                    'message' => 'NAME is not a string (integer)',
                ],
            ],
        ];
    }
}