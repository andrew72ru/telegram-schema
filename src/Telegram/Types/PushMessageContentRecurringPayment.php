<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A new recurring payment was made by the current user @amount The paid amount.
 */
class PushMessageContentRecurringPayment extends PushMessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('amount')]
        private string $amount,
    ) {
    }

    public function getAmount(): string
    {
        return $this->amount;
    }

    public function setAmount(string $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pushMessageContentRecurringPayment',
            'amount' => $this->getAmount(),
        ];
    }
}
