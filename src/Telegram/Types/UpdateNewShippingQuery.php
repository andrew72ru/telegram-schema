<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A new incoming shipping query; for bots only. Only for invoices with flexible price.
 */
class UpdateNewShippingQuery extends Update implements \JsonSerializable
{
    public function __construct(
        /** Unique query identifier */
        #[SerializedName('id')]
        private int $id,
        /** Identifier of the user who sent the query */
        #[SerializedName('sender_user_id')]
        private int $senderUserId,
        /** Invoice payload */
        #[SerializedName('invoice_payload')]
        private string $invoicePayload,
        /** User shipping address */
        #[SerializedName('shipping_address')]
        private Address|null $shippingAddress = null,
    ) {
    }

    /**
     * Get Unique query identifier.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Unique query identifier.
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Identifier of the user who sent the query.
     */
    public function getSenderUserId(): int
    {
        return $this->senderUserId;
    }

    /**
     * Set Identifier of the user who sent the query.
     */
    public function setSenderUserId(int $senderUserId): self
    {
        $this->senderUserId = $senderUserId;

        return $this;
    }

    /**
     * Get Invoice payload.
     */
    public function getInvoicePayload(): string
    {
        return $this->invoicePayload;
    }

    /**
     * Set Invoice payload.
     */
    public function setInvoicePayload(string $invoicePayload): self
    {
        $this->invoicePayload = $invoicePayload;

        return $this;
    }

    /**
     * Get User shipping address.
     */
    public function getShippingAddress(): Address|null
    {
        return $this->shippingAddress;
    }

    /**
     * Set User shipping address.
     */
    public function setShippingAddress(Address|null $shippingAddress): self
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateNewShippingQuery',
            'id' => $this->getId(),
            'sender_user_id' => $this->getSenderUserId(),
            'invoice_payload' => $this->getInvoicePayload(),
            'shipping_address' => $this->getShippingAddress(),
        ];
    }
}
