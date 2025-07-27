<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user boosting a chat by creating Telegram Premium gift codes for other users.
 */
class StorePaymentPurposePremiumGiftCodes extends StorePaymentPurpose implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the supergroup or channel chat, which will be automatically boosted by the users for duration of the Premium subscription and which is administered by the user */
        #[SerializedName('boosted_chat_id')]
        private int $boostedChatId,
        /** ISO 4217 currency code of the payment currency */
        #[SerializedName('currency')]
        private string $currency,
        /** Paid amount, in the smallest units of the currency */
        #[SerializedName('amount')]
        private int $amount,
        /** Identifiers of the users which can activate the gift codes */
        #[SerializedName('user_ids')]
        private array|null $userIds = null,
        /** Text to show along with the gift codes; 0-getOption("gift_text_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities are allowed */
        #[SerializedName('text')]
        private FormattedText|null $text = null,
    ) {
    }

    /**
     * Get Identifier of the supergroup or channel chat, which will be automatically boosted by the users for duration of the Premium subscription and which is administered by the user.
     */
    public function getBoostedChatId(): int
    {
        return $this->boostedChatId;
    }

    /**
     * Set Identifier of the supergroup or channel chat, which will be automatically boosted by the users for duration of the Premium subscription and which is administered by the user.
     */
    public function setBoostedChatId(int $boostedChatId): self
    {
        $this->boostedChatId = $boostedChatId;

        return $this;
    }

    /**
     * Get ISO 4217 currency code of the payment currency.
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Set ISO 4217 currency code of the payment currency.
     */
    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get Paid amount, in the smallest units of the currency.
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * Set Paid amount, in the smallest units of the currency.
     */
    public function setAmount(int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get Identifiers of the users which can activate the gift codes.
     */
    public function getUserIds(): array|null
    {
        return $this->userIds;
    }

    /**
     * Set Identifiers of the users which can activate the gift codes.
     */
    public function setUserIds(array|null $userIds): self
    {
        $this->userIds = $userIds;

        return $this;
    }

    /**
     * Get Text to show along with the gift codes; 0-getOption("gift_text_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities are allowed.
     */
    public function getText(): FormattedText|null
    {
        return $this->text;
    }

    /**
     * Set Text to show along with the gift codes; 0-getOption("gift_text_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities are allowed.
     */
    public function setText(FormattedText|null $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'storePaymentPurposePremiumGiftCodes',
            'boosted_chat_id' => $this->getBoostedChatId(),
            'currency' => $this->getCurrency(),
            'amount' => $this->getAmount(),
            'user_ids' => $this->getUserIds(),
            'text' => $this->getText(),
        ];
    }
}
