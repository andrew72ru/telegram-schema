<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user gifting Telegram Premium to another user
 */
class StorePaymentPurposePremiumGift extends StorePaymentPurpose implements \JsonSerializable
{
    public function __construct(
        /** ISO 4217 currency code of the payment currency */
        #[SerializedName('currency')]
        private string $currency,
        /** Paid amount, in the smallest units of the currency */
        #[SerializedName('amount')]
        private int $amount,
        /** Identifiers of the user which will receive Telegram Premium */
        #[SerializedName('user_id')]
        private int $userId,
        /** Text to show along with the gift codes; 0-getOption("gift_text_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities are allowed */
        #[SerializedName('text')]
        private FormattedText|null $text = null,
    ) {
    }

    /**
     * Get ISO 4217 currency code of the payment currency
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Set ISO 4217 currency code of the payment currency
     */
    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get Paid amount, in the smallest units of the currency
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * Set Paid amount, in the smallest units of the currency
     */
    public function setAmount(int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get Identifiers of the user which will receive Telegram Premium
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set Identifiers of the user which will receive Telegram Premium
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get Text to show along with the gift codes; 0-getOption("gift_text_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities are allowed
     */
    public function getText(): FormattedText|null
    {
        return $this->text;
    }

    /**
     * Set Text to show along with the gift codes; 0-getOption("gift_text_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities are allowed
     */
    public function setText(FormattedText|null $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'storePaymentPurposePremiumGift',
            'currency' => $this->getCurrency(),
            'amount' => $this->getAmount(),
            'user_id' => $this->getUserId(),
            'text' => $this->getText(),
        ];
    }
}
