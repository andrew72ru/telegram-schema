<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to an invoice. Call getPaymentForm with the given invoice name to process the link @invoice_name Name of the invoice
 */
class InternalLinkTypeInvoice extends InternalLinkType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('invoice_name')]
        private string $invoiceName,
    ) {
    }

    public function getInvoiceName(): string
    {
        return $this->invoiceName;
    }

    public function setInvoiceName(string $invoiceName): self
    {
        $this->invoiceName = $invoiceName;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypeInvoice',
            'invoice_name' => $this->getInvoiceName(),
        ];
    }
}
