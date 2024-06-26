<?php

namespace Omnipay\Paycell;

use Omnipay\Common\AbstractGateway;
use Omnipay\Paycell\Message\PurchaseRequest;
use Omnipay\Paycell\Message\RefundRequest;
use Omnipay\Paycell\Message\InquireRequest;
use Omnipay\Paycell\Message\ReverseRequest;
use Omnipay\Paycell\Message\Purchase3DRequest;
use Omnipay\Paycell\Message\Purchase3DCompleteRequest;

/**
 * Paycell Gateway
 * 
 * (c) Yasin Kuyu
 * 2024, insya.com
 * http://www.github.com/yasinkuyu/omnipay-paycell
 */
class Gateway extends AbstractGateway
{
    
    use CommonParameters;

    public function getName()
    {
        return 'Paycell';
    }

    /**
     * Initiate a purchase request.
     *
     * @param array $parameters Additional parameters for the purchase
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function purchase(array $parameters = [])
    {
        return $this->createRequest(PurchaseRequest::class, $parameters);
    }

    /**
     * Initiate a refund request.
     *
     * @param array $parameters Additional parameters for the refund
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function refund(array $parameters = [])
    {
        return $this->createRequest(RefundRequest::class, $parameters);
    }

    /**
     * Initiate a inquire request.
     *
     * @param array $parameters Additional parameters for the inquire
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function inquire(array $parameters = [])
    {
        return $this->createRequest(InquireRequest::class, $parameters);
    }

    /**
     * Initiate a reverse request.
     *
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function reverse(array $parameters = [])
    {
        return $this->createRequest(ReverseRequest::class, $parameters);
    }

    /**
     * Initiate a purchase 3d request.
     *
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function purchase3d(array $parameters = [])
    {
        return $this->createRequest(Purchase3DRequest::class, $parameters);
    }


    /**
     * Initiate a purchase 3d request.
     *
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function completePurchase(array $parameters = [])
    {
        return $this->createRequest(Purchase3DCompleteRequest::class, $parameters);
    }
}