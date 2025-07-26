<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Removes a reaction from a message. A chosen reaction can always be removed
 */
class RemoveMessageReaction extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat to which the message belongs */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the message */
        #[SerializedName('message_id')]
        private int $messageId,
        /** Type of the reaction to remove. The paid reaction can't be removed */
        #[SerializedName('reaction_type')]
        private ReactionType|null $reactionType = null,
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
     * Get Type of the reaction to remove. The paid reaction can't be removed
     */
    public function getReactionType(): ReactionType|null
    {
        return $this->reactionType;
    }

    /**
     * Set Type of the reaction to remove. The paid reaction can't be removed
     */
    public function setReactionType(ReactionType|null $reactionType): self
    {
        $this->reactionType = $reactionType;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'removeMessageReaction',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'reaction_type' => $this->getReactionType(),
        ];
    }
}
