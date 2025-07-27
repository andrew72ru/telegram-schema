<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sets reactions on a message; for bots only.
 */
class SetMessageReactions extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat to which the message belongs */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the message */
        #[SerializedName('message_id')]
        private int $messageId,
        /** Types of the reaction to set; pass an empty list to remove the reactions */
        #[SerializedName('reaction_types')]
        private array|null $reactionTypes = null,
        /** Pass true if the reactions are added with a big animation */
        #[SerializedName('is_big')]
        private bool $isBig,
    ) {
    }

    /**
     * Get Identifier of the chat to which the message belongs.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat to which the message belongs.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the message.
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Identifier of the message.
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get Types of the reaction to set; pass an empty list to remove the reactions.
     */
    public function getReactionTypes(): array|null
    {
        return $this->reactionTypes;
    }

    /**
     * Set Types of the reaction to set; pass an empty list to remove the reactions.
     */
    public function setReactionTypes(array|null $reactionTypes): self
    {
        $this->reactionTypes = $reactionTypes;

        return $this;
    }

    /**
     * Get Pass true if the reactions are added with a big animation.
     */
    public function getIsBig(): bool
    {
        return $this->isBig;
    }

    /**
     * Set Pass true if the reactions are added with a big animation.
     */
    public function setIsBig(bool $isBig): self
    {
        $this->isBig = $isBig;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setMessageReactions',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'reaction_types' => $this->getReactionTypes(),
            'is_big' => $this->getIsBig(),
        ];
    }
}
