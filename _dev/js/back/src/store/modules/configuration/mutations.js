/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */
import * as types from './mutation-types';

export default {
  [types.UPDATE_PAYMENT_METHODS_ORDER](state, payload) {
    Object.assign(state.paymentMethods, payload);
  },
  [types.UPDATE_PAYMENT_MODE](state, payload) {
    state.paymentMode = payload;
  },
  [types.UPDATE_CAPTURE_MODE](state, payload) {
    state.captureMode = payload;
  },
  [types.UPDATE_PAYMENT_CARD_AVAILABILITY](state, payload) {
    state.isFundingSourceCardEnabled = payload;
  },
  [types.UPDATE_CREDIT_CARD_FIELDS](state, payload) {
    state.cardIsEnabled = payload.hostedFieldsEnabled;
  },
  [types.UPDATE_CARD_INLINE_PAYPAL_AVAILABILITY](state, payload) {
    state.cardInlinePaypalIsEnabled = payload;
  },
  [types.UPDATE_PAY_LATER_ORDER_PAGE_MESSAGE](state, payload) {
    state.payLater.orderPage.message = payload;
  },
  [types.UPDATE_PAY_LATER_PRODUCT_PAGE_MESSAGE](state, payload) {
    state.payLater.productPage.message = payload;
  },
  [types.UPDATE_PAY_LATER_ORDER_PAGE_BANNER](state, payload) {
    state.payLater.orderPage.banner = payload;
  },
  [types.UPDATE_PAY_LATER_PRODUCT_PAGE_BANNER](state, payload) {
    state.payLater.productPage.banner = payload;
  },
  [types.UPDATE_PAY_LATER_HOME_PAGE_BANNER](state, payload) {
    state.payLater.homePage.banner = payload;
  },
  [types.UPDATE_PAY_LATER_CATEGORY_PAGE_BANNER](state, payload) {
    state.payLater.categoryPage.banner = payload;
  },
  [types.UPDATE_PAY_LATER_CART_PAGE_BUTTON](state, payload) {
    state.payLater.cartPage.button = payload;
  },
  [types.UPDATE_PAY_LATER_ORDER_PAGE_BUTTON](state, payload) {
    state.payLater.orderPage.button = payload;
  },
  [types.UPDATE_PAY_LATER_PRODUCT_PAGE_BUTTON](state, payload) {
    state.payLater.productPage.button = payload;
  },
  [types.UPDATE_EC_ORDER_PAGE](state, payload) {
    state.expressCheckout.orderPage = payload;
  },
  [types.UPDATE_EC_CHECKOUT_PAGE](state, payload) {
    state.expressCheckout.checkoutPage = payload;
  },
  [types.UPDATE_EC_PRODUCT_PAGE](state, payload) {
    state.expressCheckout.productPage = payload;
  },
  [types.UPDATE_LOGGER_LEVEL](state, payload) {
    state.logger.level = payload;
  },
  [types.UPDATE_LOGGER_MAX_FILES](state, payload) {
    state.logger.maxFiles = payload;
  },
  [types.UPDATE_LOGGER_HTTP](state, payload) {
    state.logger.http = payload;
  },
  [types.UPDATE_LOGGER_HTTP_FORMAT](state, payload) {
    state.logger.httpFormat = payload;
  },
  [types.SAVE_PAYPAL_BUTTON_CONFIGURATION](state, payload) {
    state.paypalButton.shape = payload.configuration.shape;
    state.paypalButton.label = payload.configuration.label;
    state.paypalButton.color = payload.configuration.color;
  }
};
