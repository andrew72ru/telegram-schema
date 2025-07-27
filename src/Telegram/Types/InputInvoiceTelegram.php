<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An invoice for a payment toward Telegram; must not be used in the in-store apps @purpose Transaction purpose.
 */
class InputInvoiceTelegram extends InputInvoice implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('purpose')]
        private TelegramPaymentPurpose|null $purpose = null,
    ) {
    }

    public function getPurpose(): TelegramPaymentPurpose|null
    {
        return $this->purpose;
    }

    public function setPurpose(TelegramPaymentPurpose|null $purpose): self
    {
        $this->purpose = $purpose;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputInvoiceTelegram',
            'purpose' => $this->getPurpose(),
        ];
    }
}
