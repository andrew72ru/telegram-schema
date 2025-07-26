<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Telegram Stars were gifted to a user
 */
class MessageGiftedStars extends MessageContent implements \JsonSerializable
{
    public function __construct(
        /** The identifier of a user that gifted Telegram Stars; 0 if the gift was anonymous or is outgoing */
        #[SerializedName('gifter_user_id')]
        private int $gifterUserId,
        /** The identifier of a user that received Telegram Stars; 0 if the gift is incoming */
        #[SerializedName('receiver_user_id')]
        private int $receiverUserId,
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
        /** Number of Telegram Stars that were gifted */
        #[SerializedName('star_count')]
        private int $starCount,
        /** Identifier of the transaction for Telegram Stars purchase; for receiver only */
        #[SerializedName('transaction_id')]
        private string $transactionId,
        /** A sticker to be shown in the message; may be null if unknown */
        #[SerializedName('sticker')]
        private Sticker|null $sticker = null,
    ) {
    }

    /**
     * Get The identifier of a user that gifted Telegram Stars; 0 if the gift was anonymous or is outgoing
     */
    public function getGifterUserId(): int
    {
        return $this->gifterUserId;
    }

    /**
     * Set The identifier of a user that gifted Telegram Stars; 0 if the gift was anonymous or is outgoing
     */
    public function setGifterUserId(int $gifterUserId): self
    {
        $this->gifterUserId = $gifterUserId;

        return $this;
    }

    /**
     * Get The identifier of a user that received Telegram Stars; 0 if the gift is incoming
     */
    public function getReceiverUserId(): int
    {
        return $this->receiverUserId;
    }

    /**
     * Set The identifier of a user that received Telegram Stars; 0 if the gift is incoming
     */
    public function setReceiverUserId(int $receiverUserId): self
    {
        $this->receiverUserId = $receiverUserId;

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
     * Get Number of Telegram Stars that were gifted
     */
    public function getStarCount(): int
    {
        return $this->starCount;
    }

    /**
     * Set Number of Telegram Stars that were gifted
     */
    public function setStarCount(int $starCount): self
    {
        $this->starCount = $starCount;

        return $this;
    }

    /**
     * Get Identifier of the transaction for Telegram Stars purchase; for receiver only
     */
    public function getTransactionId(): string
    {
        return $this->transactionId;
    }

    /**
     * Set Identifier of the transaction for Telegram Stars purchase; for receiver only
     */
    public function setTransactionId(string $transactionId): self
    {
        $this->transactionId = $transactionId;

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
            '@type' => 'messageGiftedStars',
            'gifter_user_id' => $this->getGifterUserId(),
            'receiver_user_id' => $this->getReceiverUserId(),
            'currency' => $this->getCurrency(),
            'amount' => $this->getAmount(),
            'cryptocurrency' => $this->getCryptocurrency(),
            'cryptocurrency_amount' => $this->getCryptocurrencyAmount(),
            'star_count' => $this->getStarCount(),
            'transaction_id' => $this->getTransactionId(),
            'sticker' => $this->getSticker(),
        ];
    }
}
