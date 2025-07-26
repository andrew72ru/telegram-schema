<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Validates the order information provided by a user and returns the available shipping options for a flexible invoice
 */
class ValidateOrderInfo extends ValidatedOrderInfo implements \JsonSerializable
{
    public function __construct(
        /** The invoice */
        #[SerializedName('input_invoice')]
        private InputInvoice|null $inputInvoice = null,
        /** The order information, provided by the user; pass null if empty */
        #[SerializedName('order_info')]
        private OrderInfo|null $orderInfo = null,
        /** Pass true to save the order information */
        #[SerializedName('allow_save')]
        private bool $allowSave,
    ) {
    }

    /**
     * Get The invoice
     */
    public function getInputInvoice(): InputInvoice|null
    {
        return $this->inputInvoice;
    }

    /**
     * Set The invoice
     */
    public function setInputInvoice(InputInvoice|null $inputInvoice): self
    {
        $this->inputInvoice = $inputInvoice;

        return $this;
    }

    /**
     * Get The order information, provided by the user; pass null if empty
     */
    public function getOrderInfo(): OrderInfo|null
    {
        return $this->orderInfo;
    }

    /**
     * Set The order information, provided by the user; pass null if empty
     */
    public function setOrderInfo(OrderInfo|null $orderInfo): self
    {
        $this->orderInfo = $orderInfo;

        return $this;
    }

    /**
     * Get Pass true to save the order information
     */
    public function getAllowSave(): bool
    {
        return $this->allowSave;
    }

    /**
     * Set Pass true to save the order information
     */
    public function setAllowSave(bool $allowSave): self
    {
        $this->allowSave = $allowSave;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'validateOrderInfo',
            'input_invoice' => $this->getInputInvoice(),
            'order_info' => $this->getOrderInfo(),
            'allow_save' => $this->getAllowSave(),
        ];
    }
}
