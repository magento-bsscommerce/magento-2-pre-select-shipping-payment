<?php
/**
 * BSS Commerce Co.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://bsscommerce.com/Bss-Commerce-License.txt
 *
 * @category  BSS
 * @package   Bss_PreSelectShippingPayment
 * @author    Extension Team
 * @copyright Copyright (c) 2017-2018 BSS Commerce Co. ( http://bsscommerce.com )
 * @license   http://bsscommerce.com/Bss-Commerce-License.txt
 */
namespace  Bss\PreSelectShippingPayment\Block;

use Magento\Store\Model\ScopeInterface;

class ConfigMenthod extends \Magento\Framework\View\Element\Template
{

    /**
     * Bss\PreSelectShippingPayment\Model\CompositeConfigProvider
     */
    protected $shippingPayment;

    /**
     * Constructor
     *
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Bss\PreSelectShippingPayment\Model\CompositeConfigProvider $shippingPayment
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Bss\PreSelectShippingPayment\Model\CompositeConfigProvider $shippingPayment,
        array $data = []
    ) {
        $this->shippingPayment = $shippingPayment;
        parent::__construct($context, $data);
    }

    /**
     * Get shipping default
     *
     * @return mixed|string
     */
    public function getShippingDefault()
    {
        $isEnabledShipping =  $this->_scopeConfig->isSetFlag(
            'preselectshippingpayment/shipping/enable',
            ScopeInterface::SCOPE_STORE
        );
        if (!$isEnabledShipping) {
            return '';
        }
        return $this->shippingPayment->getShipingConfig('default');
    }

    /**
     * Get payment default
     *
     * @return mixed|string
     */
    public function getPaymentDefault()
    {
        $isEnabledPayment =  $this->_scopeConfig->isSetFlag(
            'preselectshippingpayment/payment/enable',
            ScopeInterface::SCOPE_STORE
        );
        if (!$isEnabledPayment) {
            return '';
        }
        return $this->shippingPayment->getPaymentConfig('default');
    }

    /**
     * Get payment position
     *
     * @return mixed|string
     */
    public function getPaymentPosition()
    {
        $isEnabledPayment =  $this->_scopeConfig->isSetFlag(
            'preselectshippingpayment/payment/enable',
            ScopeInterface::SCOPE_STORE
        );
        if (!$isEnabledPayment) {
            return '';
        }
        return $this->shippingPayment->getPaymentConfig('position');
    }

    /**
     * Get shipping position
     *
     * @return mixed|string
     */
    public function getShippingPosition()
    {
        $isEnabledPayment =  $this->_scopeConfig->isSetFlag(
            'preselectshippingpayment/shipping/enable',
            ScopeInterface::SCOPE_STORE
        );
        if (!$isEnabledPayment) {
            return '';
        }
        return $this->shippingPayment->getShipingConfig('position');
    }
}
