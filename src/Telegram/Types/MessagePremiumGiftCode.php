<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A Telegram Premium gift code was created for the user
 */
class MessagePremiumGiftCode extends MessageContent implements \JsonSerializable
{
    public function __construct(
        /** Identifier of a chat or a user that created the gift code; may be null if unknown */
        #[SerializedName('creator_id')]
        private MessageSender|null $creatorId = null,
        /** Message added to the gift */
        #[SerializedName('text')]
        private FormattedText|null $text = null,
        /** True, if the gift code was created for a giveaway */
        #[SerializedName('is_from_giveaway')]
        private bool $isFromGiveaway,
        /** True, if the winner for the corresponding Telegram Premium subscription wasn't chosen */
        #[SerializedName('is_unclaimed')]
        private bool $isUnclaimed,
        /** Currency for the paid amount; empty if unknown */
        #[SerializedName('currency')]
        private string $currency,
        /** The paid amount, in the smallest units of the currency; 0 if unknown */
        #[SerializedName('amount')]
        private int $amount,
        /** Cryptocurrency used to pay for the gift; may be empty if none or unknown */
        #[SerializedName('cryptocurrency')]
        private string $cryptocurrency,
        /** The paid amount, in the smallest units of the cryptocurrency; 0 if unknown */
        #[SerializedName('cryptocurrency_amount')]
        private int $cryptocurrencyAmount,
        /** Number of months the Telegram Premium subscription will be active after code activation */
        #[SerializedName('month_count')]
        private int $monthCount,
        /** A sticker to be shown in the message; may be null if unknown */
        #[SerializedName('sticker')]
        private Sticker|null $sticker = null,
        /** The gift code */
        #[SerializedName('code')]
        private string $code,
    ) {
    }

    /**
     * Get Identifier of a chat or a user that created the gift code; may be null if unknown
     */
    public function getCreatorId(): MessageSender|null
    {
        return $this->creatorId;
    }

    /**
     * Set Identifier of a chat or a user that created the gift code; may be null if unknown
     */
    public function setCreatorId(MessageSender|null $creatorId): self
    {
        $this->creatorId = $creatorId;

        return $this;
    }

    /**
     * Get Message added to the gift
     */
    public function getText(): FormattedText|null
    {
        return $this->text;
    }

    /**
     * Set Message added to the gift
     */
    public function setText(FormattedText|null $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get True, if the gift code was created for a giveaway
     */
    public function getIsFromGiveaway(): bool
    {
        return $this->isFromGiveaway;
    }

    /**
     * Set True, if the gift code was created for a giveaway
     */
    public function setIsFromGiveaway(bool $isFromGiveaway): self
    {
        $this->isFromGiveaway = $isFromGiveaway;

        return $this;
    }

    /**
     * Get True, if the winner for the corresponding Telegram Premium subscription wasn't chosen
     */
    public function getIsUnclaimed(): bool
    {
        return $this->isUnclaimed;
    }

    /**
     * Set True, if the winner for the corresponding Telegram Premium subscription wasn't chosen
     */
    public function setIsUnclaimed(bool $isUnclaimed): self
    {
        $this->isUnclaimed = $isUnclaimed;

        return $this;
    }

    /**
     * Get Currency for the paid amount; empty if unknown
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Set Currency for the paid amount; empty if unknown
     */
    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get The paid amount, in the smallest units of the currency; 0 if unknown
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * Set The paid amount, in the smallest units of the currency; 0 if unknown
     */
    public function setAmount(int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get Cryptocurrency used to pay for the gift; may be empty if none or unknown
     */
    public function getCryptocurrency(): string
    {
        return $this->cryptocurrency;
    }

    /**
     * Set Cryptocurrency used to pay for the gift; may be empty if none or unknown
     */
    public function setCryptocurrency(string $cryptocurrency): self
    {
        $this->cryptocurrency = $cryptocurrency;

        return $this;
    }

    /**
     * Get The paid amount, in the smallest units of the cryptocurrency; 0 if unknown
     */
    public function getCryptocurrencyAmount(): int
    {
        return $this->cryptocurrencyAmount;
    }

    /**
     * Set The paid amount, in the smallest units of the cryptocurrency; 0 if unknown
     */
    public function setCryptocurrencyAmount(int $cryptocurrencyAmount): self
    {
        $this->cryptocurrencyAmount = $cryptocurrencyAmount;

        return $this;
    }

    /**
     * Get Number of months the Telegram Premium subscription will be active after code activation
     */
    public function getMonthCount(): int
    {
        return $this->monthCount;
    }

    /**
     * Set Number of months the Telegram Premium subscription will be active after code activation
     */
    public function setMonthCount(int $monthCount): self
    {
        $this->monthCount = $monthCount;

        return $this;
    }

    /**
     * Get A sticker to be shown in the message; may be null if unknown
     */
    public function getSticker(): Sticker|null
    {
        return $this->sticker;
    }

    /**
     * Set A sticker to be shown in the message; may be null if unknown
     */
    public function setSticker(Sticker|null $sticker): self
    {
        $this->sticker = $sticker;

        return $this;
    }

    /**
     * Get The gift code
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Set The gift code
     */
    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messagePremiumGiftCode',
            'creator_id' => $this->getCreatorId(),
            'text' => $this->getText(),
            'is_from_giveaway' => $this->getIsFromGiveaway(),
            'is_unclaimed' => $this->getIsUnclaimed(),
            'currency' => $this->getCurrency(),
            'amount' => $this->getAmount(),
            'cryptocurrency' => $this->getCryptocurrency(),
            'cryptocurrency_amount' => $this->getCryptocurrencyAmount(),
            'month_count' => $this->getMonthCount(),
            'sticker' => $this->getSticker(),
            'code' => $this->getCode(),
        ];
    }
}
