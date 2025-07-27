<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A Telegram Stars were received by the current user from a giveaway.
 */
class MessageGiveawayPrizeStars extends MessageContent implements \JsonSerializable
{
    public function __construct(
        /** Number of Telegram Stars that were received */
        #[SerializedName('star_count')]
        private int $starCount,
        /** Identifier of the transaction for Telegram Stars credit */
        #[SerializedName('transaction_id')]
        private string $transactionId,
        /** Identifier of the supergroup or channel chat, which was automatically boosted by the winners of the giveaway */
        #[SerializedName('boosted_chat_id')]
        private int $boostedChatId,
        /** Identifier of the message with the giveaway in the boosted chat; can be 0 if the message was deleted */
        #[SerializedName('giveaway_message_id')]
        private int $giveawayMessageId,
        /** True, if the corresponding winner wasn't chosen and the Telegram Stars were received by the owner of the boosted chat */
        #[SerializedName('is_unclaimed')]
        private bool $isUnclaimed,
        /** A sticker to be shown in the message; may be null if unknown */
        #[SerializedName('sticker')]
        private Sticker|null $sticker = null,
    ) {
    }

    /**
     * Get Number of Telegram Stars that were received.
     */
    public function getStarCount(): int
    {
        return $this->starCount;
    }

    /**
     * Set Number of Telegram Stars that were received.
     */
    public function setStarCount(int $starCount): self
    {
        $this->starCount = $starCount;

        return $this;
    }

    /**
     * Get Identifier of the transaction for Telegram Stars credit.
     */
    public function getTransactionId(): string
    {
        return $this->transactionId;
    }

    /**
     * Set Identifier of the transaction for Telegram Stars credit.
     */
    public function setTransactionId(string $transactionId): self
    {
        $this->transactionId = $transactionId;

        return $this;
    }

    /**
     * Get Identifier of the supergroup or channel chat, which was automatically boosted by the winners of the giveaway.
     */
    public function getBoostedChatId(): int
    {
        return $this->boostedChatId;
    }

    /**
     * Set Identifier of the supergroup or channel chat, which was automatically boosted by the winners of the giveaway.
     */
    public function setBoostedChatId(int $boostedChatId): self
    {
        $this->boostedChatId = $boostedChatId;

        return $this;
    }

    /**
     * Get Identifier of the message with the giveaway in the boosted chat; can be 0 if the message was deleted.
     */
    public function getGiveawayMessageId(): int
    {
        return $this->giveawayMessageId;
    }

    /**
     * Set Identifier of the message with the giveaway in the boosted chat; can be 0 if the message was deleted.
     */
    public function setGiveawayMessageId(int $giveawayMessageId): self
    {
        $this->giveawayMessageId = $giveawayMessageId;

        return $this;
    }

    /**
     * Get True, if the corresponding winner wasn't chosen and the Telegram Stars were received by the owner of the boosted chat.
     */
    public function getIsUnclaimed(): bool
    {
        return $this->isUnclaimed;
    }

    /**
     * Set True, if the corresponding winner wasn't chosen and the Telegram Stars were received by the owner of the boosted chat.
     */
    public function setIsUnclaimed(bool $isUnclaimed): self
    {
        $this->isUnclaimed = $isUnclaimed;

        return $this;
    }

    /**
     * Get A sticker to be shown in the message; may be null if unknown.
     */
    public function getSticker(): Sticker|null
    {
        return $this->sticker;
    }

    /**
     * Set A sticker to be shown in the message; may be null if unknown.
     */
    public function setSticker(Sticker|null $sticker): self
    {
        $this->sticker = $sticker;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageGiveawayPrizeStars',
            'star_count' => $this->getStarCount(),
            'transaction_id' => $this->getTransactionId(),
            'boosted_chat_id' => $this->getBoostedChatId(),
            'giveaway_message_id' => $this->getGiveawayMessageId(),
            'is_unclaimed' => $this->getIsUnclaimed(),
            'sticker' => $this->getSticker(),
        ];
    }
}
