<?php

namespace Omnipay\Paycell\Message;

use Omnipay\Common\Message\AbstractResponse;

/**
 * Paycell
 * 
 * (c) Yasin Kuyu
 * 2024, insya.com
 * http://www.github.com/yasinkuyu/omnipay-paycell
 */
class TransactionResponse extends AbstractResponse
{
 
    /**
     * Check if the transaction was successful.
     *
     * @return bool
     */
    public function isSuccessful()
    {
        return $this->data->responseHeader->responseDescription ?? false === "Success";
    }
  
    /**
     * Get the response description.
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->data->responseHeader->responseDescription ?? null;
    }

    public function getData()
    {
        return parent::getData();
    }

    /**
     * Get the transaction ID.
     *
     * @return string|null
     */
    public function getTransactionId()
    {
        return $this->data->responseHeader->transactionId ?? null;
    }

    // Omnipay transaction
    public function getTransactionReference()
    {
        return $this->getTransactionId();
    }
    
    /**
     * Get the transaction date and time.
     *
     * @return string|null The transaction date and time.
     */
    public function getTransactionDateTime() {
        return $this->data->responseHeader->transactionDateTime ?? null;
    }

    /**
     * Get the order ID.
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->data->orderId ?? null;
    }

    /**
     * Get the acquirer bank code.
     *
     * @return string|null
     */
    public function getAcquirerBankCode()
    {
        return $this->data->acquirerBankCode ?? null;
    }

    /**
     * Get the issuer bank code.
     *
     * @return string|null
     */
    public function getIssuerBankCode()
    {
        return $this->data->issuerBankCode ?? null;
    }

    /**
     * Get the approval code.
     *
     * @return string|null
     */
    public function getApprovalCode()
    {
        return $this->data->approvalCode ?? null;
    }

    /**
     * Get the reconciliation date.
     *
     * @return string|null
     */
    public function getReconciliationDate()
    {
        return $this->data->reconciliationDate ?? null;
    }

    /**
     * Get the Iyzico payment ID.
     *
     * @return string|null
     */
    public function getIyzPaymentId()
    {
        return $this->data->iyzPaymentId ?? null;
    }
    
    /**
     * Get the Three D Session Id.
     * 
     * 3D doğrulama işlemine ait session ID değeridir.
     * 
     * @return string|null
     */
    public function getThreeDSessionId()
    {
        return $this->data->threeDSessionId ?? null;
    }

    /**
     * Get the Iyzico payment transaction ID.
     *
     * @return string|null
     */
    public function getIyzPaymentTransactionId()
    {
        return $this->data->iyzPaymentTransactionId ?? null;
    }

    /**
     * Get the Retry Status Code.
     *
     * @return int|null The retry status code if set, otherwise null.
     */
    public function getRetryStatusCode()
    {
        return $this->data->retryStatusCode ?? null;
    }


    /**
     * Get the Retry Status Description.
     *
     * @return string|null The retry status description if set, otherwise null.
     */
    public function getRetryStatusDescription()
    {
        return $this->data->retryStatusDescription ?? null;
    }

    /**
     * Get extra parameters
     *
     * @return string|null
     */
    public function getExtraParameters() {
        return $this->data->extraParameters ?? null;
    }

    /**
     * Get extra parameters
     *
     * @return string|null
     */
    public function getProvisionList() {
        return $this->data->provisionList ?? [];
    }
}
