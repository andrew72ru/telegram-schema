<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Portion of the price of a product (e.g., "delivery cost", "tax amount") @label Label for this portion of the product price @amount Currency amount in the smallest units of the currency.
 */
class LabeledPricePart implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('label')]
        private string $label,
        #[SerializedName('amount')]
        private int $amount,
    ) {
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function setAmount(int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'labeledPricePart',
            'label' => $this->getLabel(),
            'amount' => $this->getAmount(),
        ];
    }
}
