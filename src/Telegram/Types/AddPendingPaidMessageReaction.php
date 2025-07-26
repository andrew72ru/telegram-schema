<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Adds the paid message reaction to a message. Use getMessageAvailableReactions to check whether the reaction is available for the message
 */
class AddPendingPaidMessageReaction extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat to which the message belongs */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the message */
        #[SerializedName('message_id')]
        private int $messageId,
        /** Number of Telegram Stars to be used for the reaction. The total number of pending paid reactions must not exceed getOption("paid_reaction_star_count_max") */
        #[SerializedName('star_count')]
        private int $starCount,
        /** Type of the paid reaction; pass null if the user didn't choose reaction type explicitly, for example, the reaction is set from the message bubble */
        #[SerializedName('type')]
        private PaidReactionType|null $type = null,
    ) {
    }

    /**
     * Get Identifier of the chat to which the message belongs
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat to which the message belongs
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the message
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Identifier of the message
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get Number of Telegram Stars to be used for the reaction. The total number of pending paid reactions must not exceed getOption("paid_reaction_star_count_max")
     */
    public function getStarCount(): int
    {
        return $this->starCount;
    }

    /**
     * Set Number of Telegram Stars to be used for the reaction. The total number of pending paid reactions must not exceed getOption("paid_reaction_star_count_max")
     */
    public function setStarCount(int $starCount): self
    {
        $this->starCount = $starCount;

        return $this;
    }

    /**
     * Get Type of the paid reaction; pass null if the user didn't choose reaction type explicitly, for example, the reaction is set from the message bubble
     */
    public function getType(): PaidReactionType|null
    {
        return $this->type;
    }

    /**
     * Set Type of the paid reaction; pass null if the user didn't choose reaction type explicitly, for example, the reaction is set from the message bubble
     */
    public function setType(PaidReactionType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'addPendingPaidMessageReaction',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'star_count' => $this->getStarCount(),
            'type' => $this->getType(),
        ];
    }
}
