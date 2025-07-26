<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Telegram Premium was gifted to a user
 */
class MessageGiftedPremium extends MessageContent implements \JsonSerializable
{
    public function __construct(
        /** The identifier of a user that gifted Telegram Premium; 0 if the gift was anonymous or is outgoing */
        #[SerializedName('gifter_user_id')]
        private int $gifterUserId,
        /** The identifier of a user that received Telegram Premium; 0 if the gift is incoming */
        #[SerializedName('receiver_user_id')]
        private int $receiverUserId,
        /** Message added to the gifted Telegram Premium by the sender */
        #[SerializedName('text')]
        private FormattedText|null $text = null,
        /** Currency for the paid amount */
        #[SerializedName('currency')]
        private string $currency,
        /** The paid amount, in the smallest units of the currency */
        #[SerializedName('amount')]
        private int $amount,
        /** Cryptocurrency used to pay for the gift; may be empty if none */
        #[SerializedName('cryptocurrency')]
        private string $cryptocurrency,
        /** The paid amount, in the smallest units of the cryptocurrency; 0 if none */
        #[SerializedName('cryptocurrency_amount')]
        private int $cryptocurrencyAmount,
        /** Number of months the Telegram Premium subscription will be active */
        #[SerializedName('month_count')]
        private int $monthCount,
        /** A sticker to be shown in the message; may be null if unknown */
        #[SerializedName('sticker')]
        private Sticker|null $sticker = null,
    ) {
    }

    /**
     * Get The identifier of a user that gifted Telegram Premium; 0 if the gift was anonymous or is outgoing
     */
    public function getGifterUserId(): int
    {
        return $this->gifterUserId;
    }

    /**
     * Set The identifier of a user that gifted Telegram Premium; 0 if the gift was anonymous or is outgoing
     */
    public function setGifterUserId(int $gifterUserId): self
    {
        $this->gifterUserId = $gifterUserId;

        return $this;
    }

    /**
     * Get The identifier of a user that received Telegram Premium; 0 if the gift is incoming
     */
    public function getReceiverUserId(): int
    {
        return $this->receiverUserId;
    }

    /**
     * Set The identifier of a user that received Telegram Premium; 0 if the gift is incoming
     */
    public function setReceiverUserId(int $receiverUserId): self
    {
        $this->receiverUserId = $receiverUserId;

        return $this;
    }

    /**
     * Get Message added to the gifted Telegram Premium by the sender
     */
    public function getText(): FormattedText|null
    {
        return $this->text;
    }

    /**
     * Set Message added to the gifted Telegram Premium by the sender
     */
    public function setText(FormattedText|null $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get Currency for the paid amount
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Set Currency for the paid amount
     */
    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get The paid amount, in the smallest units of the currency
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * Set The paid amount, in the smallest units of the currency
     */
    public function setAmount(int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get Cryptocurrency used to pay for the gift; may be empty if none
     */
    public function getCryptocurrency(): string
    {
        return $this->cryptocurrency;
    }

    /**
     * Set Cryptocurrency used to pay for the gift; may be empty if none
     */
    public function setCryptocurrency(string $cryptocurrency): self
    {
        $this->cryptocurrency = $cryptocurrency;

        return $this;
    }

    /**
     * Get The paid amount, in the smallest units of the cryptocurrency; 0 if none
     */
    public function getCryptocurrencyAmount(): int
    {
        return $this->cryptocurrencyAmount;
    }

    /**
     * Set The paid amount, in the smallest units of the cryptocurrency; 0 if none
     */
    public function setCryptocurrencyAmount(int $cryptocurrencyAmount): self
    {
        $this->cryptocurrencyAmount = $cryptocurrencyAmount;

        return $this;
    }

    /**
     * Get Number of months the Telegram Premium subscription will be active
     */
    public function getMonthCount(): int
    {
        return $this->monthCount;
    }

    /**
     * Set Number of months the Telegram Premium subscription will be active
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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageGiftedPremium',
            'gifter_user_id' => $this->getGifterUserId(),
            'receiver_user_id' => $this->getReceiverUserId(),
            'text' => $this->getText(),
            'currency' => $this->getCurrency(),
            'amount' => $this->getAmount(),
            'cryptocurrency' => $this->getCryptocurrency(),
            'cryptocurrency_amount' => $this->getCryptocurrencyAmount(),
            'month_count' => $this->getMonthCount(),
            'sticker' => $this->getSticker(),
        ];
    }
}
