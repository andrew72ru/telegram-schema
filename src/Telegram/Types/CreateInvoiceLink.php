<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Creates a link for the given invoice; for bots only
 */
class CreateInvoiceLink extends HttpUrl implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of business connection on behalf of which to send the request */
        #[SerializedName('business_connection_id')]
        private string $businessConnectionId,
        /** Information about the invoice of the type inputMessageInvoice */
        #[SerializedName('invoice')]
        private InputMessageContent|null $invoice = null,
    ) {
    }

    /**
     * Get Unique identifier of business connection on behalf of which to send the request
     */
    public function getBusinessConnectionId(): string
    {
        return $this->businessConnectionId;
    }

    /**
     * Set Unique identifier of business connection on behalf of which to send the request
     */
    public function setBusinessConnectionId(string $businessConnectionId): self
    {
        $this->businessConnectionId = $businessConnectionId;

        return $this;
    }

    /**
     * Get Information about the invoice of the type inputMessageInvoice
     */
    public function getInvoice(): InputMessageContent|null
    {
        return $this->invoice;
    }

    /**
     * Set Information about the invoice of the type inputMessageInvoice
     */
    public function setInvoice(InputMessageContent|null $invoice): self
    {
        $this->invoice = $invoice;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'createInvoiceLink',
            'business_connection_id' => $this->getBusinessConnectionId(),
            'invoice' => $this->getInvoice(),
        ];
    }
}
