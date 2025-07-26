<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user gifting Telegram Premium to another user
 */
class TelegramPaymentPurposePremiumGift extends TelegramPaymentPurpose implements \JsonSerializable
{
    public function __construct(
        /** ISO 4217 currency code of the payment currency, or "XTR" for payments in Telegram Stars */
        #[SerializedName('currency')]
        private string $currency,
        /** Paid amount, in the smallest units of the currency */
        #[SerializedName('amount')]
        private int $amount,
        /** Identifier of the user which will receive Telegram Premium */
        #[SerializedName('user_id')]
        private int $userId,
        /** Number of months the Telegram Premium subscription will be active for the user */
        #[SerializedName('month_count')]
        private int $monthCount,
        /** Text to show to the user receiving Telegram Premium; 0-getOption("gift_text_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities are allowed */
        #[SerializedName('text')]
        private FormattedText|null $text = null,
    ) {
    }

    /**
     * Get ISO 4217 currency code of the payment currency, or "XTR" for payments in Telegram Stars
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Set ISO 4217 currency code of the payment currency, or "XTR" for payments in Telegram Stars
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
     * Get Identifier of the user which will receive Telegram Premium
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set Identifier of the user which will receive Telegram Premium
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get Number of months the Telegram Premium subscription will be active for the user
     */
    public function getMonthCount(): int
    {
        return $this->monthCount;
    }

    /**
     * Set Number of months the Telegram Premium subscription will be active for the user
     */
    public function setMonthCount(int $monthCount): self
    {
        $this->monthCount = $monthCount;

        return $this;
    }

    /**
     * Get Text to show to the user receiving Telegram Premium; 0-getOption("gift_text_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities are allowed
     */
    public function getText(): FormattedText|null
    {
        return $this->text;
    }

    /**
     * Set Text to show to the user receiving Telegram Premium; 0-getOption("gift_text_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities are allowed
     */
    public function setText(FormattedText|null $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'telegramPaymentPurposePremiumGift',
            'currency' => $this->getCurrency(),
            'amount' => $this->getAmount(),
            'user_id' => $this->getUserId(),
            'month_count' => $this->getMonthCount(),
            'text' => $this->getText(),
        ];
    }
}
